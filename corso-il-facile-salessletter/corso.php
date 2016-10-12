<!DOCTYPE html>
<html>
<head>
  <title> Illustrator Facile</title>
  <meta name="description" content="Con questo corso di illusrator acquisirai padronanza in poco tempo per realizzare la grafica vettoriale. ">
  <?php include("layout_pages/inc/header.php") ?>
  <!-- <link href="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/simple-sidebar.css" rel="stylesheet"> -->
  <link href="layout_pages/css/simple-sidebar.css" rel="stylesheet">
  <meta name="robots">
</head>
<body>
  <?php include("layout_pages/inc/videocorso.php") ?>     
  
<!-- Menu Toggle Script -->
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="layout_pages/js/bootstrap.min.js"></script> 
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

     
    $("#summary-list").click(function(event){
      $(".video-lessons").hide();
      $(".summary").show();  
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
      video.play();
      $("#lessons").find(contLez).show();
      $("#title").text($(this).text());
   });
    </script>
</body>
</html>