<?php
if (!empty($_POST["btnin"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo "Datos Incorrectos";
    } else {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Debes establecer la conexión a la base de datos aquí
        $servername = "localhost";
        $db_username = "";
        $db_password = "";
        $database = "login";
        
        $conexion = new mysqli($servername, $db_username, $db_password, $database);

        if ($conexion->connect_error) {
            die("Error de conexión a la base de datos: " . $conexion->connect_error);
        }

        // Escapa los valores para evitar la inyección SQL (mejor aún, utiliza sentencias preparadas)
        $username = $conexion->real_escape_string($username);
        $password = $conexion->real_escape_string($password);
        
        // Consulta SQL corregida
        $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
        
        // Ejecuta la consulta SQL
        $resultado = $conexion->query($sql);
        
        if ($resultado) {
            // La consulta se ejecutó correctamente
            if ($resultado->num_rows > 0) {
                // Usuario válido, aquí puedes redirigirlo o realizar otras acciones
                echo "Inicio de sesión exitoso.";
            } else {
                echo "Usuario o contraseña incorrectos.";
            }
        } else {
            // La consulta falló
            echo "Error en la consulta: " . $conexion->error;
        }

        // Cierra la conexión a la base de datos
        $conexion->close();
    }
}
?>
