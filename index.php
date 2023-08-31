<!DOCTYPE html>
<?php require('conexion.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action="store.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" ><br><br>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" ><br><br>

            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" ><br><br>

            <input type="submit" value="Enviar">
        
        </form>

        <?php
        //------------------------------------//
        //--- Aplicable a Sentencia SELECT ---//
        
        $sql = "SELECT * FROM user";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // Configura los resultados como un arreglo asociativo
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $stmt->fetchAll() Obtiene el arreglo asociativo
        echo "<ul>";
        foreach ($stmt->fetchAll() as $row) {
            echo "<li>" . $row['id'] . " - " . $row['nombre'] . " - " . $row['correo'] . " " . $row['contraseña'] .  "</li>";
        }
        echo "</ul>";
        ?>

</body>
</html>