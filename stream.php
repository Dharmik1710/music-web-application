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
  <link rel="stylesheet" href="stream.css" type="text/css">
</head>
    
<body style="">
    
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
      <div class="overflow-auto mx-auto" style="background-color: rgb(38, 38, 38); height: 580px;">

        <div class="tab-content" id="v-pills-tabContent">


          <div class="tab-pane fade show active mx-5 my-4" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <ul class="nav my-4" id="pills-tab" role="tablist">
              <li class="nav-item mr-3">
                <a class="nav-link active" id="pills-featured-tab" data-toggle="pill" href="#pills-featured" role="tab" aria-controls="pills-featured" aria-selected="true">Featured</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" id="pills-genre-tab" data-toggle="pill" href="#pills-genre" role="tab" aria-controls="pills-genre" aria-selected="false">Genre</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" id="pills-hits-tab" data-toggle="pill" href="#pills-hits" role="tab" aria-controls="pills-hits" aria-selected="false">Top hits</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" id="pills-new-tab" data-toggle="pill" href="#pills-new" role="tab" aria-controls="pills-new" aria-selected="false">New Releases</a>
              </li>
          </ul>

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active text-white my-5" id="pills-featured" role="tabpanel" aria-labelledby="pills-featured-tab">
              <div class="category mt-4">
                <div class="cat-head"><h4 class="d-inline">Catgory 1</h4>
                <a href="#" class="d-inline float-right mt-2">see more</a></div>
                <div class="row mx-auto justify-content-around my-2 w-100">
                  <div class="song-disp">
                    <div class="card my-2 bg-dark">
                      <img class="card-img-top" src="antique%20dvd%20player.jpeg" style="height: 150px; width: 150px;">
                      <div class="card-img-overlay text-center mt-5">
                        <i class="material-icons p-1">playlist_add</i>
                        <i class="material-icons p-1" onclick="playPauseSong(this, 'sample-1.mp3')">play_arrow</i>
                        <i class="material-icons p-1">thumb_up</i>
                      </div>

                    </div>
                    <p class="song-name text-center mb-1">Bouliverd of Broken Dreams</p>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="tab-pane fade" id="pills-genre" role="tabpanel" aria-labelledby="pills-genre-tab"><p style="color: white;">genre</p></div>
            <div class="tab-pane fade" id="pills-hits" role="tabpanel" aria-labelledby="pills-hits-tab"><p style="color: white;">hits</p></div>
            <div class="tab-pane fade" id="pills-new" role="tabpanel" aria-labelledby="pills-new-tab"><p style="color: white;">new</p></div>
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
      <div class="song-img" id="songImg"><img src="carousel1.jpg"></div>
      <div class="song-artist" id="songArtist"><a href="#">Artist Nameeeeeeeeeeeeeeeeerwer</a></div>
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
  
<script src="player.js"></script>  
</body>  
</html>