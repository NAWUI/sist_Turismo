# Jornadas Turísticas - Sistema de Administración de Eventos

1. [Introducción](#introducción)
2. [Instalación](#instalación)
    1. [Requisitos Previos](#requisitos-previos)
    2. [Pasos de Instalación](#pasos-de-instalación)
3. [Elementos Utilizados](#elementos-utilizados)
    1. [Frontend](#frontend)
    2. [Librerías y Frameworks](#librerías-y-frameworks)
    3. [Backend](#backend)
4. [Funcionamiento](#funcionamiento)
    1. [Etapa 1: Login](#etapa-1-login)
    2. [Etapa 2: Carga de Alumnos y Profesores](#etapa-2-carga-de-alumnos-y-profesores)
    3. [Etapa 3: Asignación de Mesas y Cronograma](#etapa-3-asignación-de-mesas-y-cronograma)
    4. [Etapa 4: Acreditación y Calificación](#etapa-4-acreditación-y-calificación)
5. [A futuro](#a-futuro)
6. [Contribuciones](#contribuciones)
7. [Licencia](#licencia)

## Introducción

¡Bienvenido al repositorio del Sistema de Administración de Jornadas Turísticas! Este sistema web facilita la gestión y organización de eventos de jornadas turísticas, proporcionando una plataforma integral para las distintas etapas del proceso.

## Instalación

### Requisitos Previos
- Servidor web (por ejemplo, Apache)
- Servidor de base de datos (por ejemplo, MySQL)
- PHP (versión 7 o superior)

### Pasos de Instalación
1. Clona el repositorio: `git clone https://github.com/tuusuario/jornadas-turisticas.git`
2. Configura la conexión a la base de datos en el archivo `connection.php`.
3. Importa la estructura de la base de datos desde el archivo `sist_turismo(1).sql`.
4. Coloca los archivos en el directorio de tu servidor web.

## Elementos Utilizados

### Frontend
- **HTML**: Estructura básica de las páginas y formularios.
- **CSS**: Estilos para mejorar la presentación y la interfaz de usuario.
- **JavaScript (JS)**: Funcionalidades interactivas para una experiencia de usuario mejorada.
- **Bootstrap**: Framework de diseño que agiliza el desarrollo del frontend.

### Librerías y Frameworks
- **jQuery**: Biblioteca de JavaScript para simplificar la manipulación del DOM.
- **SweetAlert**: Biblioteca para crear alertas personalizadas de forma elegante.

### Backend
- **PHP**: Lenguaje de programación del lado del servidor.
- **SQL**: Lenguaje para la gestión y manipulación de bases de datos.

## Funcionamiento

### Etapa 1: Login
- Accede al sistema mediante un proceso seguro de inicio de sesión.

### Etapa 2: Carga de Alumnos y Profesores
- Registra a los participantes del evento, incluyendo alumnos y profesores.
- Permite la inscripción de proyectos mediante el formulario "Carga de Datos".
- Asigna evaluadores y asistentes a los proyectos inscritos.

### Etapa 3: Asignación de Mesas y Cronograma
- En el día de las jornadas, asigna mesas a los grupos en distintas regiones.
- Establece un cronograma para los microemprendimientos.
- Utiliza una barra de búsqueda para localizar información sobre alumnos, evaluadores y proyectos.

### Etapa 4: Acreditación y Calificación
- Los evaluadores recorren, anotan y califican los proyectos.
- Calcula las notas finales a partir de las calificaciones individuales.
- Permite comentarios en vivo de otros alumnos.
- Muestra en el mapa las mesas con colores que indican su estado (sin calificar, en proceso y finalizado).
- Ofrece un apartado específico para emprendimientos.
- Incluye un apartado de cronogramas para facilitar la gestión temporal del evento.

Este sistema proporciona una experiencia integrada y eficiente para la administración de eventos de jornadas turísticas. Si tienes alguna pregunta o sugerencia, ¡no dudes en compartirla!

## A Futuro

### 1. Planillas de Micro-emprendimientos
- La función de micro-emprendimientos en el sistema no está vinculada a las planillas utilizadas por los chicos de turismo durante el día de las jornadas. Será necesario rediseñar las planillas proporcionadas y llevar a cabo su integración en el sistema.

### 2. Implementación del Cronograma (Vinculado a los Micro-emprendimientos)
- Durante las jornadas turísticas, los stands mostrarán sus proyectos a los estudiantes de 7° de turismo en horarios específicos. Se asignará a cada localidad un horario para presentar su micro-emprendimiento. Se prevé la implementación de esta funcionalidad para organizar de manera eficiente las presentaciones.

### 3. Historial de Movimientos
- Se requiere la implementación de un historial de movimientos que registre las modificaciones realizadas dentro del sistema. Este historial estará disponible para su visualización por parte de todos los usuarios, proporcionando una trazabilidad completa de las acciones realizadas.

### 4. Agregar Secciones en el Mapa
- El mapa actualmente está limitado a los stands predefinidos. En caso de ser necesario agregar un salón o un nuevo stand, el sistema deberá ser capaz de cargar estas nuevas secciones de manera dinámica.

### 5. Recuperación de Contraseña
- Se deberá implementar un mecanismo de recuperación de contraseña para los usuarios. Este mecanismo podría permitir la recuperación a través de Gmail u otros métodos convenientes elegidos por los usuarios.

### 6. Integración de Links
- El sistema deberá tener acceso a los documentos anexados, como el Manual de Usuario y las Condiciones y Términos de Uso. Se planea integrar enlaces que faciliten el acceso directo a esta documentación desde el sistema.

Este conjunto de mejoras y funcionalidades adicionales está planificado para ser implementado en futuras versiones del sistema, mejorando su capacidad y adaptándolo a las necesidades cambiantes del evento de jornadas turísticas.


## Contribuciones
¡Agradecemos cualquier contribución para mejorar y ampliar las funcionalidades de este sistema! Si deseas colaborar, consulta nuestras pautas de contribución en el archivo CONTRIBUTING.md.

## Licencia
Este proyecto está bajo la Licencia MIT. Consulta el archivo LICENSE.md para obtener más información sobre los términos de la licencia.

Esperamos que este sistema sea de gran utilidad para la organización de tus jornadas turísticas. ¡Si tienes alguna pregunta o sugerencia, no dudes en compartirla!
