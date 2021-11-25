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
        //Formulario POST 
        $usuario = filter_input(INPUT_POST, "user");
        $correo = filter_input(INPUT_POST, "correo");
        $pw = filter_input(INPUT_POST, "password");
        $error = false;
        
        //Comprobamos que los datos del formulario estén rellenos
        if(!(isset($usuario)) || $usuario == ''){
            echo 'Usuario introducido incorrecto';
            $error = true;
        }
        if(!(isset($correo)) || $correo == ''){
            echo 'Correo introducido incorrecto';
            $error = true;
        }
        if(strlen($pw)<8 ){
            echo 'La contraseña introducida debe tener al menos 8 caracteres';
            $error = true;
        }
        if(!$error){
            echo 'Enhorabuena, ha accedido correctamente</br>Nombre de empresa: '.$usuario.'</br>Correo electrónico: '.$correo;
        }
        
        ?>
    </body>
</html>
