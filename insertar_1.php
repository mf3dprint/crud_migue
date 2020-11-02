<?php
$firstname=$_GET['firstname'];
echo $firstname;
$lastname=$_GET['lastname'];
echo $lastname;
$email=$_GET['email'];
echo $email;


include "conexion.php";

mysqli_query($conn, "INSERT INTO MyGuests (firstname, lastname, email)
 VALUES ('$firstname', '$lastname', '$email')"); 

// Print auto-generated id
echo "New record has id: " . mysqli_insert_id($con);

mysqli_close($con);

?>

<?php header('Location: http:index.php'); exit; ?> 