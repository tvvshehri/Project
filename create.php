<?php

$connection = new mysqli("localhost" , "root", "", "estore") or die (mysqli_error($connection));

if(isset($_POST["submit"])){
  $brand = $_POST["brand"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $image = null;
  if(isset($_FILES["image"])){
    $image = $_FILES["image"]["name"];
  }
  $sql = "INSERT INTO product (Brand, Description, Price, Image) VALUES ($brand, $description, $price,$image)";
  $connection->query($sql) or die(mysqli_error($connection));
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Update Product</title>
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
        <form>
            <div class="form-group">
              <label for="brand">Brand</label>
              <input type="text" class="form-control" id="brand" value="">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" id="description">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price">
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image">
              </div>
            <button type="submit" name="update" onclick="submit()" class="btn btn-primary">Add New</button>
          </form>
      </div>
      <!--End of Form-->
      <script>
        function submit(){
          alert("New Product is Added Successfully ..");
        }
      </script>
</body>
</html>