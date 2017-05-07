<?php
/**
* @package corsidigrafica
*/

?>
<!doctype html>
<!--[if !IE]>
  <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
  <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
  <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
  <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <meta name="description" content="<?php echo substr(get_the_excerpt(), 0,160); ?>" />
  <?php endwhile; endif; elseif(is_home()) : ?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
  <?php endif; ?>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head> 
<body <?php body_class(); ?>>
  <?  include_once('inc/_modal.php');
      include_once('inc/_modal_survay.php');
  if ( is_page_template('il-facile-membership.php') ) {
  } else {
    include ('inc/_top-optin-newsletter.php'); 
    include('inc/_ontheflyelements.php'); 
    include('inc/_navbar.php'); 
  }
  ?>
  <div id="page" class="hfeed site">
    <? if ( is_page_template( 'corsi-online.php' ) ) {?>
      <div class="img-full-width"></div>
    <?}?>
    <div id="content" class="site-content">
      <div class="container main-content-area">
        <div>
          <div class="main-content-inner <?php echo corsidigrafica_main_content_bootstrap_classes(); ?>
          <?php echo of_get_option( 'site_layout' ); ?>">