<?php

/**
 * Custom Share Icon
 * *
 * @access      private
 * @since       1.0
 * @return      void
*/
function custom_share_icons_menu_page(){
    add_menu_page( 
        __( 'Custom Share Icon', 'textdomain' ),
        'CustomShareIcon',
        'manage_options',
        'custom-share-icon-page',
        'csi_page',
        'dashicons-share',
        6
    ); 
}
add_action( 'admin_menu', 'custom_share_icons_menu_page' );
 
function csi_page() {
    ?>
    <div class="wrap">
        <h2>Ayuda Custom Share Icon</h2>
		<p>Plugin para personalizar los iconos y clases de redes sociales para compartir tus entradas.<br>
		El plugin funciona con shortcodes que debes incluir en el editor de wordpress o en los templates php.<br>
		Las redes sociales y nombres para el shortcode disponibles son los siguientes:</p>
		<ul>
			<li>Twitter =&gt; twitter</li>
			<li>Pinterest =&gt; pinterest</li>
			<li>Facebook =&gt; facebook</li>
			<li>Google+ =&gt; googleplus</li>
			<li>Reddit =&gt; reddit</li>
			<li>Delicious =&gt; delicious</li>
			<li>Digg =&gt; digg</li>
			<li>Tapiture =&gt; tapiture</li>
			<li>StumbleUpon =&gt; stumbleupon</li>
			<li>Linkedin =&gt; linkedin</li>
			<li>Slashdot =&gt; slashdot</li>
			<li>Technorati =&gt; technorati</li>
			<li>Posterous =&gt; posterous</li>
			<li>Tumblr =&gt; tumblr</li>
			<li>Google Bookmarks =&gt; googlebookmarks</li>
			<li>Newsvine =&gt; newsvine</li>
			<li>Ping.fm =&gt; pingfm</li>
			<li>Evernote =&gt; evernote</li>
			<li>Friendfeed =&gt; friendfeed</li>
			<li>Mail =&gt; mail</li>
		</ul>

		<p>Para cada red es un shortcode, con sus clases personalizadas o del tema que este usando, si por ejmplo quiere añadir comparti en facebook el shortcode sería así:</p>

		<p><strong>Backend Wordpress:</strong></p>
		<p>
			<pre class="lang:default decode:true ">[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]</pre>
		</p>
		
		<p><strong>Plantilla PHP:</strong></p>
		<p>
			<pre class="lang:php decode:true ">echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');</pre>
		</p>
		
		<p>En donde "social" es el nombre de la red donde desea compartir, "aclass" es su clase personalizada para el a href y por último "iclass" es su clase personalizada para el icono.</p>

		<p>Si imprime : <pre class="lang:default decode:true">[custom_share]</pre> <br>
		el plugin por defecto mostrara el botón de compartir en facebook, pero, para que funcione correctamente debe tener instalado en su tema las fuente de Font Awesome Icons que puede descargar de aquí http://fontawesome.io/
		</p>

		<p>Para mostrar la cantidad de veces que una entrada o página ha sido compartida con el uso de este plugin basta con añadir el siguiente shortcode:</p>

		<p><strong>Backend Wordpress:</strong></p>
		<p>
			<pre class="lang:default decode:true ">[getPostShares]</pre>
		</p>
		
		<p><strong>Plantilla PHP:</strong></p>
		<p>
			<pre class="lang:php decode:true ">echo do_shortcode('[getPostShares]');</pre>
		</p>
		
	    </div>
    <?php
}
