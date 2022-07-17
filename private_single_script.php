<?php
    include 'connect.php';
    
    $id = $_GET['id'];

    
    $insert_query="INSERT INTO single_donor(name,age,sex,email,phone,blood_group,branch,donation_from,
                        donation_to,problems,address) 
                   SELECT name,age,sex,email,phone,blood_group,
                        branch,donation_from,donation_to,problems,address 
                    FROM wantdonate_single 
                    WHERE id=$id";
    $insert_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));

    $query2="INSERT INTO donation_history (email,date) SELECT email,donation_to FROM wantdonate_single WHERE id=$id";
    $result2=mysqli_query($con,$query2) or die(mysqli_error($con));


    $query_del = "DELETE FROM wantdonate_single WHERE id=$id";
    $result_del = mysqli_query($con , $query_del) or die(mysqli_error($con));
    
    header("location:private_want2donate.php");

?>