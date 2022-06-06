<?php

$conn = mysqli_connect('localhost','root','','project');

$A_name = $_POST['username'];
$A_password = $_POST['userpassword'];

$result = mysqli_query($conn,"SELECT * FROM `admin_users` WHERE username = '$A_name' AND password = '$A_password'");

session_start();

if(mysqli_num_rows($result)){
    $_SESSION['admin'] = $A_name;
    echo "
            <script>
            alert('Login Successfully');
            window.location.href='mystore.php'
            </script>    
        ";
}
else{
    echo "
            <script>
            alert('Invalid Username or password');
            window.location.href='login.php'
            </script>    
        ";
}

?>