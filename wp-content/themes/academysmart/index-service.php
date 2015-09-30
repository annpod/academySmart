<?php
/**

 *  */
?>
<?php get_header(); ?>

<div class='slider'>
    <div class='container'>
        <ul class='bxslider'>

            <?php
                $argsp = array(
                    'post_type' => 'post',
                    'numberposts' => 3,
                    'post_status' => 'published',
                    'post__in'  => get_option( 'sticky_posts' )
                );
 
                $latest_posts = get_posts($argsp);

                if ($latest_posts) {
                    foreach ($latest_posts as $latest_post) {
                        
                        setup_postdata( $latest_post );
                        echo '<li>';
                        echo '<div class="blog_pull_img">';
                            echo get_the_post_thumbnail($latest_post->ID);
                            echo "</div>
                            <div class='slide-text right'>
                                <h1>{$latest_post->post_title}</h1>
                                <p>";
                                   echo apply_filters('the_content', get_the_excerpt());
                                   echo "
                                </p>
                                <a class='button' href='$latest_post->guid'>Read more</a>
                            </div>
                            <div class='clear'></div>
                        </li>";
                    }                  
                }
                ?> 
        </ul>
    </div>
</div>

<?php wp_reset_postdata(); // reset the query  ?>

<!-- /Home Service Section -->
<div class="row-fluid">	
    <section class="why-we">
        <div class="container">
            <div class="title">
                <h2>Why we?</h2>
            </div>
            <div class="why-we-block">               
                <div class="why-we-block-text">
                    <div class="why-we">
                    <?php
                    // Start the loop.
                    while (have_posts()) : the_post();
                        // Include the page content template.
                        the_content();

                    // End the loop.
                    endwhile;
                    ?>
                    <?php wp_reset_postdata(); // reset the query ?>
                    </div>
                    <div class="clear"></div>
                </div> 
            </div>
        </div>
    </section>

<?php
$args = array(
    'post_parent' => 33,
    'post_type' => 'page',
    'numberposts' => -1,
    'post_status' => 'publish'
);
$customers = get_children($args);

if ($customers) {
    $output = '';
    foreach ($customers as $customer) {
        if (trim($customer->post_content)) {
            $output .= "<li>{$customer->post_content}</li>";
        }
    }
    if ($output) {
        echo "<section>
            <div class='container'>
                <div class='title'>
                    <h2>Our Clients</h2>
                </div>
                <ul class='bxcarousel'>
                    {$output}
                </ul>
            </div>
        </section>";
    }
}
?>

</div>
<!-- /Home Service Section -->	

