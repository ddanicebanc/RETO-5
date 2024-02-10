<?php
$errors = array();
$user_e = false;
if (isset($_POST['login'])) {
    //Recuperamos los datos del formulario
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $c_contraseña = $_POST['c_contraseña'];

    //Abrimos el documento xml
    $xml = simplexml_load_file('./users/users.xml');

    //Creamos los elmentos en los usuarios
    $child = $xml->addChild('persona');
    $nom = $child->addChild('nombre', $username);
    $pass = $child->addChild('contrasena', $contraseña);

    //Guardamos el xml modificado con los nuevos elementos
    $xml->asXML("./users/users.xml");
    
    header('Location: ../index.html');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Trasitional//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <h1>Register</h1>
    <form action="" method="post">
        <fieldset>
            <legend>Datos de usuario</legend>
            <p>Username <input type="text" name="username" size="20"></p>
            <p>Email <input type="text" name="email" size="20"></p>
            <p>Paswword <input type="password" name="contraseña" size="20"></p>
            <p>Confirm Password <input type="password" name="c_contraseña" size="20"></p>
            <p><input type="submit" name="login" value="login"></p>
        </fieldset>
    </form>
</body>

</html>

<!-- for ($i = 0; $i < $longitud; $i++) {
        if ($username == $nombreNode->textContent and $user_e == false) {
            $user_e = true;
        }
    }
    //Tratamiento de errores
    if (!$user_e) {
        $errors[] = 'El usuario ya está registrado';
    }
    if ($username == '') {
        $errors[] = 'El usuario no puede estar vacío';
    }
    if ($email == '') {
        $errors[] = 'El correo no puede estar vacío';
    }
    if ($contraseña == '') {
        $errors[] = 'La contraseña no puede estar vacía';
    }
    if ($contraseña != $c_contraseña) {
        $errors[] = 'Las contraseñas no coinciden';
    }
    //Ejecutamos la escritura de los datos en el xml
    if (count($errors) == 0) {
        $nom = $_REQUEST['nombre'];
        $pass = $_REQUEST['password'];
        // Open and parse the XML file
        $xml = simplexml_load_file('users.xml');

        // Create a child in the first topic node

        $child = $xml->addChild('user');
        $nom = $child->addChild('nombre', $nom);
        $pass = $child->addChild('password', $pass);

        // Store new XML code in questions.xml
        $xml->asXML("users.xml");
        // Load the XML file
        $xml = new DOMDocument;
        $xml->load('./users/users.xml');

        // Create a new DOMXPath object
        $xpath = new DOMXPath($xml);

        // Use XPath to navigate to the 'nombre' node
        $nombreNode = $xpath->evaluate('/usuarios/persona/nombre')->item(0);
        $nombreNodes = $xpath->evaluate('/usuarios/persona/nombre');
        $longitud = $nombreNodes->length;

        for ($i = 0; $i < $longitud; $i++) {
            // Check if the node exists before attempting to display its content
            if ($nombreNode !== null) {
                $nombreNode = $nombreNodes->item($i);

                // Get the content of the 'nombre' node
                $nombreContent = $nombreNode->textContent;

                // Display the content on a blank screen
                echo $nombreContent;
            } else {
                echo 'The "nombre" node was not found.';
            }
        }
    } -->