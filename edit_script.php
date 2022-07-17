<?php
include 'connect.php';

$u_name=$_POST['name'];
$u_name = mysqli_real_escape_string($con , $u_name);
$u_email=$_POST['email'];
$u_email = mysqli_real_escape_string($con , $u_email);
$u_address=$_POST['address'];
$u_address = mysqli_real_escape_string($con , $u_address);

$email=$_SESSION['email'];
$query="UPDATE users SET name='$u_name',email='$u_email',address='u_address' WHERE email='$email'";
$result=mysqli_query($con , $query) or die(mysqli_error($con));

$query3="SELECT * FROM single_donor WHERE email='$email'";
$result3=mysqli_query($con , $query3) or die(mysqli_error($con));
$rows3 = mysqli_num_rows($result3);

$query4="SELECT * FROM organization WHERE email='$email'";
$result4=mysqli_query($con , $query4) or die(mysqli_error($con));
$rows4 = mysqli_num_rows($result4);

if($rows3!=0){
    $query1="UPDATE single_donor SET email='$u_email' WHERE email='$email'";
    $result1=mysqli_query($con , $query1) or die(mysqli_error($con));
} else if($rows4!=0){
    $query2="UPDATE organization SET email='$u_email' WHERE email='$email'";
    $result2=mysqli_query($con , $query2) or die(mysqli_error($con));
}

header('location:userprofile.php');

?>