<?php
$id=$_GET['id'];

include "conexion.php";
    /// 3.- Obtenemos el registro

$query="select * from MyGuests where id = $id ";
$result=mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
 
    ////4.- Cerrar la conexion
    mysqli_free_result($result);
    mysqli_close($conn);
?>
<form action="editar_1.php" method="get">
<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
Nombre: <input name="firstname" value="<?php echo $row['firstname'] ?>"> <br>
Apellidos: <input name="lastname" value="<?php echo $row['lastname'] ?>"><br>
emai: <input name="email" value="<?php echo $row['email'] ?>"><br>
<input type="submit" value="Enviar">
</form>

