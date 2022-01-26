<html>
    <head lang="es">
        <meta charset="utf-8">
        <title>Listado de Alumnos</title>
        <link rel="stylesheet" href="alumnos.css">
    </head>
    <body style="background-color: darkslategrey;">
        <h1 id="titulo">Alumnos</h1>
        
        <?php
            $server="localhost";
            $user="user_123456789";
            $pwd="password_123456789";
            $database="testingphp";
            
            $con= mysqli_connect($server, $user, $pwd, $database);
            if(!$con){
                die("La conexión falló: " . mysqli_connect_error());
            }else{
                $select = "SELECT * FROM alumno";
                $alumno = $con->query($select);
                $num_reg = $alumno->num_rows;
                
                echo "Número de alumnos: " . $num_reg . "</br>";
                echo "<ul>";
                while($num_reg = $alumno->fetch_array()){
                    echo  "<li> Id: " . $num_reg[0] . " Nombre: " . $num_reg[1] . " Apellidos: " . $num_reg[2] . " Estudios: " . $num_reg[3] . " Nota: " . $num_reg[4] . "</li>";
                }
                echo "<ul/>";
                    
                $alumno->free();
            }
        ?>
        
        <a href="index.php">Volver a la página principal</a>
    </body>
</html>