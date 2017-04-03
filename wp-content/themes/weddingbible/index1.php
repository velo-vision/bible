<?php get_header(); ?>
	
	<section>
		<div class="row">
			<div class="col l12">
				<div class="col l4 bg-mas">
					<div class="col l4">
						<img src="wp-content/themes/simplelabob/images/1.jpg" width="100%" alt="">
					</div>
					<div class="col l8">
						<b>fashion & beauty</b>
						<p>Nam quam nunc, blandit vel, luctus pulvinar</p>
						<div class="right"><span>17 NOV 2017</span></div>
					</div>
				</div>
				<div class="col l4 bg-mas">
					<div class="col l4">
						<img src="wp-content/themes/simplelabob/images/2.jpg" width="100%" alt="">
					</div>
					<div class="col l8">
						<b>inspiration & ideas </b>
						<p>Nam quam nunc, blandit vel, luctus pulvinar</p>
						<div class="right"><span>17 NOV 2017</span></div>
					</div>
				</div>
				<div class="col l4 bg-mas">
					<div class="col l4">
						<img src="wp-content/themes/simplelabob/images/3.jpg" width="100%" alt="">
					</div>
					<div class="col l8">
						<b>Wedding day</b>
						<p>Nam quam nunc, blandit vel, luctus pulvinar</p>
						<div class="right"><span>17 NOV 2017</span></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="row">
			<div class="col l10 offset-l1 m10 offset-m1 s12">
				<div class="col l4 m4 s12">
					<img src="wp-content/themes/simplelabob/images/mujervelo.jpg" class="circle responsive-img" width="80%" alt="">
				</div>
				<div class="col l6 m8 s12 text-day">
					<div class="col l8 m8 s8 title-day"> 
						<b><span>Weddi</span>ng day</b>
					</div>
					<div class="col l4 m4 s4 title-day">
						<img src="wp-content/themes/simplelabob/images/24.png" width="20%" alt="">
					</div>
					<div class="col l12 m12 s12 content-day">
						<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</p>
					</div>
					<div class="col l12 m12 s12 leer">
						<strong>Leer</strong>
					</div>				
				</div>
			</div>
		</div>
	</section>
	
	<section>
	<div class="row">
		<div class="col l10 offset-l1 m10 offset-m1 bg-primero">
			<?php
   				global $post;
				$args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 2 ); //post por pagina, numero del arreglo, categoria
				$myposts = get_posts( $args );   //transforma el arreglo a la variable myposts

				foreach( $myposts as $post ) : setup_postdata($post); // foreach manda a traer a myposts
			?>
			<div class="col l7 m7 s12">
				<?php
			 		if (has_post_thumbnail()) {
			 			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			     <img width="100%" src="<?php echo $url; ?>"/>
				<?php } ?>			
			</div>
			<div class="col l5 m5 s12 bg-fondo">
			<img src="wp-content/themes/simplelabob/images/fondo.jpg" width="80%" alt="">
				<div class="col l3 text-weding planning" style="  margin-left: -4%;">
					<b><?php echo the_category(); ?></b>
					<strong><?php the_title(); ?></strong>
					<p><?php echo get_the_date( get_option('date_format') ); ?></p>
					<p> <?php the_content(); ?> </p>
					<span><a href="<?php the_permalink(); ?>">Contuniar</a></span>
				</div>				
			</div>
			<?php endforeach; ?>
		</div>

		<div class="col l10 offset-l1 m10 offset-m1 bg-segundo">
			<?php
   				global $post;
				$args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 3 ); //post por pagina, numero del arreglo, categoria
				$myposts = get_posts( $args );   //transforma el arreglo a la variable myposts

				foreach( $myposts as $post ) : setup_postdata($post); // foreach manda a traer a myposts
			?>
			<div class="col l5 m5 s12 bg-izq center">
				<img src="wp-content/themes/simplelabob/images/fondo.jpg" width="80%" alt="">
				<div class="col l3 text-weding inspiration" style=" margin-left: 12%;">
					<b><?php echo the_category(); ?></b>
					<strong><?php the_title(); ?></strong>
					<p><?php echo get_the_date( get_option('date_format') ); ?></p>
					<p> <?php the_content(); ?> </p>
					<span><a href="<?php the_permalink(); ?>">Contuniar</a></span>
				</div>		
			</div>
			<div class="col l7 m7 s12">
				<?php
			 		if (has_post_thumbnail()) {
			 			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			     <img width="100%" src="<?php echo $url; ?>"/>
				<?php } ?>
			</div>
			<?php endforeach; ?>
		</div>

		<div class="col l12 m12 s12 images-margin">
				<?php
	   				global $post;
					$args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 5 ); //post por pagina, numero del arreglo, categoria
					$myposts = get_posts( $args );   //transforma el arreglo a la variable myposts

					foreach( $myposts as $post ) : setup_postdata($post); // foreach manda a traer a myposts
				?>
			<div class="col l6 m6 s6 nopadding">
				<?php
			 		if (has_post_thumbnail()) {
			 			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			     <img width="100%" src="<?php echo $url; ?>"/>
				<?php } ?>
				<div class="col l3 text-weding bg-beauty" style="margin-left: 12%; padding-bottom: 20px; 
                padding-top:20px; ">
					<strong><?php the_title (); ?></strong>
					<p><?php echo get_the_date( get_option('date_format') ); ?></p>
					<span><a href="<?php the_permalink(); ?>">Contuniar</a></span>
				</div>
				<?php endforeach; ?>
			</div>

			<?php
	   				global $post;
					$args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 1 ); //post por pagina, numero del arreglo, categoria
					$myposts = get_posts( $args );   //transforma el arreglo a la variable myposts

					foreach( $myposts as $post ) : setup_postdata($post); // foreach manda a traer a myposts
				?>
			<div class="col l6 m6 s6 nopadding">
				<?php
			 		if (has_post_thumbnail()) {
			 			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			     <img width="100%" src="<?php echo $url; ?>"/>
				<?php } ?>
				<div class="col l3 text-weding bg-dresses" style=" margin-left:12%; padding-bottom: 20px; padding-top:20px;">
					<strong><?php the_title (); ?></strong>
					<p><?php echo get_the_date( get_option('date_format') ); ?></p>
					<span><a href="<?php the_permalink(); ?>">Contuniar</a></span>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

<div class="col l10 offset-l1 m10 offset-m1 bg-primero">
			<?php
   				global $post;
				$args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 4 ); //post por pagina, numero del arreglo, categoria
				$myposts = get_posts( $args );   //transforma el arreglo a la variable myposts

				foreach( $myposts as $post ) : setup_postdata($post); // foreach manda a traer a myposts
			?>
			<div class="col l7 m7 s12">
				<?php
			 		if (has_post_thumbnail()) {
			 			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			     <img width="100%" src="<?php echo $url; ?>"/>
				<?php } ?>			
			</div>
			<div class="col l5 m5 s12 bg-fondo">
			<img src="wp-content/themes/simplelabob/images/fondo.jpg" width="80%" alt="">
				<div class="col l3 text-weding fashion" style="margin-left: -4%;">
					<b><?php echo the_category(); ?></b>
					<strong><?php the_title(); ?></strong>
					<p><?php echo get_the_date( get_option('date_format') ); ?></p>
					<p> <?php the_content(); ?> </p>
					<span><a href="<?php the_permalink(); ?>">Contuniar</a></span>
				</div>				
			</div>
			<?php endforeach; ?>
		</div>

		<div class="col l10 offset-l1 m10 offset-m1 bg-segundo">
			<?php
   				global $post;
				$args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 1 ); //post por pagina, numero del arreglo, categoria
				$myposts = get_posts( $args );   //transforma el arreglo a la variable myposts

				foreach( $myposts as $post ) : setup_postdata($post); // foreach manda a traer a myposts
			?>
			<div class="col l5 m5 s12 bg-izq center">
				<img src="wp-content/themes/simplelabob/images/fondo.jpg" width="80%" alt="">
				<div class="col l3 text-weding home" style="margin-left: 12%;">
					<b><?php echo the_category(); ?></b>
					<strong><?php the_title(); ?></strong>
					<p><?php echo get_the_date( get_option('date_format') ); ?></p>
					<p> <?php the_content(); ?> </p>
					<span><a href="<?php the_permalink(); ?>">Contuniar</a></span>
				</div>		
			</div>
			<div class="col l7 m7 s12">
				<?php
			 		if (has_post_thumbnail()) {
			 			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			     <img width="100%" src="<?php echo $url; ?>"/>
				<?php } ?>
			</div>
			<?php endforeach; ?>
		</div>

	</div>
		
	</section>

			
<?php get_footer(); ?>
