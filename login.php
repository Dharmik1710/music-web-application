<?php
    require_once "dbConn.php";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $e=$_POST["email"];
      $p=$_POST["pswd"];
        
      $sql = "SELECT * FROM userdetails WHERE Email='".$e."'";
      $res1 = mysqli_query($conn, $sql);
      $res2 = mysqli_affected_rows($conn);
      $row = mysqli_fetch_assoc($res1);
      if ($res2==1) {
        if($row["Password"]==$p){
          session_start();
          $_SESSION["userEmail"] = $e;
          $_SESSION["userName"] = $row["Username"];
          header("Location: stream.php");
        }else{
          echo '<div class="alert alert-warning">
                <strong>Warning</strong> Your Password is incorrect !
              </div>';
        }
      } else {
          echo '<div class="alert alert-warning">
                <strong>Warning</strong> Your Email is incorrect !
              </div>';
      }
    }

    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Music-logIn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="form.css" type="text/css">
</head>
<body>
    <div class="container text-center">
        <br><a href="home.html" style="font-size: 35px; color: black;"><img src="./icons/round_library_music_black_18dp.png" style="padding: 5px;">Music</a>      
        <p>listen music everytime</p><hr>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-sm-6 col-md-6 col-lg-6 col-xl-5">
                <br><div class="text-center"><h5>Log In to Music</h5></div><br>
                <form action="" method="post" class="col-*" class="was-validated">

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="pswd" required>
                    </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="tAndC">
                    <label class="custom-control-label" for="customCheck">Remember me</label>
                </div><br>

                <div class="text-center"><button type="submit" class="btn btn-primary">Log In</button></div><br>
                <div class="forgotPass text-center"><a href="passReset.html">Forgot your password ?</a></div><br><hr><br>
              </form>
              <div class="signUp text-center"><h5>Don't have an account ?<a href="signup.php"> Sign Up</a></h5></div><br><br>
              <div class="text-center"><p>By loging in, you agree to Music's <a href="#">Terms and Conditions</a>.</p></div>
            </div>
        </div>
    </div>
      
</body>
</html>