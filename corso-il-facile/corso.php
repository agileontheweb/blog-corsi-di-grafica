<style type="text/css">
 html{margin-top:0px !important; }
 .profilo{
  position: absolute;
  right: 0;
 }
#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease; }

#wrapper.toggled {
  padding-left: 250px; }

#sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #000;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease; }

#wrapper.toggled #sidebar-wrapper {
  width: 250px; }

#page-content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px; }

#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -250px; }

/* Sidebar Styles */
.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none; }

.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px; }

.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #999999; }

.sidebar-nav li a:hover {
  text-decoration: none;
  color: #fff;
  background: rgba(255, 255, 255, 0.2); }

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none; }

.sidebar-nav > .sidebar-brand {
  height: 65px;
  font-size: 18px;
  line-height: 60px; }

.sidebar-nav > .sidebar-brand a {
  color: #999999; }

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none; }

@media (min-width: 768px) {
  #wrapper {
    padding-left: 250px; }

  #wrapper.toggled {
    padding-left: 0; }

  #sidebar-wrapper {
    width: 250px; }

  #wrapper.toggled #sidebar-wrapper {
    width: 0; }

  #page-content-wrapper {
    padding: 20px;
    position: relative; }

  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0; } }

/*# sourceMappingURL=simple-sidebar.css.map */

 

</style> 
 
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