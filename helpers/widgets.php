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
}


add_action( 'widgets_init', 'footer_menu_widget_init' );
