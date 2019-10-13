<?php
  require_once "dbConn.php";
  
  $queryCat = "SELECT Artist FROM songs GROUP BY Artist ORDER BY COUNT(*) DESC";
  $resultCat = mysqli_query($conn, $queryCat);
  
  while($cat = mysqli_fetch_assoc($resultCat)){
    echo '<h2>'.$cat["Artist"].'</h2>';
    $querySong = "SELECT * FROM songs WHERE Artist = '".$cat["Artist"]."'";
    $resultSong = mysqli_query($conn, $querySong);
    while($song = mysqli_fetch_assoc($resultSong)){
      echo $song["id"]." ".$song["Song_Name"].'<br>';
    }
  }
  
  mysqli_close($conn);
?>