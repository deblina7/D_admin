<?php

$Id = $_GET['ID'];
$conn = mysqli_connect('localhost','root','','project');
mysqli_query($conn, "DELETE FROM `product` WHERE id = $Id");
header("location:mystore.php");

?>