<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Formulario con Get
        $user = filter_input(INPUT_GET, "user");
        $password = filter_input(INPUT_GET, "password");
        echo 'Get</br>';
        echo 'Hola '.$user.'. Su contraseña es: '.$password;
        ?>
    </body>
</html>
