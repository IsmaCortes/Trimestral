<?php
    $id = $_REQUEST["id"];
    $nombre = $_REQUEST["nombre"];
    $texto = $_REQUEST["texto"];
    $precio = $_REQUEST["precio"];
    $nombreimg = $_REQUEST["nombreimg"];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dir_subida  = "../images/";
        // Esto me lo da el formulario al subir el archivo. fileToUpload es el name del input.
        $fichero_subido = $dir_subida . basename($_FILES["nombreimg"]["name"]); 
    }
     
    if (move_uploaded_file($_FILES["nombreimg"]["tmp_name"], $fichero_subido)) {
        // Mensaje de confirmación donde todo ha ido bien
        echo '<p>Se subió perfectamente a la ruta: '. $fichero_subido .'</p>';
        // Muestra la imagen que acaba de ser subida
        echo '<p><img width="500" src="' . $fichero_subido . '"></p>';
    } else {
        // Mensaje de error: ¿Límite de tamaño? ¿Ataque?
        echo '<p>¡Ups! Algo ha pasado.</p>';
    }
    $mysqli = new mysqli("localhost", "root", "", "pagina");

    $sql = "UPDATE productos SET nombreimg='$fichero_subido', nombre='$nombre', texto='$texto', precio=$precio WHERE id = $id;";
    echo $sql;
    $mysqli->query($sql);
    $mysqli->close();

    header("location: productos.php");
?>