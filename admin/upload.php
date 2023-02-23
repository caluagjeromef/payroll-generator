<?php
session_start();

$file_name = $_FILES['upload']['name'];
$destination = "../assets". $file_name;

if(!file_exists($destination)){
    mkdir($destination, 0777, true);
}

$temp_file = $_FILES['upload']['tmp_name'];

if($temp_file != ""){
    $newfiledestination = $destination. "/" .$_FILES['upload']['name'];
    
    if (move_uploaded_file($temp_file, $newfiledestination)) {
        $_SESSION['message']="Success";
        header('location: new_payroll.php');
    }else{
        echo "Error".$_FILES['upload']['error'];
    }
}

?>
