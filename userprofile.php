<?php include 'connect.php' ?>

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
    <title>Red Wings: Userprofile</title>
    <style>
        .card{
            width: 30rem;
            border:none;
            border-radius: 15px;
            box-shadow: 3px 3px 10px #af0000;
        }
        .profile-pic{
            width: 150px;
            height:150px;
        }

        #p_pic{
            display: flex;
            justify-content: center;
        }

        #bio{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        @media(max-width:768px){
            #bio{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        }

        p span{
            font-size: 1.2rem;
            font-weight: 500;
        }

        p a span{
            color: #000000;
            background-color: #ffd2d9;
            border-radius: 10px;
            padding-left: 2px;
            padding-right: 2px;
            padding-bottom: 2px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php' ?>
    <br><br>

    <?php
        $email=$_SESSION['email'];
        // echo $email;
        $query1="SELECT name FROM users WHERE email='$email'";
        $result1=mysqli_query($con , $query1) or die(mysqli_error($con));
        $row1=mysqli_fetch_array($result1);

        $query2="SELECT address FROM users WHERE email='$email'";
        $result2=mysqli_query($con , $query2) or die(mysqli_error($con));
        $row2=mysqli_fetch_array($result2);
        // echo $row[0];
    ?>

    <div style="display:flex;justify-content:center;">
    <div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-md-6" id="p_pic">
            <?php
                $query3="SELECT sex FROM single_donor WHERE email='$email'";
                $result3=mysqli_query($con , $query3) or die(mysqli_error($con));
                $rows3 = mysqli_num_rows($result3);

                $query4="SELECT * FROM organization WHERE email='$email'";
                $result4=mysqli_query($con , $query4) or die(mysqli_error($con));
                $rows4 = mysqli_num_rows($result4);

                if($rows3!=0){
                    $row3=mysqli_fetch_array($result3);
                    if($row3[0]=='f'){
                ?>
                <img src="./images/girl.jpg" alt="profile-pic" class="profile-pic">
                <?php
                    } else if($row3[0]=='m'){
                ?>
                <img src="./images/boy2.jpg" alt="profile-pic" class="profile-pic">
                <?php
                    } else{
                ?>
                <img src="./images/boy2.jpg" alt="profile-pic" class="profile-pic">
                <?php
                    }
                } else if($rows4!=0){
                ?>

                <img src="./images/team.jpg" alt="profile-pic" class="profile-pic">
                <?php
                } else{
                    ?>

                <img src="./images/default.jpg" alt="profile-pic" style="border-radius:50%;" class="profile-pic">
                <?php
                }
            ?>
            <!-- <img src="./images/boy2.jpg" alt="profile-pic" class="profile-pic"> -->
        </div>
        <div class="col-md-6" id="bio">
            <h4 class="card-title" style="color: #af0000;margin-bottom:0;"><?php echo $row1[0] ?></h4>
            <p style="color: #0f0099;">
            <?php
            if($rows3!=0){
            ?>
            Single Donor
            <?php
            } else if($rows4!=0){
                ?>
                Organization
                <?php
            } else {
                ?>
            . . . .
            <?php
            }
            ?>
            </p>
        </div>
    </div><br>

    <p style="text-align:center">Name:    <span>  <?php echo $row1[0] ?></span></p>
    <p style="text-align:center">Email:    <a href="mailto:<?php echo $email ?>"><span>  <?php echo $email ?></span></a></p>
    <p style="text-align:center; padding-left:2rem;padding-right:2rem;">Address:    <span>  <?php echo $row2[0] ?></span></p><br>

    
    </div>
  <ul class="list-group list-group-flush">
    <!-- <li class="list-group-item" style="display:flex;justify-content:center;"><a href="edit.php" class="btn btn-primary">Edit profile</a></li> -->
    <li class="list-group-item"><h5>Donation history</h5>
            <table class="table table-striprd table-responsive">
                <?php
                $query5="SELECT * FROM donation_history WHERE email='$email'";
                $result5=mysqli_query($con , $query5) or die(mysqli_error($con));
                $rows5 = mysqli_num_rows($result5);

                // $query6="SELECT donation_date FROM organization WHERE email='$email'";
                // $result6=mysqli_query($con , $query6) or die(mysqli_error($con));
                // $rows6 = mysqli_num_rows($result6);
                ?>

                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Donation date</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    if($rows5>=1){
                        $row5=mysqli_fetch_array($result5);
                        echo "<tr><th scope='row'>".'1'.
                                "</th><td>".$row5["date"]."</td></tr>";
                    } 
                    // else if($rows6!=0){
                    //     $row6=mysqli_fetch_array($result6);
                    //     echo "<tr><th scope='row'>".'1'.
                    //             "</th><td>".$row6[0]."</td></tr>";
                    // } 
                    else{
                        echo '<p>No donation done yet.';
                    }
                    ?>
                </tbody>
            </table>
    </li>
    <li class="list-group-item"><h5>Donation Certificates</h5>
            <p>Your Donation Certificate will be available soon! Stay Connected 😃
    </li>
  </ul>
  
    </div>
</div><br><br><br><br>
<?php include 'footer.php' ?>

</body>
</html>