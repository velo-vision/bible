<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */
 /**
  * Filter the except length to 20 words.
  *
  * @param int $length Excerpt length.
  * @return int (Maybe) modified excerpt length.
  */
 function wpdocs_custom_excerpt_length( $length ) {
     return 50;
 }
 add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//reducir conteido para mostrar expert o content
function limitar_palabras( $str, $num, $append_str='' ) {
  $palabras = preg_split( '/[\s]+/', $str, -1, PREG_SPLIT_OFFSET_CAPTURE );
  if( isset($palabras[$num][1]) ){
    $str = substr( $str, 0, $palabras[$num][1] ) . $append_str;
  }
  unset( $palabras, $num );
  return trim( $str );
}
//paginacion
function pagination($prev = '', $next = '') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    echo paginate_links( $pagination );
};

//articulos mas buscados
/*function wpb_set_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

//To keep the count accurate, lets get rid of prefetching

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);*/
// DIY Popular Posts @ https://digwp.com/2016/03/diy-popular-posts/
function shapeSpace_popular_posts($post_id) {
  $count_key = 'popular_posts';
  $count = get_post_meta($post_id, $count_key, true);
  if ($count == '') {
    $count = 0;
    delete_post_meta($post_id, $count_key);
    add_post_meta($post_id, $count_key, '0');
  } else {
    $count++;
    update_post_meta($post_id, $count_key, $count);
  }
}
function shapeSpace_track_posts($post_id) {
  if (!is_single()) return;
  if (empty($post_id)) {
    global $post;
    $post_id = $post->ID;
  }
  shapeSpace_popular_posts($post_id);
}
add_action('wp_head', 'shapeSpace_track_posts');


//excluir categoria
// Excluir categorías del
// -----------------------------------------------

add_filter('get_the_terms', 'hide_categories_terms', 7, 13, 11);
function hide_categories_terms($terms, $post_id, $taxonomy){

   // define which category IDs you want to hide
   $excludeIDs = array(13,0,5,12,10);

   // get all the terms
   $exclude = array();
   foreach ($excludeIDs as $id) {
       $exclude[] = get_term_by('id', $id, 'category');
   }

   // filter the categories
   if (!is_admin()) {
       foreach($terms as $key => $term){
           if($term->taxonomy == "category"){
               foreach ($exclude as $exKey => $exTerm) {
                   if($term->term_id == $exTerm->term_id) unset($terms[$key]);
               }
           }
       }
   }

   return $terms;
}
