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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./images/5_1-removebg-preview.png" type="image/x-icon">
    <title>Red Wings: Ask for blood</title>
    <style>
        .home-btn{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
<h3 style="text-align: center;">Ask for blood</h3>
    <table class="table table-striprd table-responsive">
        <?php
            $query="SELECT * FROM ask";
            $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
            
        ?>
        
    <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Sex</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Doctor's name</th>
      <th scope="col">Branch</th>
      <th scope="col">Blood Amount</th>
      <th scope="col">Delivery date</th>
      <th scope="col">Delivery Address</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (mysqli_num_rows($query_result) >= 1){
        while ($row = mysqli_fetch_array($query_result)){
            echo "<tr><th scope='row'>"."#".$row["id"].
                    "</th><td>".$row["name"]."</td><td>".$row["age"].
                    "</td><td>".$row["sex"]."</td><td>".$row["blood_group"].
                    "</td><td>".$row["email"]."</td><td>".$row["phone"].
                    "</td><td>".$row["doc_name"]."</td><td>".$row["branch"].
                    "</td><td>".$row["amount"]."</td><td>".$row["del_date"].
                    "</td><td>".$row["del_address"].
                    "</td><td><a href='private_ask_script.php?id={$row['id']}' class='remove_item_link btn btn-success btn-block'> Done</a></td></tr>";
        }
    ?>
  </tbody>


  <?php
            } else{
                
                echo "Empty table";
            }
        ?>
    </table><br><br><br>
    <div class="home-btn">
        <a href="index.php" class="btn btn-info">Back to home</a>
    </div>
    <br><br>
</body>
</html>