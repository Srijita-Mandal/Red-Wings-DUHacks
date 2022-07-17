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
    <title>Red Wings: payment</title>
    <style>
        #razorpay_btn{
            display:flex;
            justify-content:center;
        }

        .btns{
            display:flex;
            justify-content:center;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;margin-top:3rem;margin-bottom:2rem">Continue payment..</h2>
    <div id="razorpay_btn">
        <div class="card">
            <div class="card-title">
            <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Js5MqURER0Rflq" async> </script> </form>
            </div>
        </div>

    <!-- <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Js5MqURER0Rflq" async> </script> </form> -->
    </div><br><br><br><br><br><br>
    <div class="btns">
    <a href="order.php" class="btn btn-primary" style="margin: 1rem;">< Back</a>
    <a href="cash_on_delivery.php" class="btn btn-primary" style="margin: 1rem;">Next ></a>
    </div>
</body>
</html>

