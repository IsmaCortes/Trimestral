<?php
    session_start();
    // recojo los valores que el usuario me envia
    $mysqli = new mysqli("localhost", "root", "", "pagina");
    //$id = $_REQUEST["id"];
    
    $sql= "SELECT max(npedido) as maxpedido FROM pedidos";

    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
    $maxpedido = $row["maxpedido"]+1;
    }
    echo "$maxpedido<br>";
    echo "-------<br>";
    foreach($_SESSION as $pedido) {
    $idproducto = $pedido["id"];
    $productos = $pedido["nombre"];
    $precio = $pedido["precio"];
        echo "$idproducto<br>";
        echo "$productos<br>";
        echo "$precio<br>";
        echo "-----------<br>";

    $sql = "INSERT INTO pedidos (idproducto, productos, precio, npedido) VALUES ('$idproducto', '$productos', '$precio', '$maxpedido')";
    echo "sql: $sql";
    $mysqli->query($sql);
    //$mysqli->close();
};
    session_destroy();
    // Redirecciona a otro sitio
    header("location: index.php");

?>