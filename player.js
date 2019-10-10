var currentSong;
var currTime = document.getElementById("currentTime");
var songDuration = document.getElementById("songDuration");
var songSlider = document.getElementById("songSlider");
var volSlider = document.getElementById("volSlider");

var song = new Audio();

function playPauseSong(obj, s){
  if(currentSong != obj){
    song.src = "./songs/"+s;
    
    song.addEventListener('loadeddata', () => {
      var d = Math.floor(song.duration);
      songSlider.setAttribute("max", d);
      songDuration.textContent = convertTime(d); 
    })
    
    song.play();
    obj.textContent = "pause";
    document.getElementById("playPause").textContent="pause_circle_outline";
    songTitle.textContent = s;
    if(currentSong != undefined){
      currentSong.textContent = "play_arrow";
    }
    songTitle.textContent = s;

    currentSong = obj;
  }else{
    playPause()  
  }
}

setInterval(updateSongSlider, 1000);

function updateSongSlider(){
  var c = Math.round(song.currentTime);
  songSlider.value = c;
  currTime.innerHTML = convertTime(c);
}

function convertTime(secs){
  var min = Math.floor(secs/60);
  var sec = secs%60;
  min = (min<10)?"0"+min:min;
  sec = (sec<10)?"0"+sec:sec;
  return (min+":"+sec);
}

function playPause(){
    if(song.paused){
      song.play();
      currentSong.textContent = "pause"
      document.getElementById("playPause").textContent="pause_circle_outline";
    }else{
      song.pause();
      currentSong.textContent = "play_arrow"
      document.getElementById("playPause").textContent = "play_circle_outline";
    }
}

function fastRewind(){
  songSlider.value = convertTime(song.currentTime - 5);
  currTime.value = convertTime(song.currentTime - 5);
}

function adjustVol(){
  song.volume = volSlider.value;
}

function seekSong(){
  song.currentTime = songSlider.value;
  currTime.textContent = convertTime(song.currentTime);
}