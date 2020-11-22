<?php 

$connection = new mysqli("localhost" , "root", "", "estore") or die (mysqli_error($connection));

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "delete from product where Id = '$id'";

    $connection->query($sql) or die(mysqli_error($connection));

    header("Location: http://localhost/project/productAdmin.php");
    exit();
}

?>