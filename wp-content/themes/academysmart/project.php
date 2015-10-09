<?php
/**

 */
//Template Name:Project 
?>
<?php get_header(); ?>
<div class="content  with-padding">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 content_main">

                <div class="breadcrumbs left" xmlns:v="http://rdf.data-vocabulary.org/#">
                    <?php
                    if (function_exists('bcn_display')) {
                        bcn_display();
                    }
                    ?>
                </div>                 

                <div class="clear"></div>
                <?php
                // Start the loop.
                while (have_posts()) : the_post();
                    ?>
                    <div class="title">

                        <h2><?php echo get_the_title() ?></h2>
                    </div>
                    <div class="project-info">
                        <div class="images" id="project-images">
                            <?php
                            $key = 'project_image';
                            $project_images = get_post_meta($post->ID, $key);
                                                        
                            $output = '';
                            $output_pager = '';
                            $i = 0;
                            
                            if(!empty($project_images)) {
                                foreach ($project_images as $project_image_id) {
                                    if ($project_image_id != ''){ 
                                        $project_image = wp_get_attachment_image_src($project_image_id, 'full');
                                        $project_thumb = wp_get_attachment_image_src($project_image_id, 'thumbnail');
                                        $output .= "<li><div><img src='$project_image[0]' alt='' /></div></li>";
                                        $output_pager .= "<li data-slide-index='$i'><a class='bx-pager-link'><img src='$project_thumb[0]' alt='' /></a></li>";
                                        $i++;
                                    }
                                }
                            }
                            
                            if($output) {
                                echo "<ul id='bxslider'>$output</ul>";
                                echo "<div class='bxslider-pager-position'>";
                                    echo "<ul id='bxslider-pager'>$output_pager</ul>";
                                echo "</div>";
                            }
                            
                            
                            ?> 
                         </div> 
                        
              
                      
                           
                        <div class="description"  id="project-description">
                                <div class="description_content">                                                                     
                                    <p class="project-title"><strong>Project name: </strong><?php echo get_the_title() ?></p>
                                    
                                    <?php $project_URL = get_post_meta($post->ID, 'project_URL', true);
                                        if ($project_URL <> '') {                                        
                                            echo '<p class="project-site"><strong>Web-site: </strong> <a href=http://' . get_post_meta($post->ID, 'project_URL', true) .  '>' . get_post_meta($post->ID, 'project_URL', true) .'</a></p>';   
                                          }
                                    ?>                                     

                                    <?php $project_duration = get_post_meta($post->ID, 'project_duration', true);
                                        if ($project_duration <> '') {                                        
                                            echo '<p class="project-duration"><strong>Duration: </strong>' . get_post_meta($post->ID, 'project_duration', true) . "</p>";   
                                          }
                                    ?>
                                    <?php $project_notes = get_post_meta($post->ID, 'project_notes', true);
                                        if ($project_notes <> '') {                                        
                                           echo '<p class="project-engine"><strong>Technologies: </strong>' . get_post_meta($post->ID, 'project_notes', true) ."</p>";
                                          }
                                    ?>                       
                                    <?php $project_content = get_the_content();
                                        if ($project_content <> '') {                                        
                                            echo '<p><strong>Summary: </strong>' .  get_the_content() . "</p>";   
                                          }
                                    ?>                                     
                       
                                    <?php $page = get_page_by_title("Contacts"); ?>
                                    <a class="contact-us" href="<?php echo get_permalink($page->ID); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-us.png" alt="Contact Us" /></a>
                                </div>
                            </div>
                           
                       
                        <?php endwhile;
                        ?>
                    <div class="clearfix"></div>
		</div>
                    		
                <?php
                $args = array(
                    'post_parent' => $post->post_parent,
                    'post__not_in' => array($post->ID),
                    'post_type' => 'page',
                    'numberposts' => -1,
                    'post_status' => 'publish'
                );
                $projects = get_children($args);
                
                
                if ($projects) {
                    $output = '';
                    foreach ($projects as $project) {
                        
                        if (has_post_thumbnail($project->ID)){
                            $output .= "<li><a href=" . get_the_permalink($project->ID) . ">" . get_the_post_thumbnail($project->ID,'medium') . "</a></li>";
                        }
                    }
                    
                    if ($output) {
                        echo "<div class='other-projects'>
                        <div class='container'>
                            <div class='title'>
                                <h2>Other " . get_the_title($post->post_parent) ." </h2>
                            </div>
                            <ul class='bxgallary'>
                                {$output}
                            </ul>
                        </div>
                    </div>";
                    }
                }
                ?>
        
             </div>
        </div>
    </div>  
</div>
<?php get_footer(); ?>