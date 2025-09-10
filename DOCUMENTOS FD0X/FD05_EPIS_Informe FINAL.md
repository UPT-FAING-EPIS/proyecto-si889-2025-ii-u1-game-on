**UNIVERSIDAD PRIVADA DE TACNA**

**FACULTAD DE INGENIERÍA**

**Escuela Profesional de Ingeniería de Sistemas**

**Proyecto “Sistema de recomendaciones de**

**Instalaciones Deportivas con Geolocalización”**

Curso: Patrones de Software

Docente: Mag. Patrick Cuadros Quiroga

Integrantes:


### SEBASTIAN NICOLAS FUENTES AVALOS (2022073902)
### GABRIELA LUZKALID GUTIERREZ MAMANI (2022074263)
### MAYRA FERNANDA CHIRE RAMOS (2021072620)
### CESAR NIKOLAS CAMAC MELENDEZ (2022074262)

**Tacna – Perú**


# Proyecto

# “Sistema de recomendaciones de Instalaciones

# Deportivas con Geolocalización”

```
Presentado por:
```
##### SEBASTIAN NICOLAS FUENTES AVALOS

##### GABRIELA LUZKALID GUTIERREZ MAMANI

##### MAYRA FERNANDA CHIRE RAMOS

##### CESAR NIKOLAS CAMAC MELENDEZ


## ÍNDICE GENERAL

I. Antecedentes

- INTRODUCCIÓN
   - III. Autores II. Título
   - IV. PLANTEAMIENTO DEL PROBLEMA
      - A. Problema
      - B. Justificación
      - C. Alcance
   - III. OBJETIVOS
      - A. GENERAL:
      - B. ESPECÍFICOS:
   - IV. Marco Teórico
   - V. Desarrollo de la Solución
      - A. Análisis de Factibilidad (técnico, económica, operativa, social, legal, ambiental)
      - B. Tecnología de Desarrollo
      - C. Metodología de implementación(Documento de VISIÓN, SRS, SAD)
   - VI. Cronograma
   - VII. Presupuesto
   - VIII. Conclusiones
   - Recomendaciones
   - Bibliografía(REFERENCIAS)
   - Anexos


## INTRODUCCIÓN

GameOn Network, una plataforma digital integral diseñada para transformar el

ecosistema deportivo amateur en Tacna, Perú. El objetivo fundamental de este

proyecto es centralizar la información sobre instalaciones deportivas, optimizar el

proceso de reservas y facilitar la organización de actividades deportivas, conectando

a deportistas amateurs, administradores de espacios y entidades reguladoras a

través de herramientas tecnológicas modernas.

El desarrollo de GameOn Network responde a una problemática real identificada en

la región: la falta de acceso a información actualizada, la carencia de sistemas de

reserva eficientes y la débil organización entre los distintos actores del deporte local.

Para abordar estos retos, la plataforma integra funcionalidades como la

geolocalización, la gestión en línea de instalaciones, la organización de torneos, la

formación de comunidades deportivas y un robusto sistema de análisis y reportes,

todo en un entorno web accesible y seguro.

En su planteamiento, el proyecto incorpora criterios de viabilidad económica,

sostenibilidad y alineamiento con los Objetivos de Desarrollo Sostenible (ODS),

además de cumplir con los marcos regulatorios peruanos en protección de datos

personales y transacciones digitales. GameOn Network se posiciona como una

solución pionera en la digitalización del deporte local, generando valor tanto para los

usuarios finales como para los gestores de instalaciones y autoridades.

A lo largo de este documento se detallan los objetivos, alcance, actores involucrados,

necesidades de los usuarios, características técnicas y funcionales, estándares de

calidad y seguridad, así como los indicadores económicos y legales que sustentan la

factibilidad y el impacto positivo del proyecto. Así, GameOn Network se presenta no

solo como una herramienta práctica, sino como un modelo escalable con potencial

para replicarse en otras regiones y contribuir significativamente al desarrollo

deportivo y social.


```
I. Antecedentes
```
```
Gutierrez Onofrio (2022) desarrolló el estudio titulado Sistema web para
```
mejorar el proceso de reservas de canchas deportivas en la empresa El Encuentro

S.A.C., La Convención 2022. El objetivo fue desarrollar un sistema web para mejorar

el proceso de reservas de canchas deportivas en dicha empresa. La metodología fue

de tipo aplicada, con enfoque cuantitativo y diseño experimental puro, utilizando una

muestra de 30 procesos de reserva distribuidos en un grupo de control y un grupo

experimental; los datos fueron recolectados mediante observación directa e

instrumentos como cronómetros, y analizados con estadística descriptiva e

inferencial (prueba t de Student y U de Mann-Whitney) mediante el software Minitab,

evidenciando que el sistema redujo significativamente el tiempo de registro de

reservas (de 339.7 a 74.3 segundos) y mejoró la percepción de facilidad del proceso

(87% calificó como fácil o muy fácil). Se concluye que la implementación del sistema

web no solo optimizó el tiempo del proceso de reservas, sino que también mejoró

considerablemente la experiencia de los usuarios al facilitar su uso.

```
Henríquez-Miranda et al. (2025) investigó el estado actual de los sistemas de
```
recomendación en el sector inmobiliario, identificando que estos se han consolidado

como herramientas fundamentales para la toma de decisiones en contextos con

sobrecarga informativa. Empleando la metodología PRISMA (Ítems de informe

preferidos para revisiones sistemáticas y metaanálisis), los autores analizaron y

filtraron artículos científicos relevantes, seleccionando finalmente 16 estudios

directamente relacionados con sistemas de recomendación inmobiliaria. Los

resultados revelaron que el filtrado basado en contenido, el filtrado colaborativo, los

sistemas basados en conocimiento y los enfoques híbridos constituyen las

principales técnicas utilizadas en este campo, con el precio, número de habitaciones,

tamaño y ubicación como las características más empleadas en estos sistemas.

Henríquez-Miranda et al. (2025) concluyeron que, a pesar de los avances existentes,

persisten desafíos significativos como el problema del arranque en frío y la

interacción limitada con el usuario, identificando además una tendencia creciente


hacia la implementación de técnicas avanzadas de aprendizaje automático,

particularmente modelos de aprendizaje profundo. Estos hallazgos proporcionan

valiosas perspectivas para el desarrollo de sistemas de recomendación en otros

sectores, como el deportivo, permitiendo comprender las metodologías más efectivas

para mejorar la interacción entre usuarios y servicios digitales en entornos

caracterizados por la abundancia de opciones y variables.

```
El proyecto desarrollado por Díaz Milian (2012) consistió en el desarrollo de un
```
sistema de gestión de reservas para instalaciones deportivas, con el objetivo de

facilitar a los usuarios la consulta de disponibilidad y la realización de reservas desde

dispositivos móviles y aplicaciones web. Utilizando ASP.NET para la aplicación web y

Windows Phone para la aplicación móvil, el sistema implementó un servicio web para

conectar ambas plataformas, permitiendo un acceso eficiente y rápido. Los

resultados mostraron una mejora significativa en la ocupación de las instalaciones

deportivas, ya que el sistema facilitó el proceso de reserva y proporcionó una mayor

comodidad a los usuarios. El proyecto también abrió la posibilidad de futuras

ampliaciones, como la integración de publicidad y la gestión de múltiples complejos

deportivos.

```
Núñez Valdéz,(2012), en su tesis “Sistemas de Recomendación de Contenidos
```
para Libros Inteligentes”, propone una arquitectura para una plataforma de

recomendación de contenidos basada en las acciones y comportamientos de los

usuarios en una comunidad de lectores en la Web. El objetivo principal fue facilitar el

descubrimiento de contenidos de interés mediante recomendaciones automáticas,

reduciendo la sobrecarga de información digital. Utilizando una metodología basada

en la recolección de parámetros implícitos como el tiempo de visualización, visitas

recurrentes y comentarios, el estudio comparó estos datos con valoraciones

explícitas. Entre las conclusiones más relevantes, se destaca que a mayor tiempo de

visualización, mayor es la valoración del contenido, lo que evidencia una relación

directa entre comportamiento e interés. Asimismo, se observó que los contenidos

comentados suelen recibir más comentarios, y que los usuarios solo recomiendan


aquellos que les parecen verdaderamente interesantes. Estos hallazgos refuerzan la

eficacia de sistemas de recomendación que prioricen el análisis de comportamiento

sobre métodos invasivos de retroalimentación.

### III. Autores II. Título

Sistema de recomendaciones de Instalaciones Deportivas con Geolocalización

##### III. AUTORES

##### - SEBASTIAN NICOLAS FUENTES AVALOS (2022073902)

##### - GABRIELA LUZKALID GUTIERREZ MAMANI (2022074263)

##### - MAYRA FERNANDA CHIRE RAMOS (2021072620)

##### - CESAR NIKOLAS CAMAC MELENDEZ (2022074262)

### IV. PLANTEAMIENTO DEL PROBLEMA

#### A. Problema

```
En la región de Tacna se evidencia una problemática significativa
```
```
relacionada con el ecosistema deportivo local, caracterizada
```
```
principalmente por tres factores interrelacionados:
```
```
En primer lugar, existe una marcada deficiencia en la disponibilidad y
```
```
accesibilidad de información actualizada sobre instalaciones deportivas.
```
```
Los deportistas amateur carecen de medios eficientes para conocer la
```
```
ubicación, características, horarios de funcionamiento y servicios que
```
```
ofrecen los diferentes espacios deportivos disponibles en la región.
```
```
En segundo lugar, los sistemas de reserva de estas instalaciones son
```
```
obsoletos o inexistentes, generalmente basados en métodos
```
```
presenciales o telefónicos, sin aprovechamiento de tecnologías
```
```
digitales que podrían optimizar este proceso. Esta situación genera
```

```
incertidumbre, pérdida de tiempo y frecuentemente conduce a la
```
```
subutilización de la infraestructura deportiva existente.
```
```
Se observa una deficiente organización general del ecosistema
```
```
deportivo regional, manifestada en la desconexión entre los tres actores
```
```
principales: los deportistas amateur que buscan espacios para practicar
```
```
sus disciplinas, los administradores o propietarios de instalaciones
```
```
deportivas que ofrecen estos espacios, y las autoridades reguladoras
```
```
encargadas de promover y supervisar la actividad deportiva.
```
```
Esta triple problemática limita significativamente el desarrollo de la
```
```
práctica deportiva en Tacna, reduciendo las oportunidades de
```
```
participación, dificultando la formación de comunidades deportivas
```
```
cohesionadas y obstaculizando el aprovechamiento óptimo de la
```
```
infraestructura existente.
```
#### B. Justificación

```
GameOn Network surge como respuesta ante tres problemáticas
```
```
fundamentales identificadas en el ecosistema deportivo de Tacna:
```
```
Primero, la marcada deficiencia en la disponibilidad y accesibilidad de
```
```
información actualizada sobre instalaciones deportivas genera barreras
```
```
significativas para los deportistas amateur que desean practicar
```
```
actividades físicas. La ausencia de un sistema centralizado que
```
```
proporcione datos actualizados sobre ubicación, características,
```
```
horarios y servicios limita severamente las oportunidades de
```
```
participación deportiva.
```
```
Segundo, los sistemas de reserva actuales, basados principalmente en
```
```
métodos presenciales o telefónicos, resultan ineficientes y
```
```
desactualizados frente a las posibilidades que ofrecen las tecnologías
```
```
digitales contemporáneas. Esta situación no solo genera incertidumbre
```
```
y pérdida de tiempo para los usuarios, sino que también conduce a una
```
```
subutilización significativa de la infraestructura deportiva disponible en
```
```
la región.
```

```
Finalmente, la desconexión entre los tres actores principales del
```
```
ecosistema (deportistas, administradores de instalaciones y autoridades
```
```
reguladoras) obstaculiza la creación de un entorno deportivo dinámico y
```
```
cohesionado. Esta fragmentación dificulta la formación de comunidades
```
```
deportivas sólidas y el desarrollo de una cultura deportiva robusta en la
```
```
región.
```
```
La implementación de GameOn Network transformará radicalmente
```
```
este panorama, digitalizando y optimizando procesos que actualmente
```
```
son manuales e ineficientes. El proyecto posicionará a Tacna como
```
```
referente en innovación deportiva a nivel nacional, mejorando
```
```
significativamente la calidad de vida de sus habitantes al promover
```
```
estilos de vida activos y saludables, alineándose con los Objetivos de
```
```
Desarrollo Sostenible (ODS), particularmente el ODS 3 (Salud y
```
```
Bienestar) y el ODS 9 (Industria, Innovación e Infraestructura).
```
#### C. Alcance

```
El proyecto GameOn Network abarcará el desarrollo de una plataforma
```
```
digital que revolucionará la práctica deportiva amateur en Tacna, con
```
```
las siguientes funcionalidades e inclusiones:
```
```
● Diseño e implementación de un sistema digital de registro y
```
```
categorización de instalaciones deportivas en Tacna que incluya
```
```
información detallada sobre ubicación, servicios, disponibilidad y
```
```
costos.
```
```
● Desarrollo de un mecanismo de reservas en línea que permita a
```
```
los usuarios programar el uso de instalaciones deportivas de
```
```
manera sencilla y en tiempo real.
```
```
● Implementación de funcionalidades de geolocalización e
```
```
integración con Google Maps para facilitar el acceso y la
```
```
planificación logística de los deportistas amateur.
```

```
● Establecimiento de un sistema de perfiles de usuario que permita
```
```
la conexión entre deportistas con intereses similares,
```
```
fomentando la creación de comunidades deportivas.
```
```
● Implementación de un módulo para la organización y gestión de
```
```
torneos y competencias, incluyendo inscripciones, programación
```
```
y seguimiento de resultados.
```
```
● Desarrollo de un modelo de monetización sostenible a través de
```
```
comisiones por reservas y espacios publicitarios que garantice la
```
```
viabilidad económica de la plataforma.
```
**V. OBJETIVOS**

#### A. GENERAL:

```
Desarrollar una plataforma digital que centralice y optimice la
```
```
información sobre instalaciones deportivas en Tacna, facilitando un
```
```
sistema de reservas eficiente y mejorando la organización del
```
```
ecosistema deportivo regional, con el fin de fortalecer la conexión entre
```
```
deportistas amateur, propietarios de instalaciones deportivas y
```
```
autoridades reguladoras.
```
#### B. ESPECÍFICOS:

```
● Diseñar e implementar un sistema digital de registro y
```
```
categorización de instalaciones deportivas en Tacna que incluya
```
```
información detallada sobre ubicación, servicios, disponibilidad y
```
```
costos.
```
```
● Desarrollar un mecanismo de reservas en línea que permita a los
```
```
usuarios programar el uso de instalaciones deportivas de
```
```
manera sencilla y en tiempo real.
```
```
● Crear funcionalidades de geolocalización e integración con
```
```
Google Maps para facilitar el acceso y la planificación logística
```
```
de los deportistas amateur.
```
```
● Establecer un sistema de perfiles de usuario que permita la
```
```
conexión entre deportistas con intereses similares, fomentando
```
```
la creación de comunidades deportivas.
```

```
● Implementar un módulo para la organización, incluyendo
```
```
inscripciones, programación y seguimiento de resultados.
```
```
● Generar un modelo de monetización sostenible a través de
```
```
comisiones por reservas y espacios publicitarios que garantice la
```
```
viabilidad económica de la plataforma.
```
### IV. Marco Teórico

```
A. Sistemas de Información
```
```
Los sistemas de información son conjuntos integrados de componentes
```
```
que recopilan, almacenan, procesan y distribuyen información para
```
```
apoyar la toma de decisiones y el control en una organización (Laudon
```
```
& Laudon, 2016). Están compuestos por hardware, software, datos,
```
```
redes, personas y procedimientos que trabajan coordinadamente.
```
```
B. Sistemas de Recomendación
```
```
Los sistemas de recomendación son herramientas que predicen las
```
```
preferencias de los usuarios basándose en información histórica y
```
```
características de los elementos (Ricci et al., 2015). Existen cuatro tipos
```
```
principales:
```
```
● Filtrado Colaborativo: Basado en usuarios con gustos similares
```
```
● Filtrado por Contenido: Recomienda elementos similares a los
```
```
preferidos
```
```
● Sistemas Híbridos: Combinan múltiples técnicas
```
```
● Basados en Conocimiento: Utilizan conocimiento específico del
```
```
dominio
```
```
Henríquez-Miranda et al. (2025) confirman la efectividad de estos
```
```
sistemas en sectores como el inmobiliario, donde características como
```
```
ubicación, precio y tamaño son variables clave para recomendaciones
```
```
personalizadas.
```
```
C. Geolocalización y Mapas Digitales
```

```
La geolocalización identifica la ubicación geográfica real de objetos
```
```
conectados a Internet (Küpper, 2005). Las APIs como Google Maps
```
```
proporcionan funcionalidades para:
```
```
● Visualización de mapas interactivos
```
```
● Cálculo de distancias y rutas
```
```
● Geocodificación de direcciones
```
```
● Información de puntos de interés
```
D. Sistemas de Reserva Digital

```
Los sistemas digitales de reserva han evolucionado desde métodos
```
```
manuales hacia plataformas integradas. Díaz Milian (2012) demostró
```
```
que estos sistemas mejoran significativamente la eficiencia operativa,
```
```
satisfacción del usuario y ocupación de instalaciones deportivas. Las
```
```
características modernas incluyen disponibilidad en tiempo real,
```
```
interfaces multiplataforma y automatización de procesos.
```
E. Arquitectura de Software

1. Patrón MVC

```
El patrón Modelo-Vista-Controlador separa la aplicación en tres
```
```
componentes:
```
```
● Modelo: Gestiona datos y lógica de negocio
```
```
● Vista: Presenta información al usuario
```
```
● Controlador: Maneja interacciones y coordina componentes
```
2. Servicios Web RESTful

```
Proporcionan comunicación sin estado, interfaz uniforme, escalabilidad
```
```
y separación cliente-servidor para sistemas distribuidos.
```
F. Bases de Datos Relacionales


```
Los RDBMS como MySQL garantizan integridad de datos, consistencia
```
```
transaccional, escalabilidad y seguridad. En sistemas deportivos deben
```
```
gestionar entidades como usuarios, instalaciones, reservas y torneos
```
```
con sus relaciones complejas.
```
G. Experiencia de Usuario (UX)

```
El diseño centrado en el usuario enfatiza interfaces intuitivas, flujos
```
```
simplificados y accesibilidad. Nielsen (2012) identifica cinco factores
```
```
clave: facilidad de aprendizaje, eficiencia, memorabilidad, manejo de
```
```
errores y satisfacción.
```
H. Seguridad y Protección de Datos

```
La Ley de Protección de Datos Personales (Ley N° 29733) establece
```
```
principios de legalidad, consentimiento, finalidad, proporcionalidad,
```
```
calidad y seguridad. Las medidas técnicas incluyen autenticación
```
```
robusta, autorización granular, cifrado de datos y auditoría.
```
I. Ecosistemas Deportivos Digitales

```
Involucran múltiples actores: deportistas amateur, gestores de
```
```
instalaciones, autoridades reguladoras y comunidad deportiva. La
```
```
digitalización aporta transparencia, optimización de recursos, formación
```
```
de comunidades y democratización del acceso al deporte.
```
J. Objetivos de Desarrollo Sostenible

```
El proyecto se alinea con:
```
```
● ODS 3 (Salud y Bienestar): Promoviendo estilos de vida activos
```
```
● ODS 9 (Innovación e Infraestructura): Implementando
```
```
tecnologías digitales
```
```
● ODS 11 (Ciudades Sostenibles): Mejorando la gestión de
```
```
recursos comunitarios
```

**VII. Desarrollo de la Solución**

#### A. Análisis de Factibilidad (técnico, económica, operativa, social, legal, ambiental)

```
En el anexo 01 se presenta el análisis de factibilidad del sistema de
```
```
recomendaciones de Instalaciones Deportivas (GameOn Network).
```
```
Factibilidad Operativa
```
```
El proyecto GameOn Network presenta una alta factibilidad operativa
```
```
debido a que responde directamente a necesidades identificadas en el
```
```
ecosistema deportivo de Tacna. La plataforma ha sido diseñada
```
```
considerando las capacidades técnicas y operativas del equipo de
```
```
desarrollo, así como la infraestructura tecnológica disponible.
```
```
Los usuarios finales (deportistas amateur, administradores de
```
```
instalaciones y autoridades reguladoras) obtendrán beneficios tangibles
```
```
al utilizar el sistema, lo que facilitará su adopción. La interfaz intuitiva y
```
```
las funcionalidades de geolocalización simplificarán la curva de
```
```
aprendizaje para nuevos usuarios.
```
```
El equipo de desarrollo cuenta con las competencias necesarias para
```
```
implementar todas las funcionalidades planificadas, incluyendo el
```
```
sistema de reservas en tiempo real, la integración con Google Maps y
```
```
la gestión de torneos.
```
```
Para garantizar la operatividad continua del sistema, se implementará
```
```
un plan de capacitación para los administradores de instalaciones
```
```
deportivas y se ofrecerá soporte técnico durante las fases iniciales de
```
```
implementación, facilitando así la transición desde los métodos
```
```
tradicionales de reserva hacia el nuevo sistema digital.
```
```
Factibilidad Legal
```
```
La información manejada por la empresa será completamente
```
```
confidencial. Se
```

aplicará la Ley de Protección de Datos Personales en Perú (Ley N.º

29733), que

regula el tratamiento de datos personales, sin importar el soporte en el

que sean

gestionados. Esta ley garantiza los derechos de las personas sobre sus

datos

personales y establece las obligaciones para quienes recolectan,

almacenan o

procesan dicha información.

Factibilidad Social

El proyecto GameOn Network presenta un potencial para transformar el

ecosistema deportivo en Tacna. La plataforma democratiza el acceso a

la información sobre instalaciones deportivas, reduciendo

significativamente las barreras que actualmente limitan la participación

en actividades físicas y recreativas para diversos sectores de la

población.

Al facilitar la conexión entre deportistas amateur con intereses

similares, el sistema promueve la formación de comunidades deportivas

cohesionadas, fortaleciendo el tejido social de la provincia y

fomentando un mayor sentido de pertenencia e integración social. Esto

resulta particularmente valioso en un contexto donde las oportunidades

de interacción social a través del deporte se han visto limitadas por la

falta de información y coordinación.

La organización de torneos y competencias estructuradas a través de la

plataforma contribuye al desarrollo de una cultura deportiva más

robusta en Tacna, proporcionando incentivos para la participación

regular en actividades físicas y, consecuentemente, mejorando

indicadores de salud pública. El acceso simplificado a estas actividades


```
organizadas potencia el impacto social positivo del deporte como
```
#### B. Tecnología de Desarrollo

```
La optimización en el uso de instalaciones deportivas existentes que
```
```
permite el sistema amplía significativamente las oportunidades de
```
```
práctica deportiva para grupos tradicionalmente marginados o con
```
```
acceso limitado, contribuyendo así a la equidad en el aprovechamiento
```
```
de espacios recreativos. Esta democratización del acceso representa
```
```
un avance importante hacia una sociedad más inclusiva en términos
```
```
deportivos.
```
```
Factibilidad Ambiental
```
```
La implementación del sistema web GameOn Network tiene un impacto
```
```
ambiental reducido, pero se han considerado diversos factores
```
```
relacionados con la sostenibilidad y los Objetivos de Desarrollo
```
```
Sostenible (ODS):
```
```
Alineación con ODS 3 (Salud y Bienestar): La plataforma promueve
```
```
estilos de vida activos y saludables al facilitar la práctica deportiva
```
```
regular, contribuyendo directamente a la mejora de la salud física y
```
```
mental de la población.
```
```
Alineación con ODS 9 (Industria, Innovación e Infraestructura): El
```
```
proyecto optimiza el uso de infraestructura deportiva existente mediante
```
```
la digitalización de procesos de reserva y gestión, maximizando el
```
```
aprovechamiento de recursos ya construidos.
```

```
Contribución al ODS 12 (Producción y Consumo Responsables): La
```
```
digitalización de procesos tradicionalmente basados en papel reduce el
```
```
consumo de recursos físicos, promoviendo prácticas de consumo más
```
```
sostenibles.
```
```
Apoyo al ODS 13 (Acción por el Clima): La optimización de rutas y
```
```
desplazamientos mediante el uso de geolocalización puede contribuir a
```
```
la reducción de emisiones asociadas al transporte, apoyando
```
```
indirectamente las acciones contra el cambio climático.
```
**B. Tecnología de Desarrollo**

```
● Servidores: 1 servidor dedicado con Azure App Service (Linux)
```

● Estaciones de Trabajo: 3 computadoras para el equipo de

```
desarrollo con especificaciones adecuadas
```
● Red y Conectividad: Conexión de red LAN y acceso a internet de

```
alta velocidad para desarrollo y despliegue
```
● Windows 10: Para estaciones de trabajo de desarrollo

● Linux para servidor Azure

● PHP versión 8: Lenguaje de programación de código abierto

```
especialmente diseñado para desarrollo web, encargado de la
```
```
lógica de negocio y la interacción con la base de datos
```
● HTML5: Estructura semántica de páginas web

● CSS3: Estilos y presentación visual

● JavaScript: Interactividad del lado del cliente

● Bootstrap: Framework CSS para diseño responsive y

```
componentes UI
```
● PHP versión 8: Desarrollo del lado del servidor

● Patrón MVC: Arquitectura Modelo-Vista-Controlador para

```
separación de responsabilidades
```
● MySQL 8: Sistema de gestión de bases de datos relacional para

```
almacenar y gestionar toda la información de la plataforma
```
● Visual Studio Code: IDE principal para desarrollo

● Git/GitHub: Control de versiones y colaboración

● Docker

● Google Maps API: Integración de mapas y servicios de

```
geolocalización
```
● RESTful APIs: Para comunicación entre componentes del

```
sistema
```
● Google Chrome: Navegador principal de pruebas

● Mozilla Firefox: Navegador secundario para compatibilidad

```
cruzada
```

#### C. Metodología de implementación(Documento de VISIÓN, SRS, SAD)

```
En el anexo 02, anexo 03 y anexo 04 se presenta la metodología de
```
```
implementación del sistema de recomendaciones de Instalaciones
```
```
Deportivas (GameOn Network).
```
### VI. Cronograma

**Fase Actividad Fecha**

```
Inicio
```
```
Fecha Fin Duración
```
**Inicio** Definición del alcance 28/08/2025 24/08/2025 5 días

```
Identificación de actores y casos
de uso
```
```
25/08/2025 29/08/2025 5 días
```
```
Evaluación inicial de riesgos 30/08/2025 02/09/2025 4 días
```
**Elaboración** Diseño de arquitectura 03/09/2025 09/09/2025 7 días

```
Elaboración detallada de casos
de uso
```
```
10/09/2025 16/09/2025 7 días
```
```
Desarrollo de prototipos 17/09/2025 26/09/2025 10 días
```
```
Definición del modelo de datos 27/09/2025 01/10/2025 5 días
```
**Construcción** Implementación de módulo de

```
registro
```
```
02/10/2025 06/10/2025 5 días
```
```
Desarrollo sistema de reservas 07/10/2025 13/10/2025 7 días
```
```
Integración con Google Maps 14/10/2025 18/10/2025 5 días
```
```
Desarrollo sistema de perfiles 19/10/2025 30/10/2025 12 días
```
**Transición** Pruebas de aceptación 31/10/2025 02/11/2025 3 días

```
Corrección de errores 03/11/2025 05/11/2025 3 días
```
```
Corrección de errores 06/11/2025 09/12/2025 2 días
```

### VII. Presupuesto

```
En el anexo 01 se presenta el análisis de factibilidad del sistema de
recomendaciones de Instalaciones Deportivas (GameOn Network).
```
### VIII. Conclusiones

```
El desarrollo de GameOn Network ha demostrado ser una solución
```
```
integral y pertinente para abordar las deficiencias en la gestión del deporte
```
```
amateur en la ciudad de Tacna. A través de la centralización de información
```
```
sobre instalaciones deportivas, la implementación de un sistema de reservas
```
```
eficiente y la integración de herramientas como la geolocalización y el análisis
```
```
de datos, se logra una mejora sustancial en la organización del ecosistema
```
```
deportivo local. La plataforma no solo responde a una necesidad operativa,
```
```
sino que también promueve la participación, la transparencia y la inclusión
```
```
tecnológica en el ámbito deportivo.
```
```
Asimismo, se concluye que el proyecto posee una sólida base técnica y
```
```
económica. El modelo de monetización propuesto, sustentado en comisiones
```
```
por reservas y espacios publicitarios, garantiza su sostenibilidad a largo plazo.
```
```
Además, el cumplimiento con los marcos regulatorios en protección de datos y
```
```
el alineamiento con los Objetivos de Desarrollo Sostenible refuerzan su
```
```
viabilidad legal y su impacto social. Los estudios y antecedentes revisados
```
```
confirman la eficacia de este tipo de soluciones digitales en otros sectores, lo
```

```
que respalda la escalabilidad y replicabilidad de GameOn Network en otras
```
```
regiones del país.
```
```
Finalmente, la incorporación de sistemas de recomendación
```
```
inteligentes, inspirados en tecnologías aplicadas en sectores como el
```
```
inmobiliario o educativo, posiciona a esta plataforma como una herramienta
```
```
pionera en la digitalización del deporte local. Su enfoque centrado en el
```
```
usuario, la adaptabilidad tecnológica y el impacto positivo proyectado en la
```
```
comunidad deportiva hacen de este proyecto una iniciativa valiosa y
```
```
transformadora para la región.
```
### Recomendaciones

```
Se recomienda realizar una implementación piloto de GameOn Network en un
```
entorno controlado dentro de la ciudad de Tacna, que permita evaluar su rendimiento

real, obtener retroalimentación de los usuarios y optimizar la plataforma antes de su

lanzamiento a gran escala. Esta etapa es clave para identificar posibles mejoras

funcionales, validar la experiencia del usuario y asegurar un despliegue exitoso.

```
Asimismo, se sugiere fortalecer el componente de inteligencia artificial del
```
sistema de recomendaciones, incorporando modelos híbridos y algoritmos de

aprendizaje profundo que permitan personalizar la experiencia del usuario, reducir el

tiempo de búsqueda y mejorar la precisión de las sugerencias ofrecidas por la

plataforma. Esta estrategia puede aumentar significativamente la satisfacción y el

compromiso de los usuarios.

```
Es importante establecer convenios y alianzas estratégicas con instituciones
```
públicas, privadas y comunitarias que gestionan instalaciones deportivas, a fin de

asegurar una base de datos actualizada, promover la participación activa y fomentar

el uso constante de la plataforma. Del mismo modo, se debe garantizar el

cumplimiento de la normativa nacional sobre protección de datos personales,

priorizando la seguridad y privacidad de los usuarios.


### Bibliografía(REFERENCIAS)

Núñez Valdéz, E. R. (2012). Sistemas de recomendación de contenidos para libros
inteligentes [Tesis doctoral, Universidad de Oviedo]. Repositorio de la
Universidad de Oviedo. https://digibuo.uniovi.es/dspace/handle/10651/13126
Gutierrez Onofrio, J. M. (2022). Sistema web para mejorar el proceso de reservas de
canchas deportivas en la empresa El Encuentro S.A.C., La Convención 2022
[Tesis de licenciatura, Universidad Privada Líder Peruana]. Repositorio
Institucional ULP.
https://repositorio.ulp.edu.pe/bitstream/handle/ULP/33/INFORME_JOSE_MIG
UEL_empastado.pdf?sequence=3
Henríquez-Miranda, C., Ríos-Pérez, J., & Sanchez-Torres, G. (2025). Recommender
systems in real estate: a systematic review. Bulletin of Electrical Engineering
and Informatics, 14(3), 2156-2165. https://doi.org/10.11591/eei.v14i3.8884
Díaz Milian, E. (2012). _Sistema de gestión de reservas orientado a instalaciones
deportivas_. Universidad de Zaragoza.

### Anexos

Anexo 01 Informe de Factibilidad

Anex0 02 Documento de Visión

Anexo 03 Documento SRS

Anexo 04 Documento SAD


