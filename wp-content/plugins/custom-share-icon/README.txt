=== Plugin Name ===
CUstom Share Icon
Donate link: http://ponceelrelajado.com
Tags: custom, share, icon, personalization
Requires at least: 3.0.1
Tested up to: 4.6.1
Stable tag: 4.6.1
License: GPLv2 or later

== Description ==

Plugin para personalizar los iconos y clases de redes sociales para compartir tus entradas.
El plugin funciona con shortcodes que debes incluir en el editor de wordpress o en los templates php.
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

== Installation ==

1. Carga `custom-share-icons.zip` y descomprime en el directorio `/wp-content/plugins/`
2. Activa el plugin desde el aministrador de plugins de Wordpress
3. Pega `<?php echo do_shortcode('[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]'); ?>` en tu template php o `[custom_share social="facebook" aclass="btn btn-default" iclass="fa fa-facebook"]` desde el editor de Wordpress para los iconos de compartir
4. Pega `<?php echo do_shortcode('[getPostShares]'); ?>` en tu template php o `[getPostShares]` desde el editor de Wordpress para mostrar la cantidad de veces que una entrad ha sido compartida