<html>
    <head lang="es">
        <meta charset="utf-8">
        <title>Conexion a PhpMyAdmin</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body style="background-color: darkslategrey;">
        <h1 id="titulo">Formulario</h1>

        <form style="background-color: rgba(98, 138, 146, 0.699); margin-left: 350px; margin-right: 350px;" action="index.php" method="POST">
            <div style="margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;">
                <p>Nombre: <input type="text" name="nombre"/></p>
                <p>Apellidos: <input type="text" name="apellidos"/></p>
                <p>Estudios 
                    <select name="estudios">
                        <option value="Desarrollo de Aplicaciones Multiplataforma">Desarrollo de Aplicaciones Multiplataforma</option>
                        <option value="Desarrollo de Aplicaciones Web">Desarrollo de Aplicaciones Web</option>
                        <option value="Administración de Sistemas y Redes">Administración de Sistemas y Redes</option>
                    </select>    
                </p>
                <p>Nota: <input type="number" step="0.01" name="nota"/></p>
                <input type="submit" name="button1"/>
                <input style="margin-bottom: 10px;" type="reset" name="button2">
                <a href="listaAlumnos.php">Enlace a otra p�gina</a>
            </div>
            
        </form>
        

        <?php
            if(isset($_POST['button1'])){
                $nombre= filter_input(INPUT_POST, "nombre");
                $apellidos= filter_input(INPUT_POST, "apellidos");
                $estudios= filter_input(INPUT_POST, "estudios");
                $nota= filter_input(INPUT_POST, "nota");

                $server="localhost";
                $user="user_123456789";
                $pwd="password_123456789";
                $database="testingphp";

                if($nota < 0 || $nota > 10){
                    echo "Introduzca una nota comprendida entre 0 y 10";
                } else {
                    $con= mysqli_connect($server, $user, $pwd, $database);
                
                    if(!$con){
                        die("Error en la base de datos: " . mysqli_connect_error());
                    }
                    else{
                        echo("Conexión realizada con éxito </br>");

                        $sql = "INSERT INTO alumno (nombre, apellidos, estudios, nota) values('$nombre', '$apellidos', '$estudios', '$nota');";
                    
                        if(mysqli_query($con, $sql)){
                            echo "Datos insertados correctamente";
                        }else{
                            echo "Error: " . mysqli_error($con);
                        }
                            mysqli_close($con);
                    }
                }    
            }
        ?>

    </body>
</html>