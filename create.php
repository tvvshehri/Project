<?php

$connection = new mysqli('localhost' , 'root', "", 'estore') or die (mysqli_error($connection));

if(isset($_POST['submit'])){
  $brand = $_POST['brand'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $image = null;
  $valid = false;
  if(isset($_FILES['image'])){
    $image = $_FILES['image']['name'];
    $target = "./images/".basename($_FILES['image']['name']);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      $valid = true;
    }
    else{
      $valid = false;
    }
  }
  $sql = "INSERT INTO product (Brand, Description, Price, Image) VALUES ('$brand', '$description', '$price','$image')";
  $output = $connection->query($sql) or die(mysqli_error($connection));
  header("Location: http://localhost/project");
  exit();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Create Product</title>
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
              <a class="nav-link" href="#">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </div>
      </nav>
      <!-- End of Navigation Bar -->

      <!-- Header -->
      <div class="container">
          <h1>Add Product</h1>
      </div>
      <!--End of Header-->
      <!-- Form -->
      <div class="container">
        <form method="POST" action="create.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="brand">Brand</label>
              <input name="brand" type="text" class="form-control" id="brand" value="">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input name="description" type="text" class="form-control" id="description">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price" type="number" class="form-control" id="price">
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input name="image" type="file" class="form-control" id="image">
              </div>
            <button type="submit" name="submit" onclick="alert('New Product is Added Successfully ..');" class="btn btn-primary">Add New</button>
          </form>
      </div>
      <!--End of Form-->
</body>
</html>