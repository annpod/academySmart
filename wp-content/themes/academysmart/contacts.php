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
                        <p class="adress"><?php echo get_post_meta($post->ID, 'adress_company', true) ?></p>                            
                        <p><a href="mailto:<?php echo get_post_meta($post->ID, 'email_company', true) ?>"><i class="fa fa-envelope"></i><?php echo get_post_meta($post->ID, 'email_company', true) ?></a></p> 
                        <p><i class="fa fa-phone"></i><?php echo get_post_meta($post->ID, 'phone_company', true) ?></p>                            
                        <p><i class="fa fa-fax"></i><?php echo get_post_meta($post->ID, 'fax-company', true) ?></p> 
                        <p><a href="skype:<?php echo get_post_meta($post->ID, 'skype_company', true) ?>"><i class="fa fa-skype"></i><?php echo get_post_meta($post->ID, 'skype_company', true) ?></a></p> 
                        <div class="left download-presentation">
                            <p class="download">Download</p>
                            <p class="presentation">presentation</p>
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