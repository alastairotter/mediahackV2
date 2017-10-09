<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Media_Skeleton
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php

    
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);


            
        $posted_on = sprintf('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);


       
       
       // Start of video posr type
       $post_format = get_post_format(); 
       
       
        if($post_format == "video") { // video post format   
           
           ?>
           
   <!-- START OF HEADER -->        

	<header class="entry-header entry-header-video">
	
	
	
	<div class="top-image">
	    
	    <?php the_post_thumbnail(); ?>
	    
	</div>
	
	 <!-- META --> 
       <div class="entry-meta entry-meta-top">
           
           
           <?php

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
            ?>
    <!--- META -->
        </div>
    
    
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
<!--			<?php media_skeleton_posted_on(); ?>-->
    
   
    
    
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	
	<footer class="entry-footer">
		<?php media_skeleton_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
	
	
	<!-- END OF HEADER -->
	
	
	<?php } 
    
    else if($post_format == "aside") { // aside post format   
           
           ?>
           
   <!-- START OF HEADER -->        

	<header class="entry-header entry-header-video">
	
	
	

	
	 
    
    
		
	</header><!-- .entry-header -->
	
	
	
	
	
	<!-- END OF HEADER -->
	
	
	<?php } 
    
    
    
    
    
     else { // standard post format   
           
           ?>
           
   <!-- START OF HEADER -->        

	<header class="entry-header">
	
	
	
	 <!-- META --> 
       <div class="entry-meta entry-meta-top">
           
           
           <?php

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.
            ?>
    <!--- META -->
        </div>
    
    
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
<!--			<?php media_skeleton_posted_on(); ?>-->
    
   
    
    
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	
	<footer class="entry-footer">
		<?php media_skeleton_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
	<div class="top-image">
	    
	    <?php the_post_thumbnail(); ?>
	    
	</div>
	
	<!-- END OF HEADER -->
	
	
	<?php } 
    
    ?>
	
	
	
	
	
	
	
<?php
    if($post_format == "video") { 
        echo '<div class="entry-content entry-content-video">';
    }
    elseif ( $post_format == "aside") { 
        echo '<div class="entry-content entry-content-aside">';
    }
    else { 
        echo '<div class="entry-content">';
    }
    ?>
	
	
		<?php
    if( is_single()) { the_content(); }
    else { the_excerpt();}
//        the_content();
        
        if($post_format !== "aside") { 
            if(!is_single()) { 
                echo '<a class="more-link" href="' . get_permalink() . '"><div class="read-more">Read More</div></a>';
            };
        }


			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'media-skeleton' ),
				'after'  => '</div>',
			) );
		?>
		
		
		
		
        
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
