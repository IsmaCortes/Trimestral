<?php
$host="localhost";
$bd="pagina";
$usuario="root";
$password="";
$conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$password);
$devolver = array();
if (isset($_REQUEST["id"])){
    $id = $_REQUEST["id"];
    if(isset($id)) {
        $consultaSQL = $conexion->prepare("SELECT id, nombre, texto, precio, nombreimg FROM productos WHERE id=:id");
        $consultaSQL->bindParam(':id',$id);
        $consultaSQL->execute();
        while ($pagina = $consultaSQL->fetchAll(PDO::FETCH_ASSOC)) {
            $devolver[]=$pagina;   
        };
    }else {
        $consultaSQL = $conexion->prepare("SELECT id, nombre, texto, precio, nombreimg FROM productos");
        $consultaSQL->execute();
        while ($pagina = $consultaSQL->fetchAll(PDO::FETCH_ASSOC)) {
            $devolver[]=$pagina;   
        };
    };
    $conexion = null;


} else {
    
    $consultaSQL = $conexion->prepare("SELECT id, nombre, texto, precio, nombreimg FROM productos");
        $consultaSQL->execute();
        while ($pagina = $consultaSQL->fetchAll(PDO::FETCH_ASSOC)) {
            $devolver[]=$pagina;   
}
}

header('Content-Type: application/json');
echo json_encode($devolver);
?>