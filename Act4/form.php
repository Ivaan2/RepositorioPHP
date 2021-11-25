<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<?php
/*function $calcular(){

};*/

$puntuacion = 5;
$operador = 0;
//Consatntes ponderaciones
define("ponderacion1", "1");
define("ponderacion2_FP", "2");
define("ponderacion2_IT", "5");
define("ponderacion2_G", "5");
define("ponderacion2_IS", "8");
define("ponderacion3", "10");
define("ponderacion4", "2");
define("ponderacion5_7", "1");
define("ponderacion5_9", "2");
define("ponderacion5_10", "3");
define("ponderacion6_IT", "3");
define("ponderacion6_IS", "3");
define("ponderacion6_G", "3");


$my_array = [];
foreach($_POST as $name => $value){
    if(isset($name) && !empty($value)){
        $my_array[$name] = $value;
    }
}


function calcular($operador){
    $puntuacion *= $operador;
}


//1
if($my_array['province'] == 'Sevilla'){
    $operador += ponderacion1;
}else{
    $operador -= ponderacion1;
}

//2
$ponderacion = operar_title($my_array['title'], $operador);

//
function operar_title($id, $operador){

    $title = array(
        2 => ponderacion2_FP,
        4 => ponderacion2_IT,
        5 => ponderacion2_G,
        8 => ponderacion2_IS
    );

    $operador += $title[$id];

    return $operador;
}
    

//3

if($my_array['doctor'] == 1){
    $operador += ponderacion3;
}
    
//4
if($my_array['college'] == 2){
    $operador += ponderacion4;
}

//5
if($my_array['cualification'] > 9){
    $operador += ponderacion5_10;
}else if($my_array['cualification'] > 7){
    $operador += ponderacion5_9;
}else if($my_array['cualification'] > 6){
    $operador += ponderacion5_7;
}

//6
$anyos = ((double)strtotime($my_array['fFin'])) - ((double) strtotime($my_array['fInicio']));
if($my_array['title'] == "Ingeniero Técnico" && $anyos < 3){
    $operador += ponderacion6_IT;
}
if($my_array['title'] == "Ingeniero Superior" && $anyos < 5){
    $operador += ponderacion6_IS;
}
if($my_array['title'] == "Grado" && $anyos < 4){
    $operador += ponderacion6_G;
}
$puntuacion *= (1+($operador/100));

echo "La ponderación resultante es del: (1 + ($operador/100))% = <h1 style='color: orange;'>$puntuacion</h1>";

?>
