<?php
  require_once "dbConn.php";

  $queryCat = "SELECT DISTINCT Genre FROM songs";
  $resultCat = mysqli_query($conn, $queryCat);
  
  while($cat = mysqli_fetch_assoc($resultCat)){
    echo '<h2>'.$cat["Genre"].'</h2>';
    $querySong = "SELECT * FROM songs WHERE Genre = '".$cat["Genre"]."'";
    $resultSong = mysqli_query($conn, $querySong);
    while($song = mysqli_fetch_assoc($resultSong)){
      echo $song["id"].$song["Song_Name"].'<br>';
    }
  }
  
  mysqli_close($conn);
?>
                
                  