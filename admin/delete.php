<?php

$id = $_POST['id'];
$conn = mysqli_connect('localhost','root','','project');
mysqli_query($conn, "DELETE FROM 'signup' WHERE id = $id");
header("location:user.php");

?>