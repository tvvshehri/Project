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
    
    <title>e-Store</title>
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
          <h1>Welcome to our Store</h1>
          <span style="margin-left: 80%;">CART: <a id="cart"></a> </span>
      </div>
      <!--End of Header-->

      <!-- Body -->
    <div class="container">
        <div class="row">
        <?php while($product = $data->fetch_assoc()){ ?>
            <div class="col">
                <div class="card" style="width: 19rem;">
                    <img src="./images/<?php echo $product['Image'] ?>" width="200px" height="150px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['Brand'] ?></h5>
                        <p class="card-text"><?php echo $product['Description'] ?></p>
                        <a href="#" class="btn btn-primary" onclick="addToCart()">ADD TO CART</a>
                    </div>
                </div>
            </div>
        <?php }?>
            
        </div>
    </div>

    <script>
        var i = 1;
        function addToCart(){
            var el = document.getElementById("cart");
            el.innerHTML = i++;
        }
    </script>
</body>
</html>