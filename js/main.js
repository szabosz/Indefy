// Media Player
// play();
document.addEventListener("click", play, false);
var playlist = document.getElementById('#newReleases')

function play(){
    for (var i = 0; i<playlist.length; i++){
        if(m.playlist == code[i]){
            document.getElementsByTagName("a"); 
        }
    }
}
// function play(){
//     var currentSong = 0;
//     $("#player")[0].src = $("#new-releases li a")[0];
//     $("#player")[0].play();
//     $("#new-releases li a").onclick(function(e){
//         e.preventDefault();
//         $("#player")[0].src = this;
//         $("#player")[0].play();
//         $("#new-releases li").removeClass("currentSong");
//         currentSong = $(this).parent().index();
//         $(this).parent().addClass("currentSong");
//     });
//     $("#player")[0].addEventListener("ended", function(){
//         currentSong++;
//         if (currentSong == $("#new-releases li a").length)
//             currentSong = 0;
//             $("#new-releases li a").removeClass("currentSong");
//             $("#new-releases li:eq("+currentSong+")").addClass("currentSong");
//             $("#player")[0].src =  $("#new-releases");
//         });
