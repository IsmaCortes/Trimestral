<?php include("template/header.php"); ?>
<?php 
echo "<h5 class='card-title text-center'>ZONA DE PEDIDOS</h5>";
echo "<h4 class='card-title text-center'>Tabla por precio</h4>";
?>
<?php
    /*  1. Conectarme a la base de datos
        2. Construir una consulta SELECT.....
        3. Recoger los resultados y mostrarlos
    */
    $mysqli = new mysqli("localhost", "root", "", "pagina");
    if (isset($_REQUEST["precio"])){
        if ($_REQUEST["precio"]=="pasc"){
            $sql = "SELECT sum(precio) as total, fecha, npedido FROM pedidos GROUP BY npedido ORDER BY total ASC ";
        } elseif ($_REQUEST["precio"]=="pdesc"){
            $sql = "SELECT sum(precio) as total, fecha, npedido FROM pedidos GROUP BY npedido ORDER BY total DESC ";
        }
    } elseif (isset($_REQUEST["id"])){
        if ($_REQUEST["id"]=="idasc"){
            $sql = "SELECT sum(precio) as total, fecha, npedido FROM pedidos GROUP BY npedido ORDER BY npedido ASC ";
        } elseif ($_REQUEST["id"]=="iddesc"){
            $sql = "SELECT sum(precio) as total, fecha, npedido FROM pedidos GROUP BY npedido ORDER BY npedido DESC ";
        }
    } elseif (isset($_REQUEST["fecha"])){
        if ($_REQUEST["fecha"]=="fasc"){
            $sql = "SELECT sum(precio) as total, fecha, npedido FROM pedidos GROUP BY npedido ORDER BY fecha ASC ";
        } elseif ($_REQUEST["fecha"]=="fdesc"){
            $sql = "SELECT sum(precio) as total, fecha, npedido FROM pedidos GROUP BY npedido ORDER BY fecha DESC ";
        } 
    } else {
        $sql = "SELECT sum(precio) as total, fecha, npedido FROM pedidos GROUP BY npedido";
    }


    $result = $mysqli->query($sql);
    echo "<table style='width:75%; margin: 0 auto;' class='table table-striped table-bordered'>";
    echo "<tr>";
        echo "<th>ID <a href='pedidos.php?id=idasc'><img width=25px src=images/arriba.png></a><a href='pedidos.php?id=iddesc'><img width=25px src=images/abajo.png></a></th>";
        echo "<th>Precio <a href='pedidos.php?precio=pasc'><img width=25px src=images/arriba.png></a><a href='pedidos.php?precio=pdesc'><img width=25px src=images/abajo.png></a></th>";
        echo "<th>Fecha <a href='pedidos.php?fecha=fasc'><img width=25px src=images/arriba.png></a><a href='pedidos.php?fecha=fdesc'><img width=25px src=images/abajo.png></th>";
    echo "</tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
            echo "<td>".$row["npedido"]."</td>";
            echo "<td>".$row["total"]."</td>";
            echo "<td>".$row["fecha"]."</td>";
        echo "</tr>";
    
    }
    
    echo "</table>";
    echo "<p></p>";
    $mysqli->close();
?>

<?php include("template/footer.php"); ?>