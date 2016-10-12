$(document).ready(function() {
  
  $(window).trigger('resize');
  init();
  analyitics();
  shareFacebook();
  fixedSidebar();
  
  $(window).on('resize',function() {  
    giveme5(); 
  });    
  

  $(window).scroll(function() {
    checkButtonXs();
    fixedSidebar();
  });

});
