<?php
    session_start();
    include "../utility.php";
    $ut = utility::getUtility();
    $courses = $ut->getCourseCodes();
    $sem_1_courses = $ut->getCourses(1);
    $sem_2_courses = $ut->getCourses(2);
    $sem_3_courses = $ut->getCourses(3);
    $sem_4_courses = $ut->getCourses(4);
    $sem_5_courses = $ut->getCourses(5);
    $sem_6_courses = $ut->getCourses(6);
    $sem_7_courses = $ut->getCourses(7);
    $sem_8_courses = $ut->getCourses(8);


    $files = "";
    if(isset($_GET['course'])){
        $course = $_GET['course'];
        // die($course);
        $rows = $ut->getFilesByCourse($course);
    }
    else if(isset($_GET['by'])){
        $by = $_GET['by'];
        // $files = $ut->getFilesBy($by);
    }
    else{
        $rows = $ut->getFiles();
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>

    <!-- Custom CSS files -->
    <link rel="stylesheet" href="style.css">
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
    <!-- <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        Link with href
    </a>  -->
    <!--  -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">IUT SWE Courses</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            <h6 class="fw-bold mt-3">Level 1 Term 1</h6>
            <hr>
            <ol>
                <?php echo $sem_1_courses; ?>
            </ol>

            <h6 class="fw-bold mt-3">Level 1 Term 2</h6>
            <hr>
            <ol>
                <?php echo $sem_2_courses; ?>
            </ol>
            <h6 class="fw-bold mt-3">Level 2 Term 1</h6>
            <hr>
            <ol>
                <?php echo $sem_3_courses; ?>
            </ol>
            <h6 class="fw-bold mt-3">Level 2 Term 2</h6>
            <hr>
            <ol>
                <?php echo $sem_4_courses; ?>
            </ol>
            <h6 class="fw-bold mt-3">Level 3 Term 1</h6>
            <hr>
            <ol>
                <?php echo $sem_5_courses; ?>
            </ol>
            <h6 class="fw-bold mt-3">Level 3 Term 2</h6>
            <hr>
            <ol>
                <?php echo $sem_6_courses; ?>
            </ol>
            <h6 class="fw-bold mt-3">Level 4 Term 1</h6>
            <hr>
            <ol>
                <?php echo $sem_7_courses; ?>
            </ol>
            <h6 class="fw-bold mt-3">Level 4 Term 2</h6>
            <hr>
            <ol>
                <?php echo $sem_8_courses; ?>
            </ol>

            
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-2">
                <h1 class="mt-4 jb d-none d-md-block d-lg-block">Library</h1>
                
                
            </div>
            <div class="col-10">
                <?php
                    if(isset($_GET['course'])){
                        echo '<h1 class="jb mt-4">
                                    <span class="badge bg-secondary">:> File For '.$_GET['course'].'</span>
                                </h1>';
                    }
                ?>
                
            </div>
        </div>
        <div class="row">
            <hr>
            <p class="mt-1 mb-4 text-secondary">
                Here you will find all the books, notes, codes, files and other stuffs your seniors and 
                batchmates shared. you can search on the search bar based on anything. 
            </p>
        </div>

        <div class="row">
            <div class="col-md-3 text-center">
                <a class="btn btn-danger bs" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <i class="uil uil-meeting-board"></i> Click Here to Explore Courses
                </a>
            </div>
            
        </div>
        
        <div class="row mt-5">
            <section class="main-table" id = "standing">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <table id="stable" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Date</th>
                                        <th>File Title</th>
                                        <th>Type</th>
                                        <th>Course</th>
                                        <th>By</th>
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