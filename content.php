<?php
/**
 * @package sparkling
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-item-wrap">
		<div class="row">
			<div class="crop">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="cont-img col-md-12">
					<? checkimageexist();?>
				</a> 
			</div>		  
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<ul class="list-unstyled hidden-xs">
						<li><? echo $texttut; ?></li>
						<li><?php edit_post_link( '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?></li>
					</ul>
				</div>
			<?php endif; ?>
		</div>
		
		<div class="post-inner-content ">
			<header class="entry-header page-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			</header>

			<?php if ( is_search() ) : ?>
  			<div class="entry-summary">
  				<?php/* the_excerpt(); */?>
  				<p><a class="btn btn-default read-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continua', 'corsidigrafica' ); ?></a></p>
  			</div>
			<?php else : ?>
  			<div class="entry-content">
  				<?
  				if ( is_home() ) {
  					$content = get_the_content();
  					$content = strip_tags($content);
  					echo substr($content, 0, 355)."...";
  				}else{
  					get_the_content();
  				}
  				?>
  			</div>
			<hr class="style-two">
			<?php endif; ?>
	</div>
</article>
