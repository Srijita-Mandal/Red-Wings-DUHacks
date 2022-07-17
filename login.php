<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/5_1-removebg-preview.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <?php
        include 'navbar.php';
    ?>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="login_img">
                    <!-- <img src="./images/signup.png" class="img-responsive signup-image" alt="signup"> -->
                    <lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_m6j5igxb.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>    
                </div>
            </div>
            <div class="col-md-6">
                <h3 id="login"><b>LOGIN</b></h3>
                <p><i>Don't have an account? <span id="login"><a href="signup.php">Register</a></span></i></p>
                <form method="POST" action="signup_script.php" id="login_form">
                    <div class="form-group">
                    <input type="email" class="form-control login_field" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
                    <input type="password" class="form-control login_field" placeholder="Enter password" name="password" pattern=".{6,}" required><br>
                    <!-- if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        } -->
                    <button id="loginbtn" type="submit" value="submit" class="btn">Login</button>
                    <!-- <p><a href="#">Forgot password?</a></p> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>