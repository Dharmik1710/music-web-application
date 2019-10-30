
<html>

<head>
  <title>Music-Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="stream.css" type="text/css">
</head>

  
<body>

<form action="" method="get">
  <button type="submit" value="song1" name="submit" style="border: 0; padding: 0; background-color: white;"><i class="material-icons">playlist_add</i></button>
</form><br><br>
<form action="" method="get">
  <button type="submit" name="submit" value="song2" style="border: 0; padding: 0; background-color: white;"><i class="material-icons">playlist_add</i></button>
</form><br><br>
<form action="" method="get">
  <button type="submit" name="submit" value="song3" style="border: 0; padding: 0; background-color: white;"><i class="material-icons">playlist_add</i></button>
</form><br><br>
<form action="" method="get">
  <button type="submit" value="song4" name="submit" style="border: 0; padding: 0; background-color: white;"><i class="material-icons">playlist_add</i></button>
</form>  
  
<?php
  if(isset($_GET['submit'])){
    include "dbConn.php";
    $query = "SELECT music_name FROM playlist WHERE music_name='".$_GET['submit']."'";
    $res = mysqli_query($conn, $query);
    $res2 = mysqli_affected_rows($conn);
    echo $res2;
    if($res2 == 0){
      add();
    }else{
      remove();
    }
    mysqli_close($conn);
    header("Location: test.php");
  }
  
  function add(){
    include "dbConn.php";
    $queryCat1 = "INSERT INTO playlist VALUES ('".$_GET["submit"]."', '".$_GET["submit"]."', '".$_GET["submit"]."', '".$_GET["submit"]."')";
    
    $res3 = mysqli_query($conn, $queryCat1);
  
  }
  
  function remove(){
    include "dbConn.php";
    $queryCat2 = "DELETE FROM playlist WHERE music_name='".$_GET["submit"]."'";
    
    $res4 = mysqli_query($conn, $queryCat2);
  }
  
?>
  
<script>
  function myFun(obj){
    var s = checkSong()
    obj.style.color="red";
  };
</script>
    
</body>
</html>