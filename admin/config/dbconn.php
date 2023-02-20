<?php 
$host = "localhost";
$username = "root";
$password = "Aclan*2020";
$database = "payroll_db";

$conn = mysqli_connect("$host","$username","$password","$database");

if(!$conn){
    header('location: ../errors/dberror.php');
    die();
}

?>