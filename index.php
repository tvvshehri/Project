<?php

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
        <a class="navbar-brand" href="index.html">e-Store</a>
       
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productAdmin.html">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </div>
      </nav>
      <!-- End of Navigation Bar -->

      <!-- Header -->
      <div class="container">
          <h1>Welcome to our Store</h1>
          <span style="margin-left: 80%; color: yellow;">CART: <a id="cart"></a> </span>
      </div>
      <!--End of Header-->

      <!-- Body -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 19rem;">
                    <img src="./images/shoe1.jpg" width="200px" height="150px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BRAND NAME</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary" onclick="addToCart()">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 19rem;">
                    <img src="./images/shoes2.jpg" width="200px" height="150px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BRAND NAME</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 19rem;">
                    <img src="./images/clothes1.jpg" width="200px" height="150px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BRAND NAME</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">ADD TO CART</a>
                    </div>
                </div>
            </div>
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