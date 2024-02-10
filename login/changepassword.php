<?php
session_start();
$error = array();
if (isset($_POST['change'])) {
    $old = $_POST['o_password'];
    $new = $_POST['n_password'];
    $c_new = $_POST['c_n_password'];

    echo $new;

    $xml = simplexml_load_file('./users/users.xml');
    $persona = $xml->persona;
    // var_dump($xml);

    for ($i = 0; $i < count($persona); $i++) {
        $nombre = $persona[$i]->nombre;
        if ($_SESSION['username'] == $nombre) {
            // echo $nombre.' '.$cont.' ';
            if ($persona[$i]->contrasena == $old) {
                if ($new == $c_new) {
                    $persona[$i]->contrasena = $new;
                    $xml->asXML('./users/users.xml');
                }
            }
        }
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Trasitional//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
</head>

<body>
    <h1>Change Password</h1>
    <form action="" method="post">
        <p>Old password <input type="password" name="o_password"></p>
        <p>New password <input type="password" name="n_password"></p>
        <p>Confirm new password <input type="password" name="c_n_password"></p>
        <p><input type="submit" name="change" value="change"></p>
    </form>
    <hr />
    <a href="index.php">User Home</a>
</body>

</html>

<!-- $xml = new SimpleXMLElement('users/users.xml', 0, true);
    $xpathC = $xml->xpath('/usuarios/persona/contrasena');
    $xpathN = $xml->xpath('/usuarios/persona/nombre');
    $longitud = count($xml);

    for ($i = 0; $i < $longitud; $i++) {
        if ($_SESSION['username'] == $xpathN[$i]) {
            //Comprobamos que la contraseña introducida '$old' y la contraseña del xml '$xpathC[$i]' son iguales
            if ($old == $xpathC[$i]) {
                //echo $xpathC[$i];
                //Comprobamos que la nueva contraseña y la confirmación coinciden
                if($new == $c_new){
                    //Comprobamos que la nueva contraseña es distinta a la vieja
                    if($old != $new){
                        //$xpathC[$i] = $old = 12345
                        $xpathC[$i] = $new;
                        //$xpathC[$i] = $new = dani
                        $xml->asXML('./users/users.xml');
                    } else {
                        $error[] = 'The new password can not be the same as the old one';
                    }
                } else {
                    $error[] = 'The new password does not match';
                }
            } else {
                //Si las contraseñas no son iguales comprobamos si es por que está en blanco
                if ($old == '') {
                    $error[] = 'The old password can not be blank';
                //O por qué las contraseñas no coinciden
                } else {
                    $error[] = 'The old password is not correct';
                }
            }
        }
    }
    if (count($error) > 0) {
        echo '<ul>';
        foreach ($error as $e) {
            echo '<li>' . $e . '</li>';
        }
        echo '</ul>';
    } -->