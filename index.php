<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Media_Skeleton
 */

get_header(); ?>
    
    
<!--    <div class="lead-overlay-sub">Create &bull; Teach &bull; Develop</div>-->

	<div id="primary" class="content-area">
	
	<div class="intro">
   <div class="intro-title">
    <h2>Who we are</h2>
        </div>
	    We’re a group of independent journalists who just love a good story. We’re dedicated to quality journalism and the craft of digital storytelling. While we specialise in data-driven and narrative journalism, we’re a multi-talented bunch able to harness decades of journalism skills, combining them with state-of-the-art programming and presentation to create stories for all sorts of screens. We initiate our own media projects, but we also offer our services to civil society organisations and corporate social responsibility projects with a story to tell.
	    <div class="front-pics">
            <a href="http://localhost:8888/mediahack_new/the-team/"><div class="pic alastair"></div></a>
            <a href="http://localhost:8888/mediahack_new/the-team/"><div class="pic laura"></div></a>
<!--	        <div style="clear: both;"></div>-->
	    </div>
	</div>
	
	<!-- OUR WORK -->
	<div class="projects">
    <div class="intro-title">
    <h2>Our work</h2>
        </div>
        
        <div class="section-description">
            Our work spans a number of disciplines, from data collection and cleaning through to data analysis, visualisation,, storytelling and bespoke interactive programming. Below is a selection of our published work from in-depth investigative data stories to standalone visualisations. Do you have a project that we could work with you on? <a href="mailto:info@mediahack.co.za">Let's talk</a>.
        </div>
        
        <div class="project-holder">
	    
	    <?php 
        
        query_posts('cat=197');
        
       $c = 0;
        $r = 0;
        
        
        while ( have_posts() ) : the_post();
        $pUrl = get_post_meta($post->ID, 'project_url', true); 

//            if($c == 3) { 
//                $class = "p-box p-right";
//                if($r > 0) { $class .= " p-row2"; }
//            }
//            else { 
//                $class = "p-box p-left";
//                if($r > 0) { $class .= " p-row2"; }
//                
//            }
        
            
                echo "<div class='p-box'>";
                 echo "<a href='" . $pUrl . "'><div class='p-title'>";
                the_title( '<h3 class="entry-title">', '</h3>' );
                echo "</div></a>";
                the_post_thumbnail(); 
               
                echo "</div>";
            
        
        $c++;
        if($c == 4) { $c = 0; $r = 1; }
        
        
        
        
        endwhile;
        
        ?>
        <div style="clear:both;"></div>
        </div> <!-- end project holder -->
        
        
        
        
        <div style="clear: both;"></div>
        
       <div class="intro-more">
        <a href="<?php echo get_site_url() . '/category/our-work/'; ?>" > 
        More &nbsp; <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
        </div>
        

        
	</div>
	
	<!-- END OUR WORK -->
	
	
	
	
	<!-- OUR TUTORIALS -->
	<div class="projects learn">
    <div class="intro-title">
    <h2>Learn with us</h2>
        </div>
        
        <div class="section-description">
            We also train newsrooms and journalists in the essential skills needed to produce quality digital and data journalism. We do on-site training with newsrooms, formal classroom training for beginner and mid-career journalists. We also produce a series of learn-at-your-own-pace video tutorials on our <a href="https://www.youtube.com/channel/UC8FA0Wn39MaodAfrLyOroZQ">YouTube channel</a>. Want to know more? Want to book us for your newsroom? <a href="mailto:info@mediahack.co.za">Get in touch</a>. We'd love to work with you.  
        </div>
        
        <div class="project-holder">
	    
	    <?php 
        
        query_posts('cat=16');
        
       $c = 0;
        $r = 0;
        
        
        while ( have_posts() ) : the_post();
//        $pUrl = get_post_meta($post->ID, 'project_url', true); 

            
        
            
                echo "<div class='p-box p-tutorial'>";
        
                
                 // title in here
        
        echo "<a href='" . esc_url( get_permalink() ) . "'>";
                the_post_thumbnail('guides-thumb', array('class' => 'tutorial-thumb')); 
        
//        echo "<div class='video'><i class='fa fa-video-camera' aria-hidden='true'></i></div>";
        
                the_title( '<h3 class="tutorial-title">', '</h3>' );
                echo "</a>";
               
                echo "</div>";
            
        
        $c++;
        if($c == 4) { $c = 0; $r = 1; $more = true; }
        
        
        
        
        endwhile;
        
        ?>
        
        <div style="clear: both;"></div>
        </div> <!-- end project-holder -->
        
        <div style="clear: both;"></div>
        
        
        <div class="intro-more">
        <a href="<?php echo get_site_url() . '/category/tutorials/'; ?>" > 
        More &nbsp; <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
        </div>
        
        
        
	</div>
	<!-- END OUR TUTORIALS -->
	
	
	<div class="front-sub-one">
	    <!-- Begin MailChimp Signup Form -->
<!--<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">-->
<style type="text/css">
	#mc_embed_signup{background:none; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//mediahack.us14.list-manage.com/subscribe/post?u=60987a40b2618a54d919bccdb&amp;id=b574a151c8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<div class="sub-label" for="mce-EMAIL">Subscribe to our weekly journalism newsletter</div>
	<div style="width: 100%; text-align: center; margin-top: 25px;">
       <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_60987a40b2618a54d919bccdb_b574a151c8" tabindex="-1" value=""></div>
<!--    <div style="display: inline;" class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>-->
    </div>
</form>

    <div class="front-sub-one-sub">Tips, tools, news and analysis. It's free, every Wednesday. <a href="http://mediapicks.mediahack.co.za" style="color: #fff;">Try a copy</a></div>
<style>
    #mc-embedded-subscribe {
        background: black !important;
        color: #fff !important;
        font-family: Helvetica, "Helvetica Neue", Helvetica, sans-serif;
        font-weight: 700;
/*        text-transform: uppercase;*/
        font-size: 16px !important;
        border: none;
        border-radius: 8px;
         
    }
/*
    #mc-embedded-subscribe:hover { 
        background: crimson !important;
        color: #fff !important;
        
    }
*/
    .sub-label { 
        font-family: Montserrat, "Helvetica Neue", Helvetica, sans-serif;
        font-weight: 700;
        font-size: 24px !important;
        margin-bottom: 10px;
        width: 100%; 
        text-align: center;
    }
    
    .email { 
        margin-right: 10px;
        width: 250px;
        font-family: Helvetica, "Helvetica Neue", Helvetica, sans-serif;
        font-size: 16px;
        color: #808080 !important;
        font-weight: 300;
    }
    
     
    </style>
</div>

<!--End mc_embed_signup-->
	    
	</div>
	
	
	
	<!-- OUR GUIDES-->
	<div class="projects how-to">
    <div class="intro-title">
    <h2>How-To Guides</h2>
        </div>
        
        <div class="section-description">
            We also train newsrooms and journalists in the essential skills needed to produce quality digital and data journalism. We do on-site training with newsrooms, formal classroom training for beginner and mid-career journalists. We also produce a series of learn-at-your-own-pace video tutorials on our <a href="https://www.youtube.com/channel/UC8FA0Wn39MaodAfrLyOroZQ">YouTube channel</a>. Want to know more? Want to book us for your newsroom? <a href="mailto:info@mediahack.co.za">Get in touch</a>. We'd love to work with you.  
        </div>
        
        <div class="project-holder">
	    
	    <?php 
        
        query_posts('cat=198');
        
       $c = 0;
        $r = 0;
        
        
        while ( have_posts() ) : the_post();
//        $pUrl = get_post_meta($post->ID, 'project_url', true); 

            
        
            
                echo "<div class='p-box p-tutorial'>";
        
                
                 // title in here
        
        echo "<a href='" . esc_url( get_permalink() ) . "'>";
                the_post_thumbnail('guides-thumb', array('class' => 'tutorial-thumb')); 
            echo "</a>";
        
//        echo "<div class='video'><i class='fa fa-video-camera' aria-hidden='true'></i></div>";
        
               echo "<a href='" . esc_url( get_permalink() ) . "'>";
            the_title( '<h3 class="tutorial-title">', '</h3>' );
            echo "</a>";
                
                echo "<div style='clear:both;'></div>";
//            echo "</a>";
               
                echo "</div>";
            
        
        $c++;
        if($c == 4) { $c = 0; $r = 1; $more = true; }
        
        
        
        
        endwhile;
        
        ?>
        
        <div style="clear: both;"> </div>
        </div> <!-- end project-holder -->
        
        
        
        
        <div style="clear: both;"></div>
        
        
       <div class="intro-more">
        <a href="<?php echo get_site_url() . '/category/guides/'; ?>" > 
        More &nbsp; <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
        </div>
        
        
       
        
	</div>
	<!-- END GUIDES -->
	
	
	<!-- CONTACTS ETC -->
	<div class="projects how-to footnotes">
	
	<div class="footwrap">
	
	<div class="foot foot1">
	    <span class="resources">
            About Us</span>
       
       <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
       
       <span class="resources">Resources</span>
       
       <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?>
        </div>
        
        
        <div class="foot foot2">
            <span class="resources">Contact Us</span>
            <ul>
                <li><a href="mailto:info@mediahack.co.za">info@mediahack.co.za</a></li>
                <li><a href="http://twitter.com/media_hack"><i class="fa fa-twitter"></i>&nbsp;Twitter</a></li>
                <li><a href="https://www.facebook.com/mediahack/"><i class="fa fa-facebook"></i>&nbsp;Facebook</a></li>
                <li><a href="<?php echo get_site_url() . '/contact'; ?>">More contact details</a></li>
            </ul>
            
            
            
            </div>
        
        <div class="foot foot3">
            <?php
        get_search_form();
        ?>
       
            
        </div>
        
        </div>
       
       
       <div style="clear: both;"></div>
       
        </div>
	
	
	
		
		
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
