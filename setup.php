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
}
?>