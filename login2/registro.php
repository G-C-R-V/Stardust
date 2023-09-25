<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h2>Registro</h2>
    <form action="registro.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="confirm_password">Confirmar Contraseña:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br>
        <input type="submit" value="Registrar">
    </form>
    <p>¿Ya tienes una cuenta? <a href="index.php">Iniciar Sesión</a></p>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Verificar si las contraseñas coinciden
    if ($password === $confirm_password) {
        // Las contraseñas coinciden, puedes continuar con el registro
        // ... Resto del código para registrar al usuario en la base de datos ...
    } else {
        // Las contraseñas no coinciden, muestra un mensaje de error
        $error = "Las contraseñas no coinciden. Inténtalo de nuevo.";
    }
}
?>
