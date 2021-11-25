<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
         * Realice un formulario con GET y otro con POST y compare el resultado
         * observando la URL. Adjunte capturas que muestren ambas URLs.
         * El formulario es de contenido y diseño libre.
         */
       //Formulario con Post
        $user = filter_input(INPUT_POST, "user");
        $password = filter_input(INPUT_POST, "password");
        echo 'Post</br>';
        echo 'Hola '.$user.'. Su contraseña es: '.$password;
        
       
        
        
        ?>
    </body>
</html>
