<?php
    include 'connect.php';
    
    $id = $_GET['id'];

    
    $insert_query="INSERT INTO receiver(name,age,sex,email,phone,blood_group,doc_name,branch,amount,
                        del_date,del_address) 
                   SELECT name,age,sex,email,phone,blood_group,doc_name,
                        branch,amount,del_date,del_address
                    FROM ask 
                    WHERE id=$id";
    $insert_result=mysqli_query($con,$insert_query) or die(mysqli_error($con));


    $query = "DELETE FROM ask WHERE id=$id";
    $result = mysqli_query($con , $query) or die(mysqli_error($con));
    
    header("location:private_ask.php");

?>