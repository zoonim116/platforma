<?php
function loadmore_ajax_handler(){

	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
  $args['post_type'] = 'documents';
	// it is always better to use WP_Query but not here
	query_posts( $args );
	if( have_posts() ) :

		// run the loop
		while( have_posts() ): the_post();
    $upload_file = get_field('upload_file');
			get_template_part( 'template-parts/document-item-template');
		endwhile;

	endif;
	die;
}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); // wp_ajax_nopriv_{action}

function loadmore_sidebar_news () {
  // prepare our arguments for the query
  $args = json_decode( stripslashes( $_POST['query'] ), true );
  $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
  $args['post_status'] = 'publish';
  $args['post_type'] = 'news';
  $args['posts_per_page'] = 5;
  // it is always better to use WP_Query but not here
  query_posts( $args );
  if( have_posts() ) :

    // run the loop
    while( have_posts() ): the_post();
    $upload_file = get_field('upload_file');
      get_template_part( 'template-parts/sidebar-news-item');
    endwhile;

  endif;
  die;
}

add_action('wp_ajax_loadmore_sidebar_news', 'loadmore_sidebar_news'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore_sidebar_news', 'loadmore_sidebar_news'); // wp_ajax_nopriv_{action}
