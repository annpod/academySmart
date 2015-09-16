<?php
/**

 */
//Template Name:Portfolio 
?>
<?php get_header(); ?>
<div class="content  with-padding">
    <div class="container">
        <!-- Blog Section Content -->
        <div class="row-fluid">
            <!-- Blog Main -->
            <div class="span12 content_main">
                <?php
                $args = array(
                    'post_parent' => $post->ID,
                    'post_type' => 'page',
                    'numberposts' => -1,
                    'post_status' => 'publish'
                );

                $project_categories = get_children($args);
                if ($project_categories) {
                    foreach ($project_categories as $project_category) {
                        echo '<a class="link-item" id="cat'. $project_category->ID .'" href="#cat'. $project_category->ID .'">' . get_the_post_thumbnail($project_category->ID) . '</a>';
                        echo '<div class="imglist project-holder">';

                        $args2 = array(
                            'post_parent' => $project_category->ID,
                            'post_type' => 'page',
                            'numberposts' => -1,
                            'post_status' => 'publish'
                        );

                        $projects = get_children($args2);
                        if ($projects) {
                            foreach ($projects as $project) {
                                echo '<a href="' . get_the_permalink($project->ID) . '" class="project-item" >';
                                echo '<div class="project-picture">' . get_the_post_thumbnail($project->ID, 'large') . '</div>';
                                echo '<div class="description">';
                                echo '<div class="description-wrapper">';
                                echo '<p class="project-title">' . get_the_title($project->ID) . '</p>';
                                echo '<p class="project-site">' . get_post_meta($project->ID, 'project_URL', true) . '</p>';
                                echo '<p class="project-engine">' . get_post_meta($project->ID, 'project_notes', true) . '</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                            }
                        }
                        echo '</div>';
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>	

</div>
<?php get_footer(); ?>