<?php
// ✅ AGREGAR AL INICIO DEL ARCHIVO - Manejo AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    // Verificar autenticación
    if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'instalacion') {
        http_response_code(401);
        exit('No autorizado');
    }
    
    require_once __DIR__ . '/../Config/database.php';
    
    $model = new InsDeporModel();
    $action = $_POST['action'];
    
    switch ($action) {
        case 'updateInstalacionImage':
            $instalacionId = $_POST['instalacionId'];
            $imagenUrl = $_POST['imagenUrl'];
            $result = $model->actualizarImagenInstalacion($instalacionId, $imagenUrl);
            echo $result ? 'success' : 'error';
            exit;
            
        case 'create':
            $result = $model->crearInstalacion(
                $_SESSION['user_id'], // usuario_instalacion_id
                $_POST['nombreInstalacion'],
                $_POST['direccionInstalacion'],
                $_POST['latitudInstalacion'],
                $_POST['longitudInstalacion'],
                $_POST['tarifaInstalacion'],
                $_POST['telefonoInstalacion'],
                $_POST['emailInstalacion'],
                $_POST['descripcionInstalacion'] ?? '',
                $_POST['imagen_url'] ?? null
            );
            echo $result ? 'success' : 'error';
            exit;
            
        case 'update':
            $result = $model->actualizarInstalacion(
                $_POST['instalacionId'],
                $_POST['nombreInstalacion'],
                $_POST['direccionInstalacion'],
                $_POST['latitudInstalacion'],
                $_POST['longitudInstalacion'],
                $_POST['tarifaInstalacion'],
                $_POST['telefonoInstalacion'],
                $_POST['emailInstalacion'],
                $_POST['descripcionInstalacion'] ?? '',
                $_POST['imagen_url'] ?? null
            );
            echo $result ? 'success' : 'error';
            exit;
            
        case 'delete':
            $input = json_decode(file_get_contents('php://input'), true);
            $result = $model->eliminarInstalacion($input['id']);
            echo $result ? 'success' : 'error';
            exit;
    }
}

// ✅ MANEJAR GET para obtener datos de instalación
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'get') {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] !== 'instalacion') {
        http_response_code(401);
        exit('No autorizado');
    }
    
    require_once __DIR__ . '/../Config/database.php';
    
    $model = new InsDeporModel();
    $instalacionId = $_GET['id'] ?? null;
    
    if ($instalacionId) {
        $instalacion = $model->getInstalacionById($instalacionId);
        if ($instalacion) {
            header('Content-Type: application/json');
            echo json_encode(['success' => true, 'data' => $instalacion]);
        } else {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'Instalación no encontrada']);
        }
    } else {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'ID requerido']);
    }
    exit;
}

require_once __DIR__ . '/../Config/database.php';

class InsDeporModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Obtener todas las instalaciones deportivas
    public function getAllInstalaciones() {
        $query = "SELECT * FROM instituciones_deportivas WHERE estado = 1";
        $result = $this->conn->query($query);
        return $this->fetchAllAssoc($result);
    }

    // Obtener una instalación deportiva por ID
    public function getInstalacionById($id) {
        $query = "SELECT * FROM instituciones_deportivas WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // ✅ NUEVA FUNCIÓN: Actualizar imagen de instalación
    public function actualizarImagenInstalacion($instalacionId, $imagenUrl) {
        $query = "UPDATE instituciones_deportivas SET imagen = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("si", $imagenUrl, $instalacionId);
        return $stmt->execute();
    }

    // ✅ NUEVA FUNCIÓN: Obtener calificación promedio basada en áreas deportivas
    public function getCalificacionPromedioInstalacion($instalacionId) {
        // Por ahora simulamos la calificación, después implementaremos reviews reales
        $query = "SELECT COUNT(*) as total_areas FROM areas_deportivas WHERE institucion_deportiva_id = ? AND estado = 'activa'";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $instalacionId);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        
        // Generar calificación basada en número de áreas (simulación)
        $totalAreas = $data['total_areas'];
        $calificacionSimulada = min(5.0, 3.5 + ($totalAreas * 0.3));
        
        return round($calificacionSimulada, 1);
    }

    // ✅ NUEVA FUNCIÓN: Obtener tarifa promedio basada en áreas deportivas
    public function getTarifaPromedioInstalacion($instalacionId) {
        $query = "SELECT AVG(tarifa_por_hora) as tarifa_promedio FROM areas_deportivas WHERE institucion_deportiva_id = ? AND estado = 'activa'";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $instalacionId);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        
        return $data['tarifa_promedio'] ?? 0;
    }

    // Obtener los horarios de una instalación deportiva
    public function getHorariosInstalacion($instalacionId) {
        $query = "SELECT * FROM horarios_atencion WHERE institucion_deportiva_id = ? 
                  ORDER BY FIELD(dia, 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo')";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $instalacionId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->fetchAllAssoc($result);
    }

    // Obtener los deportes que ofrece una instalación
    public function getDeportesInstalacion($instalacionId) {
        $query = "SELECT DISTINCT d.id, d.nombre FROM deportes d 
                  INNER JOIN areas_deportivas ad ON d.id = ad.deporte_id 
                  WHERE ad.institucion_deportiva_id = ? AND ad.estado = 'activa'";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $instalacionId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->fetchAllAssoc($result);
    }

    // Obtener instalaciones deportivas cercanas a una ubicación
    public function getInstalacionesCercanas($latitud, $longitud, $distanciaKm = 5) {
        $query = "SELECT *, 
                  (6371 * acos(cos(radians(?)) * cos(radians(latitud)) * 
                  cos(radians(longitud) - radians(?)) + 
                  sin(radians(?)) * sin(radians(latitud)))) AS distancia 
                  FROM instituciones_deportivas
                  WHERE estado = 1
                  HAVING distancia < ? 
                  ORDER BY distancia";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("dddi", $latitud, $longitud, $latitud, $distanciaKm);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->fetchAllAssoc($result);
    }

    // Obtener instalaciones deportivas por deporte
    public function getInstalacionesPorDeporte($deporteId) {
        $query = "SELECT DISTINCT i.* FROM instituciones_deportivas i 
                  INNER JOIN areas_deportivas ad ON i.id = ad.institucion_deportiva_id 
                  WHERE ad.deporte_id = ? AND i.estado = 1 AND ad.estado = 'activa'";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $deporteId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->fetchAllAssoc($result);
    }

    // Buscar instalaciones deportivas por nombre
    public function buscarInstalaciones($termino) {
        $termino = "%$termino%";
        $query = "SELECT * FROM instituciones_deportivas 
                  WHERE nombre LIKE ? AND estado = 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $termino);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->fetchAllAssoc($result);
    }

    // ✅ ACTUALIZADA: Obtener instalaciones de una institución específica por usuario_instalacion_id
    public function getInstalacionesPorUsuario($usuarioInstalacionId) {
        $query = "SELECT id.*, 
                         (SELECT COUNT(*) FROM areas_deportivas ad WHERE ad.institucion_deportiva_id = id.id AND ad.estado = 'activa') as total_areas,
                         (SELECT AVG(ad.tarifa_por_hora) FROM areas_deportivas ad WHERE ad.institucion_deportiva_id = id.id AND ad.estado = 'activa') as tarifa_promedio
                  FROM instituciones_deportivas id 
                  WHERE id.usuario_instalacion_id = ? AND id.estado = 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $usuarioInstalacionId);
        $stmt->execute();
        $result = $stmt->get_result();
        $instalaciones = $this->fetchAllAssoc($result);
        
        // Agregar calificación calculada a cada instalación
        foreach ($instalaciones as &$instalacion) {
            $instalacion['calificacion'] = $this->getCalificacionPromedioInstalacion($instalacion['id']);
        }
        
        return $instalaciones;
    }
    
    // Obtener reservas de hoy para las instalaciones de una institución
    public function getReservasHoyPorUsuario($usuarioInstalacionId) {
        // ✅ NUEVA CONSULTA corregida basada en tu estructura real de BD
        $query = "SELECT r.*, 
                         ad.nombre_area,
                         id.nombre as instalacion_nombre, 
                         ud.nombre as usuario_nombre, 
                         d.nombre as deporte_nombre,
                         ud.telefono as cliente_telefono
                  FROM reservas r
                  INNER JOIN areas_deportivas ad ON r.area_deportiva_id = ad.id
                  INNER JOIN instituciones_deportivas id ON ad.institucion_deportiva_id = id.id
                  INNER JOIN usuarios_deportistas ud ON r.id_usuario = ud.id
                  INNER JOIN deportes d ON ad.deporte_id = d.id
                  WHERE id.usuario_instalacion_id = ? 
                  AND DATE(r.fecha) = CURDATE()
                  AND r.estado IN ('confirmada', 'pendiente')
                  ORDER BY r.hora_inicio ASC";
        
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            error_log("Error en prepare: " . $this->conn->error);
            return [];
        }
        
        $stmt->bind_param("i", $usuarioInstalacionId);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->fetchAllAssoc($result);
    }
    
    // ✅ ACTUALIZADA: Obtener calificación promedio de las instalaciones de una institución
    public function getCalificacionPromedioPorUsuario($usuarioInstalacionId) {
        $instalaciones = $this->getInstalacionesPorUsuario($usuarioInstalacionId);
        $totalCalificacion = 0;
        $totalInstalaciones = count($instalaciones);
        
        foreach ($instalaciones as $instalacion) {
            $totalCalificacion += $instalacion['calificacion'];
        }
        
        return [
            'calificacion_promedio' => $totalInstalaciones > 0 ? ($totalCalificacion / $totalInstalaciones) : 0,
            'total_instalaciones' => $totalInstalaciones
        ];
    }
    
    // ✅ CORREGIR ESTA FUNCIÓN también
    public function getEstadisticasMesPorUsuario($usuarioInstalacionId) {
        // Reservas completadas este mes - ✅ CONSULTA CORREGIDA
        $queryReservas = "SELECT COUNT(*) as reservas_completadas
                         FROM reservas r
                         INNER JOIN areas_deportivas ad ON r.area_deportiva_id = ad.id
                         INNER JOIN instituciones_deportivas id ON ad.institucion_deportiva_id = id.id
                         WHERE id.usuario_instalacion_id = ?
                         AND MONTH(r.fecha) = MONTH(CURDATE())
                         AND YEAR(r.fecha) = YEAR(CURDATE())
                         AND r.estado = 'confirmada'";
        
        $stmt = $this->conn->prepare($queryReservas);
        if (!$stmt) {
            error_log("Error en prepare reservas: " . $this->conn->error);
            return ['reservas_completadas' => 0, 'ingresos' => 0, 'nuevos_clientes' => 0];
        }
        
        $stmt->bind_param("i", $usuarioInstalacionId);
        $stmt->execute();
        $resultReservas = $stmt->get_result();
        $reservas = $resultReservas->fetch_assoc();
        
        // Ingresos estimados - ✅ CONSULTA CORREGIDA
        $queryIngresos = "SELECT SUM(ad.tarifa_por_hora * 
                                    (TIMESTAMPDIFF(MINUTE, r.hora_inicio, r.hora_fin) / 60)) as ingresos_estimados
                         FROM reservas r
                         INNER JOIN areas_deportivas ad ON r.area_deportiva_id = ad.id
                         INNER JOIN instituciones_deportivas id ON ad.institucion_deportiva_id = id.id
                         WHERE id.usuario_instalacion_id = ?
                         AND MONTH(r.fecha) = MONTH(CURDATE())
                         AND YEAR(r.fecha) = YEAR(CURDATE())
                         AND r.estado = 'confirmada'";
        
        $stmt = $this->conn->prepare($queryIngresos);
        if (!$stmt) {
            error_log("Error en prepare ingresos: " . $this->conn->error);
            $ingresos = ['ingresos_estimados' => 0];
        } else {
            $stmt->bind_param("i", $usuarioInstalacionId);
            $stmt->execute();
            $resultIngresos = $stmt->get_result();
            $ingresos = $resultIngresos->fetch_assoc();
        }
        
        // Nuevos clientes este mes - ✅ CONSULTA CORREGIDA
        $queryNuevos = "SELECT COUNT(DISTINCT r.id_usuario) as nuevos_clientes
                       FROM reservas r
                       INNER JOIN areas_deportivas ad ON r.area_deportiva_id = ad.id
                       INNER JOIN instituciones_deportivas id ON ad.institucion_deportiva_id = id.id
                       WHERE id.usuario_instalacion_id = ?
                       AND MONTH(r.fecha) = MONTH(CURDATE())
                       AND YEAR(r.fecha) = YEAR(CURDATE())
                       AND r.estado = 'confirmada'";
        
        $stmt = $this->conn->prepare($queryNuevos);
        if (!$stmt) {
            error_log("Error en prepare nuevos: " . $this->conn->error);
            $nuevos = ['nuevos_clientes' => 0];
        } else {
            $stmt->bind_param("i", $usuarioInstalacionId);
            $stmt->execute();
            $resultNuevos = $stmt->get_result();
            $nuevos = $resultNuevos->fetch_assoc();
        }
        
        return [
            'reservas_completadas' => $reservas['reservas_completadas'] ?? 0,
            'ingresos' => $ingresos['ingresos_estimados'] ?? 0,
            'nuevos_clientes' => $nuevos['nuevos_clientes'] ?? 0
        ];
    }

    // ✅ NUEVA FUNCIÓN: Crear instalación deportiva
    public function crearInstalacion($usuarioInstalacionId, $nombre, $direccion, $latitud, $longitud, $tarifa, $telefono, $email, $descripcion = '', $imagen = null) {
        $query = "INSERT INTO instituciones_deportivas (usuario_instalacion_id, nombre, direccion, latitud, longitud, tarifa, telefono, email, descripcion, imagen) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("issdddssss", $usuarioInstalacionId, $nombre, $direccion, $latitud, $longitud, $tarifa, $telefono, $email, $descripcion, $imagen);
        return $stmt->execute();
    }

    // ✅ NUEVA FUNCIÓN: Actualizar instalación deportiva
    public function actualizarInstalacion($id, $nombre, $direccion, $latitud, $longitud, $tarifa, $telefono, $email, $descripcion = '', $imagen = null) {
        if ($imagen) {
            $query = "UPDATE instituciones_deportivas SET 
                      nombre = ?, direccion = ?, latitud = ?, longitud = ?, tarifa = ?, 
                      telefono = ?, email = ?, descripcion = ?, imagen = ?
                      WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("ssdddssssi", $nombre, $direccion, $latitud, $longitud, $tarifa, $telefono, $email, $descripcion, $imagen, $id);
        } else {
            $query = "UPDATE instituciones_deportivas SET 
                      nombre = ?, direccion = ?, latitud = ?, longitud = ?, tarifa = ?, 
                      telefono = ?, email = ?, descripcion = ?
                      WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("ssdddsssi", $nombre, $direccion, $latitud, $longitud, $tarifa, $telefono, $email, $descripcion, $id);
        }
        return $stmt->execute();
    }

    // ✅ NUEVA FUNCIÓN: Eliminar instalación deportiva
    public function eliminarInstalacion($id) {
        $query = "DELETE FROM instituciones_deportivas WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    // Función auxiliar para obtener todos los resultados como array asociativo
    private function fetchAllAssoc($result) {
        $rows = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows;
    }

    // ✅ AGREGAR ESTAS FUNCIONES AL MODELO

    public function obtenerConfiguracionPago($usuarioId) {
        try {
            $sql = "SELECT culqi_public_key, culqi_secret_key, culqi_enabled, 
                           paypal_client_id, paypal_client_secret, paypal_enabled, paypal_sandbox
                    FROM usuarios_instalaciones 
                    WHERE id = ?";
            
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $usuarioId);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($row = $result->fetch_assoc()) {
                return $row;
            }
            
            return [
                'culqi_public_key' => '',
                'culqi_secret_key' => '',
                'culqi_enabled' => 0,
                'paypal_client_id' => '',
                'paypal_client_secret' => '',
                'paypal_enabled' => 0,
                'paypal_sandbox' => 1
            ];
            
        } catch (Exception $e) {
            throw new Exception('Error obteniendo configuración: ' . $e->getMessage());
        }
    }

    public function actualizarConfiguracionPago($usuarioId, $datos) {
        try {
            // ✅ AGREGAR LOG PARA DEBUG
            error_log("Actualizando usuario ID: " . $usuarioId);
            error_log("Datos recibidos: " . print_r($datos, true));
            
            $sql = "UPDATE usuarios_instalaciones SET 
                    culqi_public_key = ?, culqi_secret_key = ?, culqi_enabled = ?,
                    paypal_client_id = ?, paypal_client_secret = ?, paypal_enabled = ?, paypal_sandbox = ?
                WHERE id = ?";
        
            $stmt = $this->conn->prepare($sql);
        
            if (!$stmt) {
                throw new Exception('Error preparando consulta: ' . $this->conn->error);
            }
        
            // ✅ ASEGURAR QUE LOS VALORES NO SEAN NULL
            $culqi_public = $datos['culqi_public_key'] ?? '';
            $culqi_secret = $datos['culqi_secret_key'] ?? '';
            $culqi_enabled = intval($datos['culqi_enabled'] ?? 0);
            $paypal_client = $datos['paypal_client_id'] ?? '';        // ✅ STRING
            $paypal_secret = $datos['paypal_client_secret'] ?? '';    // ✅ STRING
            $paypal_enabled = intval($datos['paypal_enabled'] ?? 0);
            $paypal_sandbox = intval($datos['paypal_sandbox'] ?? 1);
            
            // ✅ LOG DE VALORES ANTES DEL BIND
            error_log("PayPal Client ID: " . $paypal_client);
            error_log("PayPal Client Secret: " . substr($paypal_secret, 0, 10) . "...");
        
            // ✅ CORREGIR TIPOS: "ssisssii" (s=string, i=integer)
            $stmt->bind_param("ssisssii", 
                $culqi_public,      // s (string)
                $culqi_secret,      // s (string)
                $culqi_enabled,     // i (integer)
                $paypal_client,     // s (string) ✅ CORRECTO
                $paypal_secret,     // s (string) ✅ CORRECTO
                $paypal_enabled,    // i (integer)
                $paypal_sandbox,    // i (integer)
                $usuarioId          // i (integer)
            );
        
            // ✅ EJECUTAR Y VERIFICAR
            $resultado = $stmt->execute();
        
            if (!$resultado) {
                throw new Exception('Error ejecutando UPDATE: ' . $stmt->error);
            }
        
            // ✅ VERIFICAR FILAS AFECTADAS
            $filasAfectadas = $stmt->affected_rows;
            error_log("Filas afectadas: " . $filasAfectadas);
        
            if ($filasAfectadas === 0) {
                // Verificar si el usuario existe
                $checkSql = "SELECT id FROM usuarios_instalaciones WHERE id = ?";
                $checkStmt = $this->conn->prepare($checkSql);
                $checkStmt->bind_param("i", $usuarioId);
                $checkStmt->execute();
                $checkResult = $checkStmt->get_result();
            
                if ($checkResult->num_rows === 0) {
                    throw new Exception('Usuario no encontrado con ID: ' . $usuarioId);
                } else {
                    error_log("Usuario existe pero no se actualizó - posiblemente datos idénticos");
                }
            }
        
            $stmt->close();
        
            return ['success' => true, 'message' => 'Configuración actualizada exitosamente'];
        
        } catch (Exception $e) {
            error_log("Error en actualizarConfiguracionPago: " . $e->getMessage());
            return ['success' => false, 'message' => 'Error: ' . $e->getMessage()];
        }
    }

    // ✅ NUEVA FUNCIÓN: Obtener instalaciones por deportes favoritos
    public function getInstalacionesPorDeportesFavoritos($deporteIds) {
        if (empty($deporteIds)) {
            return [];
        }
        
        // Crear placeholders para la consulta
        $placeholders = str_repeat('?,', count($deporteIds) - 1) . '?';
        
        $query = "SELECT DISTINCT i.*, 
                     (SELECT COUNT(*) FROM areas_deportivas ad WHERE ad.institucion_deportiva_id = i.id AND ad.estado = 'activa') as total_areas,
                     (SELECT AVG(ad.tarifa_por_hora) FROM areas_deportivas ad WHERE ad.institucion_deportiva_id = i.id AND ad.estado = 'activa') as tarifa_promedio
              FROM instituciones_deportivas i 
              INNER JOIN areas_deportivas ad ON i.id = ad.institucion_deportiva_id 
              WHERE ad.deporte_id IN ($placeholders) 
              AND i.estado = 1 
              AND ad.estado = 'activa'
              ORDER BY i.nombre";

        $stmt = $this->conn->prepare($query);
        
        if (!$stmt) {
            error_log("Error preparando consulta deportes favoritos: " . $this->conn->error);
            return [];
        }
        
        // Crear tipos de parámetros (todos enteros)
        $types = str_repeat('i', count($deporteIds));
        $stmt->bind_param($types, ...$deporteIds);
        $stmt->execute();
        $result = $stmt->get_result();
        $instalaciones = $this->fetchAllAssoc($result);
        $stmt->close();
        
        // ✅ AGREGAR DEPORTES A CADA INSTALACIÓN
        foreach ($instalaciones as &$instalacion) {
            // Obtener deportes específicos de la instalación
            $deportesQuery = "SELECT DISTINCT d.id, d.nombre 
                         FROM deportes d 
                         INNER JOIN areas_deportivas ad ON d.id = ad.deporte_id 
                         WHERE ad.institucion_deportiva_id = ? 
                         AND ad.estado = 'activa'
                         AND d.id IN ($placeholders)
                         ORDER BY d.nombre";
        
            $deportesStmt = $this->conn->prepare($deportesQuery);
            if ($deportesStmt) {
                // Combinar instalación_id con deporteIds para bind_param
                $params = array_merge([$instalacion['id']], $deporteIds);
                $deportesTypes = 'i' . str_repeat('i', count($deporteIds));
                
                $deportesStmt->bind_param($deportesTypes, ...$params);
                $deportesStmt->execute();
                $deportesResult = $deportesStmt->get_result();
                $instalacion['deportes'] = $this->fetchAllAssoc($deportesResult);
                $deportesStmt->close();
            } else {
                $instalacion['deportes'] = [];
            }
            
            // Agregar calificación calculada
            $instalacion['calificacion'] = $this->getCalificacionPromedioInstalacion($instalacion['id']);
        }
        
        return $instalaciones;
    }
}
?>