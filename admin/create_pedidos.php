<?php
    // recojo los valores que el usuario me envia
    $id = $_REQUEST["id"];
    $productos = $_REQUEST["productos"];
    $precio = $_REQUEST["precio"];

    /*
        1. Conectarme a la base de datos
        2. Construir un INSERT INTO.....
        3. Ejecutar la consulta
        4. Cerrar conexión
    */
    $mysqli = new mysqli("localhost", "root", "", "pagina");
    $sql = "insert into pedidos (id, productos, precio) values ('$id', '$productos', '$precio')";
    $mysqli->query($sql);
    $mysqli->close();
    
    // Redirecciona a otro sitio
    header("location: pedidos.php");

?>