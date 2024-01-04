<?php
    require_once "../utility.php";
    $error = "";
    $conn = connect::getConnect()->getConnection();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $uname = $_POST['sid'];
        $pass = $_POST['password'];

        $sql = "SELECT sid, fullName, batch, pass FROM `shuser` WHERE `sid` = '$uname'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($pass, $row['pass'])) {
                session_start();
                $_SESSION['sid'] = $uname;
                $_SESSION['name'] = $row['fullName'];
                $_SESSION['batch'] = $row['batch'];
                header("Location: ../dashboard/");
            } else {
                $error = "Password is incorrect";
            }
        } else {
            $error = "Username does not exist";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
    <div class="sh-login-sec">
        <div class="container">
            <div class="row">
                <div class="col-10 col-lg-4 offset-lg-4 offset-1">
                    <h1 class="text-center">login</h1>
                    <form action="../login/" method="post">
                        <div class="form-floating mb-3 mt-4">
                            <input type="number" class="form-control" id="floatingInput" name = "sid" placeholder="name@example.com">
                            <label for="floatingInput">Student ID</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name = "password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button type="submit" class="btn btn-danger mt-4" style="width: 100%;">login</button>
                    </form>
                    <div class="back-link text-center mt-3">
                        <a href="../">Back to home</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <?php
                        echo "<p class='text-center text-danger mt-3'>$error</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>


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


<style>
    .sh-login-sec{
    min-height: 68vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
</style>