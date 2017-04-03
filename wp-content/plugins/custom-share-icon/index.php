<?php // Silence is golden

/*
 Custom Share Icon
 Plugin para personalizar los iconos y clases de redes sociales para compartir tus entradas
 El plugin funciona con shortcodes que debes incluir en el editor de wordpress o en los templates php
 Las redes sociales y nombres para el shortcode disponibles son los siguientes:
 
 	Twitter => twitter
 	Pinterest => pinterest
 	Facebook => facebook
 	Google+ => googleplus
 	Reddit => reddit
 	Delicious => delicious
 	Digg => digg
 	Tapiture => tapiture
 	StumbleUpon => stumbleupon
 	Linkedin => linkedin
 	Slashdot => slashdot
 	Technorati => technorati
 	Posterous => posterous
 	Tumblr => tumblr
 	Google Bookmarks => googlebookmarks
 	Newsvine => newsvine
 	Ping.fm => pingfm
 	Evernote => evernote
 	Friendfeed => friendfeed
 	Mail => mail
 
 Para cada red es un shortcode, con sus clases personalizadas o del tema que este usando, si por ejmplo quiere añadir comparti en facebook el shortcode sería así:
 
 Backend Wordpress:
 
 	
		[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]
	
  
 Plantilla PHP:
 
 	
		echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]');
	
 
 En donde "social" es el nombre de la red donde desea compartir, "aclass" es su clase personalizada para el a href y por último "iclass" es su clase personalizada para el icono
 Si imprime [custom_share] el plugin por defecto mostrara el boton de compartir en facebook, pero para que funcione correctamente debe tener instalado en su tema las fuente de Font Awesome Icons que puede descargar de aquí http://fontawesome.io/


 Para mostrar la cantidad de veces que una entrada o página ha sido compartida con el uso de este plugin basta con añadir el siguiente shorcode:

 Backend Wordpress:
 
 	
		[getPostShares]
	
  
 Plantilla PHP:
 
 	
		echo do_shortcode('[getPostShares]');

*/