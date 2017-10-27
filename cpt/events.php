<?php
function create_events_post_type() {
	register_post_type( 'event',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Events', 'platforma' ),
				'singular_name' => __( 'Event', 'platforma' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'events'),
      'query_var' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'comments'),
      'menu_icon' => 'dashicons-calendar-alt',
		)
	);
}
add_action( 'init', 'create_events_post_type' );

function get_nearest_event() {
	$the_query = new WP_Query(array(
			'post_type' => 'event',
			'posts_per_page' => 1,
			'order' => 'ASC',
			'orderby'=> 'event_date',
			'meta_query' => array(
				'relation'		=> 'AND',
						array(
							'key'	 	=> 'event_date',
							'value'	  	=> date('Y-m-d H:i:s'),
							'compare' 	=> '>',
							'type'			=> 'DATETIME'
						),
			)
		));
		if ($the_query->have_posts()) {
		 while ($the_query->have_posts()) {
			 $the_query->the_post();
				get_template_part('template-parts/top-event');
		 }
	 }
}

add_action('get-nearest-event', 'get_nearest_event', 10);

function get_nearest_event_in_sidebar() {
	$the_query = new WP_Query(array(
			'post_type' => 'event',
			'posts_per_page' => 1,
			'order' => 'ASC',
			'orderby'=> 'event_date',
			'meta_query' => array(
				'relation'		=> 'AND',
						array(
							'key'	 	=> 'event_date',
							'value'	  	=> date('Y-m-d H:i:s'),
							'compare' 	=> '>',
							'type'			=> 'DATETIME'
						),
			)
		));
		if ($the_query->have_posts()) {
		 while ($the_query->have_posts()) {
			 $the_query->the_post();
				get_template_part('template-parts/sidebar-event');
		 }
	 }
}

add_action('get-nearest-event-in-sidebar', 'get_nearest_event_in_sidebar', 10);

function get_future_events() {
		$the_query = new WP_Query(array(
			'post_type' => 'event',
			'offset' => 1,
			'order' => 'ASC',
			'orderby'=> 'event_date',
			'meta_query' => array(
				'relation'=> 'AND',
						array(
							'key'	 => 'event_date',
							'value'	  	=> date('Y-m-d H:i:s'),
							'compare' 	=> '>',
							'type'			=> 'DATETIME'
						),
			)
		));
		if ($the_query->have_posts()) {
		 while ($the_query->have_posts()) {
			 $the_query->the_post();
				get_template_part('template-parts/event-list-item');
		 }
	 }
}

add_action('get-future-events', 'get_future_events', 10);

function get_past_events() {

	$the_query = new WP_Query(array(
			'post_type' => 'event',
			'order' => 'DESC',
			'orderby'=> 'event_date',
			'meta_query' => array(
				'relation' => 'AND',
						array(
							'key'	 	=> 'event_date',
							'value'	  	=> date('Y-m-d H:i:s'),
							'compare' 	=> '<',
							'type'			=> 'DATETIME'
						),
			)
		));
		if ($the_query->have_posts()) {
		 while ($the_query->have_posts()) {
			 $the_query->the_post();
				get_template_part('template-parts/event-list-item');
		 }
	 }

}

add_action('get-past-events', 'get_past_events', 10);

function get_random_future_events() {

}

add_action('get-random-future-events', 'get_random_future_events', 10);
