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
    <title>Red Wings: Donate</title>
    <style>
        /* body{
            background-image: url("./images/bg5.jpg");
        } */
        .col-md-3{
            display: flex;
            justify-content: center;
        }

        .card-title{
            color: #af0000;
        }

        .card-body{
            text-align: center;
        }
        
        .card{
            border-color: #af0000;
            border-width: 1px;
            border-radius: 20px;
            background-color: #ffeff1;
            margin-top: 1rem;
            transition-property: margin-top;
            transition-duration: 200ms;
        }

        h2{
            text-align:center;
            color: #0f0099;
            margin-top: 1.5rem;
            margin-bottom: 2rem;
        }

        .card:hover{
            margin-top:0.5rem;
        }

    </style>
    
</head>
<body>
    <?php 
    include 'navbar.php';
    ?>
    <h2>Select Donation Type</h2>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Single Donor</h5>
                <p class="card-text">Want to donate as a single donor, directly on Red Wings? You are always welcome. Please fillup the form.</p>
                <a href="single_donor.php" class="btn btn-info">NEXT ></a>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Organization</h5>
                <p class="card-text">Want to donate from a NGO? Want to donate from a Blood Donation Camp? Contact here.</p>
                <a href="organization.php" class="btn btn-info">NEXT ></a>
            </div>
            </div>
            </div>
        </div>
    </div>
    <!-- <div class="container" id="bg_img">
        <h4>Select Donation Type</h4>
        <a href="single_donor.php" class="btn btn-primary">Single Donar</a>
        <a href="organization.php" class="btn btn-primary">Organization</a>

    </div>    -->
</body>
</html>