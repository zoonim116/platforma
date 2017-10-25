<?php
function create_files_post_type() {
	register_post_type( 'documents',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Documente', 'platforma' ),
				'singular_name' => __( 'Documente', 'platforma' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'documents'),
      'query_var' => true,
      'supports' => array('title'),
      'menu_icon' => 'dashicons-admin-links',
		)
	);
}
add_action( 'init', 'create_files_post_type' );

function plt_get_homepage_documents() {
  $the_query = new WP_Query(array(
      'post_type' => 'documents',
      'posts_per_page' => 8,
    ));
    if ($the_query->have_posts()) {
     while ($the_query->have_posts()) {
       $the_query->the_post();
       $upload_file = get_field('upload_file');
       ?>
       <div class="documents-slider-items">
         <a href="<?php echo $upload_file['url']; ?>">
           <p class="documents-slider-items-title"><?php the_title(); ?></p>
         </a>
           <p class="documents-slider-items-size"><?php echo formatFileSize($upload_file['id']); ?></p>
           <a href="<?php echo $upload_file['url']; ?>"><p class="documents-slider-items-button"><?php echo __('Vezi detalii', 'platforma'); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></p></a>
       </div>
     <? }
     }
     wp_reset_query();
}

add_action('plt_get_homepage_documents', 'plt_get_homepage_documents', 10 );

function plt_get_documents() {
	$the_query = new WP_Query(array(
			'post_type' => 'documents',
			'posts_per_page' => 4,
		));
	  if ($the_query->have_posts()) {
			while ($the_query->have_posts()) {
        $the_query->the_post();
				$upload_file = get_field('upload_file');
				get_template_part( 'template-parts/document-item-template');
			 }
	}
}

add_action('plt_get_documents',  'plt_get_documents', 10);
