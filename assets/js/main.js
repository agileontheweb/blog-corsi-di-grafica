$(document).ready(function() {

  $(window).trigger('resize');
  init();
  analyitics();
  shareFacebook();
  fixedSidebar();
  //survay();
  confirmationNewsletter();

  $(window).on('resize',function() {
    giveme5();
  });

  $(window).scroll(function() {
    checkButtonXs();
    fixedSidebar();
    //adsBottom();
    if(!$("body").hasClass("page")){
      fixedSidebar();
    }
  });

});
