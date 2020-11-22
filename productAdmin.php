<?php


$connection = new mysqli("localhost" , "root", "", "estore") or die (mysqli_error($connection));

$sql = "SELECT * FROM product";

$data = $connection->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Admin Page</title>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">e-Store</a>
       
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productAdmin.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </div>
      </nav>
      <!-- End of Navigation Bar -->

      <!-- Header -->
      <div class="container">
          <h1>Admin Page</h1>
          <a href="create.php" class="btn btn-success">Add New</a>
      </div>
      <!--End of Header-->
    <!-- table -->
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Brand</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($product = $data->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $product['Brand'] ?></td>
                    <td><?php echo $product['Description'] ?></td>
                    <td><?php echo $product['Price'] ?></td>
                    <td><?php echo $product['Image'] ?></td>
                    <td>
                        <a href="delete.php?delete=<?php echo $product['Id']?>">Delete</a>
                        <a href="update.php?Id=<?php echo $product['Id'] ?>"> | Update</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- End of table-->
</body>
</html>