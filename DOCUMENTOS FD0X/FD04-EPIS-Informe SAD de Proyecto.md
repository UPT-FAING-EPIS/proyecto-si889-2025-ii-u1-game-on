**UNIVERSIDAD PRIVADA DE TACNA
FACULTAD DE INGENIERÍA
Escuela Profesional de Ingeniería de Sistemas
Proyecto “Sistema de recomendaciones de
Instalaciones Deportivas con Geolocalización”**
Curso: Patrones de Software
Docente: Mag. Patrick Cuadros Quiroga
Integrantes:

#### SEBASTIAN NICOLAS FUENTES AVALOS (2022073902)

### GABRIELA LUZKALID GUTIERREZ MAMANI (2022074263)

#### MAYRA FERNANDA CHIRE RAMOS (2021072620)

#### CESAR NIKOLAS CAMAC MELENDEZ (2022074262)

**Tacna – Perú**


CONTROL DE VERSIONES
Versión Hecha por Revisada por Aprobada por Fecha Motivo

1.0 GGM SFA ACL (^) 01/05/2025 Versión Original
**_Proyecto “Sistema de recomendaciones de Instalaciones
Deportivas con Geolocalización”_**
**Documento de Especificación de Requerimientos de
Software**

#### Versión {1.0}


## ÍNDICE GENERAL

- 1. INTRODUCCIÓN
   - 1.1. Propósito
   - 1.2. Alcance
   - 1.3. Definición, siglas y abreviaturas
   - 1.4. Organización del documento
- 2. OBJETIVOS Y RESTRICCIONES ARQUITECTÓNICAS
   - 2.1. Priorización de requerimientos
      - 1.1.1. Requerimientos Funcionales
      - 1.1.2. Requerimientos No Funcionales – Atributos de Calidad
   - 2.2. Restricciones
- 3. REPRESENTACIÓN DE LA ARQUITECTURA DEL SISTEMA
   - 3.1. Vista de Caso de uso
      - 1.1.3. Diagramas de Casos de uso
   - 3.2. Vista Lógica
      - 3.2.1. Diagrama de Subsistemas (paquetes)
      - 3.2.2. Diagrama de Secuencia (vista de análisis)
      - 3.2.3. Diagrama de Objetos
      - 3.2.4. Diagrama de Clases
      - 3.2.5. Diagrama de Base de datos (relacional o no relacional)
   - 3.3. Vista de Implementación (vista de desarrollo)
      - 3.3.1. Diagrama de arquitectura software (paquetes)
      - 3.3.2. Diagrama de arquitectura del sistema (Diagrama de componentes)
   - 3.4. Vista de procesos
      - 3.4.1. Diagrama de Procesos del sistema (Diagrama Propuesto)
   - 3.5. Vista de Despliegue (vista física)
      - 3.5.1. Diagrama de despliegue
   - 4. ATRIBUTOS DE CALIDAD DEL SOFTWARE
      - Escenario de Funcionalidad
      - Escenario de Usabilidad
      - Escenario de confiabilidad
      - Escenario de rendimiento
      - Escenario de mantenibilidad
      - Otros Escenarios


## 1. INTRODUCCIÓN

### 1.1. Propósito

Desarrollar una plataforma digital integral que centralice la información de las
instalaciones deportivas en Tacna, optimizando el sistema de reservas y promoviendo
una mejor organización del ecosistema deportivo local. Esta herramienta busca
fortalecer la conexión entre deportistas amateurs, administradores de espacios
deportivos y entidades reguladoras.

### 1.2. Alcance

El proyecto GameOn Network abarcará el desarrollo de una plataforma digital que
revolucionará la práctica deportiva amateur en Tacna, con las siguientes funcionalidades
e inclusiones:
● Diseño e implementación de un sistema digital de registro y categorización de
instalaciones deportivas en Tacna que incluya información detallada sobre
ubicación, servicios, disponibilidad y costos.
● Desarrollo de un mecanismo de reservas en línea que permita a los usuarios
programar el uso de instalaciones deportivas de manera sencilla y en tiempo
real.
● Implementación de funcionalidades de geolocalización e integración con Google
Maps para facilitar el acceso y la planificación logística de los deportistas
amateur.
● Establecimiento de un sistema de perfiles de usuario que permita la conexión
entre deportistas con intereses similares, fomentando la creación de
comunidades deportivas.
● Implementación de un módulo para la organización, incluyendo inscripciones,
programación y seguimiento de resultados.
● Desarrollo de un modelo de monetización sostenible a través de comisiones por
reservas y espacios publicitarios que garantice la viabilidad económica de la
plataforma.

### 1.3. Definición, siglas y abreviaturas

```
● PHP (Hypertext Preprocessor)
Lenguaje de programación de código abierto especialmente diseñado para el
desarrollo web y que puede ser incrustado en HTML. Se ejecuta en el servidor,
```

_generando HTML que se envía al cliente. Para GameOn Network, PHP será el
lenguaje principal de desarrollo, encargándose de la lógica de negocio y la
interacción con la base de datos._
**_● URL (Uniform Resource Locator)_**
_Dirección específica que se asigna a cada recurso disponible en la web. En el
contexto de GameOn Network, las URLs serán utilizadas para navegar entre las
diferentes secciones de la plataforma y acceder a recursos específicos,
siguiendo una estructura lógica y amigable para el usuario._
**_● API (Application Programming Interface)_**
_Conjunto de definiciones y protocolos que permite la comunicación entre
diferentes componentes de software. En GameOn Network, se utilizarán APIs
para la integración con servicios externos como Google Maps para la
geolocalización, así como para permitir potenciales integraciones futuras con
aplicaciones móviles o sistemas de terceros._
**_● MySQL_**
_Sistema de gestión de bases de datos relacional de código abierto. Se
caracteriza por su velocidad, estabilidad y facilidad de uso. En GameOn
Network, MySQL será el motor que almacenará y gestionará todos los datos de
la plataforma, permitiendo consultas eficientes y manteniendo la integridad de
la información._
**_● Patrón de Diseño MVC_**
_El Patrón de Diseño MVC (Modelo-Vista-Controlador) es una arquitectura de
software ampliamente utilizada para desarrollar aplicaciones web y de
escritorio. Este patrón divide la aplicación en tres componentes fundamentales:
el Modelo, la Vista y el Controlador.
Modelo: Representa los datos y la lógica de negocio de la aplicación. Es
responsable de recuperar, almacenar y procesar la información.
Vista: Es la interfaz de usuario que presenta los datos proporcionados por el
modelo y que recibe la interacción del usuario.
Controlador: Actúa como intermediario entre el Modelo y la Vista, manejando
la entrada del usuario y actualizando tanto el Modelo como la Vista según sea
necesario._


```
Este patrón promueve la separación de responsabilidades, lo que facilita el
mantenimiento, escalabilidad y reutilización del código. Al separar la lógica de
la interfaz de usuario, se logra una mayor flexibilidad y facilidad para realizar
cambios en el sistema sin afectar otras partes de la aplicación. El patrón MVC
se utiliza ampliamente en el desarrollo de aplicaciones web, especialmente en
frameworks como Spring y ASP.NET MVC.
```
### 1.4. Organización del documento

Este documento está estructurado en secciones que responden al modelo
arquitectónico 4+1 propuesto por Philippe Kruchten, permitiendo una visión
integral del sistema desde diferentes puntos de vista:
**● Introducción**
Presenta el propósito general del documento, el alcance, las definiciones clave,
siglas y abreviaturas, así como la estructura del contenido.
**● Vista Lógica**
Describe los componentes funcionales principales del sistema, incluyendo los
módulos y sus relaciones. Aquí se detallan los diagramas de clases, de paquetes
y de casos de uso que modelan la funcionalidad del sistema desde el punto de
vista de los desarrolladores.
**● Vista de Desarrollo (Vista de Implementación)**
Proporciona la estructura del software en términos de componentes y paquetes.
Esta vista está orientada a los desarrolladores e ingenieros de software,
incluyendo diagramas de componentes y la organización de carpetas o módulos
del código.
**● Vista de Proceso (opcional)**
Debido a que el sistema GameOn no se basa en procesos distribuidos ni
requiere concurrencia compleja, esta vista se omite en el presente documento
por no aportar valor significativo a la arquitectura actual.
**● Vista Física (Vista de Despliegue)**
Describe la infraestructura donde se desplegará el sistema, incluyendo
servidores, servicios externos, y conexiones con APIs como Google Maps,
Notificaciones o Pasarela de Pagos. Se presentan diagramas de despliegue que
muestran la distribución física de los nodos.
**● Vista de Casos de Uso (Escenarios)**
Complementa las otras vistas explicando cómo interactúan los actores externos
con el sistema. Se incluyen los principales escenarios funcionales para validar
la arquitectura propuesta y garantizar que se cumplen los requerimientos del
usuario.


```
● Anexos y Referencias
Incluye materiales complementarios como catálogos de requerimientos,
referencias bibliográficas, glosario técnico, y documentación de soporte para
una mejor comprensión del sistema.
```
## 2. OBJETIVOS Y RESTRICCIONES ARQUITECTÓNICAS

### 2.1. Priorización de requerimientos

#### 1.1.1. Requerimientos Funcionales

```
ID Nombre del
Requisito
Descripción de Requisito Prioridad
RF01 Visualizar
Instalaciones
Deportivas
Repositorio único con fichas detalladas de
instalaciones que incluyan ubicación, tipos de
deportes, características técnicas, servicios
complementarios, horarios, tarifas y fotografías
Alta
RF02 Reservar en Tiempo
Real
Sistema de reservas con calendario interactivo de
disponibilidad, procesamiento de pagos,
confirmación instantánea y gestión de
modificaciones/cancelaciones
Alta
RF03 Geolocalizar
Instalaciones
Deportivas cercanas
Visualización de instalaciones cercanas, rutas
optimizadas, alternativas de transporte y filtros
por proximidad mediante integración con Google
Maps.
Alta
RF04 Crear grupo
deportivo
Herramientas para crear y administrar grupos por
deporte, nivel de habilidad o zona geográfica
Media
RF05 Gestionar perfil de
usuario
Creación y gestión de perfiles de usuario que
incluya preferencias deportivas, nivel de habilidad
y disponibilidad horaria para recomendaciones
personalizadas
Media
RF06 Gestionar
Instalación
deportiva
Interfaz especializada para que propietarios
gestionen sus instalaciones, disponibilidad,
precios y promociones
Alta
RF07 Gestionar Pagos Sistema integrado para procesar pagos de
reservas y participación en eventos mediante
diversos métodos
Alta
```

#### 1.1.2. Requerimientos No Funcionales – Atributos de Calidad

**ID Nombre del
Requisito
Descripción de Requisito Prioridad**
RNF-
001
Rendimiento El sistema debe cargar y responder en menos de 3
segundos.
Alta
RNF-
002
Disponibilidad Siempre disponible Funciona casi todo el tiempo
(más del 99%).
Alta
RNF-
003
Escalabilidad Escalable Puede crecer y soportar muchos
usuarios
Media
RNF-
004
Mantenibilidad El código debe estar ordenado y con comentarios Media
RNF-
005
Interoperabilidad Se conecta con otros sistemas como Google Maps
o pagos. Media
Media
RNF-
006
Tiempo de
Respuesta
Tiempo máximo de carga inicial de la aplicación
menor a 3 segundos con conexión estándar
Alta
RNF-
007
Compatibilidad Funcionamiento óptimo en Chrome, Firefox, y
Edge actualizados, así como en Android 8+ e iOS
12+
Alta
RNF-
008
Capacidad de
Almacenamiento
Sistema capaz de almacenar y gestionar
eficientemente hasta 10,000 fichas de
instalaciones con sus respectivas imágenes
Media
RNF-
009
Auditabilidad Registro completo de transacciones críticas
(reservas, pagos) para seguimiento y resolución de
disputas
Media
RNF-
010
Consistencia Visual Aplicación de un sistema de diseño unificado con
elementos visuales coherentes en toda la
plataforma
Media


```
RNF-
011
Buscador Avanzado Motor de búsqueda con filtros combinados por
deporte, ubicación, precio, disponibilidad y
características técnicas
Alta
```
### 2.2. Restricciones

```
El presente documento se limita a la realidad que se vive actualmente al
momento de adquirir un espacio.
El tratamiento de datos sensibles son responsabilidad de los usuarios, el sistema
garantiza solo la gestión de los datos.
No se implementará el sistema si no se ha hecho el pago completo, no habrá
derecho a devolución una vez implementado el sistema, si se solicita cambios o
modificaciones se cobrará horas de desarrollo a un precio de S/10.00 por hora de
desarrollo.
El sistema está abierto a actualizaciones y mejoras conforme a nuevas
necesidades con presupuestos y condiciones propias de cada actualización
```
## 3. REPRESENTACIÓN DE LA ARQUITECTURA DEL SISTEMA

### 3.1. Vista de Caso de uso

#### 1.1.3. Diagramas de Casos de uso


### 3.2. Vista Lógica

#### 3.2.1. Diagrama de Subsistemas (paquetes)

#### 3.2.2. Diagrama de Secuencia (vista de análisis)

```
RF-001-Visualizar Instalaciones Deportivas
```

**RF-002- Reservar en Tiempo Real**


**RF-003- Visualizar Instalaciones Deportivas Cercanas**


**RF-004-Crear grupo deportivo**


**RF-005- Gestionar usuario**


**RF-006– Administrar Instalación Deportiva**


**RF-007 – Gestionar Pagos**



#### 3.2.3. Diagrama de Objetos


#### 3.2.5. Diagrama de Base de datos (relacional o no relacional)

### 3.3. Vista de Implementación (vista de desarrollo)

#### 3.3.1. Diagrama de arquitectura software (paquetes)


#### 3.3.2. Diagrama de arquitectura del sistema (Diagrama de componentes)

```
componentes)
```

### 3.4. Vista de procesos

#### 3.4.1. Diagrama de Procesos del sistema (Diagrama Propuesto)

### 3.5. Vista de Despliegue (vista física)

#### 3.2.4. Diagrama de Clases

### 4. ATRIBUTOS DE CALIDAD DEL SOFTWARE

#### Escenario de Funcionalidad

```
El sistema Game On Network cumple con todos los requerimientos funcionales
clave definidos para la gestión integral de grupos deportivos, usuarios,
instalaciones, reservas, torneos y evaluaciones. La plataforma cubre de manera
integral todas las necesidades de los usuarios deportistas, desde la búsqueda y
reserva de instalaciones deportivas, hasta la participación en torneos y formación
de comunidades deportivas, brindando funcionalidades robustas y confiables
para optimizar la experiencia deportiva de los usuarios.
```

#### Escenario de Usabilidad

```
En términos de usabilidad, Game On Network está diseñado para ser intuitivo y
fácil de aprender, especialmente para los nuevos usuarios. Cuando un deportista
se registra por primera vez y necesita realizar operaciones como unirse a un
grupo deportivo o reservar una instalación, la interfaz lo guiará paso a paso a
través del proceso. El sistema permite configurar preferencias deportivas, nivel
de habilidad y disponibilidad horaria para personalizar la experiencia del
usuario y facilitar la conexión con otros deportistas compatibles o instalaciones
adecuadas.
```
#### Escenario de confiabilidad

El sistema debe garantizar la seguridad mediante un robusto sistema de
autenticación y control de acceso. Cuando un usuario intente acceder sin
credenciales válidas, el sistema responderá inmediatamente bloqueando el
acceso y registrando el intento en el log de seguridad. Después de tres intentos
fallidos, se enviará una notificación automática al administrador del sistema. La
respuesta del sistema debe ser inmediata, con un tiempo de detección y bloqueo
inferior a un segundo, asegurando que el 100% de los intentos no autorizados
sean detectados y bloqueados. Las transacciones sensibles, como pagos por
reservas de instalaciones o inscripciones a torneos, contarán con protocolos
adicionales de seguridad para proteger la información financiera de los usuarios.

#### Escenario de rendimiento

La adaptabilidad del sistema se demuestra en su capacidad para incorporar
cambios sin interrumpir las operaciones. Por ejemplo, cuando surja la necesidad
de agregar nuevos deportes o tipos de instalaciones deportivas en la plataforma,
el sistema permitirá la incorporación de estas nuevas categorías sin necesidad de
modificar el código base. Los filtros de búsqueda, reportes y vistas se
actualizarán automáticamente para reflejar los cambios, manteniendo la
integridad con los datos existentes. Game On Network debe responder en menos
de 3 segundos cuando múltiples usuarios realizan búsquedas simultáneas de
instalaciones disponibles, incluso en horarios de alta demanda como fines de
semana o después de horarios laborales.


#### Escenario de mantenibilidad

En cuanto a la disponibilidad, Game On Network está preparado para manejar
fallos críticos de manera eficiente. En caso de un fallo en el servidor principal
durante los períodos de mayor actividad (como fines de semana o durante la
realización de torneos importantes), el sistema activará automáticamente el
servidor de respaldo y recuperará los datos desde el último backup realizado. El
tiempo total de recuperación no debe exceder los 15 minutos para funciones
críticas como reservas e información de torneos en curso, con cero pérdida de
datos y manteniendo una disponibilidad anual superior al 99.9%. Considerando
la naturaleza del servicio, la plataforma debe estar operativa todos los días las 24
horas, con ventanas de mantenimiento programadas en horarios de baja
actividad.

#### Otros Escenarios

El rendimiento del sistema se mantiene estable incluso en condiciones de alta
demanda. Durante los horarios pico, como fines de semana o lanzamientos de
nuevos torneos, cuando múltiples usuarios realizan reservas y búsquedas
simultáneas, el sistema implementa balanceo automático de carga y optimización
de consultas en tiempo real. Los tiempos de respuesta para buscar instalaciones
disponibles o unirse a un grupo deportivo se mantienen por debajo de los 2
segundos, incluso con más de 500 usuarios simultáneos. El sistema debe escalar
horizontalmente para manejar un crecimiento del 200% en la base de usuarios
sin degradación del rendimiento, especialmente importante durante eventos
deportivos de gran escala que puedan generar picos de actividad en la
plataforma.
Game On Network debe integrarse con sistemas externos como pasarelas de
pago para procesar las reservas, aplicaciones de mapas para mostrar la ubicación
de instalaciones deportivas, y APIs de redes sociales para compartir logros y
eventos. Estas integraciones deben funcionar de manera transparente, con
tiempos de respuesta inferiores a 3 segundos. En caso de falla de un servicio
externo, el sistema debe implementar mecanismos de degradación elegante que


permitan continuar con la funcionalidad principal, notificando al usuario sobre la
limitación temporal sin afectar la experiencia global de uso.


