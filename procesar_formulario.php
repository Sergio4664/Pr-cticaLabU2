<?php
// Recoger datos del formulario
$nombre = htmlspecialchars($_POST['nombre']);
$domicilio = htmlspecialchars($_POST['domicilio']);
$edad = htmlspecialchars($_POST['edad']);
$correo = htmlspecialchars($_POST['correo']);

// Aquí podrías procesar los datos, por ejemplo, guardarlos en una base de datos o enviar un correo

// Después de procesar los datos, redirigimos al usuario a la página de agradecimiento
header('Location: gracias.php');
exit();
?>
