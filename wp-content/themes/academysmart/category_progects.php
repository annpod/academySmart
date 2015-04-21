<?php
/**

 */
//Template Name:Category_projects
$url = get_permalink( $post->post_parent );
$url_hash = $post->ID;
wp_redirect( $url . '#cat'. $url_hash);
exit; ?>
