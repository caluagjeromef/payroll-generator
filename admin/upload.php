<?php
session_start();

$destination = "C:/Users/Staff 004/Desktop/PAYSLIP/admin/uploads/";

$file_name = $_FILES['upload']['name'];
$file_destination = $destination . $file_name;

if (move_uploaded_file($_FILES['upload']['tmp_name'], $file_destination)) {
    
    
    $_SESSION['message'] = "Success";
    header('location: new_payroll.php');
} else {
    echo "Error: File upload failed.";
}

?>