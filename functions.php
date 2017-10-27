<?php
require_once get_template_directory() . '/helpers/helper.php';
require_once get_template_directory() . '/cpt/homepage-gallery.php';
require_once get_template_directory() . '/cpt/news.php';
require_once get_template_directory() . '/cpt/events.php';
require_once get_template_directory() . '/cpt/documents.php';
require_once get_template_directory() . '/cpt/team.php';
require_once get_template_directory() . '/helpers/widgets.php';
require_once get_template_directory() . '/helpers/ajax_helpers.php';
require_once get_template_directory() . '/helpers/views_counter.php';

/************************ Register scripts and styles *****************************/
function wpdocs_theme_name_scripts() {
    wp_dequeue_script( 'jquery' );
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery-latest', 'https://code.jquery.com/jquery-latest.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.6', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.7', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
    wp_register_script( 'loadmore', get_template_directory_uri() . '/js/loadmore.js', array(), '1.0.0', true );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css');
    global $wp_query;
    wp_localize_script( 'loadmore', 'loadmore_params', array(
    		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
    		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
    		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
    		'max_page' => ceil(wp_count_posts('documents')->publish / 4)
    	));

      wp_localize_script( 'loadmore', 'loadmore_sidebar_news_params', array(
      		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
      		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
      		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
      		'max_page' => $wp_query->max_num_pages
      	));

        wp_localize_script( 'loadmore', 'loadmore_past_events', array(
        		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        		'max_page' => $wp_query->max_num_pages
        	));

          wp_localize_script( 'loadmore', 'loadmore_future_events', array(
          		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
          		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
          		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
          		'max_page' => $wp_query->max_num_pages
          	));

     	wp_enqueue_script( 'loadmore' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/************************************************** Setup theme **************************************************************************/
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup(){
    $res = load_theme_textdomain('platforma');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'gallery', 'caption' ));
}

if ( ! file_exists( get_template_directory() . '/helpers/wp-bootstrap-navwalker.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // file exists... require it.
    require_once get_template_directory() . '/helpers/wp-bootstrap-navwalker.php';
}

function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Meniul', 'platforma' ),
    )
  );
}
add_action( 'init', 'register_menus' );


/**
* return formated file size by fileID
*/
function formatFileSize($fileID) {
  $rawFileSize = filesize(get_attached_file($fileID ));
  return size_format($rawFileSize, 2);
}

function twentyfifteen_comment_nav() {
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
    <nav class="navigation comment-navigation" role="navigation">
        <h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'twentyfifteen' ); ?></h2>
        <div class="nav-links">
            <?php
                if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'twentyfifteen' ) ) ) :
                    printf( '<div class="nav-previous">%s</div>', $prev_link );
                endif;

                if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'twentyfifteen' ) ) ) :
                    printf( '<div class="nav-next">%s</div>', $next_link );
                endif;
            ?>
        </div><!-- .nav-links -->
    </nav><!-- .comment-navigation -->
    <?php
    endif;
}
