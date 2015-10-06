<?php 
/**

*/
?>
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
                            <div class="title">
                                <h2><?php echo the_title() ?></h2>
                            </div>
                            <p><?php  the_content(); ?></p>
			</div>
		</div>
	</div>
    </div>
</div>
<?php get_footer();?>