<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stardust</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<video id="bkg" src="bkg.mp4" muted loop autoplay></video>
    
<div class="container">
    <div class="titulo"><h1>Stardust</h1></div>
    
    <header>
    <div class="navbar">

        <nav>

            <span class="cat" onclick="buscar('Inicio')">Inicio</span>
            <span class="cat" onclick="buscar('Casos')">Casos</span>
            <span class="cat" onclick="buscar('Pruebas')">Pruebas</span>
            <span class="cat" onclick="buscar('Noticias')">Noticias</span>
            <span class="cat" onclick="buscar('Tienda')">Tienda</span>
            <span class="cat" onclick="buscar('Usuario')">Usuario</span>
            <div class="buscar">
                <input type="text" placeholder="que quieres buscar?">
                <span class="cat" onclick="buscarTema()">Buscar</span>
            </div>
        </nav>
    </div> 
    </header>
    <div class="container-noticias">

    </div>

</div>  



    <!-- <div class="inicio">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum cupiditate quaerat nobis. Delectus illum repellat molestiae, saepe quaerat sapiente incidunt autem, vel porro eos consequatur odit accusantium eius rem libero.
    </div>

    <div class="casos">
        <h3>casos</h3>
    </div>

    <div class="Pruebas">
        <h3>Pruebas</h3>
    </div>

    <div class="Noticias">
        <h3>noticias</h3>
    </div>

    <div class="tienda">
        <h3>market</h3>
    </div>

    <div class="mapa">
        <h3>mapa</h3>
    </div>

    <div class="fin">
        <footer>2023</footer>
    </div> -->
<script src="app.js"></script>
</body>
</html>