[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/0SqZJ8VW)
[![Open in Codespaces](https://classroom.github.com/assets/launch-codespace-2972f46106e565e64193e422d61a12cf1da4916b45550586e14ef0a7c637dd04.svg)](https://classroom.github.com/open-in-codespaces?assignment_repo_id=20418689)

# GameOn Network - Sistema de Recomendaciones de Instalaciones Deportivas

[![Azure](https://img.shields.io/badge/Azure-Web%20App-blue?logo=microsoftazure)](https://azure.microsoft.com)
[![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?logo=mysql&logoColor=white)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-563D7C?logo=bootstrap&logoColor=white)](https://getbootstrap.com)

## 📋 Descripción

GameOn Network es una plataforma digital integral diseñada para transformar el ecosistema deportivo amateur en Tacna, Perú. Centraliza la información sobre instalaciones deportivas, optimiza el proceso de reservas y facilita la organización de actividades deportivas, conectando deportistas amateurs, administradores de espacios y entidades reguladoras.

## 🎯 Características Principales

- **Sistema de Reservas en Tiempo Real**: Calendario interactivo con confirmación instantánea
- **Geolocalización Inteligente**: Integración con Google Maps para encontrar instalaciones cercanas
- **Gestión de Perfiles**: Perfiles personalizados con preferencias deportivas
- **Comunidades Deportivas**: Creación y gestión de grupos deportivos
- **Sistema de Pagos**: Procesamiento seguro de transacciones
- **Panel de Administración**: Gestión completa para propietarios de instalaciones

## 🏗️ Arquitectura del Sistema

El sistema sigue el patrón MVC (Modelo-Vista-Controlador) y está estructurado en los siguientes componentes:

```
GameOn Network/
├── config/           # Configuraciones de base de datos y sistema
├── controllers/      # Controladores de la aplicación
├── models/          # Modelos de datos y lógica de negocio
├── views/           # Vistas y templates
├── assets/          # CSS, JS, imágenes
├── api/            # APIs RESTful
└── includes/       # Archivos de inclusión común
```

## 🛠️ Requisitos Técnicos

### Requisitos del Sistema
- **PHP**: 8.0 o superior
- **Base de Datos**: MySQL 8.0+
- **Servidor Web**: Apache 2.4+ o Nginx
- **Memoria**: Mínimo 512MB RAM
- **Espacio en Disco**: 1GB disponible

### APIs Externas
- **Google Maps API**: Para geolocalización y mapas
- **Pasarela de Pagos**: Para procesamiento de transacciones
- **Servicios de Notificación**: Para alertas y confirmaciones

## ⚙️ Instalación y Configuración

### 1. Clonar el Repositorio

```bash
git clone https://github.com/tu-usuario/gameon-network.git
cd gameon-network
```

### 2. Configuración de Base de Datos

1. Crear una base de datos MySQL:
```sql
CREATE DATABASE gameon_network CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

2. Importar el esquema de base de datos:
```bash
mysql -u username -p gameon_network < database/schema.sql
```

3. Configurar la conexión en `config/database.php`:
```php
<?php
return [
    'host' => 'localhost',
    'database' => 'gameon_network',
    'username' => 'tu_usuario',
    'password' => 'tu_contraseña',
    'charset' => 'utf8mb4'
];
?>
```

### 3. Configuración de APIs Externas

Crear archivo `config/apis.php`:
```php
<?php
return [
    'google_maps' => [
        'api_key' => 'TU_GOOGLE_MAPS_API_KEY'
    ],
    'payment_gateway' => [
        'public_key' => 'TU_PAYMENT_PUBLIC_KEY',
        'secret_key' => 'TU_PAYMENT_SECRET_KEY'
    ]
];
?>
```

### 4. Configuración de Servidor Web

#### Apache (.htaccess)
```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]
```

#### Nginx
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}

location ~ \.php$ {
    fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
    fastcgi_index index.php;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
}
```

## 🚀 Despliegue en Azure

### Configuración de Azure Web App

1. **Crear Azure Web App**:
   - Tipo de servicio: B1 (Basic)
   - Región: East US
   - Runtime Stack: PHP 8.0

2. **Configurar Variables de Entorno**:
```bash
az webapp config appsettings set --resource-group tu-grupo --name tu-app --settings \
  DB_HOST="tu-servidor-mysql" \
  DB_DATABASE="gameon_network" \
  DB_USERNAME="tu-usuario" \
  DB_PASSWORD="tu-contraseña" \
  GOOGLE_MAPS_API_KEY="tu-api-key"
```

### Configurar Secretos en GitHub

En tu repositorio de GitHub, agregar los siguientes secretos:
- `AZUREAPPSERVICE_PUBLISHPROFILE`: Perfil de publicación de Azure

## 🔧 Configuración de Desarrollo

### Variables de Entorno (.env)

```env
# Base de datos
DB_HOST=localhost
DB_DATABASE=gameon_network
DB_USERNAME=root
DB_PASSWORD=

# APIs externas
GOOGLE_MAPS_API_KEY=tu_api_key_aqui
PAYMENT_PUBLIC_KEY=tu_public_key
PAYMENT_SECRET_KEY=tu_secret_key

# Configuración de la aplicación
APP_ENV=development
APP_DEBUG=true
APP_URL=http://localhost
```

### Comandos Útiles de Desarrollo

```bash
# Iniciar servidor de desarrollo
php -S localhost:8000

# Ejecutar migraciones
php scripts/migrate.php

# Limpiar caché
php scripts/clear-cache.php

# Generar datos de prueba
php scripts/seed.php
```

## 👥 Contribución

1. Fork el proyecto
2. Crear rama de feature (`git checkout -b feature/nueva-funcionalidad`)
3. Commit cambios (`git commit -am 'Agregar nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Crear Pull Request

## 📜 Licencia

Este proyecto está bajo la Licencia MIT. Ver archivo `LICENSE` para más detalles.

## 👨‍💻 Equipo de Desarrollo

- **Sebastian Nicolas Fuentes Avalos** (2022073902)
- **Gabriela Luzkalid Gutierrez Mamani** (2022074263)  
- **Mayra Fernanda Chire Ramos** (2021072620)
- **Cesar Nikolas Camac Melendez** (2022074262)

## 📞 Soporte

Para soporte técnico o consultas:
- Email: soporte@gameonnetwork.pe
- Documentación: [Wiki del Proyecto](https://github.com/tu-usuario/gameon-network/wiki)
- Issues: [GitHub Issues](https://github.com/tu-usuario/gameon-network/issues)

---

**Universidad Privada de Tacna**  
**Facultad de Ingeniería - Escuela Profesional de Ingeniería de Sistemas**  
**Curso: Patrones de Software**  
**Docente: Mag. Patrick Cuadros Quiroga**
