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
      'supports' => array('title', 'editor', 'thumbnail', 'comments'),
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
				 $currentNews = ['title' => get_the_title(),
				 									'thumb' => get_the_post_thumbnail(),
													'permalink' => get_the_permalink(),
													'date' => get_the_date('j.n.Y'),
													'views_count' => getPostViews(get_the_ID()),
													'comments_count' => get_comments_number(get_the_ID())
												];
				 $latestNews[] = $currentNews;
			}
		Helper::hm_get_template_part('template-parts/news-top-news', ['latestNews' => $latestNews]);
	 }
	 wp_reset_query();
}

add_action('plt-top-new-slider', 'plt_top_new_slider', 10);


function actuality_slider() {
	$the_query = new WP_Query(array(
			'post_type' => 'news',
			// 'posts_per_page' => -1,
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
			 $the_query->the_post();
			 	get_template_part('template-parts/actuality-item');
		 }
	 }
}

add_action('actuality-slider', 'actuality_slider', 10);

function news_category_title($catID) {
	$category = get_term_by('id', $catID, 'news_categories');
	echo $category->name;
}

add_action('news-category-title', 'news_category_title', 10, 2);

function social_slider() {
	$the_query = new WP_Query(array(
			'post_type' => 'news',
			// 'posts_per_page' => -1,
			'tax_query' => array(
				array (
						'taxonomy' => 'news_categories',
						'field' => 'term_taxonomy_id',
						'terms' => '4',
				)
			),
		));
		if ($the_query->have_posts()) {
			$i = 1;
		 while ($the_query->have_posts()) {
			 $the_query->the_post();
			 if($i%2) {
				 $class = '4';
			 } else {
				 $class = '8';
			 }
			 	Helper::hm_get_template_part('template-parts/social-item', ['class' => $class]);
				$i++;
		 }
	 }
}

add_action('social-slider', 'social_slider', 10);

function education_slider() {
	$the_query = new WP_Query(array(
			'post_type' => 'news',
			'posts_per_page' => 12,
			'tax_query' => array(
				array (
						'taxonomy' => 'news_categories',
						'field' => 'term_taxonomy_id',
						'terms' => '5',
				)
			),
		));
		if ($the_query->have_posts()) {
		$i = 0;
		 while ($the_query->have_posts()) {
			 $the_query->the_post();
			 $currentNews = ['title' => get_the_title(),
 											 'thumb' => get_the_post_thumbnail(),
 											 'permalink' => get_the_permalink(),
 										 ];
			 $slide[] = $currentNews;
			 if(count($slide) == 3) {
			 		Helper::hm_get_template_part('template-parts/education-item', ['slide' => $slide]);
					$slide = [];
				}
				$i++;
		 }
	 }
}

add_action('education-slider', 'education_slider', 10);

function lifestyle_slider() {
	$the_query = new WP_Query(array(
			'post_type' => 'news',
			'posts_per_page' => 15,
			'tax_query' => array(
				array (
						'taxonomy' => 'news_categories',
						'field' => 'term_taxonomy_id',
						'terms' => '6',
				)
			),
		));
			if ($the_query->have_posts()) {
			$i = 0;
		 while ($the_query->have_posts()) {
			 $the_query->the_post();
			 $currentNews = ['title' => get_the_title(),
			 								  'content' => substr(strip_tags(get_the_content(), '<p>'), 0, 250),
												'thumb' => get_the_post_thumbnail(),
												'permalink' => get_the_permalink(),
												'date' => get_the_date('j.n.Y'),
												'views_count' => getPostViews(get_the_ID()),
												'comments_count' => get_comments_number(get_the_ID())
											];
			 $slide[] = $currentNews;
			 if(count($slide) == 5) {
					Helper::hm_get_template_part('template-parts/lifestyle-item', ['slide' => $slide]);
					$slide = [];
				}
				$i++;
		 }
	 }
}

add_action('lifestyle-slider', 'lifestyle_slider', 10);

function get_relevant_news() {
	$the_query = new WP_Query(array(
			'post_type' => 'news',
			'posts_per_page' => 9,
			'orderby' => 'rand'
		));
		if ($the_query->have_posts()) {
		 while ($the_query->have_posts()) {
			 $the_query->the_post();
				get_template_part('template-parts/relevant-item');
		 }
	 }
}

add_action('get-relevant-news', 'get_relevant_news', 10);
