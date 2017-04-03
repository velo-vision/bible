<?php
/**
 * Custom Share
 * Display custom icom tu share
 * @link       http//uakami.com
 * @since      1.0.0
 * @package    custom_share_icons
 * @subpackage custom_share_icons/partials
 */
?>
<?php $social_without_space = trim($socials); ?>
<?php $social = mb_strtolower($social_without_space); ?>
<?php if ($social == 'facebook'): ?>
    <a href="javascript:custom_share('//www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>&title=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'twitter'): ?>
    <a href="javascript:custom_share('//twitter.com/intent/tweet?status=<?php echo $title; ?>+<?php echo $permalink; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'pinterest'): ?>
    <a href="javascript:custom_share('//pinterest.com/pin/create/bookmarklet/?media=<?php echo $url_image ?>&url=<?php echo $permalink; ?>&is_video=false&description=<?php echo $description; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'googleplus'): ?>
    <a href="javascript:custom_share('//plus.google.com/share?url=<?php echo $permalink; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'reddit'): ?>
    <a href="javascript:custom_share('//www.reddit.com/submit?url=<?php echo $permalink; ?>&title=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'delicious'): ?>
    <a href="javascript:custom_share('//del.icio.us/post?url=<?php echo $permalink; ?>&title=<?php echo $title; ?>&notes=<?php echo $description; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'digg'): ?>
    <a href="javascript:custom_share('https//digg.com/submit?url=<?php echo $permalink; ?>&title=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'tapiture'): ?>
    <a href="javascript:custom_share('//tapiture.com/bookmarklet/image?img_src=<?php echo $url_image ?>&page_url=<?php echo $permalink; ?>&page_title=<?php echo $title; ?>&img_title=<?php echo $title; ?>&img_width=400img_height=300, <?php echo $postid; ?>')" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'stumbleupon'): ?>
    <a href="javascript:custom_share('//www.stumbleupon.com/submit?url=<?php echo $permalink; ?>&title=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'linkedin'): ?>
    <a href="javascript:custom_share('//www.linkedin.com/shareArticle?mini=true&url=<?php echo $permalink; ?>&title=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'slashdot'): ?>
    <a href="javascript:custom_share('//slashdot.org/bookmark.pl?url=<?php echo $permalink; ?>&title=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'technorati'): ?>
    <a href="javascript:custom_share('//technorati.com/faves?add=<?php echo $permalink; ?>&title=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'posterous'): ?>
    <a href="javascript:custom_share('//posterous.com/share?linkto=<?php echo $permalink; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'tumblr'): ?>
    <a href="javascript:custom_share('//www.tumblr.com/share?v=3&u=<?php echo $permalink; ?>&t=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'googlebookmarks'): ?>
    <a href="javascript:custom_share('//www.google.com/bookmarks/mark?op=edit&bkmk=<?php echo $permalink; ?>&title=<?php echo $title; ?>&annotation=<?php echo $description; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'newsvine'): ?>
    <a href="javascript:custom_share('//www.newsvine.com/_tools/seed&save?u=<?php echo $permalink; ?>&h=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'pingfm'): ?>
    <a href="javascript:custom_share('//ping.fm/ref/?link=<?php echo $permalink; ?>&title=<?php echo $title; ?>&body=<?php echo $description; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'evernote'): ?>
    <a href="javascript:custom_share('//www.evernote.com/clip.action?url=<?php echo $permalink; ?>&title=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'friendfeed'): ?>
    <a href="javascript:custom_share('//www.friendfeed.com/share?url=<?php echo $permalink; ?>&title=<?php echo $title; ?>', <?php echo $postid; ?>)" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>

<?php if ($social == 'mail'): ?>
    <a href="mailto:?subject=<?php echo $title; ?>&body=Echa un vistazo a este sitio que encontré <?php echo $permalink; ?>" class="customButtonShare <?php echo $aclass ?>">
        <i class="<?php echo $iclass ?>" aria-hidden="true"></i>
    </a>
<?php endif; ?>
