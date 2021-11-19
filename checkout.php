<?php include("template/header.php"); ?>
<?php 
    
    session_start();
    $resultado=0;
    echo "<h5 class='card-title  text-center'>CARRITO</h5>";
    echo "<table style='width:75%; margin: 0 auto;' class='table table-striped table-bordered'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
    echo "</tr>";
    foreach ($_SESSION as $result){
        echo "<tr>";
        echo "<td>".$result["id"]."</td>";
        echo "<td>".$result["nombre"]."</td>";
        echo "<td>".$result["precio"]."</td>";
        echo "</tr>";
        $resultado=$resultado+floatval($result["precio"]) ;       
    }
    echo "<tr>";
        echo "<td colspan='2'><b>PRECIO TOTAL:</b></td>";
        echo "<td>$resultado</td>";
    echo "</tr>";
    echo "</table>";
        echo "<br>";
        echo "<p></p>";
        echo "<br>";
        echo "<button type='button' style='height:10%; width:10%; margin: 0 auto' class='btn btn-success bg-success'><a href='checkout_pedidos.php' class='text-dark'>Comprar<img src='images/carrito.png' width='40' height='40'></a></button><button type='button' style='height:10%; width:10%; margin: 0 auto' class='btn btn-danger bg-danger'><a class='text-dark' href='vaciarcarrito.php'>Vaciar carrito<img src='images/carrito.png' width='40' height='40'></a></button>";
        echo "<p></p>";
    
?>
<?php include("template/footer.php"); ?>
