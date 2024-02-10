<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 5</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="encabezado">
        <header>
            <div class="logo">
                <h1>CSTPV</h1>
            </div>
            <div class="menu">
                <div id="login"><a href="./login/login.php">Iniciar sesión</a></div>
            </div>
        </header>
    </div>

    <div class="desplegables">
        <a href="./index.html">INICIO</a>
        <select name="quienes" id="quienes">
            <option value="quinesSomos" selected>QUIENES SOMOS</option>
            <option value="nuestraHistoria">NUESTRA HISTORIA</option>
        </select>
        <select name="colegiación" id="colegiación">
            <option value="colegiación" selected>COLEGIACIÓN</option>
            <option value="documentación">DOCUMENTACIÓN</option>
            <option value="convenio">CONVENIO</option>
        </select>
        <select value="servicios" id="servicios">
            <option value="servicios">SERVICIOS</option>
            <option value="cursos">CURSOS</option>
            <option value="actividades">ACTIVIDADES</option>
        </select>
        <a href="./contacto.php">CONTACTO</a>
        <input type="search" placeholder="Busqueda">
    </div>

    <div id="encabezado">
    <h1>CONTACTO</h1>
    </div>
    <div id="formulario">

        <div id="titulo">
            <h1>Información de Contacto</h1>
        </div>

        <form id="contactForm" action="mailto:madagascar.cebanc@gmail.com?subject=contacto_RestSoft" method="post"
            enctype="text/plain">
            <label for="nombre">Nombre:</label>

            <input type="text" id="nombre" required><br><br>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" required><br><br>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" required><br><br>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" required><br><br>

            <label for="comentario">Danos su opinion</label><br>
            <textarea cols="30" rows="10" id="comentario">...</textarea><br><br>

            <!--Aqui creamos el boton para enviar el formulario-->
            <input type="submit" value="Enviar">

        </form>
    </div>
</body>

</html>