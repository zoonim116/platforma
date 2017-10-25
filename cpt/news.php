<?php
function create_news_post_type() {
	register_post_type( 'news',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'News', 'platforma' ),
				'singular_name' => __( 'News', 'platforma' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'news'),
      'query_var' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'menu_icon' => 'dashicons-schedule',
		)
	);

  register_taxonomy(
    'news_categories',
    'news',
    // Taxonomy Options
    array(
      'label' => __('Categories', 'platforma'),
      'rewrite' => array('slug' => 'news_categories'),
      'hierarchical' => true,
      'query_var' => true,
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_news_post_type' );

function plt_get_actualitate_news() {
  $the_query = new WP_Query(array(
      'post_type' => 'news',
      'posts_per_page' => 9,
      'tax_query' => array(
        array (
            'taxonomy' => 'news_categories',
            'field' => 'term_taxonomy_id',
            'terms' => '3',
        )
      ),
    ));
    if ($the_query->have_posts()) {
     while ($the_query->have_posts()) {
       $the_query->the_post(); ?>
         <div class="actualitate-slider-item">
           <a href="<?php the_permalink(); ?>">
               <?php the_post_thumbnail(); ?>
             <div class="actualitate-slider-content">
               <p><?php the_title(); ?></p>
             </div>
           </a>
         </div>
     <? }
     }
     wp_reset_query();
}

add_action( 'plt_get_actualitate_news', 'plt_get_actualitate_news', 10 );

function plt_get_latest_news_homepage() {
    $latestNews = [];
    $the_query = new WP_Query(array(
      'post_type' => 'news',
      'posts_per_page' => 5
    ));
    if ($the_query->have_posts()) {

     while ($the_query->have_posts()) {
         $the_query->the_post();
         $currentNews = ['title' => get_the_title(), 'thumb' => get_the_post_thumbnail(), 'permalink' => get_the_permalink()];
         $latestNews[] = $currentNews;
      }
     }
     wp_reset_query(); ?>
     <div class="col-md-6 news-wrap-one-post news-wrap-items">
       <a href="<?php echo $latestNews[0]['permalink']; ?>">
         <img src="<?php echo $latestNews[0]['thumb']; ?>" alt="<?php echo $latestNews[0]['title'] ?>">
         <div class="cover"></div>
         <div class="news-wrap__slide-item-link">
           <p><?php echo $latestNews[0]['title']; ?></p>
         </div>
       </a>
     </div>
     <div class="col-md-6 news-wrap-grid">
       <div class="row">
         <div class="col-md-6 news-wrap-items">
           <a href="<?php echo $latestNews[1]['permalink']; ?>">
             <img src="<?php echo $latestNews[1]['thumb']; ?>" alt="<?php echo $latestNews[1]['title']; ?>">
             <div class="cover"></div>
             <div class="news-wrap__slide-item-link">
               <p><?php echo $latestNews[1]['title']; ?></p>
             </div>
           </a>
         </div>
         <div class="col-md-6 news-wrap-items">
           <a href="<?php echo $latestNews[2]['permalink']; ?>">
             <img src="<?php echo $latestNews[2]['thumb']; ?>" alt="<?php echo $latestNews[2]['title']; ?>">
             <div class="cover"></div>
             <div class="news-wrap__slide-item-link">
               <p><?php echo $latestNews[2]['title']; ?></p>
             </div>
           </a>
         </div>
         <div class="col-md-6 news-wrap-items">
           <a href="<?php echo $latestNews[3]['permalink']; ?>">
             <img src="<?php echo $latestNews[3]['thumb']; ?>" alt="<?php echo $latestNews[3]['title']; ?>">
             <div class="cover"></div>
             <div class="news-wrap__slide-item-link">
               <p><?php echo $latestNews[3]['title']; ?></p>
             </div>
           </a>
         </div>
         <div class="col-md-6 news-wrap-items">
           <a href="<?php echo $latestNews[4]['permalink']; ?>">
             <img src="<?php echo $latestNews[4]['thumb']; ?>" alt="<?php echo $latestNews[4]['title']; ?>">
             <div class="cover"></div>
             <div class="news-wrap__slide-item-link">
               <p><?php echo $latestNews[4]['title']; ?></p>
             </div>
           </a>
         </div>
       </div>
     </div>
     <?php
}

add_action( 'plt_get_latest_news_homepage', 'plt_get_latest_news_homepage', 10 );

function plt_get_news_for_sidebar($count) {
		$the_query = new WP_Query(array(
			'post_type' => 'news',
			'posts_per_page' => 5,
			'meta_key' => 'post_views_count',
			'orderby' => 'meta_value_num'
		));
		if ($the_query->have_posts()) {
     while ($the_query->have_posts()) {
       $the_query->the_post();
			 get_template_part('template-parts/sidebar-news-item');
		 }
	 }
}

add_action('plt_get_news_for_sidebar', 'plt_get_news_for_sidebar', 10, 2);

function plt_top_new_slider() {
	$latestNews = [];
	$the_query = new WP_Query(array(
		'post_type' => 'news',
		'posts_per_page' => 3,
	));
	if ($the_query->have_posts()) {

	 while ($the_query->have_posts()) {
			 $the_query->the_post();
			 $currentNews = ['title' => get_the_title(), 'thumb' => get_the_post_thumbnail(), 'permalink' => get_the_permalink()];
			 $latestNews[] = $currentNews;
		}
	 }
	 wp_reset_query();
}

add_action('plt-top-new-slider', 'plt_top_new_slider', 10);
