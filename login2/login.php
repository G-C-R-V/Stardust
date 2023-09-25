<?php
session_start();

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Conectar a la base de datos (debes configurar los detalles de conexión)
    $conn = new mysqli("localhost", "username", "password", "login");

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Consulta para obtener el usuario por nombre de usuario
    $query = "SELECT * FROM usuarios WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // El usuario existe, verificar la contraseña
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            // Contraseña válida, iniciar sesión
            $_SESSION["username"] = $username;
            header("Location: pagina_principal.php");
            exit();
        } else {
            $error = "Credenciales incorrectas. Inténtalo de nuevo.";
        }
    } else {
        $error = "El usuario no existe. Regístrate primero.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Error!</title>
</head>
<body>
    <h2>Error de Autenticación</h2>
    <?php
    if (isset($error)) {
        echo "<p>$error</p>";
    }
    ?>
    <p><a href="index.php">Volver al inicio de sesión</a></p>
</body>
</html>
