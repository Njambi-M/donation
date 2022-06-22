<!DOCTYPE HTML>
<head>
<title>Blood Aid</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <link rel="shortcut icon" href="images\Logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="fixed-navbar">
    <img id="logo" src="images/Logo.png" width="100"height="100"> 
            <ul class="nav-links">
                <li id="nav-pages"> <a href="homepage.php" style="color:#B22222;">Home</a> </li>
                <li id="nav-pages" class="dropdown">
                            <a href="#" class="dropdown-toggle"  data-bs-toggle="dropdown">Register</a>
                            <ul class="dropdown-menu">
                                <li class="donor"><a href="donor_registration.php">Donor</a></li>
                                <li class="hosp"><a href="hospital_registration.php">Hospital</a></li>
                            </ul>
                        </li>
            <li id="nav-pages"><a href="login.php">Login</a></li>
            <li id="nav-pages">    <a href="#">Blood Drives</a> </li>
              <li id="nav-pages">    <a href="#">More Info</a> </li>
                <li id="nav-pages">    <a href="#" >Contact Us</a> </li>
            </ul>
    </nav>

    <div class="main">
    <main>
    <div class="call-to-action">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="images/headline2.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" /></svg>
        <!-- <img src="images/headline2.png" style="height: 100%; width: 100%; "> -->
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>BLOOD AID</h1>
            <p>Providing easy access to donation facilities.</p>
            <p><a class="btn btn-lg btn-primary" href="login.php">Donate today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>BLOOD AID</h1>
            <p>Get up to date information on blood donation.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="images/headline2.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" /></svg>
        <!-- <img src="images/cover.jpg" style="height: 100%; width: 100%; "> -->

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>BLOOD AID</h1>
            <p>Get a pool of blood donors when faced with a shortage.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
        <div class="benefits">
            <h1>Why you should become a donor</h1><hr><br>
            <div class="features-area half-bg bg-gray default-padding bottom-less">
        <div class="container">
            <div class="features-box text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-3 single-item">
                        <div class="item">
                                <h5>Save lives</h5>
                                <!-- <ul>
                                    <li>
             <p>Just 3 teaspoonfuls of your blood can save a premature baby. 1 pint can save many lives</p>
                                    </li>
                                </ul> -->
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-3 single-item">
                        <div class="item">
                                <h5>It is free</h5>
                                <!-- <ul>
                                    <li>
             <p>Donating blood is free of charge at any donation centre and hospital.</p>
                                    </li>
                                </ul> -->
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-3 single-item">
                        <div class="item">
                            
                                <h5>Free blood test</h5>
                                <!-- <ul>
                                    <li>
             <p>Donated blood is tested and the results will be availed to you at no extra cost.</p>
                                    </li>
                                </ul> -->
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-3 single-item">
                        <div class="item">
                            
                                <h5>Snacks are provided</h5>
                                <!-- <ul>
                                    <li>
             <p>After donating, you will be provided with a small snack to increase your energy.</p>
                                    </li>
                                </ul> -->
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>  
        
        </div>
    </div>
        </div>
</div>
        <div class="process">
        <div class="container">
        <div class="container-fluid">


                    <h1> The Donation Process</h1><br><br>
     
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
           <img class="card-img-top" alt="confirm appointment" src="images/appointment.jpg">

          <div class="card-body">
            <h4 class="card-title">Confirm appointment</h4>
            <p class="card-text">Your appointment or registration will be confirmed by a medical practitioner and your data will be captured.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
         <img class="card-img-top" alt="screening" src="images/screening.jpg">
          <div class="card-body">
           <h4 class="card-title">Screening</h4>
            <p class="card-text">A drop of your blood will be taken for screening and you will be informed whether you are eligible to donate based on your iron levels.</p>

          </div>
        </div>
      </div>
 
      <div class="col">
        <div class="card h-100">
             <img class="card-img-top" alt="donate" src="images/donate.jpg">
          <div class="card-body">
       <h4 class="card-title">Donate</h4>
      <p class="card-text">If the screening is successful, the donation process will begin.</p>
          </div>
        </div>
      </div>
 
      <div class="col">
        <div class="card h-100">
       <img class="card-img-top" alt="snack" src="images/drink.jpg">

          <div class="card-body">
<h4 class="card-title">Have a snack</h4>                                                      
  <p class="card-text">After donating, snacks are provided as you wait a few minutes to regain energy.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
        <img class="card-img-top" alt="testing" src="images/testing.jpg">
          <div class="card-body">
            <h4 class="card-title">Testing</h4>
      <p class="card-text">The blood will be tested for various infections.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
         <img class="card-img-top" alt="results" src="images/results.jpg">
          <div class="card-body">
            <h4 class="card-title">Receive results</h4>
         <p class="card-text">Once the test results are available, you will receive a prompt to view them from your account.</p>
          </div>
        </div>
      </div>
    </div>

  </div>

      </div>
</div>

<div class="features">
<div class="container px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom">Features</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <div>
          <h4 class="fw-bold mb-0">Book Appointment</h4>
          <p>Donors can book an appointment at a hospital.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div>
          <h4 class="fw-bold mb-0">View blood drives</h4>
          <p>Donors can view blood drives available and register for one of them.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div>
          <h4 class="fw-bold mb-0">Get Results </h4>
          <p>Donors receive their test results when they are availed by the hospital.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div>
          <h4 class="fw-bold mb-0">Donation History</h4>
          <p>Donors can view their donation history and keep track of when they can donate next.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div>
          <h4 class="fw-bold mb-0">Schedule Blood Drives</h4>
          <p>Hospitals can schedule blood drives at various locations.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div>
          <h4 class="fw-bold mb-0">Prompt donors to donate</h4>
          <p>When a blood shortage is nearing, hospitals can send out alerts to donors encouraging them to donate at their facility.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div>
          <h4 class="fw-bold mb-0">Provide answers to questions on blood donation</h4>
          <p>Hospitals can post information on blood donation based on questions sent by donors.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div>
          <h4 class="fw-bold mb-0">Keep track of blood donated</h4>
          <p>Hospitals can keep track of blood donated at a specific blood drive thus ensuring it is all accounted for.</p>
        </div>
      </div>
    </div>
  </div>


</div>

<div class="footer">
<div class="container">
  <footer class="py-3 ">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Hospitals</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Blood drives</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
    </ul>
    <p class="text-center">&#169; Copyright. All Rights reserved</p>
  </footer>
</div>
</div>
    </main>
</div>
</body>
</html>