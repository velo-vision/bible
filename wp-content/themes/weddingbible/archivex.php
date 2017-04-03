<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package flatsome
 */

get_header();
if(!isset($flatsome_opt['blog_layout'])){$flatsome_opt['blog_layout'] = '';}
?>
<!-- imagenes -->
<div class="col-xs-12 col-md-12 col-lg-12" style="padding: 0px; margin: 0px;">
  <?php if(is_category("9")){?><!-- planning -->
         <div class="col-sm-12 col-md-12 col-lg-12 categoriafondo9">
         <div class="col-sm-12 col-md-12 col-lg-12" style="padding: 6%;">
            <h3 class="section-title clearfix title_center ">
              <span class="titulo-categorys"><?php the_category(); ?></span>
            </h3>
          </div>
          </div>
      <?php }elseif(is_category("4")){ ?> <!-- travel -->
          <div class="col-sm-12 col-md-12 col-lg-12 categoriafondo">
          <div class="col-sm-12 col-md-12 col-lg-12" style="padding: 6%;">
            <h3 class="titulo-categorys section-title clearfix title_center ">
              <span class="titulo-categorys"><?php the_category(); ?></span>
            </h3>
            </div>
          </div>
      <?php }elseif(is_category("8")){ ?> <!-- inspiration -->
          <div class="col-sm-12 col-md-12 col-lg-12 categoriafondo8">
            <div class="col-sm-12 col-md-12 col-lg-12" style="padding: 6%;">
              <h3 class=" section-title titulo-categorys clearfix title_center ">
              <span class="titulo-categorys"><?php the_category(); ?></span>
            </h3>
            </div>            
          </div>
      <?php }elseif(is_category("6")){ ?> <!-- fashion -->
            <div class="col-sm-12 col-md-12 col-lg-12 categoriafashion">
            <div class="col-sm-12 col-md-12 col-lg-12" style="padding: 6%;">
              <h3 class="section-title clearfix title_center ">
                <span class="titulo-categorys"><?php the_category(); ?></span>
              </h3>
              </div>
          </div>
      <?php }elseif(is_category("7")){ ?> <!-- home and merries -->
         <div class="col-sm-12 col-md-12 col-lg-12 categoriame">
            <div class="col-sm-12 col-md-12 col-lg-12" style="padding: 6%;">
              <h3 class="section-title clearfix title_center ">
                <span class="titulo-categorys"><?php the_category(); ?></span>
              </h3>
              </div>
          </div>
      <?php }/*elseif(is_category("7")){ ?>
          echo "bien ";
      <?php }*/ ?>
  </div>
<!-- imgaenes -->


<?php /*
// Create big featured image if set
if($flatsome_opt['blog_post_style'] == 'big-featured-image') { ?>
  <div class="parallax-title mio">
      <?php ob_start(); ?>
      <?php
      $bg = '#333';
      if( has_post_thumbnail() ) $bg = get_post_thumbnail_id();
      $cate =the_category();
      $header_html = ob_get_contents();
      $header_html = '[ux_banner animate="fadeInDown" bg_overlay="#000" parallax="3" parallax_text="2" height="360px" bg="'.$bg.'"]'.$header_html.$cate.'"[/ux_banner]';

      ob_end_clean();
      echo do_shortcode($header_html);?>
  </div>
<?php } */?>




<div class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-10 col-lg-offset-1" style="margin: 3% 0;">
  <?php $cont=1;
    if (have_posts()) : while (have_posts()) : the_post();  ?>
  <!--fala los post de la categoria-->
  <?php 
//echo $post;
  if (($cont%2)==0) { ?>
    <!--articulo a la derecha  segundo en salir-->
      <div class="col-sm-12 col-md-8 col-lg-9 col-lg-offset-2 contenedor2">
        <div class="col-sm-5 col-md-7 col-lg-5 sobre2 img-variado2">
          <div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
          <div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
          <div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
            <div class="col-sm-12 col-md-12 col-lg-12   text-weding sep">
                <a href="<?php the_permalink($post->ID); ?>">
                  <b><?php echo the_category(); ?></b>
                </a>
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
               $textoCorto=limitar_palabras($textoLargo, 25,'&#91;...&#93;&nbsp;&nbsp;');
               //echo //'<p>' . $textoCorto . '</p>'; ?>
               <p><?php echo $textoCorto ?></p>
                  </div>
                  <!---->
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
      
        <div class="col-sm-8 col-md-12 col-lg-11 sin sin3">
          <?php 
              if (has_post_thumbnail()) {
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );                    
                //echo "<img src='". $url."' class='imagen-articulo-variado' />";
                echo '<li class="img-variado img-variado3" style="background: url('. $url.')">';
             }?>
        </div>
      </div>
        <!--derecho-->
       <!-- Img Corazon -->
        <div class="col-sm-12 col-md-12 img-categoria">
          <img src="<?php bloginfo('template_url'); ?>/img/corazon.png"  alt="wedding bible" width="10%">
        </div>
        <!--derecho-->
    <?php }else{ ?>
<!--derecho priemro en salir-->
      <div class="col-sm-12 col-md-12 col-lg-9  col-lg-offset-2 contenedor">
        <div class="col-sm-8 col-md-8 col-lg-11 sin ">
          <?php 
              if (has_post_thumbnail()) {
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );                    
                //echo "<img src='". $url."' class='imagen-articulo-variado' />";
                echo '<li class="img-variado img-variado3" style="background: url('. $url.')">';
             }?>
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5 sobre img-variado2">
        <div class="adorno"><img src="<?php bloginfo('template_url') ?>/img/flor.png"></div>
        <div class="adorno2"><img src="<?php bloginfo('template_url') ?>/img/flor2.png"></div>
          <div class="col-sm-12 col-md-12 col-lg-12 sin margenrayas">
            <div class="col-sm-12 col-md-12 col-lg-12   text-weding sep">
                <a href="<?php the_permalink($post->ID); ?>">
                  <b><?php echo the_category(); ?></b>
                </a>
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
               $textoCorto=limitar_palabras($textoLargo, 20,'&#91;...&#93;&nbsp;&nbsp;');
               //echo //'<p>' . $textoCorto . '</p>'; ?>
               <p><?php echo $textoCorto ?></p>
                  </div>
                  
                  <!---->
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
        <!--derecho-->
  <!-- Img Corazon -->
        <div class="col-sm-12 col-md-12 img-categoria">
          <img src="<?php bloginfo('template_url'); ?>/img/corazon.png"  alt="wedding bible" width="10%">
        </div>
<?php } $cont++; 
  endwhile; ?>
        <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12 pagination">
            <?php pagination('<i class="fle fa fa-angle-left " aria-hidden="true"></i>', '<i class=" fle fa fa-angle-right" aria-hidden="true"></i>'); ?>
        </div>
    <?php else: ?>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <p>¡Ups! Lo Sentimos, No hay post..</p>            
        </div>
    <?php endif; ?>
</div>

<!-- FIN -->
<?php echo do_shortcode('[block id="suscribete"]'); ?>

<?php get_footer(); ?>
