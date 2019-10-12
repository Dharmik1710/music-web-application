<?php
  session_start();
?>

<html lang="en">
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
    
<body style="">
  <div></div>
    
<section>

  <div class="row">
    <section class="side-nav col-2">
      <div class="col-2 p-0 fixed-top text-center" style="background-color: black; height: 580px;">
        <div class=""><a href="#home" class="navbar-brand p-2 mt-2 mb-5 font-weight-light"><img src="./icons/round_library_music_black_18dp.png">Music</a></div>

        <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active py-2" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" aria-controls="v-pills-home" aria-selected="true">Home</a>
          <a class="nav-link py-2" id="v-pills-playlists-tab" data-toggle="pill" href="#v-pills-playlists" role="tab" aria-controls="v-pills-playlists" aria-selected="false">Playlists</a>
          <a class="nav-link py-2" id="v-pills-artists-tab" data-toggle="pill" href="#v-pills-artists" role="tab" aria-controls="v-pills-artists" aria-selected="false">Artists</a>
          <a class="nav-link py-2" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false">Account</a>
          <a class="nav-link py-2" href="logout.php">Logout</a>
        </div>
      </div>
    </section>
    
    
    
    <section class="song-disp col-10 pl-2">
      <div class="overflow-auto mx-auto" style="background-color: rgb(38, 38, 38); height: 550px;">

        <div class="tab-content" id="v-pills-tabContent">


          <div class="tab-pane fade show active mx-5 my-4" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <ul class="nav my-4" id="pills-tab" role="tablist">
              <li class="nav-item mr-3">
                <a class="nav-link active" id="pills-genres-tab" data-toggle="pill" href="#pills-genres" role="tab" aria-controls="pills-genres" aria-selected="true">GENRES</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" id="pills-artists-tab" data-toggle="pill" href="#pills-artists" role="tab" aria-controls="pills-artists" aria-selected="false">ARTISTS</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" id="pills-new-tab" data-toggle="pill" href="#pills-new" role="tab" aria-controls="pills-new" aria-selected="false">New Releases</a>
              </li>
          </ul>

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active text-white my-5" id="pills-genres" role="tabpanel" aria-labelledby="pills-genres-tab">
              
            <?php
              require_once "dbConn.php";

              $queryCat = "SELECT DISTINCT Genre FROM songs";
              $resultCat = mysqli_query($conn, $queryCat);

              while($cat = mysqli_fetch_assoc($resultCat)){
                echo
                  '
                  <div class="category mt-4">
                    <div class="cat-head">
                      <h4 class="d-inline">'.$cat["Genre"].'</h4>
                      <a href="#" onClick="seeMore('.$_SESSION["flag"].')" class="d-inline float-right mt-2 mr-4">see more</a>
                    </div>
                    <div class="row mx-auto mt-2 mb-5 w-100">
                ';
                
                $querySong = "SELECT * FROM songs WHERE Genre = '".$cat["Genre"]."' LIMIT 0, 6";
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
              
              
              
              
              
<!--
              
              <div class="category mt-5">
                <div class="cat-head">
                  <h4 class="d-inline">Catgory 1</h4>
                  <a href="#" class="d-inline float-right mt-2 mr-4">see more</a>
                </div>
                <div class="row mx-auto my-3 w-100">
                  <div class="song-disp mr-3">
                    <div class="card my-2 bg-dark">
                      <img class="card-img-top rounded" src="./Album_Art/1400%20%20999%20Freestyle.jpg" style="height: 145px; width: 145px;">
                      <div class="card-img-overlay text-center mt-5">
                        <i class="material-icons p-1">playlist_add</i>
                        <i class="material-icons p-1" onclick="playPauseSong(this, 'sample-1.mp3')">play_arrow</i>
                        <i class="material-icons p-1">thumb_up</i>
                      </div>
                    </div>
                    <div class="song-name text-center mb-1">Bouliverd of Broken Dreams</div>
                  </div>
                </div>
-->

              
            </div>

            <div class="tab-pane fade" id="pills-artists" role="tabpanel" aria-labelledby="pills-artists-tab"></div>
            <div class="tab-pane fade" id="pills-new" role="tabpanel" aria-labelledby="pills-new-tab"></div>
          </div>    
        </div>


        <div class="tab-pane fade" id="v-pills-playlists" role="tabpanel" aria-labelledby="v-pills-playlists-tab"><p style="color: white;">playlist</p></div>
        <div class="tab-pane fade" id="v-pills-artists" role="tabpanel" aria-labelledby="v-pills-artists-tab"><p style="color: white;">artist</p></div>
        <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab"><p style="color: white;">account</p></div>
      </div>

      </div>


    </section>
  </div>

</section>

<section class="audio-display fixed-bottom">
  <div class="audio-container">
    <div class="song-info col-2">
      <div class="song-img" id="songImg"><img id="img-thumb"></div>
      <div class="song-artist" id="songArtist"><a href="#">Artist Name</a></div>
      <div class="song-opt">
        <i class="material-icons"><a href="#">playlist_add</a></i>
        <i class="material-icons"><a href="#">thumb_up</a></i>
        <i class="material-icons"><a href="#">notifications</a></i>
      </div>
    </div>
    <div class="song-title" id="songTitle">Song Name - Artist Name</div>
    <div class="controllers col-10">
      <i class="material-icons" onclick="skipPrev()">skip_previous</i>
      <i class="material-icons" onclick="fastRewind()">fast_rewind</i>
      <i class="material-icons play-pause" style="font-size: 36px;" id="playPause" onclick="playPause()">play_circle_outline</i>
      <i class="material-icons" onclick="fastForward()">fast_forward</i>
      <i class="material-icons" onclick="skipNext()">skip_next</i>
      <i class="material-icons vol-mute">volume_off</i>
      <input type="range" class="vol-slider custom-range" id="volSlider" min="0" max="1" step="0.1" onchange="adjustVol()">
      <i class="material-icons vol-max">volume_up</i>
    </div>

    <div class="player">
      <input type="range" class="song-slider custom-range" id="songSlider" min="0" max="10" step="1" onchange="seekSong()">
      <div class="current-time" id="currentTime">00:00</div>
      <div class="duration" id="songDuration">00:00</div>
    </div>
  </div>

</section>  
  
<script src="player.js?v=1"></script>  
</body>  
</html>