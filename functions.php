<?php
/**
 *
 * @package corsidigrafica
 */
require ( get_template_directory() . '/backend-custom.php');
require_once(get_template_directory() . '/inc/widgets/widget-categories.php');
require_once(get_template_directory() . '/inc/widgets/widget-social.php');
require_once(get_template_directory() . '/inc/widgets/widget-popular-posts.php');

if ( ! function_exists( 'corsidigrafica_main_content_bootstrap_classes' ) ) :
/**
 * Add Bootstrap classes to the main-content-area wrapper.
 */

function corsidigrafica_main_content_bootstrap_classes() {
  if (
    is_page_template( 'corsi-online.php' ) ||
    is_page_template( 'storia.php' ) ||
    is_page_template( 'register.php' ) ||
    is_page_template( 'page-fullwidth.php' ) ||
    is_page_template( 'assumimi.php' ) ||
    is_page_template( 'gadget.php' ) ||
    is_page_template( 'libri.php' ) ||
    is_page_template( 'content-full-eng-video.php' ) ||
    is_page_template( 'il-facile-membership.php' )) {
    return 'col-sm-12 col-md-12';
  }
  if(is_page_template( 'inizia-da-qui.php' )){
    return 'col-sm-12 col-md-6 col-md-offset-3';
  }
  if(is_single() ){
    return 'col-sm-12 col-md-8 col-md-offset-2';
  }else{
    return 'col-sm-12 col-md-8';
  }
}
endif;

if ( ! function_exists( 'corsidigrafica_setup' ) ) :

function corsidigrafica_setup() {

  add_theme_support( 'automatic-feed-links' );
 /**
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'corsidigrafica-featured', 860, 645, true );
  add_image_size( 'tab-small', 60, 60 , true); // Small Thumbnail

  // register_nav_menus( array(
  //   'primary'      => esc_html__( 'Primary Menu', 'corsidigrafica' ),
  //   'footer-links' => esc_html__( 'Footer Links', 'corsidigrafica' ) // secondary nav in footer
  // ) );

  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  add_theme_support( 'html5', array(
    'comment-list',
    'search-form',
    'comment-form',
    'gallery',
    'caption',
  ) );
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );
}
endif; // corsidigrafica_setup

add_action( 'after_setup_theme', 'corsidigrafica_setup' );
/**
 * This function removes inline styles set by WordPress gallery.
 */
function corsidigrafica_remove_gallery_css( $css ) {
  return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'corsidigrafica_remove_gallery_css' );

/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/assets/admin/' );

  require_once dirname( __FILE__ ) . '/assets/admin/options-framework.php';

  $optionsfile = locate_template( 'options.php');
  load_template( $optionsfile );
  require get_template_directory() . '/inc/template-tags.php';
  require get_template_directory() . '/inc/extras.php';
  require get_template_directory() . '/inc/navwalker.php';

//add button g +
// add_filter('the_content', 'google_plus');
// function google_plus($content) {
//   //$content = $content.'<g:plusone size="tall" href="'.get_permalink().'"></g:plusone>';
//   return $content;
// }
// add_action ('wp_enqueue_scripts','google_plus_script');
// function google_plus_script() {
//   wp_enqueue_script('google-plus', 'https://apis.google.com/js/plusone.js', array(), null);
// }
//add button facebook

// add_filter('the_content', 'facebook');
// function facebook($content) {
//   $content = $content.'<div class="fb-share-button" href="'.get_permalink().'" data-layout="box_count"></div>';
//   return $content;
// }
// add_action ('wp_enqueue_scripts','facebook_script');
// function facebook_script() {
//   wp_enqueue_script('facebook_script', '//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.4&appId=677931358931239', array(), null);
// }


  function urlCourse(){
    if ( has_tag( 'illustrator-facile' ) ) {
      $url = "http://www.corsidigrafica.info/corso-illustrator-facile/";
    } else if ( has_tag( 'illustrator-base' ) ) {
      $url = "http://www.corsidigrafica.info/corso-illustrator/";
    } else if ( has_tag( 'photoshop-ability' ) ) {
      $url = "http://www.corsidigrafica.info/photoshop-ability/";
    }
    return $url;
  }

//Check if image featured exist
function checkimageexist(){
  $img_amazon = get_post_meta(get_the_ID() , 'img_amazon', true);
  if ( strlen( $img = get_the_post_thumbnail( get_the_ID(), array( 150, 150 ) ) ) ) {?>
   <?php
    $thumb_id = get_post_thumbnail_id();
    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
    ?>
   <div style="background-image: url(<?php echo $thumb_url[0];?>);
                background-size: cover;
                height: 100%;
                background-position: center center;
                ">
   <?}else if (!empty($img_amazon)){?>
    <img src="<?php  echo  $img_amazon; ?>" class="wp-post-image" alt="<?php the_title(); ?>"  />
  <?} else{?>
   <img src="<?php bloginfo('template_directory'); ?>/img/default-image.jpg" class="wp-post-image" alt="<?php the_title(); ?>"  />
  <?}
}

//Add icon for my category
function findiconcategory(){
  $categories = get_the_category();
  global $texttut;
  foreach ( $categories as $category ) {
    if( $category->name  == 'text-tut'){
      echo $texttut = '<li data-toggle="tooltip" title="Tutorial testuale"><i class="glyph-icon flaticon-file242"> </i>  </li>';
    }
    if( $category->name  == 'video-tut'){
     echo $texttut = '<li data-toggle="tooltip" title="Tutorial video"><a href="" ><i class="glyph-icon flaticon-videoplayer5"> </i> </a></li>';
    }
    if( $category->name  == 'stampa'){?>
      <div class="show" data-toggle="tooltip" title="Tutorial stampa">
        <i class="glyph-icon flaticon-printing3"> </i></div>
      <?
    }
    if( $category->name  == 'code'){?>
      <div class="show">
         <i class="glyph-icon flaticon-programming2"> </i></div>
      <?
    }
    if( $category->name  == 'Wordpress'){?>
      <div class="show">
       <i class="glyph-icon flaticon-wordpress19"> </i></div>
      <?
    }
    if( $category->name  == 'Photoshop'){?>
      <div class="show">
        <i class="glyph-icon flaticon-image86"> </i> </div>
      <?
    }
    if( $category->name  == 'Illustrator'){?>
      <div class="show"><i class="glyph-icon flaticon-graphic"> </i></div>
      <?
    }if( $category->name  == 'Indesign'){?>
      <div class="show"><i class="glyph-icon flaticon-logotype8"> </i></div>
      <?
    }
  }
}
// Add video after content
function mytheme_content_ad( $content ) {
  $video = get_post_meta(get_the_ID(), 'video_code', true);
  $myadcode = '<hr><div class="embed-responsive embed-responsive-16by9 video" id="player" >';
  $myadcode .=  '<iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/'.$video.'"  allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>';
  $myadcode .= '</div>';
  echo $myadcode;
}
// Breadcrumbs
function custom_breadcrumbs() {

    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Homepage';

    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';

    // Get the query & post information
    global $post,$wp_query;

    // Do not display on the homepage
    if ( !is_front_page() ) {

        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';

        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';

        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';

            }

            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

        } else if ( is_single() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';

            }

            // Get post category info
            $category = get_the_category();

            if(!empty($category)) {

                // Get last category post is in
                $last_category = end(array_values($category));

                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);

                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }

            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;

            }

            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {

                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            } else {

                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

            }

        } else if ( is_category() ) {

            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

        } else if ( is_page() ) {

            // Standard page
            if( $post->post_parent ){

                // If child page, get parents
                $anc = get_post_ancestors( $post->ID );

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }

                // Display parent pages
                echo $parents;

                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';

            } else {

                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';

            }

        } else if ( is_tag() ) {

            // Tag page

            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;

            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';

        } elseif ( is_day() ) {

            // Day archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';

        } else if ( is_month() ) {

            // Month Archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';

        } else if ( is_year() ) {

            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';

        } else if ( is_author() ) {

            // Auhor archive

            // Get the author information
            global $author;
            $userdata = get_userdata( $author );

            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';

        } else if ( get_query_var('paged') ) {

            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';

        } else if ( is_search() ) {

            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';

        } elseif ( is_404() ) {

            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }

        echo '</ul>';

    }
}

add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );

function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            <label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    $args['class_submit'] = 'btn btn-default'; // since WP 4.1

    return $args;
}

add_action('comment_form', 'bootstrap3_comment_button' );

function bootstrap3_comment_button() {
    echo '<button class="btn btn-default" type="submit">' . __( 'Submit' ) . '</button>';
}

function bac_PostViews($post_ID) {
  //Set the name of the Posts Custom Field.
  $count_key = 'post_views_count';
  //Returns values of the custom field with the specified key from the specified post.
  $count = get_post_meta($post_ID, $count_key, true);
  //If the the Post Custom Field value is empty.
  if($count == ''){
      $count = 0; // set the counter to zero.
      //Delete all custom fields with the specified key from the specified post.
      delete_post_meta($post_ID, $count_key);
      //Add a custom (meta) field (Name/value)to the specified post.
      add_post_meta($post_ID, $count_key, '0');
      return $count . ' View';
  //If the the Post Custom Field value is NOT empty.
  }else{
      $count++; //increment the counter by 1.
      //Update the value of an existing meta key (custom field) for the specified post.
      update_post_meta($post_ID, $count_key, $count);
      //If statement, is just to have the singular form 'View' for the value '1'
      if($count == '1'){
      return $count . ' View';
      }
      //In all other cases return (count) Views
      else {
      return $count . ' Views';
      }
  }
}

//Remove script
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

  function corsidigrafica_scripts() {
    wp_enqueue_style( 'corsidigrafica-style', get_stylesheet_uri() );
    //wp_enqueue_style( 'corsidigrafica-style', get_template_directory_uri().'/style.css' );
     wp_enqueue_script('js', get_template_directory_uri().'/assets/js/jquery-1.11.min.js', array('jquery') );
     wp_enqueue_script('js-tweenmax', get_template_directory_uri().'/assets/vendor/GreenSock/src/minified/TweenMax.min.js', array('jquery') );
     wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrapmin.js', array('jquery') );
    wp_enqueue_script('mailchimp',  get_template_directory_uri().'/assets/js/mailchimp.js', array('jquery') );
    wp_enqueue_script('navigation', get_template_directory_uri().'/assets/js/navigation.js', array('jquery') );
    wp_enqueue_script('fastclick', get_template_directory_uri().'/assets/js/fastclick.js', array('jquery') );
    wp_enqueue_script('social', get_template_directory_uri().'/assets/js/social-likes.min.js', array('jquery') );
    wp_enqueue_script('cookie',  get_template_directory_uri().'/assets/js/cookie.js', array('jquery') );
    wp_enqueue_script('main',  get_template_directory_uri().'/assets/js/main.js', array('jquery') );
    //wp_enqueue_script('mainww',  get_template_directory_uri().'/assets/build/build.js', array('jquery') );
    //wp_enqueue_script('build-min', get_template_directory_uri().'/assets/build/build.min.js', array('jquery') );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }

add_action( 'wp_enqueue_scripts', 'corsidigrafica_scripts' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg);
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function register_my_menu() {
  register_nav_menu('photoshop-menu',__( 'Photoshop menu 2' ));
}
add_action( 'init', 'register_my_menu' );

function bannerTopImage($bannerTop) {
  $classes = get_body_class();
  $prfx_stored_meta = get_post_meta(get_the_ID() , 'meta-select', true);
  switch ($prfx_stored_meta) {
    case 'illustrator-base':
        $bannerTop = "illustrator-facile-banner-top-desktop.jpg";
        break;
    case 'illustrator-facile':
        $bannerTop = "illustrator-facile-banner-top-desktop.jpg";
        break;
    case 'photoshop-ability':
        $bannerTop = "photoshop-ability-banner-top-desktop.jpg";
        break;
    case 'learn-photo-edit':
        $bannerTop = "learn-photo-edit.jpg";
        break;
    case 'fotolia':
        $bannerTop = "fotolia.jpg";
        break;
    default:
        $bannerTop = "default-banner.jpg";
  }
  if (is_page_template('category-photoshop.php') || ( $corsoPhotoshopAbility == "photoshop-ability" ) || in_array('page-template-default',$classes)) {
    //$bannerTop = "photoshop-ability-banner-top-desktop.jpg";
    // $link = "http://corsidigrafica.info/photoshop-ability/";
  }if ( is_page_template('category-illustrator.php') || ( $corsoIllustratorBase == "illustrator-base" ) ) {
    //$bannerTop = "illustrator-facile-banner-top-desktop.jpg";
  } if (in_array('home',$classes)){
    $bannerTop = "learn-photo-edit.jpg";
    $link = "http://corsidigrafica.info/risorse/photoediting";
  }
  ?> <a href="<? echo $link ?>" target="blank">
    <img src="<?php bloginfo('template_directory')?>/assets/img/<? echo $bannerTop ?>">
  </a><?
}
add_action( 'after_theme_setup', 'bannerTop' );

function bannerSideBar() {
  $classes = get_body_class();
  if (is_page_template('category-photoshop.php') ||  ( $corsoPhotoshopAbility == "photoshop-ability" ) || in_array('page-template-default',$classes) ) {
    $bannerSideBar = "learn-photo-edit-sidebar.jpg";
  }if ( is_page_template('category-illustrator.php') || ( $corsoIllustratorBase == "illustrator-base" ) ) {
    $bannerSideBar = "illustrator-facile-sidebar-desktop.jpg";
  } if (in_array('home',$classes)){
    $bannerSideBar = "learn-photo-edit-sidebar.jpg";
    $link = "http://corsidigrafica.info/risorse/photoediting";
  }
  ?> <a href="<? echo $link ?>" target="blank">
    <img src="<?php bloginfo('template_directory')?>/assets/img/<? echo $bannerSideBar ?>">
  </a><?
}
add_action('after_theme_setup', 'bannerSideBar' );


// function gkp_html_minify_start()  {
//   ob_start( 'gkp_html_minyfy_finish' );
// }
// function gkp_html_minyfy_finish( $html )  {
//   // Suppression des commentaires HTML,
//   // sauf les commentaires conditionnels pour IE
//   $html = preg_replace('/<!--(?!s*(?:[if [^]]+]|!|>))(?:(?!-->).)*-->/s', '', $html);
//   // Suppression des espaces vides
//    $html = str_replace(array("\r\n", "\r", "\n", "\t"), '', $html);
//    while ( stristr($html, '  '))
//        $html = str_replace('  ', ' ', $html);
//    return $html;
// }
// add_action('get_header', 'gkp_html_minify_start');
