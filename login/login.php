<?php
$errores = array();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo $username . ' ' . $password;

    $xml = new DOMDocument;
    $xml->load('./users/users.xml');

    $xpath = new DOMXPath($xml);
    $nombreNode = $xpath->evaluate('/usuarios/persona/nombre')->item(0);
    $nombreNodes = $xpath->evaluate('/usuarios/persona/nombre');
    $contrasenaNode = $xpath->evaluate('/usuarios/persona/contrasena')->item(0);
    $contrasenaNodes = $xpath->evaluate('/usuarios/persona/contrasena');
    $longitud = $nombreNodes->length;

    for ($i = 0; $i < $longitud; $i++) {
        $nombreNode = $nombreNodes->item($i);

        if ($username == $nombreNode->textContent) {
            $contrasenaNode = $contrasenaNodes->item($i);

            if($password == $contrasenaNode->textContent){
                session_start();
                $_SESSION['username'] = $username;
                header('Location: ./index.php');
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>LOG-IN</h1>
    <form action="" method="post">
        <p>Nombre de usuario <input type="text" name="username" id="username"></p>
        <p>Password <input type="password" name="password" id="password"></p>
        <p>
            <?php
            if (count($errores) > 0) {
                echo '<ul>';
                foreach ($errores as $error) {
                    echo '<li>' . $error . '</li>';
                }
                echo '</u>';
            }
            ?>
        </p>
        <p><input type="submit" name="login" value="login"></p>
        <hr>
        <a href="../index.html">Volver</a>
    </form>
</body>

</html>