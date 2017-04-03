<?php
/*
Template name: Full Width
*/
get_header(); ?>

</div>
<!-- SLIDER  home est-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding nomargin">
	<div class="size-home">
		<div class="slider3">
		<?php global $post;
			$args = array( "posts_per_page" => 3, "offset"=> 0, "category" => 13 );
			$myposts = get_posts( $args ); ?>
		<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
				<div class="slide ">
					<div class="col-sm-12 col-md-12 col-lg-12 nopadding ">
						<?php if (has_post_thumbnail()) {
								$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								echo '<li class="img-variado4" style="background: url('. $url.')">';?>
						<?php } ?>
						<div class="col-sm-9 col-sm-7 col-md-5 bg-izq1 cuadr center" style="position: relative;">
							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 text-slider  nopadding rayas">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="col-sm-12 col-md-12 col-lg-12 texpad">
										 <a href="<?php the_permalink() ?>" style="float: none;" ><strong> <?php the_title(); ?></strong></a>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 display texpad">
										<p style="text-align:center; margin:2px;"><?php echo get_the_date( get_option('date_format') ); ?></p>
									</div>
									<div class="center display texpad">
										<img src="<?php bloginfo('template_url'); ?>/img/hoja.jpg" class="hoja"  alt="wedding bible" width="5%">
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12  display texpad">
										<?php $textoLargo= get_the_excerpt();
										   $textoCorto=limitar_palabras($textoLargo, 10,'&#91;...&#93;&nbsp;&nbsp;'); ?>
										   <p><?php echo $textoCorto ?></p>
									</div>
									<div class="col-xs-12 col-md-12 col-lg-12 display">
						           		<a class="permanlink" href="<?php the_permalink() ?>" title="Ir al artículo">Leer</a>
					           		</div>
				           		</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- FIN SLIDER home est -->
<!-- LO MAS LEIDO  -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding nomargin">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mas-leido margin-leido">
		Lo Más leido
	</div>
	<div class="col-sm-12 col-md-12 col-lg-12">
	<?php $popular = new WP_Query(array('posts_per_page'=>3, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
		while ($popular->have_posts()) : $popular->the_post(); ?>
			<div class="col-sm-4 col-md-4 col-lg-4 bg-mas empuje">
				<div class="col-sm-12 col-md-12 col-lg-4 nopadding center-mas">
					<a href="<?php the_permalink() ?>" title="Ir al artículo">
					<?php if (has_post_thumbnail()) {  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			            echo '<li class="img_mas_leidos" style="background: url('. $url.')">'; } ?>
		            </a>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-8 padding-title text-weding1">
					<div class="col-xs-12 col-md-12 col-lg-12"><a href="<?php  the_permalink(); ?> "><b><?php the_title(); ?></b></a></div>
					<div class="col-sm-12 col-md-12 col-lg-12">
						<?php $textoLargo= get_the_excerpt();
							   $permalink = get_permalink($post->ID);
							   $textoCorto=limitar_palabras($textoLargo, 8,'&#91;...&#93;&nbsp;&nbsp;'); ?>
						<a href="<?php the_permalink(); ?>"><p><?php echo $textoCorto ?></p></a>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12">
						<span class=" right"><?php echo get_the_date( get_option('date_format') ); ?></span>
					</div>
				</div>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>

<!-- FIN LO MAS LEIDO -->

<!-- INICIA SLIDER1 -->
<section class="botones">
        <div class="col-xs-12 col-md-12 col-lg-12 border"></div>
    <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 margin-weding slider23">
        <div class="slider1">
            <?php global $post;
            $args = array( "posts_per_page" => 5, "offset"=> 0, "category" => 12 ); //colaboracion 1
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post);
            ?>
            <div class="slide">
            <a href="<?php the_permalink(); ?>">
                <div class="col-sm-4 col-md-4 mujer-img nopadding"  style="text-align: center;">
                <?php if (has_post_thumbnail()) {
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                    <a href="<?php the_permalink(); ?>" ><img class="redondeo" src="<?php echo $url; ?>"/></a>
                    <?php } ?>
                </div>
                <div class="col-sm-8 col-md-8 empuje-mas">
                    <div class="col-sm-12 col-md-8 title-day"><a href="<?php echo get_category_link(12); ?>"><b><?php echo do_shortcode ('[block id="wedding-day-cajas"]'); ?></b></div>
                    <div class="col-sm-12 col-md-12 content-day">
                        <?php $textoLargo= get_the_excerpt();
                         $permalink = get_permalink($post->ID);
                         $textoCorto=limitar_palabras($textoLargo, 50,'&#91;...&#93;&nbsp;&nbsp;'); ?>
                         <p><?php echo $textoCorto ?></p>
                    </div>
                    <div class="col-sm-12 col-md-12 text-day leer"><a href="<?php the_permalink(); ?>"><strong>Leer</strong></a></div>
                </div>
                </a>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12 border"></div>
</section>

<div class="col-md-12 border"></div>
	<!-- FIN SLIDER1 -->
<!-- CONTENIDO -->
<!--est-->
<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 21); //belleza y Salud
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-sm-12 col-md-8 col-lg-9 col-lg-offset-2 contenedor2">
				<div class="col-sm-5 col-md-7 col-lg-5 sobre2 img-variado2">
					<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
					<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
					<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
						<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
  							<a href="<?php echo get_category_link(21); ?>"><b>belleza y salud</b></a>
	  					</div>
	  					<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
	  						<a href="<?php the_permalink($post->ID); ?>">
	  							<p><strong><?php the_title(); ?></strong></p>
	  						</a>
	  					</div>
						<div class="col-xs-12 col-md-12 col-lg-12 text-weding sep ">
	  						<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
	  					</div>
	  					<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
		           		 <?php
						   $textoLargo= get_the_excerpt();
						   $permalink = get_permalink($post->ID);
						   $textoCorto=limitar_palabras($textoLargo, 25,'&#91;...&#93;&nbsp;&nbsp;'); ?>
						   <p><?php echo $textoCorto ?></p>
			           	</div>
			           	<div class="col-xs-12 col-md-12 col-lg-12"><p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p></div>
							<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
						<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
				          <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
				          </div>
				        </div>
					</div>
				</div>
				<div class="col-sm-8 col-md-12 col-lg-9 col-lg-offset-1 sin sin3">
					<?php
		            if (has_post_thumbnail()) {$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		              echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
				</div>
			</div>
<?php endforeach; ?>
</div>
<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 24); //Hogar
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
	 <div class="col-sm-12 col-md-12 col-lg-9 contenedor">
		<div class="col-sm-8 col-md-8 col-lg-9 col-lg-offset-2 sin ">
			<?php
	        if (has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );         
	          	echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
		</div>
		<div class="col-sm-5 col-md-5 col-lg-5 sobre img-variado2">
		<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
		<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
			<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
				<div class="col-sm-12 col-md-12 col-lg-12   text-weding sep">
					<a href="<?php echo get_category_link(24); ?>"><b>hogar</b></a>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
					<a href="<?php the_permalink($post->ID); ?>"><p><strong><?php the_title(); ?></strong></p></a>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-weding">
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
				</div>
				<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
           		 <?php
				   $textoLargo= get_the_excerpt();
				   $permalink = get_permalink($post->ID);
				   $textoCorto=limitar_palabras($textoLargo, 20,'&#91;...&#93;&nbsp;&nbsp;'); ?>
				   <p><?php echo $textoCorto ?></p>
	           	</div>
	           	<div class="col-sm-12 col-md-12 col-lg-12 " style="z-index: 5">
	           		<p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p>
	           	</div>
					<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
				<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
		          <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
		            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
		          </div>
		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
		            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
		          </div>
		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
						<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
		          </div>
		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
						<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
		          </div>
		        </div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>

<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 8); //categoria 8 inspiration & ideas
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-sm-12 col-md-8 col-lg-9 col-lg-offset-2 contenedor2">
				<div class="col-sm-5 col-md-7 col-lg-5 sobre2 img-variado2">
					<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
					<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
					<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
						<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
  							<a href="<?php echo get_category_link(8); ?>"><b>inspiration & ideas</b></a>
	  					</div>
	  					<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
	  						<a href="<?php the_permalink($post->ID); ?>">
	  							<p><strong><?php the_title(); ?></strong></p>
	  						</a>
	  					</div>
						<div class="col-xs-12 col-md-12 col-lg-12 text-weding sep ">
	  						<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
	  					</div>
	  					<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
		           		 <?php
						   $textoLargo= get_the_excerpt();
						   $permalink = get_permalink($post->ID);
						   $textoCorto=limitar_palabras($textoLargo, 25,'&#91;...&#93;&nbsp;&nbsp;'); ?>
						   <p><?php echo $textoCorto ?></p>
			           	</div>
			           	<!---->
			           	<div class="col-xs-12 col-md-12 col-lg-12"><p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p></div>
							<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
						<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
				          <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
				          </div>
				        </div>
					</div>
				</div>
				<div class="col-sm-8 col-md-12 col-lg-9 col-lg-offset-1 sin sin3">
					<?php
		            if (has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	              
		              	echo '<li class="img-variado img-variado3" style="background: url('. $url.')">';}?>
				</div>
			</div>
<?php endforeach; ?>
</div>
<!-- categoria 8 inspiration & ideas muestra imagen derecha-->

<!-- FIN CONTENIDO -->

<!-- INICIA SLIDER2 -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding hidden-xs">
	<div class="col-sm-6 col-md-6 col-lg-6 nopadding"><!-- beauty -->
	<?php global $post;
		$args = array("posts_per_page" => 1,  "offset"=> 0, "category" => 5 ); //colaboracion 2
			$myposts = get_posts( $args ); ?>
				<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
		<div class=" col-sm-12 col-md-12 col-lg-12 nopadding img-beauty">
			<?php   if (has_post_thumbnail()) {
	        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	        echo '<li class="contenido-imagen3" style="background: url('. $url.');">';}?>
			<div class="col-sm-3 col-md-3 text-beauty bg-beauty" style="border: 1px solid #fff;">
				<div class="col-sm-12 col-md-12 col-lg-12 margin-imagenes">
					<a href="<?php echo get_category_link(5); ?>"><?php echo do_shortcode ('[block id="beauty_cajas"]'); ?></a>
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
					<div class="col-sm-12 eliminar">
						<span><a href="<?php the_permalink(); ?>">Continuar</a></span>
					</div>
					<div class="col-md-8 col-md-offset-2 bg-linea"></div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<div class="col-sm-6 col-md-6 col-lg-6 nopadding"><!-- wedding dresses -->
	<?php global $post;
		$args = array("posts_per_page" => 1,  "offset"=> 0, "category" => 10 ); //colaboración 3
			$myposts = get_posts( $args ); ?>
				<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
		<div class=" col-sm-12 col-md-12 col-lg-12 nopadding img-beauty">
			<?php   if (has_post_thumbnail()) {
	        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	        echo '<li class="contenido-imagen3" style="background: url('. $url.');">';}?>
			<div class="col-sm-3 col-md-3 text-beauty bg-beauty" style="border: 1px solid #fff;">
				<div class="col-sm-12 col-md-12 col-lg-12 margin-imagenes">
					<a href="<?php echo get_category_link(10); ?>"><?php echo do_shortcode ('[block id="wedding-dresses-cajas"]'); ?></a>
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
					<div class="col-sm-12 eliminar">
						<span><a href="<?php the_permalink(); ?>">Continuar</a></span>
					</div>
					<div class="col-md-8 col-md-offset-2 bg-linea"></div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- FIN SLIDER 2 -->
<!--est-->
<!--  imagen muestra a la izquierda -->
<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 14); //categoria 14 antes de tu boda
	    $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
		<div class="col-sm-12 col-md-12 col-lg-9 contenedor">
 		<div class="col-sm-8 col-md-8 col-lg-9 col-lg-offset-2 sin ">
 			<?php
	         if (has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	           	echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
 		</div>
 		<div class="col-sm-5 col-md-5 col-lg-5 sobre img-variado2">
 		<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
 		<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
 			<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
 				<div class="col-sm-12 col-md-12 col-lg-12   text-weding sep">
					<a href="<?php echo get_category_link(14); ?>"><b>antes de tu boda</b></a>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
					<a href="<?php the_permalink($post->ID); ?>">
						<p><strong><?php the_title(); ?></strong></p>
					</a>
				</div>
 				<div class="col-sm-12 col-md-12 col-lg-12 text-weding">
 					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
 				</div>
 				<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
            		<?php
	 				   $textoLargo= get_the_excerpt();
	 				   $permalink = get_permalink($post->ID);
	 				   $textoCorto=limitar_palabras($textoLargo, 20,'&#91;...&#93;&nbsp;&nbsp;'); ?>
 				   <p><?php echo $textoCorto ?></p>
 	           	</div>
 	           	<div class="col-sm-12 col-md-12 col-lg-12 " style="z-index: 5">
 	           		<p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p>
 	           	</div>
 					<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
 				<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
 		          <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
 		            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
 		          </div>
 		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
 		            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
 		          </div>
 		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
 						<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
 		          </div>
 		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
 						<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
 		          </div>
 		        </div>
 			</div>
 		</div>
 	</div>
<?php endforeach; ?>
</div>

<!-- -->
<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 18); //despedidas cat 18
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-sm-12 col-md-8 col-lg-9 col-lg-offset-2 contenedor2">
				<div class="col-sm-5 col-md-7 col-lg-5 sobre2 img-variado2">
					<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
					<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
					<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
						<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
  							<a href="<?php echo get_category_link(18); ?>"><b>despedidas</b></a>
	  					</div>
	  					<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
	  						<a href="<?php the_permalink($post->ID); ?>">
	  							<p><strong><?php the_title(); ?></strong></p>
	  						</a>
	  					</div>
						<div class="col-xs-12 col-md-12 col-lg-12 text-weding sep ">
	  						<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
	  					</div>
	  					<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
		           		 <?php
						   $textoLargo= get_the_excerpt();
						   $permalink = get_permalink($post->ID);
						   $textoCorto=limitar_palabras($textoLargo, 25,'&#91;...&#93;&nbsp;&nbsp;');?>
						   <p><?php echo $textoCorto ?></p>
			           	</div>
			           	<div class="col-xs-12 col-md-12 col-lg-12"><p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p></div>
							<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
						<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
					        <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
					            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
					        </div>
					        <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
					            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
					        </div>
					        <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
					        </div>
					        <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
					        </div>
				        </div>
					</div>
				</div>
				<div class="col-sm-8 col-md-12 col-lg-9 col-lg-offset-1 sin sin3">
					<?php
		            if (has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	             
		              echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
				</div>
			</div>
<?php endforeach; ?>
</div>
<!-- FIN CONTENIDO -->

<!-- INICIA SLIDER2 -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding hidden-xs">
	<div class="col-sm-6 col-md-6 col-lg-6 nopadding"><!-- beauty -->
	<?php global $post;
		$args = array("posts_per_page" => 1,  "offset"=> 0, "category" => 26 ); //colaboración 4
			$myposts = get_posts( $args ); ?>
				<?php foreach( $myposts as $post ) : setup_postdata($post); ?>

		<div class=" col-sm-12 col-md-12 col-lg-12 nopadding img-beauty">
			<?php   if (has_post_thumbnail()) {
	        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	        echo '<li class="contenido-imagen3" style="background: url('. $url.');">';}?>
			<div class="col-sm-3 col-md-3 text-beauty bg-beauty" style="border: 1px solid #fff;">
				<div class="col-sm-12 col-md-12 col-lg-12 margin-imagenes">
					<a href="<?php echo get_category_link(26); ?>"><?php echo do_shortcode ('[block id="colaboracion4"]'); ?></a>
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
					<div class="col-sm-12 eliminar">
						<span><a href="<?php the_permalink(); ?>">Continuar</a></span>
					</div>
					<div class="col-md-8 col-md-offset-2 bg-linea"></div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<div class="col-sm-6 col-md-6 col-lg-6 nopadding"><!-- wedding dresses -->
	<?php global $post;
		$args = array("posts_per_page" => 1,  "offset"=> 0, "category" => 27 ); //colaboración 5
			$myposts = get_posts( $args ); ?>
				<?php foreach( $myposts as $post ) : setup_postdata($post); ?>

		<div class=" col-sm-12 col-md-12 col-lg-12 nopadding img-beauty">
			<?php   if (has_post_thumbnail()) {
	        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	        echo '<li class="contenido-imagen3" style="background: url('. $url.');">';}?>
			<div class="col-sm-3 col-md-3 text-beauty bg-beauty" style="border: 1px solid #fff;">
				<div class="col-sm-12 col-md-12 col-lg-12 margin-imagenes">
					<a href="<?php echo get_category_link(27); ?>"><?php echo do_shortcode ('[block id="colaboracion-5"]'); ?></a>
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
					<div class="col-sm-12 eliminar">
						<span><a href="<?php the_permalink(); ?>">Continuar</a></span>
					</div>
					<div class="col-md-8 col-md-offset-2 bg-linea"></div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- FIN SLIDER 2 -->
<!--categoria extra-->
<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 16); //servicios para tu boda 16
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-sm-12 col-md-8 col-lg-9 col-lg-offset-2 contenedor2">
				<div class="col-sm-5 col-md-7 col-lg-5 sobre2 img-variado2">
					<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
					<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
					<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
						<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
  							<a href="<?php echo get_category_link(16); ?>"><b>servicios para tu boda</b></a>
	  					</div>
	  					<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
	  						<a href="<?php the_permalink($post->ID); ?>"><p><strong><?php the_title(); ?></strong></p></a>
	  					</div>
						<div class="col-xs-12 col-md-12 col-lg-12 text-weding sep ">
	  						<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
	  					</div>
	  					<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
		           		 <?php
						   $textoLargo= get_the_excerpt();
						   $permalink = get_permalink($post->ID);
						   $textoCorto=limitar_palabras($textoLargo, 25,'&#91;...&#93;&nbsp;&nbsp;'); ?>
						   <p><?php echo $textoCorto ?></p>
			           	</div>
			           	<div class="col-xs-12 col-md-12 col-lg-12"><p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p></div>
							<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
						<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
				          <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
				          </div>
				        </div>
					</div>
				</div>
				<div class="col-sm-8 col-md-12 col-lg-9 col-lg-offset-1 sin sin3">
					<?php
		            if (has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		              echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
				</div>
			</div>
<?php endforeach; ?>
</div>
<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 22); //22 tendencias
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
	 <div class="col-sm-12 col-md-12 col-lg-9 contenedor">
		<div class="col-sm-8 col-md-8 col-lg-9 col-lg-offset-2 sin ">
			<?php
	        if (has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	          echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
		</div>
		<div class="col-sm-5 col-md-5 col-lg-5 sobre img-variado2">
		<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
		<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
			<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
				<div class="col-sm-12 col-md-12 col-lg-12   text-weding sep">
					<a href="<?php echo get_category_link(22); ?>"><b>Tendencias</b></a>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
					<a href="<?php the_permalink($post->ID); ?>"><p><strong><?php the_title(); ?></strong></p></a>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-weding">
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
				</div>
				<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
           		 <?php
				   $textoLargo= get_the_excerpt();
				   $permalink = get_permalink($post->ID);
				   $textoCorto=limitar_palabras($textoLargo, 20,'&#91;...&#93;&nbsp;&nbsp;'); ?>
				   <p><?php echo $textoCorto ?></p>
	           	</div>
	           	<div class="col-sm-12 col-md-12 col-lg-12 " style="z-index: 5">
	           		<p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p>
	           	</div>
					<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
				<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
		          <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
		            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
		          </div>
		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
		            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
		          </div>
		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
						<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
		          </div>
		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
						<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
		          </div>
		        </div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>

<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 22); //categoria 22 recien casados
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
	  	<!--articulo a la derecha  segundo en salir-->
			<div class="col-sm-12 col-md-8 col-lg-9 col-lg-offset-2 contenedor2">
				<div class="col-sm-5 col-md-7 col-lg-5 sobre2 img-variado2">
					<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
					<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
					<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
						<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
  							<a href="<?php echo get_category_link(22); ?>"><b>recién casados</b></a>
	  					</div>
	  					<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
	  						<a href="<?php the_permalink($post->ID); ?>"><p><strong><?php the_title(); ?></strong></p></a>
	  					</div>
						<div class="col-xs-12 col-md-12 col-lg-12 text-weding sep ">
	  						<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
	  					</div>
	  					<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
		           		 <?php
						   $textoLargo= get_the_excerpt();
						   $permalink = get_permalink($post->ID);
						   $textoCorto=limitar_palabras($textoLargo, 25,'&#91;...&#93;&nbsp;&nbsp;');
						   //echo //'<p>' . $textoCorto . '</p>';	?>
						   <p><?php echo $textoCorto ?></p>
			           	</div>
			           	<div class="col-xs-12 col-md-12 col-lg-12">
			           		<p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p>
			           	</div>
							<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
						<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
				          <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
				          </div>
				        </div>
					</div>
				</div>
				<div class="col-sm-8 col-md-12 col-lg-9 col-lg-offset-1 sin sin3">
					<?php
	            	if (has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	             
	              		echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
				</div>
			</div>
<?php endforeach; ?>
</div>
<!-- FIN CONTENIDO -->

<!-- INICIA SLIDER2 -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding hidden-xs">
	<div class="col-sm-6 col-md-6 col-lg-6 nopadding"><!-- beauty -->
	<?php global $post;
		$args = array("posts_per_page" => 1,  "offset"=> 0, "category" => 28 ); //colabroacion 6
			$myposts = get_posts( $args ); ?>
				<?php foreach( $myposts as $post ) : setup_postdata($post); ?>

		<div class=" col-sm-12 col-md-12 col-lg-12 nopadding img-beauty">
			<?php   if (has_post_thumbnail()) {
	        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	        echo '<li class="contenido-imagen3" style="background: url('. $url.');">';}?>
			<div class="col-sm-3 col-md-3 text-beauty bg-beauty" style="border: 1px solid #fff;">
				<div class="col-sm-12 col-md-12 col-lg-12 margin-imagenes">
					<a href="<?php echo get_category_link(28); ?>"><?php echo do_shortcode ('[block id="colaboracion-6"]'); ?></a>
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
					<div class="col-sm-12 eliminar">
						<span><a href="<?php the_permalink(); ?>">Continuar</a></span>
					</div>
					<div class="col-md-8 col-md-offset-2 bg-linea"></div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<div class="col-sm-6 col-md-6 col-lg-6 nopadding"><!-- wedding dresses -->
	<?php global $post;
		$args = array("posts_per_page" => 1,  "offset"=> 0, "category" => 29 ); //colaboracion 7
			$myposts = get_posts( $args ); ?>
				<?php foreach( $myposts as $post ) : setup_postdata($post); ?>

		<div class=" col-sm-12 col-md-12 col-lg-12 nopadding img-beauty">
			<?php   if (has_post_thumbnail()) {
	        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	        echo '<li class="contenido-imagen3" style="background: url('. $url.');">';}?>
			<div class="col-sm-3 col-md-3 text-beauty bg-beauty" style="border: 1px solid #fff;">
				<div class="col-sm-12 col-md-12 col-lg-12 margin-imagenes">
					<a href="<?php echo get_category_link(29); ?>"><?php echo do_shortcode ('[block id="colaboracion-7"]'); ?></a>
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
					<div class="col-sm-12 eliminar">
						<span><a href="<?php the_permalink(); ?>">Continuar</a></span>
					</div>
					<div class="col-md-8 col-md-offset-2 bg-linea"></div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- FIN SLIDER 2 -->
<!--est-->
<!--  imagen muestra a la izquierda -->
<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 15); //categoria 15 el gran dia
	    $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
		<div class="col-sm-12 col-md-12 col-lg-9 contenedor">
	 		<div class="col-sm-8 col-md-8 col-lg-9 col-lg-offset-2 sin ">
	 			<?php
	         if (has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	           echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
	 		</div>
 		<div class="col-sm-5 col-md-5 col-lg-5 sobre img-variado2">
 		<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
 		<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
 			<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
 				<div class="col-sm-12 col-md-12 col-lg-12   text-weding sep">
 					<a href="<?php echo get_category_link(15); ?>"><b>el gran día</b></a>
 				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
					<a href="<?php the_permalink($post->ID); ?>"><p><strong><?php the_title(); ?></strong></p></a>
				</div>
 				<div class="col-sm-12 col-md-12 col-lg-12 text-weding">
 					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
 				</div>
 				<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
            		 <?php
	 				   $textoLargo= get_the_excerpt();
	 				   $permalink = get_permalink($post->ID);
	 				   $textoCorto=limitar_palabras($textoLargo, 20,'&#91;...&#93;&nbsp;&nbsp;'); ?>
 				   <p><?php echo $textoCorto ?></p>
 	           	</div>
 	           	<div class="col-sm-12 col-md-12 col-lg-12 " style="z-index: 5">
 	           		<p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p>
 	           	</div>
 					<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
 				<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
 		          <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
 		            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
 		          </div>
 		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
 		            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
 		          </div>
 		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
 						<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
 		          </div>
 		          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
 						<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
 		          </div>
 		        </div>
 			</div>
 		</div>
 	</div>
<?php endforeach; ?>
</div>

<!-- -->
<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 19); //19 destinos para tu boda
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-sm-12 col-md-8 col-lg-9 col-lg-offset-2 contenedor2">
				<div class="col-sm-5 col-md-7 col-lg-5 sobre2 img-variado2">
					<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
					<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
					<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
						<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
  							<a href="<?php echo get_category_link(19); ?>"><b>Destinos para tu Boda</b></a>
	  					</div>
	  					<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
	  						<a href="<?php the_permalink($post->ID); ?>"><p><strong><?php the_title(); ?></strong></p></a>
	  					</div>
						<div class="col-xs-12 col-md-12 col-lg-12 text-weding sep ">
	  						<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
	  					</div>
	  					<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
		           		 <?php
						   $textoLargo= get_the_excerpt();
						   $permalink = get_permalink($post->ID);
						   $textoCorto=limitar_palabras($textoLargo, 25,'&#91;...&#93;&nbsp;&nbsp;'); ?>
						   <p><?php echo $textoCorto ?></p>
			           	</div>
			           	<div class="col-xs-12 col-md-12 col-lg-12">
			           		<p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p>
			           	</div>
							<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
						<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
				          <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
				          </div>
				        </div>
					</div>
				</div>
				<div class="col-sm-8 col-md-12 col-lg-9 col-lg-offset-1 sin sin3">
					<?php
	            if (has_post_thumbnail()) {
	              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	              	echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
				</div>
			</div>
<?php endforeach; ?>
</div>
<!---->
<!-- INICIA SLIDER2 -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding hidden-xs">
	<div class="col-sm-6 col-md-6 col-lg-6 nopadding"><!-- beauty -->
	<?php global $post;
		$args = array("posts_per_page" => 1,  "offset"=> 0, "category" => 30 ); //colaboracion 8
			$myposts = get_posts( $args ); ?>
				<?php foreach( $myposts as $post ) : setup_postdata($post); ?>

		<div class=" col-sm-12 col-md-12 col-lg-12 nopadding img-beauty">
			<?php   if (has_post_thumbnail()) {
	        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	        echo '<li class="contenido-imagen3" style="background: url('. $url.');">';}?>
			<div class="col-sm-3 col-md-3 text-beauty bg-beauty" style="border: 1px solid #fff;">
				<div class="col-sm-12 col-md-12 col-lg-12 margin-imagenes">
					<a href="<?php echo get_category_link(30); ?>"><?php echo do_shortcode ('[block id="colaboracion-8"]'); ?></a>
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
					<div class="col-sm-12 eliminar">
						<span><a href="<?php the_permalink(); ?>">Continuar</a></span>
					</div>
					<div class="col-md-8 col-md-offset-2 bg-linea"></div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<div class="col-sm-6 col-md-6 col-lg-6 nopadding"><!-- wedding dresses -->
	<?php global $post;
		$args = array("posts_per_page" => 1,  "offset"=> 0, "category" => 31 ); //colaboracion 9
			$myposts = get_posts( $args ); ?>
				<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
		<div class=" col-sm-12 col-md-12 col-lg-12 nopadding img-beauty">
			<?php  if (has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			        echo '<li class="contenido-imagen3" style="background: url('. $url.');">';}?>
			<div class="col-sm-3 col-md-3 text-beauty bg-beauty" style="border: 1px solid #fff;">
				<div class="col-sm-12 col-md-12 col-lg-12 margin-imagenes">
					<a href="<?php echo get_category_link(31); ?>"><?php echo do_shortcode ('[block id="colaboracion-9"]'); ?></a>
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
					<div class="col-sm-12 eliminar">
						<span><a href="<?php the_permalink(); ?>">Continuar</a></span>
					</div>
					<div class="col-md-8 col-md-offset-2 bg-linea"></div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- FIN SLIDER 2 -->
<!--categoria extra-->
<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 23); //23 vestidos de novia
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-sm-12 col-md-8 col-lg-9 col-lg-offset-2 contenedor2">
				<div class="col-sm-5 col-md-7 col-lg-5 sobre2 img-variado2">
					<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
					<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
					<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
						<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
  							<a href="<?php echo get_category_link(23); ?>"><b>Vestidos de Novia</b></a>
	  					</div>
	  					<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
	  						<a href="<?php the_permalink($post->ID); ?>"><p><strong><?php the_title(); ?></strong></p></a>
	  					</div>
						<div class="col-xs-12 col-md-12 col-lg-12 text-weding sep ">
	  						<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
	  					</div>
	  					<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
		           		 <?php
						   $textoLargo= get_the_excerpt();
						   $permalink = get_permalink($post->ID);
						   $textoCorto=limitar_palabras($textoLargo, 25,'&#91;...&#93;&nbsp;&nbsp;'); ?>
						   <p><?php echo $textoCorto ?></p>
			           	</div>
			           	<div class="col-xs-12 col-md-12 col-lg-12">
			           		<p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p>
			           	</div>
							<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
						<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
				          <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
				            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
				          </div>
				          <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
				          </div>
				        </div>
					</div>
				</div>
				<div class="col-sm-8 col-md-12 col-lg-9 col-lg-offset-1 sin sin3">
					<?php
		            if (has_post_thumbnail()) {
		              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	       
		              echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
				</div>
			</div>
<?php endforeach; ?>
</div>
<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 20); //20 honeymoon
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
	<div class="col-sm-12 col-md-12 col-lg-9 contenedor">
		<div class="col-sm-8 col-md-8 col-lg-9 col-lg-offset-2 sin ">
			<?php
        	if (has_post_thumbnail()) {
          		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          		echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
		</div>
		<div class="col-sm-5 col-md-5 col-lg-5 sobre img-variado2">
		<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
		<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
			<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
				<div class="col-sm-12 col-md-12 col-lg-12   text-weding sep">
					<a href="<?php echo get_category_link(20); ?>"><b>Honeymoon</b></a>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
					<a href="<?php the_permalink($post->ID); ?>">
						<p><strong><?php the_title(); ?></strong></p>
					</a>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 text-weding">
					<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
				</div>
				<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
           		 <?php
				   $textoLargo= get_the_excerpt();
				   $permalink = get_permalink($post->ID);
				   $textoCorto=limitar_palabras($textoLargo, 20,'&#91;...&#93;&nbsp;&nbsp;'); ?>
				   <p><?php echo $textoCorto ?></p>
	           	</div>
	           	<div class="col-sm-12 col-md-12 col-lg-12 " style="z-index: 5">
	           		<p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p>
	           	</div>
					<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
				<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
			        <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
			            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
			        </div>
			        <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
			            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
			        </div>
			        <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
						<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
			        </div>
			        <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
						<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
			        </div>
		        </div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>

<div class="col-xs-12 col-md-12 col-lg-11 padding-category">
 <?php
	  global $post;
	  $args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 17); //categoria 17 tips
	  $myposts = get_posts( $args );
	  foreach( $myposts as $post ) : setup_postdata($post); ?>
			<div class="col-sm-12 col-md-8 col-lg-9 col-lg-offset-2 contenedor2">
				<div class="col-sm-5 col-md-7 col-lg-5 sobre2 img-variado2">
					<div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
					<div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
					<div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
						<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
  							<a href="<?php echo get_category_link(17); ?>"><b>Tips</b></a>
	  					</div>
	  					<div class="col-sm-12 col-md-12 col-lg-12 text-weding sep">
	  						<a href="<?php the_permalink($post->ID); ?>"><p><strong><?php the_title(); ?></strong></p></a>
	  					</div>
						<div class="col-xs-12 col-md-12 col-lg-12 text-weding sep ">
	  						<p class="fecha"><?php echo get_the_date( get_option('date_format') ); ?></p>
	  					</div>
	  					<div class="col-xs-12 col-md-12 col-lg-12  text-weding sep contetn-art">
		           		 <?php
						   $textoLargo= get_the_excerpt();
						   $permalink = get_permalink($post->ID);
						   $textoCorto=limitar_palabras($textoLargo, 25,'&#91;...&#93;&nbsp;&nbsp;'); ?>
						   <p><?php echo $textoCorto ?></p>
			           	</div>
			           	<div class="col-xs-12 col-md-12 col-lg-12">
			           		<p class="continuar"><a  href="<?php the_permalink() ?>" title="Ir al artículo">continuar</a></p>
			           	</div>
							<img src="<?php bloginfo('template_url') ?>/img/paloma.png" class="paloma" alt="" width="10%">
						<div class="col-xs-12 col-sm-12 col-md-12 borreds nopadding">
					        <div class="col-xs-3 col-sm-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
					            <?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');?>
					        </div>
					        <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
					            <?php echo do_shortcode('[custom_share social="twitter" aclass="btn btn-default" iclass="fa fa-twitter"]');?>
					        </div>
					        <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="pinterest" aclass="btn btn-default" iclass="fa fa-pinterest"]');?>
					        </div>
					        <div class="col-xs-3 col-sm-3 col-md-3 nopadding centrado" style="margin-top:3px;">
								<?php echo do_shortcode('[custom_share social="mail" aclass="btn btn-default" iclass="fa fa-envelope"]');?>
					        </div>
				        </div>
					</div>
				</div>
				<div class="col-sm-8 col-md-12 col-lg-9 col-lg-offset-1 sin sin3">
					<?php
	            if (has_post_thumbnail()) {
	              $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	        
	              echo '<li class="img-variado img-variado3" style="background: url('. $url.')">'; }?>
				</div>
			</div>
<?php endforeach; ?>
</div>

	<?php echo do_shortcode ('[block id="pop-up-inicio"]'); ?></a>
	<?php echo do_shortcode('[block id="suscribete"]'); ?>
<?php get_footer(); ?>
