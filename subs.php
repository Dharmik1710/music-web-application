<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Music-Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="home.css" type="text/css">
</head>
    
<body>
    
<section>    
  <nav class="navbar navbar-expand-md bg-light fixed-top navbar-light" style="opacity: 0.8;">
        
    <a href="home.html" class="navbar-brand ml-lg-5 ml-md-3"><img src="round_library_music_black_18dp.png">Music</a>
        
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse mt-2" id="collapsibleNavbar" style="letter-spacing: 0.01em;">
      <ul class="navbar-nav mr-3 ml-auto mr-lg-5">
        <li class="nav-item">
          <strong><a class="nav-link" href="#">Support</a></strong>
        </li>
        <li class="nav-item ">
          <strong><a class="nav-link" href="#">Download</a></strong>
        </li>
        <li class="nav-item">
          <strong><a class="nav-link" href="account.php"><?php echo $_SESSION["userName"]; ?></a></strong>
        </li>
        <li class="nav-item">
          <strong><a class="nav-link" href="logout.php">logout</a></strong>
        </li>
      </ul>
    </div>
      
  </nav>
</section>

  
  
  
<section style="margin-top: 60px;">
  <div class="row">
    <div class="col-lg-12 mt-5">
      <div class="text-center h3">Subscription plans</div>  
    </div>
  </div>  
  
  <div class="row justify-content-around m-4">
    <div class="feature bg-light col-md-5 text-center pb-5 m-4 m-md-4">
      <div class="p-4 display-4">Rs. 0</div>  
      <h4 class="my-3">1 Month Free trial</h4>
      <p>Charged Rs. 0/Month for free trial</p>
      <a href="#"><button class="btn btn-primary">Subscribe</button></a>
    </div>
    <div class="feature bg-light text-center col-md-5 pb-5 m-4 m-md-4">
      <div class="p-4 display-4">Rs. 99</div>  
      <h4 class="my-3">per Month</h4>
      <p>Charged Rs. 99/Month for 1 month.</p>
      <a href="#"><button class="btn btn-primary">Subscribe</button></a>
    </div>
    <div class="feature bg-light text-center col-md-5 pb-5 m-4 m-md-4">
      <div class="p-4 display-4">Rs. 79</div>
      <h4 class="my-3">per Month</h4>
      <p>Charged Rs. 472 for 6 months.</p>
      <a href="#"><button class="btn btn-primary">Subscribe</button></a>
    </div>
    <div class="feature bg-light text-center col-md-5 pb-5 m-4 m-md-4">
      <div class="p-4 display-4">Rs. 59</div>
      <h4 class="my-3">per Month</h4>
      <p>Charged Rs. 702 for 12 months.</p>
      <a href="#"><button class="btn btn-primary">Subscribe</button></a>
    </div>  
  </div>
  
</section>    
  
  
  
    
<section>
  <footer class="page-footer font-small">

    <div class="container text-center text-md-left p-7">

      <div class="row mx-md-4">

        <div class="brand-name col-md-12 col-xl-2 pl-md-0 mb-3">
          <a href="home.html" class="font-weight-light"><img src="round_library_music_black_18dp.png">Music</a>
        </div>

        <div class="fc col-md-6 col-xl-2 mx-auto">
          <h6 class="text-uppercase my-4">Company</h6>
            <ul class="list-unstyled">
              <li class="py-2">
                <a href="#!">About</a>
              </li>
              <li class="py-2">
                <a href="#!">Job</a>
              </li>
            </ul>
        </div>

        <div class="fc col-md-6 col-xl-2 mx-auto">
          <h6 class="text-uppercase my-4">Communities</h6>
          <ul class="list-unstyled">
            <li class="py-2">
              <a href="#!">Artists</a>
            </li>
            <li class="py-2">
              <a href="#!">Developers</a>
            </li>
            <li  class="py-2">
              <a href="#!">Investors</a>
            </li>
          </ul>
        </div>

        <div class="fc col-md-6 col-xl-2 mx-auto">
          <h6 class="text-uppercase my-4">Services</h6>
          <ul class="list-unstyled">
            <li class="py-2">
              <a href="#!">Support</a>
            </li>
            <li class="py-2">
              <a href="#!">Subscribe</a>
            </li>
          </ul>
        </div>    

        <div class="fc col-md-6 col-xl-2 mx-auto">
          <h6 class="text-uppercase my-4">Follow us</h6>
          <ul class="list-inline list-unstyled justify-content-around">
            <li class="list-inline-item"><a href="#!"><img src="icons8-facebook-20.png"></a></li>
            <li class="list-inline-item"><a href="#!"><img src="icons8-twitter-20.png"></a></li>
            <li class="list-inline-item"><a href="#!"><img src="icons8-google-plus-squared-20.png"></a></li>
          </ul>
        </div>

      </div>    
    </div>

    <div class="footer-copyright pb-3 ml-3 ml-lg-5">© 2019 Copyright:
      <a href="home.html"> music.com</a>
        <strong class="text-right mr-3 mr-lg-5"><img src="india-flag-round-icon-16.png" class="mr-2">India</strong>
    </div>
  </footer>
</section>
</body>
</html>