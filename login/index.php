<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <div class="wrapper">
        <form action="">
            <h1>Acceso</h1>
            <div class="input-box">
                <input type="text" placeholder="Usuario" required>
                <div class="icono"><i class='bx bx-show-alt'></i></i></div>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Contraseña" required>
                <div class="icono2"><i class='bx bx-fingerprint'></i></div>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Recuerdame</label>
                <a href="#">Olvido su contraseña?</a>
            </div>
            
            <button type="submit" class="btn">Login</button>
            
            <div class="register-link">
                <p>No esta registrado? <a href="#">Registrarse</a></p>
            </div>

        </form>
        

    </div>
</body>
</html>