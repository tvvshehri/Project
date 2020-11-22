<?php 


$connection = new mysqli('localhost' , 'root', "", 'estore') or die (mysqli_error($connection));

// Get 
if(isset($_GET['Id'])){
  $id = $_GET['Id'];

  $sql = "SELECT * FROM product WHERE Id = $id";
  $data = $connection->query($sql);
  $product = $data->fetch_assoc();
}


// update statement
if(isset($_POST['update'])){
  $id = $_POST['Id'];
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
  $sql = "UPDATE product SET Brand = '$brand', Description = '$description', Price = '$price', Image = '$image' WHERE Id = '$id'";
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
      </div>
      <!--End of Header-->
      <!-- Form -->
      <div class="container">
        <form method="POST" action="update.php" enctype="multipart/form-data">
        <input type="hidden" name="Id" value="<?php echo $product['Id'] ?>">
            <div class="form-group">
              <label for="brand">Brand</label>
              <input name="brand" type="text" class="form-control" id="brand" 
                value="<?php echo $product['Brand'] ?>">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input name="description" type="text" class="form-control" id="description"
                value="<?php echo $product['Description'] ?>">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input name="price" type="number" class="form-control" id="price"
                  value = "<?php echo $product['Price'] ?>">
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input name="image" type="file" class="form-control" id="image"
                  value = "<?php echo $product['Image'] ?>">
              </div>
            <button type="submit" name="update" onclick="alert('Updated Successfully ..');" class="btn btn-primary">Update</button>
          </form>
      </div>
      <!--End of Form-->
</body>
</html>