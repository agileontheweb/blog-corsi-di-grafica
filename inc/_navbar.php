<header id="masthead" class="site-header " role="banner">
  <nav class="navbar" role="navigation">
    <div class="site-navigation-inner container">
      <div class="navbar-header">
        <button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars fa-2x"></i>   
        </button>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cont-logo"> 
           <div class="logo"></div>
           <strong>Corsi di grafica</strong>
           <span>{per grafici inesperti}</span>
        </a>        
        <?php if( !get_header_image() ) : ?> 
        <?php 
        if( is_home() ) { ?>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <h1><?php bloginfo( 'name' ); ?></h1>
          <span class="site-description"><?php bloginfo('description'); ?> </span>
        </a> 
        <?php     
        } elseif( is_single() || (is_page()) || (is_search()) || (is_category()) ) { ?>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <h2><?php bloginfo( 'name' ); ?></h2>
          <span class="site-description"><?php bloginfo('description'); ?> </span>
        </a>
        <?php 
          }?>
        <?php endif; // header image was removed (again) ?>
      </div>
      <a class="btn-back"><i class="fa fa-arrow-left"></i></a>
      <?php sparkling_header_menu(); // main navigation ?>
    </div>
  </nav><!-- .site-navigation -->
</header><!-- #masthead -->