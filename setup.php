<?php

$connected=false;

$connected=include ("parts/dbconnect.php");
if(!$connected){
    $servername="localhost";
    $username="root";
    $password="";

    $conndb=mysqli_connect($servername,$username,$password);

    $sql="CREATE DATABASE mpls";
    $dbcreate=mysqli_query($conndb,$sql);

    $database="mpls";
    $conndb=mysqli_connect($servername,$username,$password,$database);

    $sql="CREATE TABLE `mpls`.`mpls_data` ( `sno` INT(25) NOT NULL AUTO_INCREMENT ,  
    `username` VARCHAR(15) NOT NULL ,  `password` TEXT NOT NULL ,
    `time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`sno`))";

    $create_table=mysqli_query($conndb,$sql);
    $connected=true;
} else{
    header("location: index.php");
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Setup file</title>
</head>

<body>

  <?php
    if($connected){
        echo '<div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Well done!</h4>
      <p>1:- Database Created</p>
      <p>2:- Table created</p>
      <hr>
      <p class="mb-0">Now you connectd to DB.</p>
      </div>';
    } else{
      echo '<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Sorry!</h4>
        <p>Follow these steps to fix</p>
        <p>1:- Install XAMPP</p>
        <p>2:- If already installed then open XAMPP & start Apache, MySQL</p>
        <p>3:- If you follow the above things then refresh the page"</p>
        <p>4:- Still Error then open php MyAdmin and delete mpls named database</p>
        <p>5:- Now refresh the page</p>
        <hr>
        <p class="mb-0">Now you connectd to DB.</p>
        </div>';
    }
  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>