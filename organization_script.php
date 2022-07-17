<?php
include 'connect.php';
    $name=$_POST['name'];
    $name = mysqli_real_escape_string($con , $name);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con , $email);
    $phone = $_POST['phone'];
    $phone = mysqli_real_escape_string($con , $phone);
    $branch = $_POST['branch'];
    $branch = mysqli_real_escape_string($con , $branch);
    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con , $address);
    $donation_date = $_POST['donation_date'];
    $donation_date = mysqli_real_escape_string($con , $donation_date);
    $doctors_name = $_POST['doctors_name'];
    $doctors_name = mysqli_real_escape_string($con , $doctors_name);

    // $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    // $phone_regex = "/^[789][0-9]{9}$/";
    // if(!preg_match($email_regex , $email)){
    //     $error = "<span class='red'>Incorrect Email Id</span>";
    //     header('location:signup.php?m1='.$error);
    // }
    // else if(!preg_match($phone_regex , $phone )){
    //     $error = "<span class='red'>Incorrect phone Number</span>";
    //     header('location:signup.php?m2='.$error);
    // }
    // else{
        $insert_query="INSERT INTO wantdonate_org(name,email,phone,branch,address,donation_date,
                        doctors_name) VALUES('$name','$email','$phone','$branch','$address',
                        '$donation_date','$doctors_name')";
        $query=mysqli_query($con,$insert_query) or die(mysqli_error($con));
        if($query){
            echo "Inserted";
        } else{
            echo "Failed";
        }
        //$_SESSION['email']=$email;
        $_SESSION['donation_date']=$donation_date;
        
        header('location:thank_donor.php');
    // }
?>