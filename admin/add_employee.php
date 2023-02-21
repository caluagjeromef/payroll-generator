<?php
session_start();
include('config/dbconn.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get the form data
    $compID = $_POST["compID"];
    $last_name = $_POST["last_name"];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $email = $_POST["email"];
    $position = $_POST["position"];
    $date_hired = $_POST["date_hired"];
    $status = $_POST["status"];
    
    // Prepare the SQL statement
    $sql = "INSERT INTO tblemployee (compID,lastname, firstname, midname, email, position, date_hired, status) VALUES ('$compID', '$last_name', '$first_name', '$middle_name', '$email', '$position', '$date_hired','$status')";
    
    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Successfully added new Employee.";
        header("location: new_employee.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);

?>