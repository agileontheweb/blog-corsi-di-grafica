<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package corsidigrafica
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
 </div><!-- close .site-content -->
 
		<footer  class="footer" role="contentinfo">
  			<div class="container">
          <div class="col-xs-12">
           <ul class="list-unstyled list-inline">
              <li>©Copyright 2012 - corsi di grafica</li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/storia">Storia</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/contatti">Contatti</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/chi-sono">Chi sono</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/privacy">Privacy</a></li>
              <li><a href="http://www.freepik.com/" target="blank">Icons by Freepik</a></li>
            </ul>
          </div>
  			</div><!-- .site-info -->
			 <div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
	  </footer><!-- #colophon -->
  <?php wp_footer(); ?> 
 </body>
</html>