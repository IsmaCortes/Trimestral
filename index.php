<?php include("template/header.php"); ?>
<?php
    session_start();
    /*  1. Conectarme a la base de datos
        2. Construir una consulta SELECT.....
        3. Recoger los resultados y mostrarlos
    */
    $mysqli = new mysqli("localhost", "root", "", "pagina");
    $sql = "SELECT id, nombre, texto, precio, nombreimg FROM productos";
    $result = $mysqli->query($sql);
    echo "<table style='width:75%; margin: 0 auto;' class='table table-striped table-bordered'>";
    while($row = $result->fetch_assoc()) {

        $rutaimg = substr($row["nombreimg"], 3);

        echo "<tr>";
        echo "<td><img width='250' src='". $rutaimg ."' class='rounded'></td>";
        echo "<td><h5 class='card-title'>".$row["nombre"]."</h5><br><p class='card-text'> ".$row["texto"]."</p></td>";
        echo "<td colspan='2'><a class='btn btn-warning bg-warning'>".$row["precio"]."</a><br><p></p><a href='carrito.php?id=".$row["id"]."&nombre=".$row["nombre"]."&precio=".$row["precio"]."</div>'><button type='button' class='align-center; btn btn-info bg-info''>Añadir al carrito</button></a></td>"; //Insert a pagina con sesion
        echo "</tr>";
        
    }

    echo "</table>";

    echo "<br>";
    $mysqli->close();
    echo "<p></p>";

    //session_start();

    if(empty($_SESSION)){
        echo "<p></p>";

    }else{
    echo "<button type='button' style='height:10%; width:10%; margin: 0 auto' class='btn btn-success bg-success'><a href='checkout.php' class='text-dark'>Ir al carrito<img src='images/carrito.png' width='40' height='40'></a></button><button type='button' style='height:10%; width:10%; margin: 0 auto' class='btn btn-danger bg-danger'><a class='text-dark' href='vaciarcarrito.php'>Vaciar carrito<img src='images/carrito.png' width='40' height='40'></a></button>";
    echo "<p></p>";
    }
?>
<?php include("template/footer.php"); ?>
