<?php
session_start();
include('config/dbconn.php');
if (isset($_POST['add_employee'])) {
    
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
        header("location: employees.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['update_employee'])) {
    
    $emp_id = $_POST["emp_id"];
    $compID = $_POST["compID"];
    $last_name = $_POST["last_name"];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $email = $_POST["email"];
    $position = $_POST["position"];
    $date_hired = $_POST["date_hired"];
    $status = $_POST["status"];
    
    $sql = "UPDATE tblemployee
            SET compID='$compID', lastname='$last_name', firstname='$first_name', midname='$middle_name', email='$email', position='$position', date_hired='$date_hired', status='$status'
            WHERE id='$emp_id'";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Successfully updated Employee.";
        header("location: employees.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



if (isset($_POST['delete_employee'])) {
    
    $emp_id = $_POST['delete_employee'];
    
    $sql = "DELETE FROM tblemployee WHERE id='$emp_id'";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Successfully Deleted Employee.";
        header("location: employees.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    
    
}

// Close the database connection
mysqli_close($conn);

?>