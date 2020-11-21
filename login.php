<?php


$connection = new mysqli("localhost" , "root", "", "estore") or die (mysqli_error($connection));

$msg = "";
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE Username = '$username' and Password = '$password'";

    $output = $connection->query($sql);
    $count = mysqli_num_rows($output);

    if($count > 0){
        $msg = "Successfully Logged In";
        header("Location: http://localhost/project");
        exit();
    }else{
        $msg = "Username or password are not correct";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>LOGIN</title>
</head>
<body>

    
<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="./images/login.jpg" height="200px" width="70px" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit" onclick="alert(<?php echo $msg ?>)">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>
</body>
</html>