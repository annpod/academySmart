<?php
/*

*/
//Template Name:Posts ?>

<?php get_header(); ?>

   <!-- content -->
    <div class="content  with-padding">
        <div class="container">
            <div class="row-fluid">
            <!-- Blog Single Page -->
            <div class="span8 Blog_main">
                <?php 
                $temp = $wp_query; $wp_query= null;
                $wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class="blog-item">
                        <h1><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h1>
                            <?php the_excerpt(); ?>
                            <a class="more-link" href="<?php the_permalink(); ?>" title="Read more">Read more</a>
                    </div>
                <?php endwhile; ?>
 
             <?php if ($paged > 1) { ?>
 
            <nav id="nav-posts">
                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
            </nav>
 
        <?php } else { ?>
 
            <nav id="nav-posts">
                <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            </nav>
            <?php } ?>
            <?php wp_reset_postdata(); ?>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>

</div>
<?php get_footer(); ?>