<?php
/**

 */
//Template Name:Project 
?>
<?php get_header(); ?>
<div class="content  with-padding">
    <div class="container">
        <!-- Blog Section Content -->
        <div class="row-fluid">
            <!-- Blog Main -->
            <div class="span12 content_main">

                <div class="breadcrumbs left" xmlns:v="http://rdf.data-vocabulary.org/#">
                    <?php
                    if (function_exists('bcn_display')) {
                        bcn_display();
                    }
                    ?>
                </div>                 
                <!--      
               <nav class="type-project right">
                   <a href="#">JAVA project</a>|
                   <a href="#">NET project</a>|
                   <a href="#">Mobile project</a>
               </nav>
                -->
                <div class="clear"></div>
                <?php
                // Start the loop.
                while (have_posts()) : the_post();
                    ?>
                    <div class="title">

                        <h2><?php echo get_the_title() ?></h2>
                    </div>
                    <div class="project-info">
                        <div class="images">
                            <?php
                            echo "<ul class='bxproject'>";
                            $project_image_ids = get_post_meta($post->ID, 'project_image');
                            foreach ($project_image_ids as $project_image_id) {
                                $project_image = wp_get_attachment_image_src($project_image_id, 'full');
                                echo "<li><img src='$project_image[0]' alt='' /></li>";
                            }
                            echo "</ul>";
                            ?> 
                            <?php
                            echo "<div id='bx-pager'>";
                            $project_image_ids = get_post_meta($post->ID, 'project_image');
                            $i = 0;
                            foreach ($project_image_ids as $project_image_id) {
                                $project_image = wp_get_attachment_image_src($project_image_id, 'full');
                                echo "<a class='bx-pager-link' data-slide-index='$i'><img src='$project_image[0]' alt='' /></a></li>";
                                $i++;
                            }
                            echo "</div>";
                            echo "</div>";
                            ?> 
                            <div class="description ">

                                <p class="project-title"><strong>Project name: </strong><?php echo get_the_title() ?></p>
                                <p class="project-site"><strong>Web-site: </strong> <a href="<?php echo get_post_meta($post->ID, 'project_URL', true) ?>"><?php echo get_post_meta($post->ID, 'project_URL', true) ?></a></p>
                                <p class="project-duration"><strong>Duration: </strong> <?php echo get_post_meta($post->ID, 'project_duration', true) ?></p>                
                                <p class="project-engine"><strong>Technologies: </strong><?php echo get_post_meta($post->ID, 'project_notes', true) ?></p>
                                <p><strong>Summary: </strong><?php echo get_the_content(); ?></p>
                                    <?php $page = get_page_by_title("Contacts"); ?>
                                <a class="contact-us" href="<?php echo get_permalink($page->ID); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-us.png" alt="Contact Us" /></a>
                            </div>
                        </div>  
                        <?php endwhile;
                        ?>
                    </div>
                </div>  
			</div>				
                <?php
                $args = array(
                    'post_parent' => $post->post_parent,
                    'post__not_in' => array($post->ID),
                    'post_type' => 'page',
                    'numberposts' => -1,
                    'post_status' => 'published'
                );
                $projects = get_children($args);
                if ($projects) {
                    $output = '';
                    foreach ($projects as $project) {
                        $output .= "<li><a href=" . get_the_permalink($project->ID) . ">" . get_the_post_thumbnail($project->ID) . "</a></li>";
                    }
                    if ($output) {
                        echo "<div class='other-progects'>
                        <div class='container'>
                            <div class='title'>
                                <h2>Other WEB Project</h2>
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

<?php get_footer(); ?>