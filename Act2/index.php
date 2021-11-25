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
        $numero1 = filter_input(INPUT_POST, "n1");
        $numero2 = filter_input(INPUT_POST, "n2");
        $operador = filter_input(INPUT_POST, "operador");
        $resultado;
        
        switch ($operador){
            case '+':
                $resultado = $numero1 + $numero2;
                break;
            case '-':
                $resultado = $numero1 - $numero2;
                break;
            case '*';
                $resultado = $numero1 * $numero2;
                break;
            case '/':
                if($numero2 == 0){
                    $resultado = 'Syntax Error';
                }else{
                    $resultado = $numero1/$numero2;
                break;
                }
            default :
                echo '(+)-Suma (-)-Resta (*)-Multiplicación (/)-División';
                break;
        }
           
        if($numero2 == 0 && $operador == '/'){
            echo '</br>No se puede dividir entre 0';
        }else{
            echo $numero1.' '.$operador.' '.$numero2.' = '.round($resultado, 2);
        }
        ?>
    </body>
</html>
