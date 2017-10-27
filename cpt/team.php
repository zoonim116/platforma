<?php
function create_team_post_type() {
	register_post_type( 'team',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Team', 'platforma' ),
				'singular_name' => __( 'Member', 'platforma' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'team'),
      'query_var' => true,
      'supports' => array('title','editor', 'thumbnail'),
      'menu_icon' => 'dashicons-groups',
		)
	);
}
add_action( 'init', 'create_team_post_type' );

function plt_get_team_members() {
  $the_query = new WP_Query(array(
      'post_type' => 'team',
      'posts_per_page' => -1,
    ));
    if ($the_query->have_posts()) {
     while ($the_query->have_posts()) {
       $the_query->the_post();
        get_template_part('template-parts/team-item');
      }
     }
     wp_reset_query();
}

add_action('plt-get-team-members', 'plt_get_team_members', 10);
