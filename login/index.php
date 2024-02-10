<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>WELCOME, <?php echo $_SESSION['username'];?></h1>
    <div>
        <h2>CONTENIDO</h2>
        <hr />
        <a href="./logout.php">Cerrar sesión</a>
        -
        <a href="./changepassword.php">Cambiar contraseña</a>
    </div>
</body>
</html>