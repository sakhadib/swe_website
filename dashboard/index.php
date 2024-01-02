<!-- Course Pull -->
<?php
    require_once "../utility.php";
    $u = utility::getUtility();
    $courses = $u->getCourseCodes();
    $fileTypes = $u->getFileTypes();
?>

<!-- Type Pull -->







<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

        <link rel="stylesheet" href="../style.css">
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>




        <main>
            <?php
                $X = "";
                if($courses == ""){
                    $X = 'btn-success';
                }
                else{
                    // die($courses);
                }
            ?>
            <div class="container">
                <div class="row df jc-c ai-c vh-80">
                    <div class="col-md-7">
                        <h1>Share A new FIle</h1>
                        <hr>
                        <form action="" class="mt-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control bs" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">File Title</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="url" class="form-control bs" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">File URL (Google Drive Link Recommended)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-floating mb-3">
                                            <input list="datalistOptions1" id="exampleDataList1"  class="form-control bs" placeholder="< Enter Course Code >">
                                            <datalist id="datalistOptions1">
                                                <?php echo $fileTypes; ?>
                                            </datalist>                                            
                                            <label for="floatingInput">File Type</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-5">
                                        <div class="form-floating mb-3">
                                        <input list="datalistOptions2" id="exampleDataList2"  class="form-control bs" placeholder="< Enter Course Code >">
                                        <datalist id="datalistOptions2">
                                            <?php echo $courses; ?>
                                        </datalist>                                            
                                        <label for="floatingInput">Course Code</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success" style="width: 100%;">Submit</button>
                                    </div>
                                </div>
                            </div>

                            
                        </form>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="user-box">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="text-center" style="font-size: 10rem;"><i class="uil uil-user"></i></h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="text-center">Adib Sakhawat</h3>
                                        <p class="text-center"><strong>210042106</strong> <br>SWE - 21</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="#" class="btn <?php echo $X?>">
                                        <i class="uil uil-pen"></i> Edit Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>









        <footer>
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
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


<style>
    .user-box{
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
    
}
</style>