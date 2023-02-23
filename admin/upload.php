<?php
session_start();
$file_name = $_FILES['upload']['name'];
$destination = "uploads/". $file_name;

if(!file_exists($destination)){
    mkdir($destination, 0700, true);
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

<!-- session_start(); -->
<!-- if (isset($_FILES["excel_file"])) { -->
<!--     $file_name = $_FILES["excel_file"]["name"]; -->
<!--     $file_tmp = $_FILES["excel_file"]["tmp_name"]; -->
<!--     $file_destination = "C:\Users\Staff 004\Desktop\PAYSLIP\admin\uploads\temp" . $file_name; -->
    
<!--     // Check if the uploads directory exists, and create it if it doesn't -->
<!--     if (!is_dir('C:\Users\Staff 004\Desktop\PAYSLIP\admin\uploads')) { -->
<!--         mkdir('C:\Users\Staff 004\Desktop\PAYSLIP\admin\uploads'); -->
<!--     } -->
    
<!--     move_uploaded_file($file_tmp, $file_destination); -->
<!--     $_SESSION['message'] = "Successfully uploaded"; -->
<!--     header('location: new_payroll.php '); -->
<!-- } else { -->
<!--     echo "No file selected."; -->
<!-- } -->