<?php
    require_once "dbConn.php";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $dd=$_POST["date"];
        $mn=$_POST["month"];
        $yr=$_POST["year"];
        $d=date("Y-m-d", strtotime($dd.$mn.$yr));

        $sql = "INSERT INTO userdetails (Username, Email, Password, Date_Of_Birth, Gender, Mobile_Number) VALUES ('".$_POST["Uname"]."', '".$_POST["email"]."', '".$_POST["pswd"]."', '".$d."', '".$_POST["gender"]."', '".$_POST["mobNo"]."')";

        if (mysqli_query($conn, $sql)) {
            session_start();
            $_SESSION["userEmail"] = $_POST["email"];
            $_SESSION["userName"] = $_POST["Uname"];
            $playlist = "CREATE TABLE ".$_SESSION['userName']." (id INT(6) NOT NULL)";
            mysqli_query($conn, $playlist);
            header("Location: subs.php");
        } else {
            echo '<div class="alert alert-info">
                    <strong>Please try loging in.</strong> You alredy have an account !
                  </div>';
        }
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Music-signUp</title>
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
                <br><div class="text-center"><h5>Sign Up with Email ID</h5></div><br>
                <form action="signup.php" method="post" class="col-*" class="was-validated">

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="Uname" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="pswd" required>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Mobile Number" name="mobNo" required>
                </div>

                <span class="custom-control-description text-black-50">Date Of Birth</span>
                <div class="form-inline justify-content-between">
                    <input type="number" class="form-control col-2" name="date" value="date" placeholder="DD" min="1" max="31" required>

                    <select class="form-control col-5" name="month" value="month">
                        <option value="Month">Month</option>
                        <option value="Jan">January</option>
                        <option value="Feb">February</option>
                        <option value="Mar">March</option>
                        <option value="Apr">April</option>
                        <option value="May">May</option>
                        <option value="Jun">June</option>
                        <option value="Jul">July</option>
                        <option value="Aug">August</option>
                        <option value="Sep">September</option>
                        <option value="Oct">October</option>
                        <option value="Nov">November</option>
                        <option value="Dec">December</option>
                    </select>

                    <input type="number" class="form-control col-3" name="year" value="year" placeholder="YYYY" min="1970" max="2019" required>
                </div><br>

                <div class="text-center">
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" value="Male">Male
                    </div>

                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" value="Female">Female
                    </div>

                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" value="Other">Other
                    </div><br>
                </div>
                
                <br>  

                <div class="custom-control custom-checkbox text-center">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="tAndC">
                    <label class="custom-control-label" for="customCheck"> You agree to Music's <a href="#">Terms and Conditions</a>.</label>
                </div><br>

                <div class="text-center"><button type="submit" class="btn btn-primary">Sign Up</button></div><hr>
              </form>
              <div class="logIn text-center">Already have an account ?<a href="login.php"> Log In</a></div><br><br>
            </div>
        </div>
    </div>
      
</body>
</html>