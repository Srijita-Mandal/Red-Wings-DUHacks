<?php
$con=mysqli_connect("localhost","root","","redwings") or die(mysqli_error($con));
if(!isset($_SESSION['email'])){
    session_start();
}
?>