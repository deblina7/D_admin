<?php

session_start();
session_destroy();
?>
<Script>
location.replace("login.php");
alert("Logout Successfully")
</Script>