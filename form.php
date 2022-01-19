<?php

use function PHPSTORM_META\sql_injection_subst;

define("INSERT", "INSERT INTO alumnos values('$nombre', '$apellidos', '$estudios', '$dni', '$nota');");

$my_array = [];
foreach($_POST as $name => $value){
    if(isset($name) && !empty($value)){
        $my_array[$name] = $value;
    }
}

$servidor = "localhost";
$databse = "testingPhp";
$user = "root";
$pwd = "";

$con = mysqli_connect($servidor, $databse, $user, $pwd);

$con -> autocommit(FALSE);

if(!$con) die ("La conexión ha fallado. " . mysqli_connect_error());

echo "Conexión a la base de datos realizada con éxito";

$sql = INSERT;

if(mysqli_query($con, $sql)){
    $mysqli->commit();
    echo 'Datos insertados con éxito';
}
else{
    echo 'Error'.$sql.'</br>'.mysqli_error($con);
}


mysqli_close($con);
echo 'Conexión finalizada.';
?>