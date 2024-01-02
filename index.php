<?php
    require_once "utility.php";
    $u = utility::getUtility();
    $courses = $u->getCourseCodes();
    // echo $courses;
    $msg = "";
    if(isset($_GET['msg'])){
        $msg = '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey !</strong> '.$_GET['msg'].'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- Custom CSS & JS-->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Nav -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#" style="font-family: 'Train One'"><i class="uil uil-coffee"></i> IUT SWE Files</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Library</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Questions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contributors</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#signup">Sign Up</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
<!-- End of Nav -->
    
<!-- Greetings -->
    <div class="container">
        <!-- <div class="row">
            <div class="col-12 mt-3">
            <?php
                    if(isset($_GET['msg'])){
                        if($_GET['msg'] == "success"){
                            header("Location: login/");
                        }
                    }
            ?>
            </div>
        </div> -->
        <div class="row vh-60 df jc-c ai-c">
            <div class="col-md-6">
                <h3 class="text-danger greet-text jb">Hello !</h3>
                <h2 class="greet-text jb">IUTian Software People</h2>
                <hr>
                <h5>Lets have some <i class="uil uil-coffee"></i> first, then we'll find your file</h5>

                <form action="#" class="df jc-c ai-c mt-4 course-finder">
                    <input list="datalistOptions" id="exampleDataList"  class="form-control bs" placeholder="< Enter Course Code >">&nbsp;&nbsp;
                    <datalist id="datalistOptions">
                        <?php echo $courses; ?>
                    </datalist>
                    <button class="btn btn-dark bs">Search</button>
                </form>
            </div>
            <div class="col-md-6 df jc-c ai-c d-none d-md-flex">
                <img src="rsx/greet.jpg" alt="" style="width: 500px;">
            </div>
        </div>
    </div>
<!-- End of Greetings -->

<!-- Steps -->
    <div class="container vh-50 mt-5">
        <div class="row">
            <div class="col-md-6 df ai-c jc-c">
                <img src="rsx/join.avif" alt="" style="width: 500px;">
            </div>
            <div class="col-md-6">
                <h3>Get <span class="text-success jb">Notes</span> from your friends and seniors</h3>
                <h6 class="text-secondary jb"> > Here is what you have to do</h6>
                <hr>
                <h3 class="badge bg-secondary">To Get File</h3>
                <div class="step-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-1">
                                <p class="text-center text-success jb"><b>=</b></p>
                            </div>
                            <div class="col-11">
                                <p>Visit <a href="library/" class="link-danger">Library</a> Page and find your file</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-1">
                                <p class="text-center text-success jb"><b>=</b></p>
                            </div>
                            <div class="col-11">
                                <p>Download the file and enjoy</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="badge bg-secondary">To Share File</h3>
                <div class="step-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-1">
                                <p class="text-center text-success jb"><b>=</b></p>
                            </div>
                            <div class="col-11">
                                <p><a href="join/" class="link-danger">Join</a> us by signing up</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-1">
                                <p class="text-center text-success jb"><b>=</b></p>
                            </div>
                            <div class="col-11">
                                <p>Upload your file to your Google Drive or any online storage</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-1">
                                <p class="text-center text-success jb"><b>=</b></p>
                            </div>
                            <div class="col-11">
                                <p>Share the link in <span class="jb text-success">New File</span> page you will see on your dashboard</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-1">
                                <p class="text-center text-success jb"><b>=</b></p>
                            </div>
                            <div class="col-11">
                                <p>Sharing is caring. Togather we can make our study easy</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<!-- End of Steps -->


<!-- Signup -->
    <div class="container vh-70 dfc jc-c" id="signup">
        <div class="row">
            <div class="col-md-6">
                <h1><span class="jb">Sign Up</span></h1>
                <hr>
                <?php 
                    if(isset($_GET['msg'])){
                        if($_GET['msg'] != "success"){
                            echo $msg; 
                        }  
                    }
                ?>
                <form action="signup/action.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-7">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="fullName" id="floatingInput" placeholder="What is your Full Name ?">
                                    <label for="floatingInput">Your Full Name</label>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="sid" id="floatingInput" placeholder="What is your Full Name ?">
                                    <label for="floatingInput">Student ID</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="What is your Full Name ?">
                                    <label for="floatingInput">Email address</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" name="Batch" id="floatingInput" placeholder="What is your Full Name ?">
                                    <label for="floatingInput">Batch eg. 23</label>
                                </div>
                            </div>
                        </div>
                        
                            
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="pass" id="floatingInput" placeholder="What is your Full Name ?">
                                    <label for="floatingInput">Password</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="RetypePass" id="floatingInput" placeholder="What is your Full Name ?">
                                    <label for="floatingInput">Retype Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" style="width: 100%;" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </div>

                  </form>
            </div>
            <div class="col-md-5 offset-md-1 df jc-c ai-c">
                <img src="rsx/joinus.svg" alt="" style="width: 450px;">
            </div>
        </div>
    </div>
<!-- End of Signup -->


<!-- Footer -->
<div class="foot">
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


