<?php 
$cuenta = $_REQUEST["cuenta"];
$contraseña = $_REQUEST["contraseña"];
$ncuenta="admin";
$contra="admin";
if ($cuenta != $ncuenta){
    if ($contraseña != $contra){
        echo "<p>Datos introducidos incorrectos.</p>";
        header("location: ../index.php");
    } else {
        echo "<p>Datos introducidos incorrectos</p>";
        header("location: ../index.php");
    }
} elseif ($contraseña != $contra){
    echo "<p>Datos introducidos incorrectos.</p>";
    header("location: ../index.php");
} else {
    echo "Log In correcto";
    header("location: productos.php");
}
?>