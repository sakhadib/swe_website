<?php
    $error = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once '../utility.php';
        $conn = connect::getConnect()->getConnection();
        // Retrieve form data using $_POST

        $fullName = $_POST['fullName'];
        $sid = $_POST['sid'];
        $batch = $_POST['Batch'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirmPassword = $_POST['RetypePass'];

        $ucheck = "SELECT sid FROM `shuser` WHERE `sid` = '$sid'";
        $result = $conn->query($ucheck);
        if ($result->num_rows > 0) {
            $error = "Username already exists";
        } else {
            if ($pass != $confirmPassword) {
                $error = "Passwords do not match";
            } else {
                // Prepare an insert statement
                $sql = "INSERT INTO `shuser` (`sid`, `fullName`, `email`, `pass`, `batch`) VALUES (?, ?, ?, ?, ?)";
    
                if ($stmt = $conn->prepare($sql)) {
                    // Bind variables to the prepared statement as parameters
                    $stmt->bind_param("sssss", $param_sid, $param_name, $param_email, $param_password, $param_batch);
    
                    // Set parameters
                    $param_name = $fullName;
                    $param_sid = $sid;
                    $param_batch = $batch;
                    $param_email = $email;
                    $param_password = password_hash($pass, PASSWORD_DEFAULT); // Creates a password hash
                    
    
                    // Attempt to execute the prepared statement
                    if ($stmt->execute()) {
                        // Redirect to login page
                        $error = "success";
                    } else {
                        $error = "Something went wrong. Please try again later.";
                    }
                }
    
                // Close statement
                $stmt->close();
            }
        }
        // Close connection
        $conn->close();
    }

    header("Location: ../?msg=$error");
?>
