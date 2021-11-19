<?php
    /*
        1. Conectarme a la base de datos
        2. Construir un DFELETE.....
        3. Ejecutar la consulta
        4. Cerrar conexión
    */
    $identificador = $_REQUEST["id"]; // Ejemplo: delete.php?id=3

    $mysqli = new mysqli("localhost", "root", "", "pagina");
    $sql = "DELETE FROM productos WHERE id = $identificador";
    $mysqli->query($sql);
    $mysqli->close();
    
    // Redirecciona a otro sitio
    header("location: productos.php");
?>