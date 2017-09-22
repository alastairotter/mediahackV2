<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Media_Skeleton
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'media-skeleton' ); ?></a>

<div id="masthead">
	
	<header class="masthead" class="site-header">
	
	
			
			 
			 
			 <nav id="site-navigation" class="main-navigation">
        
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'media-skeleton' ); ?></button>
			
			<?php
			
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			 ?>
			
			
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
			<div class="front-social"><i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-facebook" aria-hidden="true"></i><i class="fa fa-youtube" aria-hidden="true"></i>
</div>
		</nav><!-- #site-navigation -->
		
		
		
		
	
	
		
		

		
	</header><!-- #masthead -->
   <div style="clear: both;"></div>
    </div>
	
	
	
	<div class="lead-image">
	    
	   
	  <img class="header-image" src="<?php echo header_image(); ?>">
        
        

	</div>

	<div id="content" class="site-content">
