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
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
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
	    
	    <?php 
        if ( is_front_page() && is_home() ) : ?>
	    
	   <img class="header-image" src="<?php echo get_stylesheet_directory_uri() . '/images/header.jpg'; ?>">
	   
	   <?php
        else: ?>
       <img class="header-image" src="<?php echo get_stylesheet_directory_uri() . '/images/header_small.jpg'; ?>">
       <?php 
        endif;

        ?>
<!--	  <img class="header-image" src="<?php echo header_image(); ?>">-->
        
        

	</div>
	
	<?php
    if ( is_front_page() && is_home() ) : ?>

<div class="lead-overlay">Digital & Data Journalism</div>
   
   <script>
   // masthead text
    var topLeft = jQuery(".lead-overlay").position()
   
    
    jQuery(".lead-overlay").css("top", "250px")



    
    window.onscroll = function () { 
        var scrollPos = jQuery(window).scrollTop();
        var opacity = (350 - scrollPos)/350; 
        var pos = (topLeft.left - scrollPos);
        
        
        jQuery(".lead-overlay").css("opacity", opacity);

    }
    
    </script>
    
    <?php
    endif; 
    ?>

	<div id="content" class="site-content">
