<?php
// Se inicia la sesión y se comprueba si el usuario está autenticado
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /forma-t/public/pages/login.php");
    exit;
}

// Se incluye la clase Course
require_once '../models/Course.php';

// Se comprueba si se envió el formulario de creación de curso
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseName = trim($_POST['course_name']);
    $description = trim($_POST['description']);
    $category = trim($_POST['category']);
    $status = trim($_POST['status']);
    $content = trim($_POST['content']);
    $videoLink = trim($_POST['video_link']);

    // Se comprueba que los campos no están vacíos
    if (empty($courseName) || empty($description) || empty($category) || 
        empty($status) || empty($content) || empty($videoLink)) {
        die("Todos los campos son obligatorios.");
    }

    // Se determina la imagen
    if (stripos($courseName, 'guitarra') !== false) {
        $image = "../resources/img/default.png";
    } elseif (stripos($courseName, 'piano') !== false) {
        $image = "../resources/img/img5.png";
    } else {
        $image = $_POST['image'];
    }

    // Se crea una instancia de la clase Course
    $course = new Course();

     // Se crea el curso utilizando la función createCourse de la clase Course
     $courseIsCreated = $course->createCourse($courseName, $description, $category, $image, $status, $content, $videoLink);

        // Dependiendo del resultado, se redirige al administrador
        if ($courseIsCreated) {
        header("Location: /forma-t/public/pages/admin.php?success=course-created&tab=course");
        } else {
        header("Location: /forma-t/public/pages/admin.php?error=course-creation-failed&tab=course");
        }
        exit;
}

?>



