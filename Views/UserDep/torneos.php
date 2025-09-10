<?php
session_start();

// Verificar si el usuario está autenticado como deportista
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'deportista') {
    header("Location: ../Auth/login.php");
    exit();
}

include_once 'header.php';
?>

<link rel="stylesheet" href="../../Public/css/torneos_dep.css">

<!-- Scripts de pagos -->
<script src="../../Public/js/culqi_integration.js"></script>
<script src="../../Public/js/paypal_integration.js"></script>

<!-- SDK de Culqi -->
<script src="https://checkout.culqi.com/js/v4"></script>

<div class="container mt-4">
    <div class="filtros-torneos">
        <h4><i class="fas fa-filter"></i> Filtros</h4>
        
        <div class="filtros-row">
            <div class="filtro-col-busqueda">
                <label for="busquedaNombre">Buscar por nombre:</label>
                <input type="text" class="form-control" id="busquedaNombre" placeholder="Nombre del torneo">
            </div>
            <div class="filtro-col">
                <label for="filtroDeporte">Deporte:</label>
                <select class="form-control" id="filtroDeporte">
                    <option value="">Todos</option>
                    <option value="1">Fútbol</option>
                    <option value="2">Voley</option>
                    <option value="3">Básquet</option>
                </select>
            </div>
            <div class="filtro-col">
                <label for="filtroCalificacion">Calificación:</label>
                <select class="form-control" id="filtroCalificacion">
                    <option value="0">Todas</option>
                    <option value="3">3★ o más</option>
                    <option value="4">4★ o más</option>
                    <option value="4.5">4.5★ o más</option>
                </select>
            </div>
            <div class="filtro-col">
                <label for="filtroOrganizador">Organizador:</label>
                <select class="form-control" id="filtroOrganizador">
                    <option value="">Todos</option>
                    <option value="ipd">IPD</option>
                    <option value="privado">Privados</option>
                </select>
            </div>
            <div class="filtro-col-boton">
                <label>&nbsp;</label>
                <button id="btnFiltrar" class="btn btn-filtro w-100">
                    <i class="fas fa-search"></i> Buscar
                </button>
            </div>
        </div>
        
        <div class="mt-3">
            <h6>Filtros rápidos:</h6>
            <button class="btn btn-filtro active" data-estado="">
                <i class="fas fa-list"></i> Todos
            </button>
            <button class="btn btn-filtro" data-estado="inscripciones_abiertas">
                <i class="fas fa-door-open"></i> Inscripciones Abiertas
            </button>
            <button class="btn btn-filtro" data-estado="proximo">
                <i class="fas fa-calendar-plus"></i> Próximos
            </button>
            <button class="btn btn-filtro" data-estado="activo">
                <i class="fas fa-play"></i> En Curso
            </button>
            <button class="btn btn-filtro" data-estado="finalizado">
                <i class="fas fa-flag-checkered"></i> Finalizados
            </button>
        </div>
    </div>
    
    <div id="torneosContainer">
        <div class="loading-spinner">
            <div class="spinner"></div>
        </div>
    </div>
</div>

<script>
window.chatDisabled = true;
// ✅ AGREGAR USER_ID PARA JAVASCRIPT
window.USER_ID = <?php echo json_encode($_SESSION['user_id'] ?? null); ?>;
window.USER_TYPE = <?php echo json_encode($_SESSION['user_type'] ?? null); ?>;
</script>

<!-- Script específico para torneos -->
<script src="../../Public/js/torneos.js"></script>

<?php
require_once __DIR__ . '/../../Helpers/GameOnBot.php'; // Ajusta la ruta si lo pusiste en otro lado
$secret = 'adg17goyqhl2845es8y6c6n7ezhnjfnx'; // Cambia esto por tu clave secreta de Chatbase
$userId = $_SESSION['user_id'] ?? uniqid('user_');
$bot = new GameOnBot($secret, $userId);
echo $bot->getEmbedScript();

include_once 'footer.php';
?>