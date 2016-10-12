<?php include("videocorso.php") ?>     

<script src="https://code.jquery.com/jquery.min.js"></script>

<script>

$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
  $("#menu-toggle-2").delay(1000).show(0);
});
$("#menu-toggle-2").click(function(e) {
  e.preventDefault();
//$("#wrapper").toggleClass("toggled");
//$("#menu-toggle-2").hide();
$("#wrapper").toggleClass("toggled");
}); 
// $("#lesson-1-title").click(function(event){
//   console.log($(this).attr('id'));
//    event.preventDefault();
// });
$(".video-lessons").hide();
 
$("#summary-list").click(function(event){
  $(".video-lessons").hide();
  $(".summary").show();
});


$(".list-group-item-success").click(function(event){
   event.preventDefault();
   materialURL  ="";
   materialURL  = $(this).attr("data-material-type"); 
});

 
$(".list a").click(function(event){
  $(".summary").hide(); 
  $(".video-lessons").show();
  event.preventDefault();
  $("#lessons").find(".lesson").hide();
  var contLez = $(this).attr('data-target');
  var vidURL  = $(this).attr("data-lez-type");
  $('#player-video > source').attr('src', vidURL);
  var video = $('#player-video').get(0);
  video.load();
  //video.play();
  $("#lessons").find(contLez).show();
  $("#title").text($(this).text());
  if(contLez == "#cont-lez-1" || contLez == "#cont-lez-2" || contLez == "#cont-lez-9" || contLez == "#cont-lez-11"
      || contLez == "#cont-lez-13" || contLez == "#cont-lez-14" || contLez == "#cont-lez-15"
       ){
    $(".download-lesson-material").hide();
  }else{
    $(".download-lesson-material").attr('href', materialURL);
    $(".download-lesson-material").show();
  }  
});
</script>
</body>
</html>