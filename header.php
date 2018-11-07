<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
<link rel="shortcut icon" type="image/x-icon" href="http://ricetard.nu/wp-content/themes/fifth/ghost.ico" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic" rel="stylesheet" type="text/css"><link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title('&bull;'); ?></title>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

   </head>
     <body>

     	<?php get_sidebar(); ?>


<div id="container">

<div id="top">
<div id="header"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
<div id="desc"><?php bloginfo('description'); ?></div>
</div>

<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
		
<div id="content">