<?php
/**
 * The Template for displaying all single posts.
 *
 * @package flatsome
 */

get_header();

global $flatsome_opt;
if(!isset($flatsome_opt['blog_post_layout'])){$flatsome_opt['blog_post_layout'] = $flatsome_opt['blog_layout'];}

?>

<?php // Add blog header if set
if($flatsome_opt['blog_header']){ echo do_shortcode($flatsome_opt['blog_header']);}
?>

<?php
// Create big featured image if set *************************************************************************************
if($flatsome_opt['blog_post_style'] == 'big-featured-image') { ?>

 <div style="border-top:1px solid #fff;"> </div>
<div class="parallax-title mio2 mio">
<?php while ( have_posts() ) : the_post(); ?>
	<?php ob_start(); ?>
	<?php
	$bg = '#333';
	if( has_post_thumbnail() ) $bg = get_post_thumbnail_id();
  $cate =the_title();
	$header_html = ob_get_contents();
	$header_html = '[ux_banner animate="fadeInDown" bg_overlay="#000" parallax="3" parallax_text="2" height="360px" bg="'.$bg.'"]'.$header_html.'[/ux_banner]';

	ob_end_clean();
	echo do_shortcode($header_html);

	?>
<?php endwhile; // end of the loop. ?>
</div>
<?php } ?>

<div class="page-wrapper page-<?php echo $flatsome_opt['blog_post_layout']; ?>">
	<div class="row">
		<!-- <h3 class="section-title clearfix title_center "><span style=" color: #85d1de; text-align: center;font-size: 50px;font-weight: 500; text-transform: initial;font-family: 'Allura', cursive;letter-spacing: 1px; text-transform:uppercase;"><?php the_category(); ?></span></h3> -->
	<header class="entry-header text-center">
		<h1 class="entry-title" style="font-family: 'Playfair Display"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php flatsome_posted_on(); ?>
		</div>
		<div class="tx-div small"></div>
		<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
	</header>

		<?php if($flatsome_opt['blog_post_layout'] == 'left-sidebar') {
		 	echo '<div id="content" class="large-9 right columns" role="main">';
		 } else if($flatsome_opt['blog_post_layout'] == 'right-sidebar'){
		 	echo '<div id="content" class="large-9 left columns" role="main">';
		 } else if($flatsome_opt['blog_post_layout'] == 'no-sidebar'){
		 	echo '<div id="content" class="large-12 columns" role="main">';
		 } else {
		 	echo '<div id="content" class="large-9 left columns" role="main">';
		 }
		?>

	 <div class="page-inner">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php // Add content after blog post
			if($flatsome_opt['blog_after_post']){ echo do_shortcode($flatsome_opt['blog_after_post']);}
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- .page-inner -->
	</div><!-- #content -->

	<div class="large-3 columns left">
		<?php if ($flatsome_opt['blog_post_layout'] == 'left-sidebar' || $flatsome_opt['blog_post_layout'] == 'right-sidebar' ){
			get_sidebar();
		}?>
	</div><!-- end sidebar -->


</div><!-- end row -->
</div><!-- end page-wrapper -->



<?php get_footer(); ?>
