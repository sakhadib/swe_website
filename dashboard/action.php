<?php
    if(isset($_POST['title'])){
        session_start();
        require_once "../utility.php";
        $conn = connect::getConnect()->getConnection();
        $error = "";
        $title = $_POST['title'];
        $type = $_POST['type'];
        $code = $_POST['code'];
        $url = $_POST['url'];
        $sid = $_SESSION['sid'];

        $date = date('Y-m-d'); // Get the current date
        $sql = "INSERT INTO `file` (`sid`, `file_name`, `file_type`, `course_id`, `url`, `date`) VALUES ('$sid', '$title', '$type', '$code', '$url', '$date')";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../dashboard/?success=File Inserted Successfully");
        } else {
            $error = "Error: " . $sql . "<br>" . $conn->error;
            header("Location: ../dashboard/?error=$error");
        }
    }
    else{
        header("Location: ../dashboard/?error=Please Login First - $sid");
    }
?>