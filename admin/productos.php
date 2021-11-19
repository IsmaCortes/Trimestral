<?php include("template/header.php"); ?>
<?php 
echo "<h5 class='card-title text-center'>ZONA DE PRODUCTOS</h5>";
?>
<?php
    /*  1. Conectarme a la base de datos
        2. Construir una consulta SELECT.....
        3. Recoger los resultados y mostrarlos
    */
    $mysqli = new mysqli("localhost", "root", "", "pagina");
    $sql = "SELECT id, nombre, texto, precio, nombreimg FROM productos";
    $result = $mysqli->query($sql);

    echo "<table style='width:75%; margin: 0 auto;' class='table table-striped table-bordered'>";
    echo "<tr>";
        echo "<th>Imagen</th>";
        echo "<th>Nombre</th>";
        echo "<th>Texto</th>";
        echo "<th>Precio</th>";
        echo "<th>Borrar</th>";
        echo "<th>Editar</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        if(isset($_REQUEST["id"]) and $_REQUEST["id"] == $row["id"]){
            echo "<tr>";

            
            echo "<form method='post' action='update_productos.php' enctype='multipart/form-data'>";
            echo "<label for='nombreimg'></label>";
            echo "<td><input type='file' id='nombreimg' name='nombreimg' value='".$row["nombreimg"]."'></td>";
            echo "<td><input type='text' id='nombre' name='nombre' value='".$row["nombre"]."'</td>";
            echo "<td><input type='text' id='texto' name='texto' value='".$row["texto"]."'</td>";
            echo "<td><input type='text' id='precio' name='precio' value='".$row["precio"]."'</td>";
            echo "<td><input type='submit' value='guardar'></td>";
            echo "<input type='hidden' name='id' value='".$row['id']."'>";
            echo "</form>";
        }else{

        echo "<tr>";
        echo "<td><img width='250' src='". $row["nombreimg"] ."'></td>";
        echo "<td><h5 class='card-title'>".$row["nombre"]."</h5></td>";
        echo "<td class='card-text'>".$row["texto"]."</td>";
        echo "<td>".$row["precio"]."</td>";
        echo "<td><a href='delete_productos.php?id=".$row['id']."'>Borrar</a></td>";
        echo "<td><a href='productos.php?id=".$row['id']."'>Editar</a></td>";
        echo "</tr>";
        }
    }
    echo "<tr>";
    echo "<td><form method='post' action='create_productos.php' enctype='multipart/form-data'><input type='file' name='nombreimg' id='nombreimg'></td>";
    echo "<td><input type='text' id='nombre' name='nombre' placeholder='Nombre'></td>";
    echo "<td><input type='text' id='texto' name='texto' placeholder='Texto'></td>";
    echo "<td><input type='text' id='precio' name='precio' placeholder='Precio'></td>";
    echo "<td><label for='nombreimg'></label></td>";
    echo "<td><button type='submit'value='Enviar'>Enviar</button></td></form>";
    echo "</tr>";
    echo "</table>";
    echo "<p></p>";
    $mysqli->close();
    
?>
        
    
<?php include("template/footer.php"); ?>