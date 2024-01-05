<?php
    session_start();
    if(!isset($_SESSION['sid'])){
        header("Location: ../");
        Exit();
    }


    include "../utility.php";
    $ut = utility::getUtility();

    $rows = $ut->getFileEdit($_SESSION['sid']);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>

    <!-- Custom CSS files -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../style.css">
    <!-- BootStrap CSS files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    
    <!-- Online Icons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="icon" type="image/x-icon" href="../rsx/logo.ico">
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="script.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <!-- include header -->
    <?php 
        if(isset($_SESSION['sid'])){
            include('../logHeader.php');
        }else{
            include('../header.php');
        }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-4 jb d-none d-md-block d-lg-block">Editor View - <span class="badge bg-secondary"><?php echo $_SESSION['sid']; ?></span></h1>
                
                
            </div>
            <div class="col-2">
            
                
            </div>
        </div>
        <div class="row">
            <hr>
            <p class="mt-1 text-secondary">
                From here you can edit and delete Files <br>
                <b>Note:</b> You can only edit or delete your own contributions.
            </p>
        </div>
        
        <div class="row mt-5 mb-4">
            <section class="main-table" id = "standing" style="min-height=50vh;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <table id="stable" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>File Title</th>
                                        <th>Course</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php echo $rows; ?>
                                </tbody>
                            </table>
                        </div>   
                    </div>
                </div>
            </section>
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

      
    <script>
        new DataTable('#stable');
    </script>

</body>