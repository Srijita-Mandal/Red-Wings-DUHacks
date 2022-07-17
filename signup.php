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
    <title>Signup</title>
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <br>

<div class="container">
            <div class="row">
                <div class="col-md-6" id="sign_img">
                    <!-- <div id="sign_img"> -->
                    <!-- <img src="./images/signup.png" class="img-responsive signup-image" alt="signup"> -->
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_q5pk6p1k.json" background="transparent"  speed="1"  loop  autoplay></lottie-player>
                    <!-- </div> -->
                </div>
                <div class="col-md-6">
                   <h3 id="signup"><b>SIGN UP</b></h3>
                   <form method="POST" action="signup_script.php" id="signup_form">
                        <div class="form-group">
                            <input type="text" class="form-control signup_field" placeholder="Name" name="name" id="name" required><br>
                            <input type="email" class="form-control signup_field" placeholder="Email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                                ?><br>
                                <input type="password" class="form-control signup_field" placeholder="Password" name="password" id="password" pattern=".{6,}" required>
                                <br>
                                <input type="password" class="form-control signup_field" placeholder="Confirm Password" name="cnf_password" id="cnf_password"required>
                                <br>
                                <?php
                                if(isset($_GET['m3'])){
                                    echo $_GET['m3'];
                                   }
                                   ?>
                                <input type="tel" class="form-control signup_field" placeholder="Phone" name="phone" id="phone" pattern="[789][0-9]{9}" required>
                                <?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?><br> 
                            <input type="text" class="form-control signup_field" name="address" id="address" placeholder="Address" required><br>
                            <button id="submitbtn" type="submit" value="submit" class="btn"> Submit</button><br>
                            <p><i>Registered already? <span id="login"><a href="login.php">Login</a></span></i></p>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
</body>
</html>