<?php
  session_start();
  if(isset($_GET['submit'])){
    include "dbConn.php";
    $query = "SELECT id FROM ".$_SESSION['userName']." WHERE id=".$_GET['submit']."";
    $res = mysqli_query($conn, $query);
    $res2 = mysqli_affected_rows($conn);

    if($res2 == 0){
      add();
    }else{
      remove();
    }
    mysqli_close($conn);
    header("Location: stream.php");
  }
  
  function add(){
    include "dbConn.php";
    $queryCat1 = "INSERT INTO ".$_SESSION["userName"]." VALUES (".$_GET["submit"].")";
    echo $queryCat1;
    $res3 = mysqli_query($conn, $queryCat1);
  }
  
  function remove(){
    include "dbConn.php";
    $queryCat2 = "DELETE FROM ".$_SESSION["userName"]." WHERE id=".$_GET["submit"]."";
    
    $res4 = mysqli_query($conn, $queryCat2);
  }
  
?>