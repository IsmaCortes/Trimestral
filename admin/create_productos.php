<?php
    // recojo los valores que el usuario me envia
    $nombre = $_REQUEST["nombre"];
    $texto = $_REQUEST["texto"];
    $precio = $_REQUEST["precio"];
    $nombreimg = $_REQUEST["nombreimg"];
    /*
        1. Conectarme a la base de datos
        2. Construir un INSERT INTO.....
        3. Ejecutar la consulta
        4. Cerrar conexión
    */
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dir_subida  = "../images/";
        // Esto me lo da el formulario al subir el archivo. fileToUpload es el name del input.
        $fichero_subido = $dir_subida . basename($_FILES["nombreimg"]["name"]); 
 
        if (move_uploaded_file($_FILES["nombreimg"]["tmp_name"], $fichero_subido)) {
            // Mensaje de confirmación donde todo ha ido bien
            echo '<p>Se subió perfectamente a la ruta: '. $fichero_subido .'</p>';
            // Muestra la imagen que acaba de ser subida
            echo '<p><img width="500" src="' . $fichero_subido . '"></p>';
        } else {
            // Mensaje de error: ¿Límite de tamaño? ¿Ataque?
            echo '<p>¡Ups! Algo ha pasado.</p>';
        }
    }
    $mysqli = new mysqli("localhost", "root", "", "pagina");
    $sql = "insert into productos (nombre, texto, precio, nombreimg) values ('$nombre', '$texto', '$precio', '$fichero_subido')";
    $mysqli->query($sql);
    $mysqli->close();

    // Redirecciona a otro sitio
    header("location: productos.php");

?>