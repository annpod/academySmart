<?php 
/**

*/
?>
<?php get_header(); ?>
<div class="content  with-padding">
<div class="container">
	<!-- Blog Section Content -->
	<div class="row-fluid">
		<!-- Blog Main -->
		<div class="span8 Blog_main">
                    <div class="blog-holder">                       
			<?php while(have_posts()):the_post();
                            global $more;
                            $more = 0;?>
                            <div class="blog_section blog-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="media">
                                    <div class="media-body">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php $defalt_arg =array('class' => "blog_section_img" )?>
					<?php if(has_post_thumbnail()):?>
					<a  href="<?php the_permalink(); ?>" class="blog_pull_img">
					<?php the_post_thumbnail('full', $defalt_arg); ?>
					</a>
					<?php endif;?>
										
					<p> <?php echo apply_filters('the_content', get_the_excerpt()); ?></p>
					<?php $posttags = get_the_tags();?>
					<p><?php if($posttags) { ?>
					<span class="blog_tags"><i class="fa fa-tags"></i> 
						<a href="<?php the_permalink(); ?>"></a>
					</span><?php } ?>
					<a href="<?php the_permalink(); ?>" class="read-more blog_section_readmore pull-right"><?php _e('Read more...','');?></a>
					</p>
                                    </div>
				</div>
			</div>
			<?php endwhile ?>
			<?php wp_link_pages(); ?>
			<div class="pagination_section">
                            <div class="pagination text-center">	
                                <ul>
                                    <li><?php previous_posts_link(); ?></li>
                                    <li><?php next_posts_link(); ?></li>
                                </ul>
                            </div>
			</div>
                    </div>
		</div>
		<?php get_sidebar();?>
	</div>
    </div>
</div>
<?php get_footer();?>