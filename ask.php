<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/5_1-removebg-preview.png" type="image/x-icon">
    <title>Red Wings: ask for blood</title>
    <style>
        #ask_header{
            background-image: url("./images/bg_ask3.jpg");
        }

        p span{
            color:#af0000;
        }

        h3 span{
            color: #af0000;
        }

        .form{
            display: flex;
            justify-content: center;
        }

        label{
          font-size:1.2rem;
        }

        .form-group{
          margin-bottom:2rem;
        }

        #ask_form input{
            background-color: #ffd2d9;
            border-color: #af0000;
            padding: 20px 10px;
            border-radius: 10px;
        }

        #ask_form select{
            background-color: #ffd2d9;
            border-color: #af0000;
            border-radius: 10px;
        }

        #ask_submit{
          display: flex;
          justify-content: center;
        }

        #form_submit{
          background-color: rgb(144,6,6);
          color: #ffffff;
          border-radius: 40px;
          padding: 0.5rem 10rem;
          margin-bottom: 4rem;
          font-size:1.3rem;
          transition-property:box-shadow;
          transition-duration: 200ms;
        }

        @media(max-width:768px){
          #form_submit{
            padding: 0.5rem 5rem;
          }
        }

        #form_submit:hover{
          box-shadow: 8px 8px 10px #a06c7c;
        }
    </style>
</head>
<body>
    <?php
    include 'navbar.php';
    ?>

<div id="ask_header" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 style="color:#af0000;" class="display-4 font-weight-normal">Need Blood?</h1>
        <p style="margin-bottom:5rem;color:#0f0099;" class="lead font-weight-bold">We are always here to serve your needs. Fill the Form below for <span>Fast Delivery</span> from your Nearest <span>Red Wings</span> Branch</span></p>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>

    <div class="container">
        <h3 style="color:#0f0099;text-align:center; margin-top:5rem;margin-bottom:3rem;">Please fill the form with the <span>correct data</span> of the person, <span>needs blood</span></h3>
        <form action="ask_script.php" method="POST" id="ask_form">
            <div class="row">
                <div class="offset-md-2 col-md-8 offset-md-2">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
                </div>

                <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" name="age" id="age" placeholder="age" required>
                </div>

                <div class="row">
            <div class="col">
              <div class="form-group">
              <label for="sex">Sex:</label>
              <select name="sex" id="sex" class="form-control" required>
                <option name="f" value="f">Female</option>
                <option name="m" value="m">Male</option>
                <option name="others" value="others">Others</option>
              </select>
            </div>
            </div>
            <div class="col">
              <div  class="form-group">
              <label for="blood-group">Blood Group:</label>
              <select name="blood_group" id="blood-group" class="form-control" required>
              <option name="O+" value="O+">O+</option>
              <option name="O-" value="O-">O-</option>
              <option name="A+" value="A+">A+</option>
              <option name="A-" value="A-">A-</option>
              <option name="B+" value="B+">B+</option>
              <option name="B-" value="B-">B-</option>
              <option name="AB+" value="AB+">AB+</option>
              <option name="AB-" value="AB-">AB-</option>
              <option name="Others" value="Others">Others</option>
              </select>
            </div>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email address:</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Enter any email address to contact..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required>
            </div>

            <?php
              if(isset($_GET['m1'])){
              echo $_GET['m1'];
              }
            ?>

            <div class="form-group">
            <label for="phone">Phone number:</label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter any phone number to contact..." required>
            </div>
            <?php
              if(isset($_GET['m2'])){
              echo $_GET['m2'] ;
              }
            ?>

            <div class="form-group">
            <label for="doc_name">Doctor's name:</label>
              <input type="text" class="form-control" name="doc_name" id="doc_name" placeholder="Doctor's name" required>
            </div>

            <div class="form-group">
                <label for="branch">Nearby branch:</label>
                <p style="font-size:0.9rem;color:#0f0099">*We can can deliver only within 20km from our branch cities</p>
                  <select name="branch" id="branch" class="form-control" required>
                    <option name="Kolkata" value="Kolkata">Kolkata</option>
                    <option name="Durgapur" value="Durgapur">Durgapur</option>
                    <option name="Siliguri" value="Siliguri">Siliguri</option>
                    <option name="Howrah" value="Howrah">Howrah</option>
                    <option name="Asansol" value="Asansol">Asansol</option>
                    <option name="Kharagpur" value="Kharagpur">Kharagpur</option>
                  </select>
                </div>

                <div class="row">
                <div class="col">
                <div class="form-group">
                <label for="amount">Amount of blood needed:</label>
                  <input type="number" class="form-control" name="amount" id="amount" placeholder="How many units of blood needed" required>
                </div>
                </div>
                <div class="col">
                <div class="form-group">
                <label for="del_date">Delivery date:</label>
                  <input type="date" class="form-control" name="del_date" id="del_date" placeholder="Delivery date" required>
                </div>
                </div>
              </div>

              <div class="form-group">
            <label for="del_address">Delivery address:</label>
              <input style="padding-bottom:5rem;" type="text" class="form-control" name="del_address" id="del_address" placeholder="Delivery address" required>
            </div><br>

            <div id="ask_submit">
            <button id="form_submit" type="submit" value="submit" class="btn"> Submit</button>
            </div>


                </div>
            </div>
        </form>
        
    </div><br>
    <?php include 'footer.php' ?>
</body>
</html>