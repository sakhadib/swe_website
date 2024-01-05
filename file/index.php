<?php
    include "../utility.php";
    $conn = connect::getConnect()->getConnection();

    if(!isset($_GET['id'])){
        header("Location: ../library/");
    }

    // get method id
    $id = $_GET['id'];

    //Query
    $query = "SELECT f.file_name, f.url, f.date, f.file_type AS type, f.course_id, c.course_Name AS course_name, u.fullName AS uploader_name, u.sid AS uploader_ID, u.batch AS uploader_Batch FROM file f JOIN course c ON f.course_id = c.course_ID JOIN shuser u ON f.sid = u.sid WHERE f.file_id = '$id';";
    $result = $conn->query($query);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    $row = $result->fetch_assoc();
    $escapedUrl = str_replace("/view", "/preview", $row['url']);
    $title = $row['file_name'];
    $courseName = $row['course_name'];
    $CourseCode = $row['course_id'];
    $user = $row['uploader_name']." (".$row['uploader_ID'].")";
    $batch = $row['uploader_Batch'];

    $meta =   $CourseCode . " - " .$courseName . " --- " . $user . " - Batch " . $batch;
    $tit = $title . " || " . $CourseCode . " - " .$courseName;

    //closing the connection
    $conn->close();

?>




<!-- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tit ?></title>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        
        <!-- css -->
        <link rel="stylesheet" href="../style.css">
    
        
        <!-- icons -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
    <?php 
        if(isset($_SESSION['sid'])){
            include('../logHeader.php');
        }else{
            include('../header.php');
        }
    ?>
    <div class="sh-container">
        <div class="container shuv">
            <div class="row">
                <div class="col-12">
                    <div class="spacer-50"></div>
                    <!-- php file title -->
                    <h1><?php echo $title?></h1>
                    <h6><?php echo $meta?></h6>
                    <button id="copyButton" class="btn btn-warning mt-3" onclick="copyPageLink()"><i class="uil uil-copy"></i> Copy file link to share</button>
                    <a href="<?php echo $escapedUrl; ?>" target="_blank" class="btn btn-primary mt-3"><i class="uil uil-arrow-up-right"></i> Open in New Tab</a>
                    <div id="copyMessage" class="mt-2" style="display: none;">Link copied to clipboard!</div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <iframe src="<?php echo $escapedUrl ?>" width='100%' height='800' frameborder='0' style = 'border-radius: 10px'></iframe>
                    <div class="spacer-50"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="foot mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <p style="font-size: 7rem; margin-bottom: -32px;"><i class="uil uil-coffee"></i></p>
                        <h3>IUT SWE Files</h3>
                        <p><b>Share</b> your Files and Get Also get help from others</p>
                        <hr>
                        <p>© <span id="year"></span> <a href="https://sakhawatadib.com" class="link-danger">Adib Sakhawat</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();
        </script>
<!-- End of Footer -->
</body>
</html>

<style>
    .spacer-50{
        height: 50px;
    }
    .shuv{
        /* min-height: 71vh; */
        display: flex;
        align-items: center;
    }
    
</style>

<script>
    function copyPageLink() {
        var dummyTextArea = document.createElement("textarea");
        dummyTextArea.value = window.location.href;
        document.body.appendChild(dummyTextArea);
        dummyTextArea.select();
        document.execCommand("copy");
        document.body.removeChild(dummyTextArea);

        // Show the message for a short duration
        var copyMessage = document.getElementById("copyMessage");
        copyMessage.style.display = "block";
        setTimeout(function() {
            copyMessage.style.display = "none";
        }, 2000);
    }

</script>