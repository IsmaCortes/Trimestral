<?php include("template/header.php"); ?>
<div class="p-5 mt-5 mb-5 text-center">
    <div class="container">
        <h1 class="display-3">API</h1>
        <p class="lead">Información general de los productos: </p>
        <p class="lead">
            <a href="api.php"><button type="button" class="btn btn-dark btn btn-primary btn-lg">API</button></a>
        </p>
        <p class="lead">Información especifica de los productos: </p>
        <p class="lead">
        <?php 
            $mysqli = new mysqli("localhost", "root", "", "pagina");
            $sql = "SELECT id FROM productos";
            $result = $mysqli->query($sql);
            echo "<form method='get' action='api.php'>";
            echo "<select class='custom-select' name='id'>";
            echo "<option>Selecciona ID</option>";
            while($row = $result->fetch_assoc()) {
                echo "<option selected id='id' value=".$row["id"]."'>".$row["id"]."</option>";
            }
            echo "</select>";
            echo "<p></p>";
            echo "<input type='submit' value='API_Individual' class='form-group btn btn-dark btn btn-primary btn-lg'></input>";
            echo "</form>";

            ?>
        </p>
    </div>
</div>
<?php include("template/footer.php"); ?>
