<?php
    session_start();
    if(!isset($_SESSION['sid']) || !isset($_POST['title'])){
        header("Location: ../");
        exit();
    }
    $title = $_POST['title'];
    $type = $_POST['type'];
    $url = $_POST['url'];
    $file_id = $_POST['fid'];

    require_once "../utility.php";
    $conn = connect::getConnect()->getConnection();

    $sql = "UPDATE `file` SET `file_name` = '$title', `file_type` = '$type', `url` = '$url' WHERE `file_id` = '$file_id'";
    $result = $conn->query($sql);

    if($result){
        header("Location: ../dashboard/");
        $conn->close();
        exit();
    }
    else{
        header("Location: ../dashboard/");
        $conn->close();
        exit();
    }


?>