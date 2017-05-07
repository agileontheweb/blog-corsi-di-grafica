function init() {

  ajaxMailChimpForm($("#subscribe-form"), $("#subscribe-result"));

  TweenMax.from($(".main-content-inner"), 1.6,{x:-30, autoAlpha:0,  ease:Back.easeInOut});
  TweenMax.from($("#secondary"), 1.6,{x:30, autoAlpha:0,  ease:Back.easeInOut});

  $("#btn-top-menu").addClass("hide-opacity");
  TweenMax.set($('#btn-top-newsletter'),{autoAlpha:0});
  TweenMax.to($('#btn-search-fly'),1,{autoAlpha:1});

  if($('body').hasClass('page-template-register')){
    $(".giveme5").hide();
    }else{
      giveme5();
  }

  $("body").on("mouseenter", ".giveme5", function(){
      TweenMax.to($(".giveme5"), 1,{x:30, autoAlpha:1,  ease:Back.easeInOut});
      TweenMax.to($(".giveme5"), 1,{scale:0.9,  ease:Back.easeInOut});
  }).on("mouseleave", "div", function(){
      TweenMax.to($(".giveme5"), 1,{x:40, autoAlpha:1,  ease:Back.easeInOut});
      TweenMax.to($(".giveme5"), 1,{scale:1,  ease:Back.easeInOut});
  });

  $('#btn-top-menu').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });

  $('.dropdown-toggle').click(function(){
    var $btnTutorial = $(this).parent().closest('li').attr('id');
    var $dropDownTutorial = $('.navbar #menu-top .dropdown-menu');
    var winWidth = $(window).width();
    var winHeight = $(window).height();
    $dropDownTutorial.css('height',(winHeight));
    TweenMax.set($dropDownTutorial,{x:winWidth});
    TweenMax.to(this, 0.6,{y:-50, autoAlpha:1, ease:Back.easeOut});

    $('.dropdown').on('shown.bs.dropdown', function () {
      TweenMax.to($dropDownTutorial, 1.5,{x: winWidth - $dropDownTutorial.width() + 50, autoAlpha:1, ease:Back.easeOut});
    });

    $('.dropdown').on('hidden.bs.dropdown', function () {
        $('#'+$btnTutorial).addClass('open');
        TweenMax.to($dropDownTutorial, 0.6,{x: winWidth, ease:Back.easeOut,onComplete:reset});
    });

    function reset(){
      $('#'+ $btnTutorial).removeClass('open');
      TweenMax.to($('.dropdown-toggle'), 0.6,{y:0, autoAlpha:1, ease:Back.easeOut});
    }
  });

  checkModalOpen();
  giveme5();
}

function giveme5(){

  if($( window ).width() >= 767){
    TweenMax.fromTo($(".giveme5"), 3,{x:160, autoAlpha:1,  ease:Back.easeInOut},
      {x:40, autoAlpha:1,  ease:Back.easeInOut});
    //$(".giveme5").show();
  }else{
    $(".giveme5").hide();
  }
}

function checkButtonXs(){
  var topNewsletter = $("#top-newsletter");
  var btnNewsletterXs = $('#btn-top-newsletter');
  var btnTopMenuXs = $("#btn-top-menu");

  if ($(window).scrollTop() > 700) {
    TweenMax.to(btnNewsletterXs, 1,{x:0, autoAlpha:1, ease:Back.easeOut});
    TweenMax.to(btnTopMenuXs, 1,{x:0, autoAlpha:1, delay:0.3, ease:Back.easeOut});

    if($( window ).width() >= 767){
      TweenMax.to(topNewsletter, 1,{autoAlpha:1, ease:Back.easeOut});
    }else{
      TweenMax.to(topNewsletter, 1,{autoAlpha:0, ease:Back.easeOut});
    }
  }if ($(window).scrollTop() === 0) {
    TweenMax.to(btnNewsletterXs, 1,{x:100, autoAlpha:0,  ease:Back.easeIn});
    TweenMax.to(btnTopMenuXs, 1,{x:100, autoAlpha:0, delay:0.3, ease:Back.easeIn});
    TweenMax.to(topNewsletter, 1,{autoAlpha:0, ease:Back.easeOut});
  }
}

function checkModalOpen(){
  var btnNewsletterXs = $('#btn-top-newsletter');
  var btnTopMenuXs = $("#btn-top-menu");
  $('#modal').on('shown.bs.modal', function () {
    TweenMax.to(btnNewsletterXs,1,{x:100, autoAlpha:0,  ease:Back.easeIn});
    TweenMax.to(btnTopMenuXs,1,{x:100, autoAlpha:0, delay:0.3, ease:Back.easeIn});
  });
  $('#modal').on('hide.bs.modal', function () {
    TweenMax.to(btnNewsletterXs,1,{x:0, autoAlpha:1,  ease:Back.easeIn});
    TweenMax.to(btnTopMenuXs,1,{x:0, autoAlpha:1, delay:0.3, ease:Back.easeIn});
  });
}

function shareFacebook(){
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=328285627269392";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
}

function analyitics(){
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-24560255-16', 'auto');
  ga('send', 'pageview');
}

function fixedSidebar(){
  var $sidebarRight = $("#secondary");
  var position =  ($(window).outerWidth() / 2) - ($('.main-content-inner').outerWidth() /2) - ($sidebarRight.outerWidth()/2) + 15;
  if ($(window).scrollTop() > 80) {
    $sidebarRight.css('position','fixed');
    $sidebarRight.css('right', position);
    TweenMax.to($($sidebarRight), 0.8,{y:-40,  ease:Back.easeOut});
  }else{
    $sidebarRight.css('position','relative');
    $sidebarRight.css('right', 0 );
    TweenMax.to($($sidebarRight), 0.3,{y:0,  ease:Back.easeOut});
  }
}

function adsBottom(){
  var adsBottom = $('.udemy-footer-ads');
  if($(window).scrollTop() + $(window).height() == $(document).height()) {
    TweenMax.to(adsBottom,1,{y:80, autoAlpha:0, ease:Back.easeOut});
  }else{
     TweenMax.to(adsBottom,1,{y:0, autoAlpha:1, ease:Back.easeIn});
  }
}

function survay(){
  var h4 = $("h4");
  h4.hide();
  var cookieSurvay = Cookies.get('survay');
  if( cookieSurvay == null){
    cookieSurvay = Cookies.set('survay', 'true');
    $('#modal-survay').modal({
          backdrop: 'static',
          keyboard: true,
          show: true
    });
  }
  $('#btn-survey-photoshop,#btn-survey-illustrator,#btn-survey-indesign,#btn-survey-web').click(function(){
    h4.show();
    setTimeout(function() {
      $('#modal-survay').modal('hide'); }, 1200);
  });
}

function confirmationNewsletter(){

//  var cookieSubscribeNewsletter;

  // if($('body').hasClass('page-template-inizia-da-qui')){
  //   var cookieSubscribeNewsletter = Cookies.set('cookieSubscribeNewsletter', 'true');
  //   if( cookieSubscribeNewsletter == null){
  //   console.log("no cookieee");
  //   }
  //   if( cookieSubscribeNewsletter == cookieSubscribeNewsletter ){
  //     console.log("Siiiii sookieee");
  //   }
  // }

  // if(cookieSubscribeNewsletter){
  //   console.log("ok ci sono");
  // }

}
