<?php
function create_hgallery_post_type() {
	register_post_type( 'homepage-gallery',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Homepage Gallery', 'platforma' ),
				'singular_name' => __( 'Homepage Slide', 'platforma' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'hgallery'),
      'query_var' => true,
      'supports' => array('title', 'thumbnail'),
      'menu_icon' => 'dashicons-format-gallery',
		)
	);
}
add_action( 'init', 'create_hgallery_post_type' );

function plt_get_homepage_slides() {
  $the_query = new WP_Query(array(
      'post_type' => 'homepage-gallery',
      'posts_per_page' => -1
    ));
    if ($the_query->have_posts()) {
      $i = 0;
     while ($the_query->have_posts()) {
       $the_query->the_post(); ?>
       <div class="carousel-item <?php if($i==0) echo 'active'; ?>">
          <?php the_post_thumbnail('full', ['class' => 'd-block w-100']); ?>
           <!-- <img class="d-block w-100" src="" alt="First slide"> -->
           <div class="carousel-caption">
              <a href="#"><?php the_title(); ?></a>
          </div>
       </div>
     <?  $i++; }
     }
		  wp_reset_query();
 }

add_action( 'plt_get_homepage_slides', 'plt_get_homepage_slides', 10 );
