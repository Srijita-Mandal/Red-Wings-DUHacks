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
    <title>Red Wings: organization donation form</title>
    <style>
        .card-title{
            margin-top: 4rem;
            color: #af0000;
        }

        .card{
            margin-bottom: 4rem;
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

        #single_donor_form input{
            background-color: #ffd2d9;
            border-color: #af0000;
            padding: 20px 10px;
            border-radius: 10px;
        }

        #single_donor_form select{
            background-color: #ffd2d9;
            border-color: #af0000;
            border-radius: 10px;
        }

        #single_donor_submit{
          display: flex;
          justify-content: center;
        }

        #form_submit{
          background-color: rgb(144,6,6);
          color: #ffffff;
          border-radius: 40px;
          padding: 0.5rem 10rem;
          margin-bottom: 4rem;
          font-size:1.5rem;
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

        #donor_header{
            background-image: url("./images/bg_donor.jpg");
        }

        .donationrule{
          background-color: rgba(255,255,255,0.3);
          padding-left: 2rem;
          border-radius: 10px;
        }

    </style>
</head>
<body>
    <?php
    include 'navbar.php';
    ?>

<div id="donor_header" class="position-relative overflow-hidden p-3 p-md-2 m-md-3 bg-light">
      <div class="col-md-6 p-lg-5 mx-auto my-5">
        <h2 class="card-title text-center">Donation Rules</h2>
        
        <ul class="card-body donationrule">
            <li>The Donar must be fit, not suffering from any blood related diseases (Anemia, Talassemia, Haemophilia)</li> 
            <li> Weight not less than 50 Kg</li>
            <li>Haemoglobin not less than 12.5g/Dl</li>
            <li>Pulse between 50-100 no irregularities</li>
            <li>Donar should not suffering from any chronic diseases like Diabetis,Blood pressure,HIV.</li>
            <li>Eat a wholesome meal about 2-3 hours before donating to keep your blood sugar stable.</li>
            <li>You can choose a date range and come any day in that range, to your nearby Red Wings branch to donate.</li>
            <li>Each branch of Red Wings is opened 10am to 8pm everyday.</li>
        </ul>
      </div>
      
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
    

    <div class="container">
        <h3 style="color:#0f0099;text-align:center; margin-top:5rem;margin-bottom:3rem;">Please <span>Register</span> to donate from <span>NGO, Blood Donation Camp</span></h3>
        
        <form method="POST" action="organization_script.php" id="single_donor_form" enctype="multipart/form-data">
        <div class="row">
          <div class="offset-md-2 col-md-8 offset-md-2">
            <div class="form-group">
              <label for="name">Organization Name:</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter NGO or Donation Camp name" required>
            </div>

            <div class="form-group">
            <label for="email">Email address:</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required>
            </div>

            <?php
              if(isset($_GET['m1'])){
              echo $_GET['m1'];
              }
            ?>

            <div class="form-group">
            <label for="phone">Phone number:</label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="phone" required>
            </div>
            <?php
              if(isset($_GET['m2'])){
              echo $_GET['m2'] ;
              }
            ?>

                <div class="form-group">
                <label for="branch">Nearby branch to donate:</label>
                  <select name="branch" id="branch" class="form-control" required>
                    <option name="Kolkata" value="Kolkata">Kolkata</option>
                    <option name="Durgapur" value="Durgapur">Durgapur</option>
                    <option name="Siliguri" value="Siliguri">Siliguri</option>
                    <option name="Howrah" value="Howrah">Howrah</option>
                    <option name="Asansol" value="Asansol">Asansol</option>
                    <option name="Kharagpur" value="Kharagpur">Kharagpur</option>
                  </select>
                </div>
                
                <div class="form-group">
                    <label for="donation_date">Donation date:</label>
                    <input type="date" class="form-control" name="donation_date" id="donation_date" placeholder="Donation date" required>
                </div>

            <div class="form-group">
            <label for="address">Address:</label>
              <input style="padding-bottom:5rem;" type="text" class="form-control" name="address" id="address" placeholder="Address of NGO, place of organization for blood donation camp..." required>
            </div>

            <div class="form-group">
                <label for="doctors_name">Doctor's name:</label>
                <input type="text" class="form-control" name="doctors_name" id="doctors_name" placeholder="Doctor's name" required>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="yes" id="yes" value="checkedValue" required>
                Please make sure the donor has no specific physical problems.
                </label>
            </div><br><br>

            <div id="single_donor_submit">
            <button id="form_submit" type="submit" value="submit" class="btn"> Submit</button>
            </div>
          </div>
        </div>
        
  
  
    </form>

    </div><br>
    <?php include 'footer.php' ?>
</body>
</html>