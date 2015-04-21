<?php 
/**

*/ 
//Template Name:Fullwidth ?>
<?php get_header(); ?>
<!-- Container -->
<div class="content  with-padding">
<div class="container">
    <!-- Blog Section Content -->
    <div class="row-fluid">
        <!-- Blog Single Page -->
        <div class="span12 Blog_main">
            <div class="blog_single_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php  the_post(); ?>
            <?php $defalt_arg =array('class' => "blog_section2_img" )?>
            <?php if(has_post_thumbnail()):?>
            <a  href="<?php the_permalink(); ?>" class="pull-left blog_pull_img2">
                    <?php the_post_thumbnail('media-object', $defalt_arg); ?>
            </a>
            <?php endif;?>
            <p><?php  the_content( __( 'Read More' , 'twentythirteen' ) ); ?></p>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer();?>