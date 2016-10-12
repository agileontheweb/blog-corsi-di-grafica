<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
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
<!-- TradeDoubler site verification 2814951 -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<meta name="description" content="<?php echo substr(get_the_excerpt(), 0,160); ?>" />
<?php endwhile; endif; elseif(is_home()) : ?>
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php endif; ?>
<!-- <meta property="og:url"           content="www.corsidigrafica.info>" />
<meta property="og:type"          content="article" />
<meta property="og:title"         content="<?php the_title(); ?>" />
<meta property="og:description"   content="descr" /> -->
<!-- <meta property="og:image"         content="<? checkimageexist();?>" /> -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head> 

 <body <?php body_class(); ?>>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.6&appId=677931358931239";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

    <? include('inc/_modal.php');?>
    <? /*include('inc/_modal-youtube.php');*/?>
    <?php
    if ( is_page_template('il-facile-membership.php') ) {
        // Returns true when 'about.php' is being used.
      } else {
        include ('inc/_top-optin-newsletter.php'); 
         include('inc/_ontheflyelements.php'); 
    }
    ?>

     
    <div id="page" class="hfeed site">
      <? include('inc/_header.php');?>
      <? if ( is_page_template( 'corsi-online.php' ) ) {?>
        <div class="img-full-width"></div><!--Solo per pagina corsi online -->
      <?}?>
      <div id="content" class="site-content">
        <div class="container main-content-area">
          <div>

            <div class="main-content-inner <?php echo corsidigrafica_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">