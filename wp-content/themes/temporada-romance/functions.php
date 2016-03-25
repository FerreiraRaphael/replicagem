<?php

// add_filter('body_class','browser_body_class');

// function browser_body_class($classes = '') {
// 	$classes[] = 'bg-img';
// 	return $classes;
// }
add_action( 'pre_get_posts',  'set_posts_per_page'  );
function set_posts_per_page( $query ) {
  $query->set( 'posts_per_page', 5 );
  return $query;
}