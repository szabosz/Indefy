// Media Player
audioPlayer();

function audioPlayer(){
    $("#audioPlayer")[0].src = $("#song-widget a")[0];
    $("#song-widget a").preventDefault();
}