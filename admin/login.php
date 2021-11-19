<?php include("template/headerlogin.php"); ?>
<?php 
echo "<h5 class='card-title text-center'>ZONA DE</h5>";
echo "<h5 class='card-title text-center'>ADMINISTRACIÓN</h5>";
?>
<form method="post" action="log_in.php" class='text-center'>
    <div class="form-group">
        <label for="cuenta">Nombre de la cuenta:</label><br>
        <input type="text" id="cuenta" name="cuenta" class="form-group">
    </div>
    <br>
    <div class="form-group">
        <label for="contraseña">Contraseña:</label><br>
        <input type="password" id="contraseña" name="contraseña" class="form-group">
    </div>
    <br>
    <button type="submit" value="Enviar" class="form-group">Enviar</button>
</form>
<p></p>
<?php include("template/footer.php"); ?>
