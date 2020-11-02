

<?php

include "conexion.php";


    /// 3.- Obtenemos los parámetros
        $id=$_GET['id'];
        //echo $id;
        $firstname=$_GET['firstname'];
        //echo $firstname;
        $lastname=$_GET['lastname'];
        //echo $lastname;
        $email=$_GET['email'];
        //echo $email;


    /// 4.- Modificamos el registro
      

 $sql = "UPDATE MyGuests SET firstname = '$firstname', lastname = '$lastname', email= '$email' WHERE id = '$id'";

 if ($conn->query($sql) === TRUE) {
  echo "OK";      
 }else {
  echo "ERROR";
 }
 mysqli_close($conn);
?>
<?php header('Location: http:index.php'); exit; ?> 