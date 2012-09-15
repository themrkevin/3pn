<?php 
 
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-nav' => 'Main Navigation',
		  'footer-nav' => 'Footer Navigation',
		)
	);
}

register_sidebar( 
	array(
	    'id'          => 'twitter-feed-box',
	    'name'        => __( 'Twitter Feed', $text_domain ),
	    'description' => __( 'Twitter Widget Pro Container - Footer', $text_domain ),
	) 
);

register_sidebar( 
	array(
	    'id'          => 'events-list',
	    'name'        => __( 'Events List', $text_domain ),
	    'description' => __( 'List of Events on homepage', $text_domain ),
	    'before_title' => "<h2><i>Upcoming </i><br />",
 		'after_title' => "</h2>",
	) 
);

function new_excerpt_more($more) {
       global $post;
	return '... <a href="'. get_permalink($post->ID) . '">[read more]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>