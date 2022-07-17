<?php
include 'connect.php';
// error_reporting(0);
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
    <title>Red Wings: ask for blood</title>
    <style>
        .box{
            background-color: #ffd2d9;
            padding: 5rem;
            margin:3rem;
            border-radius: 10px;
        }

        h2{
            text-align: center;
            color: #0f0099;
        }

        span{
            color:#af0000;
        }

        h4{
            text-align: center;
            color: #af0000;
        }

        p{
            text-align:center;
        }

        .btns{
            display:flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php

$name=$_POST['name'];
$name = mysqli_real_escape_string($con , $name);
$age = $_POST['age'];
$age = mysqli_real_escape_string($con , $age);
$sex = $_POST['sex'];
$sex = mysqli_real_escape_string($con , $sex);
$blood_group = $_POST['blood_group'];
$blood_group = mysqli_real_escape_string($con , $blood_group);
$phone = $_POST['phone'];
$phone = mysqli_real_escape_string($con , $phone);
$email = $_POST['email'];
$email = mysqli_real_escape_string($con , $email);
$doc_name = $_POST['doc_name'];
$doc_name = mysqli_real_escape_string($con , $doc_name);
$branch = $_POST['branch'];
$branch = mysqli_real_escape_string($con , $branch);
$amount = $_POST['amount'];
$amount = mysqli_real_escape_string($con , $amount);
$del_date = $_POST['del_date'];
$del_date = mysqli_real_escape_string($con , $del_date);
$del_address = $_POST['del_address'];
$del_address = mysqli_real_escape_string($con , $del_address);


    // $select_branch="SELECT branch FROM ask WHERE id=(SELECT max(id) FROM ask)";
    // $select_branch_query=mysqli_query($con , $select_branch) or die(mysqli_error($con));
    // $row_branch=mysqli_fetch_array($select_branch_query);

    // $select_group="SELECT blood_group FROM ask WHERE id=(SELECT max(id) FROM ask)";
    // $select_group_query=mysqli_query($con , $select_group) or die(mysqli_error($con));
    // $row_group=mysqli_fetch_array($select_group_query);

    $query1="SELECT * FROM single_donor WHERE branch='$branch' AND blood_group='$blood_group'";
    $result1=mysqli_query($con , $query1) or die(mysqli_error($con));
    $select_rows1 = mysqli_num_rows($result1);

    $query2="SELECT * FROM organization WHERE branch='$branch'";
    $result2=mysqli_query($con , $query2) or die(mysqli_error($con));
    $select_rows2 = mysqli_num_rows($result2);

    // echo $select_rows1;
    // echo $select_rows2;


    if($select_rows1<1 && $select_rows2<1){
    ?>
    <div class="box">
    <h2><span>Extremely Sorry!</span> Your required blood group is currently unavailable in your nearest Red Wings branch 😞 </h2><br>
    
    <p style="color:#af0000;">-------Red Wings------</p><br><br>
    <div class="btns">
    <a href="index.php" class="btn btn-primary">Back to home</a>
    </div>
    </div>

    <?php
    } else if($select_rows1>0 || $select_rows2>0){

        $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        $phone_regex = "/^[789][0-9]{9}$/";
        
        if(!preg_match($phone_regex , $phone )){
            $error = "<span class='red'>Incorrect phone Number</span>";
            header('location:ask.php?m2='.$error);
        }
        else if(!preg_match($email_regex , $email)){
            $error = "<span class='red'>Incorrect Email Id</span>";
            header('location:ask.php?m1='.$error);
        }
        else{
            $insert_query="INSERT INTO ask(name,age,sex,email,phone,blood_group,doc_name,branch,amount,
                            del_date,del_address) VALUES('$name','$age','$sex','$email','$phone','$blood_group',
                            '$doc_name','$branch','$amount','$del_date','$del_address')";
            $query=mysqli_query($con,$insert_query) or die(mysqli_error($con));

            // header('location:order.php');
        }
    ?>


    <div class="box">
        <h2>Choose payment option</h2><br>
        <div class="btns">
        <a href="cash_on_delivery.php" class="btn btn-primary" style="margin: 1rem;">Cash on delivery</a>
        <a href="razorpay.php" class="btn btn-primary" style="margin: 1rem;">Pay online</a>
        </div>

    </div>

    <?php
    }
    ?>
</body>
</html>