<?php
/* CARBON FIELDS */
require get_stylesheet_directory() . '/inc/carbon-fields/carbon-fields-plugin.php';

add_action('carbon_fields_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields(){
    require_once __DIR__.'/inc/post-meta.php';
	require_once __DIR__.'/inc/theme-options.php';
}
add_action( 'admin_enqueue_scripts', 'crb_enqueue_custom_carbon_fields_styles' );
function crb_enqueue_custom_carbon_fields_styles() {
	wp_enqueue_style( 'carbon-fields-custom-theme', get_stylesheet_directory_uri() . '/inc/carbon-fields-theme.css' );
}


add_filter('show_admin_bar', '__return_false'); 

add_action ('wp_enqueue_scripts', 'ft_scripts');
function ft_scripts(){
    wp_enqueue_style ('bootstrp-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style ('normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style ('fonts', get_stylesheet_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style ('slick-styles', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
    wp_enqueue_style ('slick-default-styles', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css');
    wp_enqueue_style ('styles', get_stylesheet_directory_uri());
    wp_enqueue_style ('base-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script ('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), null, true );
    wp_enqueue_script ('bootstrp-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js');
    wp_enqueue_script ('scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js');
    wp_enqueue_script ('slick-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
}

register_nav_menus( array(
    'head_menu' => 'Header Menu'
));

add_action('init', 'post_photos');
function post_photos(){
        register_post_type('site_photos', array(
            'labels'             => array(
            'name'               => 'Изображения',
            'singular_name'      => 'Изображение',
            'add_new'            => 'Добавить новое изображение',
            'add_new_item'       => 'Добавить изображение',
            'edit_item'          => 'Редактировать изображение',
            'new_item'           => 'Новое изображение',
            'view_item'          => 'Посмотреть изображение',
            'search_items'       => 'Найти изображение',
            'not_found'          => 'Изображений не найдено',
            'not_found_in_trash' => 'В корзине изображений не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Фотографии'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'page',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 2,
        'supports'           => array('title','thumbnail'),
        'menu_icon'          => 'dashicons-format-image'
        ));
}


function my_customize_register( $wp_customize ) {
    $wp_customize->add_setting('header_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));
	$wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));
	
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo', array(
        'section' => 'title_tagline',
        'label' => 'Логотип'
    )));
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_logo', array(
        'section' => 'title_tagline',
        'label' => 'Логотип Footer'
    )));

    $wp_customize->selective_refresh->add_partial('header_logo', array(
        'selector' => '.header-logo',
        'render_callback' => function() {
            $logo = get_theme_mod('header_logo');
            $img = wp_get_attachment_image_src($logo, 'full');
            if ($img) {
                return '<img src="' . $img[0] . '" alt="">';
            } else {
                return '';
            }
        }
    ));

	$wp_customize->selective_refresh->add_partial('footer_logo', array(
        'selector' => '.footer-logo',
        'render_callback' => function() {
            $footer_logo = get_theme_mod('header_logo');
            $footer_img = wp_get_attachment_image_src($footer_logo, 'full');
            if ($footer_img) {
                return '<img src="' . $footer_img[0] . '" alt="">';
            } else {
                return '';
            }
        }
    ));
}
add_action( 'customize_register', 'my_customize_register' );

add_theme_support( 'post-thumbnails' ); 