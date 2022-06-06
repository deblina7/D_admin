<?php

$id = $_POST['id'];
$conn = mysqli_connect('localhost','root','','project');
mysqli_query($conn, "DELETE FROM 'product' WHERE id = $id");
header("location:mystore.php");

?>