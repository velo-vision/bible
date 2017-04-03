

<section>
			<?php	global $post;
				$args = array( "posts_per_page" => 2, "offset"=> 0, "category" => 9 );
				$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); $contador =1; ?>
			<?php if (($contador%2)==0) { ?>
				
			<div class="col-md-10 col-md-offset-1 bg-primero">
				<div class="col-md-7 img-fashion">
					<?php
		          if (has_post_thumbnail()) {
		            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		            echo '<li class="contenido-imagen1" style="background: url('. $url.')">';}?>
				</div>
				<div class="col-md-5 bg-fondo">
				<img src="wp-content/themes/weddingbible/img/fondo.jpg" class="bg-fondo3" width="85%" alt="">
					<div class="col-xs-12 col-sm-12 col-md-8 text-weding fashion nopadding">
						<b><?php echo the_category(); ?></b>
						<p><strong><?php the_title(); ?></strong></p>
						<p><?php echo get_the_date( get_option('date_format') ); ?></p>
						<p> <?php the_excerpt('15'); ?> </p>
						<span><a href="<?php the_permalink(); ?>">Continuar</a></span>
						<div class="col-sm-12 col-md-12 paloma">
							<img src="wp-content/themes/weddingbible/img/paloma.png" alt="" width="10%">
						</div>
						<div class="borde-redes">
							<img src="wp-content/themes/weddingbible/img/paloma.png" class="paloma nomargin" alt="" width="10%">
						</div>
						<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-10 col-md-offset-1 nopadding">
							<div class="col-xs-3 col-sm-3 col-md-3 nopadding" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 nopadding" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 nopadding" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
							</div>
							<div class="col-xs-3 col-sm-3 col-md-3 nopadding" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
							</div>
						</div>
					</div>
				</div>
			</div>			
			<p>111</p>
			<?php }else{ ?>
			<div class="col-md-10 col-md-offset-1 bg-segundo" style="position: relative;">
			<div class="col-md-5 bg-izq center" style="position: absolute; left: 35%;">
				<img src="wp-content/themes/weddingbible/img/fondo.jpg" class="bg-fondo2" width="85%" alt="" style="height: 420px;">
				<div class="col-xs-12 col-sm-12 col-md-8 text-weding inspiration nopadding">
					<div class="col-xs-12 col-md-12 col-lg-12">
						<b><?php echo the_category(); ?></b>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12">
						<p><strong><?php the_title(); ?></strong></p>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12">
						<p><?php echo get_the_date( get_option('date_format') ); ?></p>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12">
						<?php $textoLargo= get_the_excerpt();
							   $permalink = get_permalink($post->ID);
							   $textoCorto=limitar_palabras($textoLargo, 13,'&#91;...&#93;&nbsp;&nbsp;'); ?>
							   <p><?php echo $textoCorto ?></p>	
					</div>					
					<span><a href="<?php the_permalink(); ?>">Continuar</a></span>
					<div class="col-xs-12 col-sm-12 col-md-12 paloma">
						<img src="wp-content/themes/weddingbible/img/paloma.png" alt="" width="10%">
					</div>
					<div class="borde-redes">
						<img src="wp-content/themes/weddingbible/img/paloma.png" class="paloma nomargin" alt="" width="10%">
					</div>
					<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-10 col-md-offset-1 nopadding">
				        <div class="col-xs-3 col-sm-3 col-md-3 nopadding" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
				        </div>
				        <div class="col-xs-3 col-sm-3 col-md-3 nopadding" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
				        </div>
				        <div class="col-xs-3 col-sm-3 col-md-3 nopadding" style="margin-top:3px;">
							<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
				        </div>
				        <div class="col-xs-3 col-sm-3 col-md-3 nopadding" style="margin-top:3px;">
							<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
				        </div>
			        </div>
				</div>
			</div>
			<div class="col-md-7 img-rosas">
				<?php
          if (has_post_thumbnail()) {
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            echo '<li class="contenido-imagen1" style="background: url('. $url.')">';}?>
			</div>
			</div><p>2</p>
			<?php } $contador ++;?>	
			<?php endforeach; ?>
		</div>
</section>