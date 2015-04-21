<?php 
/**

*/
 ?>
<?php get_header(); ?>
<div class="content  with-padding">
    <div class="container">
	<div class="row-fluid">
            <div class="span12 Blog_main">
                <div class="blog_single_post">
                <?php if ( have_posts() ) : ?>
                <h2><?php printf( __( "Search Results for: %s", '' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                        <?php $defalt_arg =array('class' => "blog_section2_img" )?>
                <?php if(has_post_thumbnail()):?>
                <a  href="<?php the_permalink(); ?>" class="pull-left blog_pull_img2">
                        <?php the_post_thumbnail('media-object', $defalt_arg); ?>
                </a>
                <?php endif;?>
                <br/>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <p><?php the_excerpt();?></p><br>
                <?php endwhile; ?>
                    <?php else : ?>

                    <h2><?php _e( "Nothing Found", '' ); ?></h2>
                    <div class="">
                    <p><?php _e( "Sorry, but nothing matched your search criteria. Please try again with some different keywords.", '' ); ?>
                    </p>
                    <?php get_search_form(); ?>
                    </div><!-- .blog_con_mn -->
                    <?php endif; ?>
                </div>
            </div>
		
	</div>
    </div>
</div>
<?php  get_footer() ?>