<?php
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'images_db';
        
        //Crear conexion con la abse de datos
        $conn = new mysqli($Host, $Username, $Password, $dbName);
        
        // Cerciorar la conexion
        if($conn->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
?>