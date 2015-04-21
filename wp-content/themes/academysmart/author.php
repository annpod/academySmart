<?php 
/**

*/
?>
<div class="container">
	<div class="row-fluid">
		<div class="span8 Blog_main"> 
			<?php if ( have_posts() ) : ?>
					<?php the_post(); ?>
					<h2><?php _e( 'Author Archives : ', 'twentythirteen' ); echo get_the_author(); ?></h2>
			<?php	/* Since we called the_post() above, we need to
					* rewind the loop back to the beginning that way
					* we can run the loop properly, in full.
					*/
				rewind_posts(); ?>
			<?php /* Start the Loop */ ?>
			<?php    while(have_posts()): the_post();?>
			<div class="blog_single_post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
				<?php $defalt_arg =array('class' => "blog_section2_img" )?>
				<?php if(has_post_thumbnail()):?>
				<a  href="<?php the_permalink(); ?>" class="pull-left blog_pull_img2">
				<?php the_post_thumbnail('media-object', $defalt_arg); ?>
				</a>
				<?php endif;?>
              	
				<h2><a href="<?php the_permalink(); ?>"title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p><?php  the_content( __( 'Read More' , '' ) ); ?></p>
            </div>
			<?php endwhile;?>	 
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>