**UNIVERSIDAD PRIVADA DE TACNA
FACULTAD DE INGENIERÍA
Escuela Profesional de Ingeniería de Sistemas
Proyecto “Sistema de recomendaciones de
Instalaciones Deportivas con Geolocalización”**
Curso: Patrones de Software
Docente: Mag. Patrick Cuadros Quiroga
Integrantes:

### SEBASTIAN NICOLAS FUENTES AVALOS (2022073902)

### GABRIELA LUZKALID GUTIERREZ MAMANI (2022074263)

### MAYRA FERNANDA CHIRE RAMOS (2021072620)

### CESAR NIKOLAS CAMAC MELENDEZ (2022074262)

**Tacna – Perú**


CONTROL DE VERSIONES
Versión Hecha por Revisada por Aprobada por Fecha Motivo
1.0 MPV ELV ARV 10/05/2025 Versión Original
**Proyecto “Sistema de recomendaciones de
Instalaciones Deportivas con Geolocalización”
Documento de Especificación de Requerimientos de
Software**

### Versión 1.


## CONTROL DE VERSIONES

Versión Hecha por Revisada por Aprobada por Fecha Motivo
1.0 MPV ELV ARV 10/10/2020 Versión Original


- INTRODUCCIÓN ÍNDICE GENERAL
- 1. Generalidades de la Empresa
- 1.1. Nombre de la Empresa
- 1.2. Visión
- 1.3. Misión
- 1.4. Organigrama
- 2. Visionamiento de la Empresa
   - 2.1. Descripción del Problema
   - 2.2. Objetivos de Negocios
   - 2.3. Objetivos de Diseño
   - 2.4. Alcance del proyecto
   - 2.5. Viabilidad del Sistema
   - 2.6. Informacion obtenida del Levantamiento de Informacion
- 3. Análisis de Procesos
   - 3.1. Diagrama del Proceso Actual – Diagrama de actividades
   - 3.2. Diagrama del Proceso Propuesto – Diagrama de actividades Inicial
- 4. Especificacion de Requerimientos de Software
   - 4.1. Cuadro de Requerimientos funcionales Inicial
   - 4.2. Cuadro de Requerimientos No funcionales
   - 4.3. Cuadro de Requerimientos funcionales Final
   - 4.4. Reglas de Negocio
- 5. Fase de Desarrollo
   - 5.1. Perfiles de Usuario
   - 5.2. Modelo Conceptual
   - 5.3. Diagrama de Paquetes
   - 5.4. Diagrama de Casos de Uso
   - 5.5. Escenarios de Caso de Uso (narrativa)
- 6. Modelo Logico
   - 6.1. Analisis de Objetos
   - 6.2. Diagrama de Actividades con objetos
   - 6.3. Diagrama de Secuencia
   - 6.4. Diagrama de Clases
- CONCLUSIONES
- RECOMENDACIONES
- BIBLIOGRAFIA
- WEBGRAFIA


#### INTRODUCCIÓN

En los últimos años, el avance tecnológico ha permitido que diversas actividades sociales,
económicas y culturales se digitalicen para mejorar su eficiencia, accesibilidad y alcance. Sin
embargo, el sector deportivo amateur, especialmente en regiones alejadas de los grandes centros
urbanos, aún presenta rezagos importantes en cuanto a digitalización y acceso a plataformas que
optimicen la práctica deportiva (Rodríguez & Jiménez, 2021). En Tacna, la gestión tradicional
de instalaciones deportivas se caracteriza por procesos manuales, escasa visibilidad pública y
una limitada capacidad de organización de torneos y actividades comunitarias, lo que impide el
pleno aprovechamiento de los recursos existentes y limita la participación ciudadana.
GameOn Network surge como una propuesta innovadora que busca resolver estas problemáticas
a través del desarrollo de una plataforma digital integral destinada a la gestión de instalaciones
deportivas, reservas en línea, organización de torneos, y promoción de la cultura deportiva local.
Esta solución digital permitirá a los usuarios reservar espacios en tiempo real, visualizar la
disponibilidad de recintos, inscribirse en competencias, y conectarse con otros deportistas con
intereses similares, todo desde una interfaz intuitiva, accesible y segura (Caballero et al., 2020).
La propuesta se enmarca dentro de una visión de desarrollo sostenible, con un enfoque que
combina la eficiencia tecnológica, la equidad social y la protección ambiental. Por ejemplo, el
sistema contribuirá a la reducción de barreras de acceso al deporte al permitir que cualquier
persona pueda encontrar y reservar instalaciones desde su celular o computadora, sin necesidad
de desplazamientos innecesarios o trámites presenciales (Silva & Herrera, 2019). Asimismo, al
digitalizar procesos anteriormente basados en papel, se disminuirá el consumo de recursos
físicos y se promoverá una gestión más responsable del entorno (ONU, 2022).
Desde una perspectiva técnica, el proyecto tiene alta factibilidad operativa, ya que el equipo
desarrollador cuenta con competencias en tecnologías web, bases de datos, integración de APIs
como Google Maps, y metodologías ágiles de desarrollo de software (Pressman & Maxim,
2020). Además, se ha validado la necesidad del sistema a través de entrevistas con potenciales
usuarios, análisis de plataformas similares en otros países, y reuniones con el sponsor
institucional del proyecto, el Instituto Peruano del Deporte (IPD).
En el plano legal, se cumplirá rigurosamente con la Ley N.º 29733 – Ley de Protección de Datos
Personales en el Perú, asegurando la confidencialidad y seguridad de la información
proporcionada por los usuarios (Ministerio de Justicia y Derechos Humanos, 2011). A nivel
social, GameOn Network contribuirá a fortalecer el tejido social mediante la creación de


comunidades deportivas activas, promoviendo la inclusión de grupos tradicionalmente
marginados, como mujeres, jóvenes en riesgo o adultos mayores (Martínez & Ruiz, 2020).
El proyecto también aporta al cumplimiento de los Objetivos de Desarrollo Sostenible (ODS)
establecidos por las Naciones Unidas. Alinea directamente con el ODS 3 (Salud y Bienestar), al
fomentar la práctica regular del deporte; con el ODS 9 (Industria, Innovación e Infraestructura),
al digitalizar la infraestructura existente; con el ODS 12 (Producción y Consumo Responsables),
al eliminar procesos en papel; y con el ODS 13 (Acción por el Clima), al reducir emisiones
derivadas del transporte gracias a la planificación optimizada mediante geolocalización (ONU,
2022).
En síntesis, GameOn Network representa una solución tecnológica transformadora que no solo
mejora la eficiencia operativa de los actores involucrados en el ecosistema deportivo, sino que
además promueve una práctica deportiva más inclusiva, organizada, sostenible y saludable. Este
documento de Especificación de Requisitos de Software (SRS) tiene como objetivo establecer
de forma detallada las funcionalidades, requerimientos técnicos, restricciones y lineamientos de
diseño de la plataforma, sirviendo como base para su implementación efectiva.


## 1. Generalidades de la Empresa

## 1.1. Nombre de la Empresa

#### CAPICODEX

## 1.2. Visión

```
En CAPICODEX, aspiramos a ser líderes en el desarrollo de soluciones
tecnológicas que impulsen el crecimiento del deporte local a través de la
innovación digital. Con GameOn Network, buscamos transformar la
manera en que se gestionan y utilizan las instalaciones deportivas en
Tacna, creando una plataforma centralizada, eficiente y accesible para
todos. Nuestra visión es fortalecer el ecosistema deportivo regional,
conectando a deportistas, administradores y entidades reguladoras, y
sentando las bases para un modelo replicable en otras ciudades.
```
## 1.3. Misión

```
Nuestra misión en CAPICODEX es desarrollar e impulsar GameOn
Network, una plataforma digital integral diseñada para optimizar la
gestión y reserva de espacios deportivos en Tacna. Nos comprometemos
a facilitar la conexión entre usuarios y administradores, promoviendo
una experiencia deportiva más organizada, accesible y transparente. A
través de la tecnología, buscamos fomentar la participación activa, el uso
eficiente de recursos y el desarrollo sostenible del deporte local.
```

## 1.4. Organigrama

## 2. Visionamiento de la Empresa

### 2.1. Descripción del Problema

```
En la región de Tacna se evidencia una problemática significativa
relacionada con el ecosistema deportivo local, caracterizada
principalmente por tres factores interrelacionados:
En primer lugar, existe una marcada deficiencia en la disponibilidad y
accesibilidad de información actualizada sobre instalaciones deportivas.
Los deportistas amateur carecen de medios eficientes para conocer la
ubicación, características, horarios de funcionamiento y servicios que
ofrecen los diferentes espacios deportivos disponibles en la región.
En segundo lugar, los sistemas de reserva de estas instalaciones son
obsoletos o inexistentes, generalmente basados en métodos presenciales
o telefónicos, sin aprovechamiento de tecnologías digitales que podrían
optimizar este proceso. Esta situación genera incertidumbre, pérdida de
tiempo y frecuentemente conduce a la subutilización de la infraestructura
deportiva existente.
Se observa una deficiente organización general del ecosistema deportivo
regional, manifestada en la desconexión entre los tres actores principales:
los deportistas amateur que buscan espacios para practicar sus
disciplinas, los administradores o propietarios de instalaciones deportivas
que ofrecen estos espacios, y las autoridades reguladoras encargadas de
promover y supervisar la actividad deportiva.
```

```
Esta triple problemática limita significativamente el desarrollo de la
práctica deportiva en Tacna, reduciendo las oportunidades de
participación, dificultando la formación de comunidades deportivas
cohesionadas y obstaculizando el aprovechamiento óptimo de la
infraestructura existente.
```
### 2.2. Objetivos de Negocios

```
● Brindar una plataforma tecnológica centralizada que permita
registrar, gestionar y reservar instalaciones deportivas de forma
eficiente, reduciendo la dependencia de procesos manuales o
informales.
● Facilitar el acceso a la práctica del deporte para personas de todas
las edades y contextos mediante una interfaz accesible,
transparente y equitativa.
● Optimizar el uso de recursos deportivos existentes Aumentar la
visibilidad y utilización de las instalaciones deportivas públicas y
privadas, contribuyendo a su sostenibilidad y mejor
aprovechamiento.
● Establecer un modelo de negocio basado en comisiones por
reserva, planes premium y publicidad segmentada, que asegure la
rentabilidad y crecimiento del proyecto.
● Promover estilos de vida activos como herramienta de prevención
en salud pública, mediante una mayor participación en
actividades físicas organizadas.
```
### 2.3. Objetivos de Diseño

```
● Garantizar una experiencia de usuario fluida, que permita tanto a
jóvenes como adultos navegar fácilmente por la plataforma sin
necesidad de conocimientos técnicos.
● Permitir el acceso completo a la plataforma desde smartphones,
tablets o computadoras, adaptando automáticamente la interfaz a
cada pantalla.
```

```
● Integrar mapas interactivos (Google Maps) para mostrar la
ubicación de instalaciones deportivas, su disponibilidad en
tiempo real y las rutas de acceso.
● Estructurar la plataforma de manera que permita integrar futuras
funciones (evaluaciones, pagos en línea, chat entre deportistas,
etc.) sin rediseñar el sistema completo.
● Utilizar una paleta de colores amigable, íconos comprensibles y
componentes visuales coherentes que refuercen la identidad de la
marca y la confianza del usuario.
```
### 2.4. Alcance del proyecto

El proyecto GameOn Network abarcará el desarrollo de una plataforma digital que
revolucionará la práctica deportiva amateur en Tacna, con las siguientes
funcionalidades e inclusiones:
● Diseño e implementación de un sistema digital de registro y categorización de
instalaciones deportivas en Tacna que incluya información detallada sobre
ubicación, servicios, disponibilidad y costos.
● Desarrollo de un mecanismo de reservas en línea que permita a los usuarios
programar el uso de instalaciones deportivas de manera sencilla y en tiempo
real.
● Implementación de funcionalidades de geolocalización e integración con
Google Maps para facilitar el acceso y la planificación logística de los
deportistas amateur.
● Establecimiento de un sistema de perfiles de usuario que permita la conexión
entre deportistas con intereses similares, fomentando la creación de
comunidades deportivas.
● Desarrollo de un modelo de monetización sostenible a través de comisiones por
reservas y espacios publicitarios que garantice la viabilidad económica de la
plataforma.

### 2.5. Viabilidad del Sistema

```
● Factibilidad Operativa
```

El proyecto GameOn Network presenta una alta factibilidad operativa debido a que
responde directamente a necesidades identificadas en el ecosistema deportivo de Tacna.
La plataforma ha sido diseñada considerando las capacidades técnicas y operativas del
equipo de desarrollo, así como la infraestructura tecnológica disponible.
Los usuarios finales (deportistas amateur y administradores de instalaciones) obtendrán
beneficios tangibles al utilizar el sistema, lo que facilitará su adopción. La interfaz
intuitiva y las funcionalidades de geolocalización simplificarán la curva de aprendizaje
para nuevos usuarios.
El equipo de desarrollo cuenta con las competencias necesarias para implementar todas
las funcionalidades planificadas, incluyendo el sistema de reservas en tiempo real y la
integración con Google Maps.
Para garantizar la operatividad continua del sistema, se implementará un plan de
capacitación para los administradores de instalaciones deportivas y se ofrecerá soporte
técnico durante las fases iniciales de implementación, facilitando así la transición desde
los métodos tradicionales de reserva hacia el nuevo sistema digital.
● Factibilidad Legal
La información manejada por la empresa será completamente confidencial. Se aplicará
la Ley de Protección de Datos Personales en Perú (Ley N.º 29733), que regula el
tratamiento de datos personales, sin importar el soporte en el que sean gestionados.
Esta ley garantiza los derechos de las personas sobre sus datos personales y establece
las obligaciones para quienes recolectan, almacenan o procesan dicha información.
● Factibilidad Social
El proyecto GameOn Network presenta un potencial para transformar el ecosistema
deportivo en Tacna. La plataforma democratiza el acceso a la información sobre
instalaciones deportivas, reduciendo significativamente las barreras que actualmente
limitan la participación en actividades físicas y recreativas para diversos sectores de la
población.
Al facilitar la conexión entre deportistas amateur con intereses similares, el sistema
promueve la formación de comunidades deportivas cohesionadas, fortaleciendo el tejido
social de la región y fomentando un mayor sentido de pertenencia e integración social.
Esto resulta particularmente valioso en un contexto donde las oportunidades de


interacción social a través del deporte se han visto limitadas por la falta de información
y coordinación.
La organización de torneos y competencias estructuradas a través de la plataforma
contribuye al desarrollo de una cultura deportiva más robusta en Tacna, proporcionando
incentivos para la participación regular en actividades físicas y, consecuentemente,
mejorando indicadores de salud pública. El acceso simplificado a estas actividades
organizadas potencia el impacto social positivo del deporte como herramienta de
desarrollo comunitario.
La optimización en el uso de instalaciones deportivas existentes que permite el sistema
amplía significativamente las oportunidades de práctica deportiva para grupos
tradicionalmente marginados o con acceso limitado, contribuyendo así a la equidad en
el aprovechamiento de espacios recreativos. Esta democratización del acceso representa
un avance importante hacia una sociedad más inclusiva en términos deportivos.
● Factibilidad Ambiental
La implementación del sistema web GameOn Network tiene un impacto ambiental
reducido, pero se han considerado diversos factores relacionados con la sostenibilidad
y los Objetivos de Desarrollo Sostenible (ODS):
● Alineación con ODS 3 (Salud y Bienestar): La plataforma promueve estilos de
vida activos y saludables al facilitar la práctica deportiva regular, contribuyendo
directamente a la mejora de la salud física y mental de la población.
● Alineación con ODS 9 (Industria, Innovación e Infraestructura): El proyecto
optimiza el uso de infraestructura deportiva existente mediante la digitalización
de procesos de reserva y gestión, maximizando el aprovechamiento de recursos
ya construidos.


```
● Contribución al ODS 12 (Producción y Consumo Responsables): La digitalización
de procesos tradicionalmente basados en papel reduce el consumo de recursos
físicos, promoviendo prácticas de consumo más sostenibles.
● Apoyo al ODS 13 (Acción por el Clima): La optimización de rutas y
desplazamientos mediante el uso de geolocalización puede contribuir a la
reducción de emisiones asociadas al transporte, apoyando indirectamente las
acciones contra el cambio climático.
```
### 2.6. Informacion obtenida del Levantamiento de Informacion

```
● Entrevistas con usuarios potenciales.
```
## 3. Análisis de Procesos

```
● Revisión de estudios de mercado y tendencias tecnológicas.
```

**3. Análisis de Procesos**

### 3.1. Diagrama del Proceso Actual – Diagrama de actividades

### 3.2. Diagrama del Proceso Propuesto – Diagrama de actividades Inicial

### 4. Especificación de Requerimientos de Software

### 4.1. Cuadro de Requerimientos funcionales Inicial

**ID Nombre del
Requisito
Descripción de Requisito Prioridad**
RF01 Vizualización
Centralizada de
Información
Repositorio único con fichas detalladas de
instalaciones que incluyan ubicación, tipos de
deportes, características técnicas, servicios
complementarios, horarios, tarifas y fotografías
Alta


RF02 Reservas en Tiempo
Real
Sistema de reservas con calendario interactivo de
disponibilidad, procesamiento de pagos,
confirmación instantánea y gestión de
modificaciones/cancelaciones
Alta
RF03 Geolocalización e
Integración con
Maps
Visualización de instalaciones cercanas, rutas
optimizadas, alternativas de transporte y filtros
por proximidad mediante integración con Google
Maps
Alta
RF04 Perfiles Deportivos
Personalizados
Creación y gestión de perfiles que incluyan
preferencias deportivas, nivel de habilidad y
disponibilidad horaria para recomendaciones
personalizadas
Alta
RF05 Recomendación de
Compañeros
Sistema inteligente que sugiera potenciales
compañeros deportivos basado en preferencias,
nivel y ubicación similares
Media

### 4.2. Cuadro de Requerimientos No funcionales

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
RNF-
011
Buscador Avanzado Motor de búsqueda con filtros combinados por
deporte, ubicación, precio, disponibilidad y
características técnicas
Alta

### 4.3. Cuadro de Requerimientos funcionales Final

**ID Nombre del
Requisito
Descripción de Requisito Prioridad**
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


```
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
### 4.4. Reglas de Negocio

**● Sistema centralizado de información deportiva:**
Ofrece acceso a una base de datos unificada con información actualizada sobre
instalaciones deportivas en Tacna, incluyendo ubicación, servicios disponibles, horarios
de atención y tarifas, permitiendo a los usuarios tomar decisiones informadas
rápidamente.
**● Reservas en tiempo real:**
Permite a los usuarios consultar la disponibilidad de espacios deportivos y realizar
reservas al instante, reduciendo la incertidumbre y mejorando la planificación de
actividades físicas y eventos.
**● Geolocalización e integración con Google Maps:**
Facilita la visualización de instalaciones cercanas mediante mapas interactivos, así
como la planificación de rutas y medios de transporte, mejorando la accesibilidad y
eficiencia del desplazamiento.
**● Perfiles de usuario personalizados:**


Permite a los usuarios crear perfiles detallados indicando sus preferencias deportivas,
nivel de experiencia y disponibilidad horaria, con el objetivo de ofrecer
recomendaciones personalizadas y mejorar la experiencia en la plataforma.
**● Creación de comunidades deportivas:**
Fomenta la interacción entre deportistas con intereses comunes, permitiéndoles crear o
unirse a comunidades según su deporte preferido, nivel o zona geográfica, promoviendo
la práctica constante y el espíritu de equipo.
**● Gestión de torneos y competencias:**
Incluye funcionalidades para que organizadores creen, promocionen y administren
eventos deportivos, gestionando inscripciones, programación de encuentros y
seguimiento de resultados desde un solo lugar.
**● Análisis de datos y estadísticas:**
Genera reportes detallados sobre uso de instalaciones, comportamiento de usuarios y
preferencias deportivas, proporcionando datos valiosos para la toma de decisiones tanto
a gestores de espacios como a entidades reguladoras.
**● Sistema de valoraciones y reseñas:**
Ofrece a los usuarios la posibilidad de calificar y comentar sobre las instalaciones
utilizadas, ayudando a otros usuarios a elegir mejor y promoviendo mejoras continuas
por parte de los administradores de espacios deportivos.

## 5. Fase de Desarrollo

### 5.1. Perfiles de Usuario

```
● Deportistas ocasionales:
○ Utilizan la plataforma para encontrar espacios disponibles
según su ubicación.
○ Reservan instalaciones de forma esporádica para
actividades recreativas.
○ Priorizan la facilidad de uso y la información sobre
disponibilidad inmediata.
● Deportistas regulares:
```

○ Utilizan la plataforma frecuentemente para mantener una
rutina de actividad física.
○ Participan en comunidades deportivas y buscan conectar
con otros deportistas.
○ Valoran las funcionalidades de organización de partidos y
seguimiento de actividades.
● **Administradores de pequeñas instalaciones:**
○ Gestionan espacios deportivos con recursos limitados para
marketing y promoción.
○ Buscan aumentar su visibilidad y simplificar la gestión de
reservas.
○ Valoran las analíticas sobre ocupación y preferencias de
usuarios.
● **Gestores de complejos deportivos:**
○ Administran múltiples espacios con diferentes
características y horarios.
○ Necesitan un sistema integral para gestionar reservas y
maximizar la ocupación.
○ Requieren informes detallados sobre rendimiento y
tendencias de uso.


## 6. Modelo Logico

### 5.3. Diagrama de Paquetes

### 5.4. Diagrama de Casos de Uso

### 5.5. Escenarios de Caso de Uso (narrativa)

```
RF-001-Visualizar Instalaciones Deportivas
Registrar Medidas de Clientes
Tipo Obligatorio
Autor(es) Gabriela Luzkalid Gutierrez Mamani
```

```
RF-002- Reservar en Tiempo Real
Actores Usuario
Descripción
Repositorio único con fichas detalladas de
instalaciones que incluyan ubicación, tipos de
deportes, características técnicas, servicios
complementarios, horarios, tarifas y
fotografías
Precondiciones
Narrativa de cada de uso
Acción del actor Respuesta del sistema
```
1. El usuario accede a la interfaz principal
    2. El sistema muestra un listado de
       instalaciones con los campos completados
       (nombre, dirección, horarios, fotos, tipo
       de deporte, etc.).
3. El usuario puede visualizar las
    instalaciones
**Registrar Medidas de Clientes
Tipo Obligatorio
Autor(es) Sebastián Nicolas Fuentes Avalos
Actores Usuario
Descripción Sistema de reservas con calendario interactivo
de disponibilidad, procesamiento de pagos,
confirmación instantánea y gestión de
modificaciones/cancelaciones
Precondiciones El usuario debe estar registrado y autenticado.
Narrativa de cada de uso**


**RF-003- Geolocalizar Instalaciones Deportivas cercanas
Acción del actor Respuesta del sistema**

1. El usuario accede al buscador de
    instalaciones.
       2. El sistema muestra un listado con horarios
          disponibles.
3. El usuario selecciona una fecha y hora
    deseada.
       4. El sistema muestra el resumen de reserva.
5. El usuario confirma la reserva. 6. EL sistema redirige a la pasarela de pagos
7. El usuario ejecuta el pago 8. El sistema procesa el pago
6. El sistema registra la reserva y muestra una
confirmación.
7. El sistema envía una notificación y correo al
usuario.
8. El sistema actualiza el calendario de
disponibilidad.
**Registrar Medidas de Clientes
Tipo Obligatorio
Autor(es) Cesar Camac
Actores Usuario
Descripción Visualización de instalaciones cercanas, rutas
optimizadas, alternativas de transporte y filtros
por proximidad mediante integración con
Google Maps.
Precondiciones El usuario ha permitido el acceso a su
ubicación.
Narrativa de cada de uso**


**RF-004-Crear grupo deportivo
Acción del actor Respuesta del sistema**

1. El usuario accede a la opción
    “Instalaciones cercanas”.
       2. El sistema solicita permiso de
          geolocalización.
3. El usuario acepta compartir su
    ubicación.
       4. El sistema identifica la ubicación actual del
          usuario.
5. El sistema muestra en un mapa interactivo
    las instalaciones más próximas.
6. El usuario puede aplicar filtros por deporte,
    horario o tarifa.
**Registrar Medidas de Clientes
Tipo Obligatorio
Autor(es) Mayra Fernanda Chire Ramos
Actores Usuario Normal
Descripción Herramientas para crear y administrar grupos
por deporte, nivel de habilidad o zona
geográfica.
Precondiciones
Narrativa de cada de uso
Acción del actor Respuesta del sistema**
1. El usuario accede a la sección “Grupos
deportivos”.
2. El sistema muestra los grupos existentes y la
opción “Crear nuevo grupo”.


```
RF-005-Gestionar perfil de usuario
```
3. El usuario selecciona “Crear nuevo
    grupo”.
       4. El sistema despliega un formulario con
          campos como nombre del grupo, deporte,
          nivel de habilidad y zona geográfica.
5. El usuario completa el formulario y
    presiona “Crear”.
       6. El sistema valida los datos ingresados.
8. El sistema confirma la creación del grupo y
    lo muestra en la lista de grupos
    disponibles..
**Registrar Medidas de Clientes
Tipo Obligatorio
Autor(es) Gabriela Luzkalid Gutierrez Mamani
Actores Usuario Normal
Descripción Gestión de perfiles que incluyan preferencias
deportivas, nivel de habilidad y disponibilidad
horaria para recomendaciones personalizadas.
Precondiciones
Narrativa de cada de uso
Acción del actor Respuesta del sistema**
1. El usuario accede a su perfil desde el
menú principal.
2. El sistema muestra la información personal
y deportiva actual.
3. El usuario selecciona “Editar perfil” 4. El sistema habilita los campos editables..
5. El usuario actualiza sus preferencias
deportivas, nivel de habilidad y
disponibilidad horaria.
6. El sistema guarda los cambios y ajusta las
recomendaciones personalizadas en base
a los nuevos datos.


**RF-006 – Administrar Instalación Deportiva
RF-007 – Gestionar Pagos
Registrar Medidas de Clientes
Tipo Obligatorio
Autor(es) Gabriela Luzkalid Gutierrez Mamani
Actores Propietario
Descripción Interfaz especializada para que propietarios
gestionen sus instalaciones, disponibilidad,
precios y promociones.
Precondiciones
Narrativa de cada de uso
Acción del actor Respuesta del sistema**

1. El propietario accede a la sección
    “Mis instalaciones”.
       2. El sistema muestra la lista de instalaciones a
          su cargo.
3. El propietario selecciona una
    instalación y elige “Editar”.
       4. El sistema muestra la ficha editable con
          horarios, tarifas, servicios y promociones.
5. El propietario realiza cambios en
    disponibilidad y precios.
       6. El sistema valida la información ingresada y
          actualiza la ficha de la instalación.
7. El sistema notifica a los usuarios si los
    cambios afectan reservas existentes.


**9. Modelo Lógico**

### 6.3. Diagrama de Secuencia

**RF-001-Visualizar Instalaciones Deportivas
Registrar Medidas de Clientes
Tipo Obligatorio
Autor(es) Gabriela Luzkalid Gutierrez Mamani
Actores Usuario
Descripción Sistema integrado para procesar pagos de
reservas y participación en eventos mediante
diversos métodos.
Precondiciones
Narrativa de cada de uso
Acción del actor Respuesta del sistema**

1. El usuario finaliza la selección de una
    reserva o inscripción.
       2. El sistema redirige al módulo de pago.
3. El usuario selecciona el método de
    pago (tarjeta, Yape, Plin, billetera
    interna).
       4. El sistema valida la disponibilidad del
          método y solicita los datos necesarios.
5. El usuario confirma el pago. 6. El sistema procesa el pago, emite un
    comprobante y actualiza el estado de la
    reserva o inscripción.


**RF-002- Reservar en Tiempo Real
RF-003- Geolocalizar Instalaciones Deportivas Cercanas**


**RF-004-Crear grupo deportivo
RF-005- Gestionar usuario**


**RF-006 – Gestionar Instalación Deportiva**


**RF-007 – Gestionar Pagos**


### 6.4. Diagrama de Clases


## CONCLUSIONES

```
● GameOn Network presenta una plataforma digital robusta que
abarca todo el ecosistema deportivo, desde la reserva de
instalaciones hasta la promoción de eventos y servicios. La
integración de funcionalidades específicas para usuarios,
propietarios e instituciones permite una administración eficiente,
moderna y accesible.
● La arquitectura basada en funcionalidades independientes
—como gestión de torneos, publicidad segmentada, suscripciones
y monitoreo en tiempo real— garantiza un sistema modular que
puede escalar fácilmente a nuevas regiones o deportes sin
reestructuraciones profundas.
● El sistema permite personalizar perfiles, preferencias, horarios y
habilidades, lo que mejora significativamente la experiencia del
usuario y la relevancia de las recomendaciones. Este enfoque
centrado en el usuario es clave para fomentar el uso recurrente y
la fidelización.
● Funcionalidades como la evaluación multidimensional de
instalaciones, la publicación de resultados y la administración
documental agilizan procesos administrativos y promueven la
transparencia, profesionalizando la gestión del deporte local.
● Al ofrecer espacios publicitarios dirigidos por deporte, zona y
edad, la plataforma crea un ecosistema económicamente
sostenible que puede atraer a patrocinadores, marcas y pequeños
negocios relacionados al deporte.
```
## RECOMENDACIONES

```
● Incluir dashboards para usuarios, propietarios con métricas sobre
reservas, asistencia, resultados de torneos, uso de instalaciones y
engagement con campañas publicitarias. Esto permitirá tomar
decisiones basadas en datos reales.
● Una versión móvil nativa o PWA permitirá un acceso más
cómodo, con notificaciones en tiempo real para reservas, eventos
```

y promociones, incrementando la interacción diaria con el
sistema.
● Para mejorar la conversión a usuarios pagos, es fundamental
soportar múltiples pasarelas de pago (Yape, Plin, tarjetas, PayPal)
y automatizar los procesos de renovación y facturación.
● Implementar verificación en dos pasos, validación documental
más estricta para propietarios y auditorías automáticas periódicas
para asegurar la calidad y autenticidad de la información y
transacciones.
● Introducir elementos de gamificación como insignias, niveles,
rankings y recompensas para usuarios activos, ganadores de
torneos o usuarios con mayor participación puede aumentar
significativamente el compromiso.
● Crear una API REST o GraphQL bien documentada permitirá
integrar GameOn con otros servicios externos como sistemas de
entrenadores, federaciones deportivas, o plataformas de
streaming de torneos en vivo.
**BIBLIOGRAFÍA**
Caballero, J., Fernández, A., & Torres, R. (2020). _Transformación digital en el deporte:
plataformas y aplicaciones para la gestión de actividades físicas_. Revista Tecnología y
Sociedad, 18(2), 33-47.
Martínez, C., & Ruiz, P. (2020). _Deporte y cohesión social: el rol de las plataformas digitales en
comunidades urbanas_. Revista de Estudios Sociales, 71(3), 120-134.
Ministerio de Justicia y Derechos Humanos del Perú. (2011). _Ley N.º 29733 – Ley de Protección
de Datos Personales_. Recuperado de https://www.minjus.gob.pe
ONU. (2022). _Objetivos de Desarrollo Sostenible: Guía para su implementación en proyectos
tecnológicos_. Naciones Unidas. https://sdgs.un.org/goals
Pressman, R. S., & Maxim, B. R. (2020). _Software Engineering: A Practitioner's Approach_ (9th
ed.). McGraw-Hill Education.
Rodríguez, L., & Jiménez, F. (2021). _Accesibilidad y digitalización de servicios deportivos
municipales: retos y oportunidades_. Revista Iberoamericana de Tecnologías del
Aprendizaje, 16(1), 44-52.
Silva, D., & Herrera, M. (2019). _Impacto de las tecnologías digitales en la democratización del
deporte en América Latina_. Revista Latinoamericana de Ciencias Sociales, 14(4), 82-95.


#### WEBGRAFÍA

Superintendencia de Protección de Datos Personales – Perú
https://www.gob.pe/anpd
_(Información oficial sobre la Ley N.º 29733 y normativas vigentes sobre protección de
datos personales en el Perú)._
Instituto Peruano del Deporte (IPD)
https://www.ipd.gob.pe
_(Portal oficial del IPD, entidad promotora del deporte en Perú y aliada estratégica del
proyecto GameOn Network)._
Naciones Unidas – Objetivos de Desarrollo Sostenible (ODS)
https://sdgs.un.org/goals
_(Página oficial de los 17 Objetivos de Desarrollo Sostenible que guían el componente
social y ambiental del proyecto)._
Google Maps Platform – APIs de geolocalización
https://developers.google.com/maps
_(Documentación técnica sobre el uso e integración de mapas y servicios de ubicación
en aplicaciones web)._
Ministerio de Transportes y Comunicaciones del Perú – Transformación Digital
https://www.gob.pe/mtc
_(Sección de políticas públicas y lineamientos tecnológicos aplicables al contexto digital
nacional)._
Statista – Penetración de Internet y uso de smartphones en Perú
https://www.statista.com/statistics/1123089/peru-internet-penetration-rate
_(Datos sobre acceso tecnológico, cruciales para justificar la viabilidad del sistema en
dispositivos móviles)._
World Health Organization – Physical Activity and Health
https://www.who.int/news-room/fact-sheets/detail/physical-activity
_(Datos globales sobre los beneficios del deporte en la salud, alineado al ODS 3)._
OECD – Digital Transformation in Public Sector
https://www.oecd.org/gov/digital-government/
_(Marco de referencia sobre digitalización y servicios públicos en plataformas
electrónicas)._