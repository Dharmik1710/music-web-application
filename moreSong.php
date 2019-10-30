<?php include dbConn.php;

  $bool = true;
if($bool){
      $querySong = "SELECT * FROM songs WHERE Genre = '".$cat["Genre"]."' ";
      $bool = false;
  }else{
      $querySong = "SELECT * FROM songs WHERE Genre = '".$cat["Genre"]."' LIMIT 0, 6 ";
      $bool = true;
}

                $resultSong = mysqli_query($conn, $querySong);
                while($song = mysqli_fetch_assoc($resultSong)){
                  echo
                    '
                      <div class="song-disp mr-3 mt-2">
                        <div class="card my-2 bg-dark">
                          <img class="card-img-top rounded" src="./Album_Art/'.$song["Song_Name"].'.jpg" style="height: 145px; width:145px;">
                          <div class="card-img-overlay text-center mt-5">
                            <i class="material-icons p-1">playlist_add</i>
                            <i class="material-icons p-1" onclick="playPauseSong(this, \''.$song["Song_Name"].'\')">play_arrow</i>
                            <i class="material-icons p-1">thumb_up</i>
                          </div>
                        </div>
                        <div class="song-name text-center mb-3" style="text-overflow: ellipsis; width:140px; white-space: nowrap; overflow: hidden;">'.$song["Song_Name"].'</div>
                      </div>

                    ';
                }
                echo '</div>';
                echo '</div>';
              }
              
              mysqli_close($conn);
    ?>    
              


