<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/5_1-removebg-preview.png" type="image/x-icon">
    <title>Red Wings</title>
</head>
<body>
    <?php
    include 'navbar.php';
    ?>


    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <h2 class="home-page-bold-text" style="color: #6b6b6b;letter-spacing:1px"><b style="color: rgb(144, 6, 6); font-size:50px;">Donate</b> Once <br> Save <b style="color: rgb(144, 6, 6); font-size:50px">Millions</b></h2>
            <p class="home-page-desc" style="color: #252525;">
              Red Wings is a vision and All-in-one <br> platform for donating blood and also if you need blood
            </p>
            
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="#about1"><button type="button" class="btn" style="background-color: #af0000; color:#fff; border-radius:18px;padding:0.4rem 1rem">Know more</button></a>
                
                <a href="#contact1"><button type="button" class="btn btn-outline-danger ml-2" style="border-color:af0000;border-radius:18px;border-width:2px;font-weight:500;padding:0.4rem 1.8rem">Join us</button></a>
              </div>
        </div>
        <div class="col-md-6 mt-5" id="home-img">
          <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_ecvwbhww.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
          </div>
      </div>
    </div>


      <br><br><br><br>
      <!--- HomePage Page End --->
      <!-- about Page -->
      <div class="container-fluid my-3"  id="about1" style="background-color: #fff5f6;padding-top:3rem;padding-bottom:3rem">
        <div class="container">
        <h1 id="about_us_heading" style="color: #751a0a;text-align:center;margin-bottom:2rem;">About Us</h1>
          <div class="row">
            <div class="col-md-6">
              <h3 style="color: #751a0a;font-family: 'Roboto Slab', serif;">Outstory</h3>
              <p style="color:#6b6b6b;">You don't have to be doctor to save someones life. Just donate blood. It's safe it's easy and it saves lives. </p>
              <br><br>
              <h3 style="color: #751a0a;font-family: 'Roboto Slab', serif;">What is <b>RED WINGS</b></h3>
              <ul type="dot">
                <li style="color:#6b6b6b;">Want to donate blood? we can help, you can just simply connect with us and become a lifesaver. </li>
                <li style="color:#6b6b6b;">Blood donation is a service to humankind. By donating blood, you help someone in need. </li>
                <li style="color:#6b6b6b;">We are here for make it easy to find blood when needed. </li>
              </ul>
            </div>
            <div class="col-md-6" style="display:flex;flex-direction:column;justify-content:center">
              <div class="button-center" style="display:flex;justify-content:center;">
              <button class="my-3 py-3 about_info" style="
                background-color: #af4263;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: auto;
                width:18rem;
                font-size:1.2rem">500+ Donors</button>
              </div>
              <div class="button-center" style="display:flex;justify-content:center;">
              <button class="my-3 py-3 about_info" style="
                background-color: #ad2c41;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: auto;
                width:18rem;
                font-size:1.2rem">700+ Receivers</button>
              </div>
              <div class="button-center" style="display:flex;justify-content:center;">
              <button class="my-3 py-3 about_info" style="
                background-color: #8b0000;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: auto;
                width:18rem;
                font-size:1.2rem">6 Branches</button>
              </div>
              
            </div>
          </div><br><br>
          <h3 id="our_branch" style="color: #751a0a;font-family: 'Roboto Slab', serif;margin-top:2rem;margin-bottom:2rem;">Our Branches</h3>
          <div class="row">
            <div class="col-md-2">
              <div  style="display:flex;justify-content:center;">
              <img src="./images/location_pin_007-removebg-preview.png" width="70px" height="70px"></div>
              <p style="text-align:center;font-size:1.2rem;font-weight:500;color:#af0000;text-transform:uppercase;">Kolkata</p>
            </div>
            <div class="col-md-2">
              <div  style="display:flex;justify-content:center;">
              <img src="./images/location_pin_007-removebg-preview.png" width="70px" height="70px"></div>
              <p style="text-align:center;font-size:1.2rem;font-weight:500;color:#af0000;text-transform:uppercase;">Durgapur</p>
            </div>
            <div class="col-md-2">
              <div  style="display:flex;justify-content:center;">
              <img src="./images/location_pin_007-removebg-preview.png" width="70px" height="70px"></div>
              <p style="text-align:center;font-size:1.2rem;font-weight:500;color:#af0000;text-transform:uppercase;">Siliguri</p>
            </div>
            <div class="col-md-2">
              <div  style="display:flex;justify-content:center;">
              <img src="./images/location_pin_007-removebg-preview.png" width="70px" height="70px"></div>
              <p style="text-align:center;font-size:1.2rem;font-weight:500;color:#af0000;text-transform:uppercase;">Howrah</p>
            </div>
            <div class="col-md-2">
              <div  style="display:flex;justify-content:center;">
              <img src="./images/location_pin_007-removebg-preview.png" width="70px" height="70px"></div>
              <p style="text-align:center;font-size:1.2rem;font-weight:500;color:#af0000;text-transform:uppercase;">Asansol</p>
            </div>
            <div class="col-md-2">
              <div  style="display:flex;justify-content:center;">
              <img src="./images/location_pin_007-removebg-preview.png" width="70px" height="70px"></div>
              <p style="text-align:center;font-size:1.2rem;font-weight:500;color:#af0000;text-transform:uppercase;">Kharagpur</p>
            </div>
          </div>
        </div>
      </div>

      

       <!--- Services Page Start  --->
       <br><br><br>
      <div class="container" id="service_section">
      <h2 style="text-align: center;"><b style="color: rgba(128, 128, 128, 0.800); font-size: medium;">Get started with</b> <b><u> Red Wings</u></b></h2>
         <h3 style="text-align: center;color:#252525;font-family: 'Roboto Slab', serif;margin-top:1rem;letter-spacing:1px;font-weight:550">What are you looking up to?</h3>
          <div class="row">
            <div class="col-md-6">
            <?php
            if(isset($_SESSION['email'])){
            ?>
            <a href="donation.php" style="text-decoration:none;">
            <div class="card my-5 pb-3">
            <div class="card-body">
              <div class="service-card" style="display:flex;justify-content:center">
              <img src="./images/undraw_medicine_b1ol.png" alt="" width="300px" height="220px">
              </div>
            
                <h4 class="card-title" style="color:#af0000;font-family: 'Roboto Slab', serif;margin-top:2rem;font-weight:550"><b>Donate Blood</b></h4>
                <p class="card-text" style="text-align:center;color:#6b6b6b"><i>"Be the reason of someone's heartbeat."</i><br>
                                                                              Blood donation not only helps other person, it also boosts your heart
                                                                             and liver health, reduce cancer risk. Blood donation will never be harmful for
                                                                             your health. You can help three or four people every time you donate blood.
                                                                             Join RED WINGS to donate blood and save lives. You can donate individually as well as
                                                                             through any organization or blood donation camp. <b>Please click here to donate.</b></p>
                
            </div>
            </div>
            </a>
            <?php
            }
            
            else{
            ?>
            <a href="login.php" style="text-decoration:none;">
            <div class="card my-5 pb-3">
            <div class="card-body">
              <div class="service-card" style="display:flex;justify-content:center">
              <img src="./images/undraw_medicine_b1ol.png" class="services_image" alt="">
              </div>
            
                <h4 class="card-title" style="color:#af0000;font-family: 'Roboto Slab', serif;margin-top:2rem;font-weight:550"><b>Donate Blood</b></h4>
                <p class="card-text" style="text-align:center;color:#6b6b6b"><i>"Be the reason of someone's heartbeat."</i><br>
                                                                              Blood donation not only helps other person, it also boosts your heart
                                                                             and liver health, reduce cancer risk. Blood donation will never be harmful for
                                                                             your health. You can help three or four people every time you donate blood.
                                                                             Join RED WINGS to donate blood and save lives. You can donate individually as well as
                                                                             through any organization or blood donation camp. <b>Please click here to donate.</b></p>
                
            </div>
            </div>
            </a>
            <?php
          }
          ?>
            </div>

            <div class="col-md-6">
              <a href="ask.php" style="text-decoration:none;">
            <div class="card my-5 pb-3">
            <div class="card-body">
            <div class="service-card" style="display:flex;justify-content:center">
              <img src="./images/undraw_medicine_b1ol.png" class="services_image" alt="">
              </div>
                <h4 class="card-title" style="color:#af0000;font-family: 'Roboto Slab', serif;margin-top:2rem;font-weight:550"><b>Ask for Blood</b></h4>
                <p class="card-text" style="text-align:center;color:#6b6b6b"><i>"Just a message away to help you."</i><br>
                                                                              Need blood urgently for your family? friends? neighbors? RED WINGS is always here 
                                                                            to stand beside you. Just fill the form with correct information and we will provide 
                                                                          fastest delivery service to your given address in affordable price. Remember, we can not 
                                                                        deliver so fast if you are from more than 20km from our branches. Never hesitate to ask helping hands.
                                                                       <b>Please click here to request.</b></p>
                
            </div>
            </div>
              </a>
            </div>
          </div>
      </div><br><br>


      
  
      
      
  
        
      <!--- Faq Page Start --->
          <div class="container" id="acc">
          <div class="faq" style="text-align: center; ">
            <h2 style="color: rgb(144, 6, 6);">Frequently Asked Questions</h2>
            <p style="opacity: 56%;">Blood donation program welcomes regular and repeat healthy donors so that it has a steady blood supply for people in need. By starting to give when you are young and donating throughout your life, you may save thousands of lives.</p>
            <p>Still Have Qeustions?? <a href="#contact1"><button type="button" class="btn btn-danger ml-2" style="opacity: 90%;">Know more</button></a></p>
          </div>

          <button class="accordion">After which age you can donate blood?</button>
          <div class="panel">
            <p>After the age of 18 you can donate blood.</p>
          </div>

          <button class="accordion">How many times I can donate blood in a month?</button>
          <div class="panel">
            <p>It's totally up to your body. You can donate blood as many times
                as you want relying upon how quick your body can generate new
                blood.</p>
          </div>

          <button class="accordion">Is it good to donate blood for our health?</button>
          <div class="panel">
            <p>Yes, obviously. If you donate blood, your body is capable enough
                to regenerate new blood in your veins. So Donate blood and save
                millions of lives.</p>
          </div>

          <button class="accordion">When can I donate and ask for blood?</button>
          <div class="panel">
            <p>All of our branches are opened from 10am to 8pm. You can donate or ask for blood
              within this time.
            </p>
          </div>

          <button class="accordion">Is the blood delivery service available outside branch cities?</button>
          <div class="panel">
            <p>We can deliver only within 20kms from our branch cities.</p>
          </div>

          <button class="accordion">How can I pay for blood?</button>
          <div class="panel">
            <p>You can pay online after fill the 'ask for blood' form or you can 
              pay cash on delivery.</p>
          </div>

          <script>
          var acc = document.getElementsByClassName("accordion");
          var i;

          for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
              this.classList.toggle("active");
              var panel = this.nextElementSibling;
              if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
              } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
              } 
            });
          }
          </script>
          </div><br><br><br>
  
      <!--- Faq Page End --->
      
      
    <br>
  <div class="container" id="contact1" style="text-align: center;">
  <h1 id="get_in_touch" class="sec_heading" style="color: rgb(144, 6, 6);margin-bottom:2rem">Get In Touch! </h1>
  <p style="font-size:1.3rem;font-family: 'Roboto Slab', serif;font-weight:550">Contact Us for help or Send us some feedback</p>

  <div style="display:flex;flex-direction:row;justify-content:center">
  <div class="mx-4">
    <a href="#" style="color:#af0000">
  <!-- <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16" data-toggle="tooltip" data-placement="bottom" title="9876543210">>
    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
  </svg> -->
  <abbr title="9876543210"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16" title="">
    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
  </svg></abbr>
        </a>
  </div>
  <!-- <div class="mx-4"><a href="#" style="color:#af0000">
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
  </svg>
      </a>  </div> -->
  <div class="mx-4"><a href="mailto:wingsred2022@gmail.com" style="color:#af0000">
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
  </svg>
  </a></div>
  </div>
  </div><br><br>
  <div class="container">
  <div class="row">
      <div class="col-md-6" id="contact_animation">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_86eeqlid.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
      </div>
      <div class="col-md-6">
          <div id="msg">
      <form method="POST" action="https://formspree.io/f/xknydwza" autocomplete="off">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name" style="font-size:1.1rem;font-weight:500">Name</label>
        <input style="
          background-color: #ffeff1;
          border-color: #af0000;
          padding: 20px 10px;
          border-radius: 10px;" type="text" class="form-control" id="name" name="name" placeholder="Name" autocomplete="off" required>
      </div>
      <div class="form-group col-md-6">
        <label for="email" style="font-size:1.1rem;font-weight:500">Email</label>
        <input style="
          background-color: #ffeff1;
          border-color: #af0000;
          padding: 20px 10px;
          border-radius: 10px;" type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" required>
      </div>
    </div>
    <div class="form-group">
      <label for="subject" style="font-size:1.1rem;font-weight:500">Subject</label>
      <input style="
          background-color: #ffeff1;
          border-color: #af0000;
          padding: 20px 10px;
          border-radius: 10px;" type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject here" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label for="message" style="font-size:1.1rem;font-weight:500">Message</label>
      <textarea style="
          background-color: #ffeff1;
          border-color: #af0000;
          padding: 20px 10px;
          border-radius: 10px;" name="message" rows="5" cols="20" class="form-control" id="message" placeholder="Enter your messages, queries here..." autocomplete="off" required></textarea>
    </div>
    <br>
    <div class="display:flex;flex-direction:row;justify-content:flex-end;">
    <button type="submit" class="mb-5 btn btn-danger" style="background-color: rgb(144, 6, 6);color:#fff;border-radius:10px;padding:0.5rem 2rem;">Submit</button>
    </div>
  </form>
  </div>
      </div>
  </div>
  </div><br>
  
      <!--- Footer Page Start --->
  
      <?php include 'footer.php' ?>
  
      <!--- Footer Page End --->

</body>
</html>