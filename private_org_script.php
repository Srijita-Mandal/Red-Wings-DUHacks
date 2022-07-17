<?php 
    include 'connect.php';

    $id=$_GET['id'];


    $insert_query="INSERT INTO organization(name,email,phone,branch,donation_date,
                        address,doctors_name) 
                   SELECT name,email,phone,branch,donation_date,address,doctors_name
                    FROM wantdonate_org
                    WHERE id=$id";
    $insert_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));

    $query2="INSERT INTO donation_history (email,date) SELECT email,donation_date FROM wantdonate_org WHERE id=$id";
    $result2=mysqli_query($con,$query2) or die(mysqli_error($con));



    $query = "DELETE FROM wantdonate_org WHERE id=$id";
    $result = mysqli_query($con , $query) or die(mysqli_error($con));
    
    header("location:private_want2donate.php");
?>