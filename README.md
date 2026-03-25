# 🎵 Forma-T: Plataforma de Formación Musical

## 📋 Descripción del Proyecto 
Forma-T es una aplicación web diseñada para el aprendizaje musical autodidacta a través de vídeos de YouTube. La plataforma permite a los usuarios registrarse, visualizar el catálogo de cursos y solicitar acceso a los contenidos de manera interactiva.

> [!NOTE]
> **Proyecto Final del Ciclo Superior de Desarrollo de Aplicaciones Web**

## ✨ Características Principales
- 🔐 **Sistema de Autenticación**: Roles diferenciados para administradores y estudiantes.
- 📚 **Catálogo de Cursos Musicales**: Iniciación, Música y movimiento, Lenguaje Musical, Historia, Piano Nivel I y II.
- 🎓 **Matriculación**: Sistema integrado para solicitar y gestionar el acceso a los cursos.
- 🎞️ **Contenido Multimedia**: Visualización de videos e imágenes.
- 👥 **Gestión Completa**: Administración centralizada de cursos y usuarios.

## 🛠️ Tecnologías Utilizadas
- **Lenguaje Principal**: PHP 7.4 o superior
- **Base de Datos**: MySQL 5.7 o superior
- **Entorno Local**: XAMPP (Apache + MySQL + PHP)

## 📁 Estructura del Proyecto
```text
forma-t/
├── controllers/     # Controladores de la aplicación
├── functions/       # Funciones auxiliares
├── models/          # Modelos de datos
├── public/          # Archivos públicos y recursos
└── format_db.sql    # Estructura de la base de datos
```

## 🗄️ Base de Datos
La aplicación utiliza MySQL con las siguientes tablas principales:
- `users`: Gestión de usuarios
- `courses`: Catálogo de cursos
- `course_requests`: Solicitudes de matrícula

## 👥 Usuarios de Prueba
La aplicación incluye usuarios configurados para facilitar el acceso inicial:

### Administrador
- **Email**: admin@ejemplo.com
- **Contraseña**: 123456
- **Rol**: Admin (Acceso completo a gestión de cursos y usuarios)

### Estudiantes
- **Usuario 1**: rosa@ejemplo.com (Contraseña: 123456)
- **Usuario 2**: elena@ejemplo.com (Contraseña: 123456)

## 🚀 Instalación y Ejecución en Local (XAMPP)

### 1. Preparar el Entorno
1. Instalar XAMPP desde [Apache Friends](https://www.apachefriends.org/).
2. Iniciar los servicios de **Apache** y **MySQL** desde el Panel de Control de XAMPP.

### 2. Desplegar la Aplicación
1. Clonar este repositorio en la carpeta `htdocs` de XAMPP (por ejemplo, `C:\xampp\htdocs\forma-t`).
2. Abrir phpMyAdmin en el navegador: [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
3. Crear una nueva base de datos llamada `format_db`.
4. Importar el archivo `format_db.sql` incluido en el proyecto a la nueva base de datos.

### 3. Acceder a la Web
Ingresar a la aplicación a través de tu navegador en: [http://localhost/forma-t](http://localhost/forma-t)

---
**Desarrollado por**: Estefanía Canales
**Fecha**: 14/04/2025
