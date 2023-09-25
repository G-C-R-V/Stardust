<!DOCTYPE html>
<html>
<head>
    <title>Identificarse</title>
    <?php 
    include("conexion_bd.php");
    include("controlador.php");
    ?>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="POST">
        <label for="username">Usuario o Correo:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Clave Secreta:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input name="btnin" class="btn" type="submit" value="Iniciar Sesión">
    </form>
    <p>¿Eres Nuevo?<a href="registro.php">Regístrate</a></p>
</body>
</html>

