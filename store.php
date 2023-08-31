<?php
include('conexion.php');
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        
        //--- Aplicable a Sentencias INSERT, UPDATE, DELETE ---//
        $sql = "INSERT INTO user (nombre, correo, contraseña)
        VALUES ('$nombre', '$correo', '$contraseña')";
        
        // Utilizar exec() dado que no se regresan resultados
        $conn->exec($sql);
        header('location: index.php');

?>

