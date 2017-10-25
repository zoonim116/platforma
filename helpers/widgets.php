<?php
function address_widget_init() {
        register_sidebar( array(
                'name'          => 'Address widget',
                'id'            => 'address_widget',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => ''
        ) );
}
add_action( 'widgets_init', 'address_widget_init' );

function social_widget_init() {
        register_sidebar( array(
                'name'          => 'Social widget',
                'id'            => 'social_widget',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => ''
        ) );
}
add_action( 'widgets_init', 'social_widget_init' );

function facebook_widget_init() {
        register_sidebar( array(
                'name'          => 'Facebook sidebar widget',
                'id'            => 'facebook_widget',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => ''
        ) );
}
add_action( 'widgets_init', 'facebook_widget_init' );


function gmaps_widget_init() {
        register_sidebar( array(
                'name'          => 'Google maps widget',
                'id'            => 'gmaps_widget',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => ''
        ) );
}
add_action( 'widgets_init', 'gmaps_widget_init' );

function footer_menu_widget_init() {
        register_sidebar( array(
                'name'          => 'Footer menu widget',
                'id'            => 'footer_menu_widget',
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => ''
        ) );
}

class My_Custom_HTML_Widget extends WP_Widget_Custom_HTML {
    function widget( $args, $instance ) {
        extract($args);
        $text = apply_filters( 'widget_text', empty( $instance['content'] ) ? '' : $instance['content'], $instance );
        echo $text;
    }
}

class My_Text_Widget extends WP_Widget_Text {

    function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
        $text = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
        echo $text;
    }

}

add_action( 'widgets_init', 'register_my_widgets' );


function register_my_widgets() {
    register_widget( 'My_Text_Widget' );
    register_widget( 'My_Custom_HTML_Widget' );
}


add_action( 'widgets_init', 'footer_menu_widget_init' );
