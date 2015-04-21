<?php
/**

 */

get_header(); ?>

<div class="content  with-padding">
<div class="container">
	<!-- Blog Section Content -->
	<div class="row-fluid">
		<!-- Blog Main -->
		<div class="span12 Blog_main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'academysmart' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div>
			</div

		</div>
        </div>

<?php get_footer(); ?>