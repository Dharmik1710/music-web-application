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
          $sql1="SELECT * FROM subscription WHERE Email='".$_SESSION["userEmail"]."'";
          mysqli_query($conn, $sql1);
          $res = mysqli_affected_rows($conn);
          if($res==1){
            header("Location: stream.php");
          } else{
            header("Location: subs.php");
          }
        }else{
          echo '<div class="alert alert-warning">
                <strong>Warning</strong> Your Password is incorrect !!
              </div>';
        }
      } else {
          echo '<div class="alert alert-warning">
                <strong>Warning</strong> Your Email Id is incorrect !!
              </div>';
      }
    }

    mysqli_close($conn);
?>