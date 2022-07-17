<nav class="navbar sticky-top navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" id="logo" href="#">
                <!-- Red <span>Wings</span> -->
                <img src="./images/5_1-removebg-preview.png" alt="logo" width="50px" height="50px">Red Wings
            </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php" id="home">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#about_us_heading" id="about">ABOUT</a>
                  </li>
                  
                  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="services" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICES
        </a>
        <div class="dropdown-menu" aria-labelledby="services">
          <!-- <a class="dropdown-item" href="#">Donate Blood</a> -->
          <?php
          if(isset($_SESSION['email'])){
          ?>
            <a class="dropdown-item" href="donation.php">Donate Blood</a>
          <?php
          }
          
          else{
          ?>
            <a class="dropdown-item"href="login.php">Donate Blood</a>
          <?php
          }
          ?>
          <a class="dropdown-item" href="ask.php">Ask For Blood</a>
        </div>
      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php#get_in_touch" id="contact">CONTACT US</a>
                  </li>
                </ul>
                <div class="d-flex">
                  <?php if(isset($_SESSION['email'])) { ?>
                    
                      <a href="userprofile.php" class="text-center"><i class='fas fa-user-circle' style='font-size:30px;color:#0f0099;padding-right:2rem;padding-top:2px;' onMouseOver="this.style.color='#af0000'" onMouseOut="this.style.color='#0f0099'"></i></a>
                    
                    
                    <a href="logout.php">
                    <button id="sign" class="btn btn-secondary" type="submit">Logout</button>
                    </a>
                    
                  <?php } else{ ?>  
                    
                    <a href="signup.php">
                    <button id="sign" class="btn btn-outline-danger" type="submit">DONOR LOGIN</button>
                    </a>
                    
                  <?php } ?>
                </div>
              </div>
            </div>
          </nav>
        