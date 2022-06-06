<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<?php include 'header.php'; ?>
<body>


    <div>
        <h2 class="text-center mt-3">Dashboard</h2>
    </div>
    <div class=" col-md-6 bg-danger text-center m-auto">
        <a href="product/index.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Add Post</a>
        <a href="user.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Users</a>
    </div>

    <div class="container">
  <div class="row">
    <div class="col-md-10 m-auto">
    <table class="table border border-warning table-hover my-5  text-center">
    <thead class="bg-dark text-white fs-4 font-monospace text-center">
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Image</th>
      <th>Primary Category</th>
      <th>Secondary Category</th>
      <th>Index Category</th>
      <th>Delete</th>
      <th>Update</th>
    </thead>
    
    <tbody class="text-center">
      <?php
      include 'db.php';

      $Record = mysqli_query($conn, "SELECT * FROM `product`");
      $i =0;
      while($row = mysqli_fetch_array($Record)){
      echo"
      <tr>
      <td>"; ?><?php echo ++$i; ?><?php echo"</td>
      <td>$row[PName]</td>
      <td>$row[PPrice]</td>
      <td><img src='$row[Pimage]' height= '100px' width = '125px'></td>
      <td>$row[PCategory]</td>
      <td>$row[PCategory1]</td>
      <td>$row[PCategory2]</td>
      <td><a href='remove.php? ID=$row[id]'class='btn btn-danger'>Delete</a></td>
      <td><a href='update.php? Id=$row[id]' class='btn btn-warning'>Update</a></td>
    </tr>
      ";
      }

      ?>
    </tbody>
  </table>
    </div>
  </div>
</div>

</body>
</html>