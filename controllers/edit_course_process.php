<?php
// Se inicia la sesión y se comprueba si el usuario está autenticado
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /forma-t/public/pages/login.php");
    exit;
}

// Se incluye la clase Course
require_once '../models/Course.php';

// Se comprueba si se recibe un ID de curso
if (isset($_POST['id'])) {
    $courseId = $_POST['id'];
    $courseName = $_POST['course_name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $status = $_POST['status'];
    $content = $_POST['content'];
    $videoLink = $_POST['video_link'];

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

    // Se edita el curso utilizando la función editCourse de la clase Course
    $courseIsEdited = $course->editCourse($courseName, $description, $category, $image, $status, $content, $videoLink, $courseId);
    
    // Se ejecuta la actualización
    if ($courseIsEdited) {
        header("Location: /forma-t/public/pages/admin.php?success=course-edited&tab=course");
    } else {
        header("Location: /forma-t/public/pages/admin.php?error=course-edition-failed&tab=course");
        exit;
    }
}


?>




