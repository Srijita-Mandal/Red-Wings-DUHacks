<?php
include 'connect.php';
error_reporting(0);

    $name=$_POST['name'];
    $name = mysqli_real_escape_string($con , $name);
    $age = $_POST['age'];
    $age = mysqli_real_escape_string($con , $age);
    $sex = $_POST['sex'];
    $sex = mysqli_real_escape_string($con , $sex);
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con , $email);
    $phone = $_POST['phone'];
    $phone = mysqli_real_escape_string($con , $phone);
    $blood_group = $_POST['blood_group'];
    $blood_group = mysqli_real_escape_string($con , $blood_group);
    $photo_id = $_FILES['photo_id'];
    $branch = $_POST['branch'];
    $branch = mysqli_real_escape_string($con , $branch);
    $donation_from = $_POST['donation_from'];
    $donation_from = mysqli_real_escape_string($con , $donation_from);
    $donation_to = $_POST['donation_to'];
    $donation_to = mysqli_real_escape_string($con , $donation_to);
    $problems = $_POST['problems'];
    $problems = mysqli_real_escape_string($con , $problems);
    $address = $_POST['address'];
    $address = mysqli_real_escape_string($con , $address);
    //print_r($photo_id);
    // $insert_query="INSERT INTO single(name,age,sex,email,phone,blood_group,donation_date,
    //                     problems,address) VALUES('$name','$age','$sex','$email','$phone','$blood_group',
    //                     '$donation_date','$problems','$address')";
    //     $query=mysqli_query($con,$insert_query) or die(mysqli_error($con));
    //     if($query){
    //         echo "Inserted";
    //     } else{
    //         echo "Failed";
    //     }
    $filename=$_FILES['name'];
    $filepath=$_FILES['tmp_name'];
    $fileerror=$_FILES['error'];
    if($fileerror==0){
        $destination='upload/'.$filename;
        move_uploaded_file($filepath,$destination);
        $insert_query="INSERT INTO wantdonate_single(name,age,sex,email,phone,blood_group,photo_id,branch,donation_from,
                        donation_to,problems,address) VALUES('$name','$age','$sex','$email','$phone','$blood_group',
                        '$destination','$branch','$donation_from','$donation_to','$problems','$address')";
        $query=mysqli_query($con,$insert_query) or die(mysqli_error($con));
        //$_SESSION['email']=$email;
        // $_SESSION['donation_from']=$donation_from;
        // $to_email="srijitamandal6798@gmail.com";
        // $subject="New single donor";
        // $body="New single donor want to donate, check database";
        // $headers="From:wingsred2022@gmail.com";
        // if(mail($to_email,$subject,$body,$headers)){
        //     echo "mail send sucessfully..";
        // } else{
        //     echo "failed";
        // }

    

// include 'PHPMailer\PHPMailer\PHPMailer';
// include 'PHPMailer\PHPMailer\SMTP';
// include 'PHPMailer\PHPMailer\Exception';


// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';


// $mail = new PHPMailer(true);

// try {
 
                  
//     $mail->isSMTP();                                           
//     $mail->Host       = 'smtp.gmail.com';                     
//     $mail->SMTPAuth   = true;                                   
//     $mail->Username   = 'wingsred2022@gmail.com';                    
//     $mail->Password   = 'efptnnofgtntxoos';                             
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
//     $mail->Port       = 465;                                    

  
//     $mail->setFrom('wingsred2022@gmail.com', 'Red Wings');

//     $mail->addAddress('srijitamandal@gmail.com');             


//     $mail->isHTML(true);                                 
//     $mail->Subject = 'Want to donate-single donor'.time();
//     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }


    ?>

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script>
        const form = document.querySelector('#single_donor_form');

        function sendMsg(e){

            e.preventDefault();
            
            const name = document.querySelector('#name');
            const email = document.querySelector('#email');
            // const email_me =  document.querySelector()

            Email.send({
                SecureToken : "c4ad2408-9812-44a2-9e55-cffb140ddbc5",
                To : 'srijitamandal6798@gmail.com',
                From : "wingsred2022@gmail.com",
                Subject : "New Single donor want to donate",
                Body : name.value,
            }).then(
            message => alert(message)
            );
        }

        form.addEventListner('submit',sendMsg);
        
    </script>

    <?php
        
        header('location:thank_donor.php');
    }

?>