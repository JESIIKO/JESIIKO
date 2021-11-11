<?php  

    $nombre = $_GET["nombre"];
    echo "<br><br> El nombre del cliente es: <br>" . $nombre;

    $edad = $_GET["edad"];
    echo "<br><br> La edad del cliente es: <br>" . $edad;

    $correo = $_GET["correo"];
    echo "<br><br> El correo del cliente es: <br>" . $correo;

    $fecha_nacimineto = $_GET["fecha_nacimiento"];
    echo "<br><br> La fecha de nacimiento del cliente : <br>" . $fecha_nacimineto;

    $sexo = $_GET["sexo"];
    echo "<br><br> El sexo del cliente es: <br>" . $sexo;

    $areas = $_GET["areas"];
    echo "Areas de preferencia: <br><br>";
    for ($i=0; $i < count($areas); $i++) { 
        echo "$areas[$i]" . "<br>";

    //Jesús Ojeda Valdez//

    }
    
?>