<?php 

//Template Name:Contacts 
?>
<?php get_header(); ?>
<div class="content  with-padding">
    <div class="container">
        <!-- Blog Section Content -->
        <div class="row-fluid">
            <!-- Blog Main -->
            <div class="span12 content_main">
                <div class="title">
                   <h2>Contact</h2>
                </div>
                <div class="contact-wrapper">
                <div class="contact-form left">
                <?php
                    // Start the loop.
                    while (have_posts()) : the_post();
                        // Include the page content template.
                        the_content();
                        // End the loop.
                    endwhile;
                    ?> 
                            
                    </div>
                    <div class="contact-list">
                        <h3>Head Office</h3>
                        <p class="adress">Street: Academic Pavlov 271, 61054, Harkov, Ukraine</p>                            
                        <p><a href="mailto:sales@academysmart.com.ua"><i class="fa fa-envelope"></i>sales@academysmart.com.ua</a></p> 
                        <p><i class="fa fa-phone"></i>+38 (057) 762-66-69 </p>                            
                        <p><i class="fa fa-fax"></i>+38 (057) 762-66-69</p> 
                        <p><a href="skype:napoleonchik_"><i class="fa fa-skype"></i>academy_smart</a></p> 
                        <div class="left download-presentation">
                            <p class="download">Download</p>
                            <p class="presentation">presentation</p>
                        </div>
                        <div class="left">
                            <a class="download-btn" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/download-btn.png" alt="Download"/></a>
                        </div>                            
                    </div>
                    <div class="clear"></div>
                </div>  
            </div>
		</div>
        <div id="direction">
			<?php
				// Start the loop.
				while (have_posts()) : the_post();
				echo get_post_meta($post->ID, 'google_map_code', true) ;
				endwhile;
			?> 
		</div>
    </div>
</div>
<?php get_footer();?>