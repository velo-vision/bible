<?php
/**
 * @package flatsome
 */

global $flatsome_opt;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if($flatsome_opt['blog_post_style'] == 'default' || !isset($flatsome_opt['blog_post_style'])) { ?>
	<header class="entry-header text-center">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="tx-div small"></div>
		<div class="entry-meta">
			<?php flatsome_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->


	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
    <div class="entry-image">
    		<?php if($flatsome_opt['blog_parallax']) { ?><div class="parallax_img has-parallax" style="overflow:hidden"><div class="parallax_img_inner" data-velocity="0.15"><?php } ?>
            <?php the_post_thumbnail('large'); ?>
            <?php if($flatsome_opt['blog_parallax']) { ?></div></div><?php } ?>
            <div class="post-date large">
	                <span class="post-date-day"><?php echo get_the_time('d', get_the_ID()); ?></span>
	                <span class="post-date-month"><?php echo get_the_time('M', get_the_ID()); ?></span>
            </div>
    </div>
    <?php } ?>
    <?php } ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'flatsome' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<!-- REDES SOCIALES ------------>
	<div class="col-md-12 compartir">
		<span>COMPARTIR</span>
	</div>
	<div class="col-xs-12 col-md-12 borde-compartir">	</div>
<!-- REDES SOCIALES -------------------------------------------------------------------------------->
	<?php if(isset($flatsome_opt['blog_share']) && $flatsome_opt['blog_share']) {
		// SHARE ICONS
		echo '<div class="blog-share text-center">';
		echo '<div class="tx-div medium"></div>';
		echo do_shortcode('[share]');
		echo '</div>';
	} ?>

	<!-- <footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'flatsome' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'flatsome' ) );


			// But this blog has loads of categories so we should probably display them here
			if ( '' != $tag_list ) {
				$meta_text = __( 'This entry was posted in %1$s and tagged %2$s.', 'flatsome' );
			} else {
				$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'flatsome' );
			}


			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>
	</footer> -->

	<!-- .entry-meta -->
		<?php  if(isset($flatsome_opt['blog_author_box']) && $flatsome_opt['blog_author_box']) { ?>
			<div class="author-box">
				<div class="row">
					<div class="large-2 small-3 columns">
						<?php
							$user = get_the_author_meta('ID');
							echo get_avatar($user,90);
						?>
					</div>
					<div class="large-10 small-9 columns">
					<h6 class="author-name uppercase">
						<?php echo esc_html( get_the_author_meta( 'display_name' ) );?>
					</h6>

					<?php if(get_the_author_meta('yim')){?>
					<p class="author-title"><?php echo esc_html(get_the_author_meta('yim')); ?></p>
					<?php }?>

					<p class="author-desc"><?php echo esc_html(get_the_author_meta('description'));?></p>

					<?php if(get_the_author_meta('aim')){?>
					<p class="author-twitter"><a href="http://twitter.com/<?php echo get_the_author_meta('aim');?>"><?php echo esc_html(get_the_author_meta('aim'));?></a></p>
					<?php }?>
					</div>
				</div>
			</div>
		<?php } ?>

<!-- IMAGENES DE SIGUIENTE Y ANTERIOR -->
		<div class="col-md-12 imagen-post" id="post-nav"> <!--CONTENEDOR DE LAS DOS IMAGENES-->
		   <?php $prevPost = get_previous_post(true);
		       if($prevPost) {
		           $args = array(
		               'posts_per_page' => 1,
		               'include' => $prevPost->ID
		           );
		           $prevPost = get_posts($args);
		           foreach ($prevPost as $post) {
		               setup_postdata($post);
		   ?>

     
     <div class="col-xs-6 col-md-6 post-previous imagen-prev posicion-prev"> <!--IMAGEN ANTERIOR-->
			 <a href="<?php the_permalink(); ?>">
			 <div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
				 <div class="col-xs-12 col-md-12 pleca"></div>  <!-- BORDE CUADRADA DE LA IMAGEN -->
				 <div class="col-xs-12 col-md-12 col-lg-12 pleca-titulo posicion-pleca"> <!-- PLECA CON EL TEXTO -->
				 	<p class="titulo-post"><a class="titulo-image" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><!--TITULO--></p>
				 </div>
	         <?php the_post_thumbnail('thumbnail'); ?> <!--IMAGEN ANTERIOR-->
			 </div>
			 </a>
			 <div class="col-xs-12 col-md-12">
				 <h4 style="text-align:center; padding:5%"><a style="color:#000;" class="next" href="<?php the_permalink(); ?>">Articulo anterior</a></h4>
			 </div>
     </div>

		   <?php
		               wp_reset_postdata();
		           } //end foreach
		       } // end if

		       $nextPost = get_next_post(true);
		       if($nextPost) {
		           $args = array(
		               'posts_per_page' => 1,
		               'include' => $nextPost->ID
		           );
		           $nextPost = get_posts($args);
		           foreach ($nextPost as $post) {
		               setup_postdata($post);
		   ?>
     <div class="col-xs-6 col-md-6 post-next imagen-next posicion-prev"><!--IMAGEN SIGUIENTE-->
     		<a href="<?php the_permalink(); ?>">
			  <div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
				 <div class="col-xs-12 col-md-12 pleca"></div><!-- BORDE CUADRADA DE LA IMAGEN -->
				 <div class="col-xs-12 col-md-12 col-lg-12 pleca-titulo posicion-pleca"> <!-- PLECA CON EL TEXTO -->
				 	<p class="titulo-post"><a class="titulo-image" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><!--TITULO--></p>
				 </div>
	         <?php the_post_thumbnail('thumbnail'); ?><!--IMAGEN SIGUIETNE-->
			 </div></a>
			 <div class="col-xs-12 col-md-12">
			 	<h4 style="text-align:center; padding:5%"><a style="color:#000;" class="next" href="<?php the_permalink(); ?>">Siguiente articulo</a></h4>
			 </div>
     </div>
		   <?php
		               wp_reset_postdata();
		           } //end foreach
		       } // end if
		   ?>
		</div>
<!-- FIN IMAGENES SIGUIENTE ANTERIOR ------------------------------------------------>
</article><!-- #post-## -->
