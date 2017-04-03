<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

<!-- #main-content -->
<script type="text/javascript" src="<?php bloginfo(template_url); ?>/js/bootstrap.js"></script>
<!-- est-->
<script>
//slider home principal
	$(document).ready(function(){
  $('.slider3').bxSlider({
  	auto: true,
  	mode:'horizontal'
  });
});
//slider mas leidos
	$(document).ready(function(){
	$('.slider1').bxSlider({
		infiniteLoop: false,
		mode: 'fade',
		hideControlOnEnd: true
		});
	});


</script>
<!-- est-->
<div>
	<footer class="footer-wrapper" role="contentinfo">
		<?php if(isset($flatsome_opt['html_before_footer'])){
			// BEFORE FOOTER HTML BLOCK
			echo do_shortcode($flatsome_opt['html_before_footer']);
		} ?>

		<!-- FOOTER 1 -->
		<?php if ( is_active_sidebar( 'sidebar-footer-1' ) ) : ?>
		<div class="footer footer-1 <?php echo $flatsome_opt['footer_1_color']; ?>"  style="background-color:<?php echo $flatsome_opt['footer_1_bg_color']; ?>">
			<div>
		   		<?php dynamic_sidebar('sidebar-footer-1'); ?>
			</div><!-- end row -->
		</div>
		<?php endif; ?>
		<!-- end footer 1 -->

	<!-- Footer wedding -->
		<div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5 lista-stylo">
			<ul>
				<li><div class="col-xs-3 col-sm-3 col-md-3 nopadding">
				<a href="https://www.facebook.com/theweddingboard/" target="_blak"><i class="fa fa-facebook color-social" aria-hidden="true"></i></a>
				</div></li>
				<li><div class="col-xs-3 col-sm-3 col-md-3 nopadding">
					<a href="https://twitter.com/TheWeddingBoard" target="_blak"><i class="fa fa-twitter color-social" aria-hidden="true"></i></a>
				</div></li>
				<li><div class="col-xs-3 col-sm-3 col-md-3 nopadding">
					<a href="https://www.pinterest.com/twboard/" target="_blak"><i class="fa fa-pinterest color-social" aria-hidden="true"></i></a>
				</div></li>
				<li><div class="col-xs-3 col-sm-3 col-md-3 nopadding">
					<a href="https://www.instagram.com/the_weddingboard/" target="_blak"><i class="fa fa-instagram color-social" aria-hidden="true"></i></a>
				</div></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 derechos" style="text-align:center;">
			Todos los derechos reservados <br>developed by velosoft
		</div>
	<!-- Fin Footer wedding -->
		<!-- FOOTER 2 -->
		<?php if ( is_active_sidebar( 'sidebar-footer-2' ) ) : ?>
			<div class="footer footer-2 <?php echo $flatsome_opt['footer_2_color']; ?>" style="background-color:<?php echo $flatsome_opt['footer_2_bg_color']; ?>">
				<div class="row">
			   		<?php dynamic_sidebar('sidebar-footer-2'); ?>
				</div><!-- end row -->
			</div>
		<?php endif; ?>
		<!-- end footer 2 -->
		<?php if(isset($flatsome_opt['html_after_footer'])){
			// AFTER FOOTER HTML BLOCK
			echo do_shortcode($flatsome_opt['html_after_footer']);
		} ?>

		<div class="absolute-footer <?php echo $flatsome_opt['footer_bottom_style']; ?>" style="background-color:<?php echo $flatsome_opt['footer_bottom_color']; ?>">
			<div class="row">
				<div class="large-12 columns">
					<div class="left">
						 <?php if ( has_nav_menu( 'footer' ) ) : ?>
							<?php
								wp_nav_menu(array(
									'theme_location' => 'footer',
									'menu_class' => 'footer-nav',
									'depth' => 1,
									'fallback_cb' => false,
								));
							?>
						<?php endif; ?>
						<div class="copyright-footer">
							<?php if(isset($flatsome_opt['footer_left_text'])) {echo do_shortcode($flatsome_opt['footer_left_text']);} else{ echo 'Define left footer text / navigation in Theme Option Panel';} ?>
						</div>
					</div><!-- .left -->
					<div class="right">
						<?php if(isset($flatsome_opt['footer_right_text'])){ echo do_shortcode($flatsome_opt['footer_right_text']);} else {echo 'Define right footer text in Theme Option Panel';} ?>
					</div>
				</div><!-- .large-12 -->
			</div><!-- .row-->
		</div><!-- .absolute-footer -->
	</footer><!-- .footer-wrapper -->
</div><!-- #wrapper -->

<!-- back to top -->
<a href="#top" id="top-link" class="animated fadeInUp"><span class="icon-angle-up"></span></a>
	<?php if(isset($flatsome_opt['html_scripts_footer'])){
		// Insert footer scripts
		echo $flatsome_opt['html_scripts_footer'];
	} ?>

<?php wp_footer(); ?>

</body>
</html>
