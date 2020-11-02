<?php

include "conexion.php";
$nombre= $_POST['nombre'];
echo $nombre;

if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        

        
        //Insertar imagen en la base de datos
        $insertar = $conn->query("INSERT into images_tabla (imagenes,nombre, creado) VALUES ('$imgContenido', '$nombre', now())");
        // COndicional para verificar la subida del fichero
        if($insertar){
            echo "Archivo Subido Correctamente.";
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>
<?php header('Location: http:index_fotos.php'); exit; ?> 