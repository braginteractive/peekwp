<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package PeekWP
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<main class="cd-main">
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if( peekwp_option('custom_logo', false, 'url') !== '' ) { ?>
			    <div class="logo">
			        <img src="<?php echo peekwp_option('custom_logo', false, 'url' ); ?>" alt="<?php bloginfo( 'name' ) ?>" />	       
			    </div>
			    <?php } else { ?>
			    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<?php }  ?>
			
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
