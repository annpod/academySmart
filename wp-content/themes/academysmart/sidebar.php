<?php
/**

*/
?>
<div class="span4 sidebar">	
    <div class="sidebar_widget">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-primary') ) : ?> 
            <?php the_widget('WP_Widget_Archives'); ?>
            <?php the_widget('WP_Widget_Categories'); ?>
    <?php endif;?>
    </div>
</div>