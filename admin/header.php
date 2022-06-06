<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Header</title>
</head>
<body>

<?php 

session_start();
if(!$_SESSION['admin']){
    header("location:login.php");
}

?>
<nav class="navbar navbar-light bg-dark ">
  <div class="container-fluid text-white">
    <a href="mystore.php" class="navbar-brand text-white"><img src="photo\logo3.png" alt="" width="145px"></a>
    <span>
        <i class="fa-solid fa-toolbox"></i>
        Hello,<?php echo $_SESSION['admin']?> |
        <i class="fa-solid fa-right-from-bracket"></i>
        <a href="logout.php" class="text-decoration-none text-white">Logout</a>
    </span>
  </div>
</nav>
</body>
</html>