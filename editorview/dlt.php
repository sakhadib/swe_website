<?php
    include "../utility.php";
    $conn = connect::getConnect()->getConnection();
    
    $id = $_GET['id'];
    $sql = "Delete from file where file_id = '$id'";
    $result = $conn->query($sql);
    
    if($result){
        header("Location: ../editorview/");
        $conn->close();
        exit();
    }
    else
    {
        $conn->close();
        die("Query failed: " . $conn->error);
    }

?>