<?php

// THEME SUPPORT
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5');
add_theme_support( 'menus' );
add_theme_support( 'custom-logo' );
add_theme_support( 'gallery' );
add_theme_support( 'post-thumbnails' );
// different ways of showing post content
// add_theme_support( 'post-formats', array('video', 'aside', 'gallery', 'image'));

//register navigations
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary Navigation', 'railroad-injuries' ) );
						register_nav_menu( 'posts', __( 'Posts', 'railroad-injuries' ) );
						register_nav_menu( 'categories', __( 'Categories', 'railroad-injuries' ) );
        } endif;

// styles and scripts
function theme_styles() {
	wp_enqueue_style( 'wpb-fa', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/styles.css' );
	wp_enqueue_style('print_css', get_template_directory_uri() . '/assets/css/print.css' );
  wp_enqueue_style('animate_css', get_template_directory_uri() . '/assets/css/animate.min.css' );
}

add_action('wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );

	wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts', 'theme_js' );


// lawyer
add_action('init', 'create_lawyer_post_type');
function create_lawyer_post_type() {
  register_post_type(
    'lawyer',
    array(
      'labels'      => array(
        'name'          => __('Lawyers'),
        'singular_name' => __('Lawyer')
      ),
      'public'      => true,
      'has_archive' => false,
      'rewrite'     => array('slug' => 'lawyer'),
      'supports'    => array('title', 'custom-fields', 'editor', 'thumbnail')
    )
  );
}

// register widgets | widgets located in widgets.php
if ($wp_version >= 2.8) require_once(TEMPLATEPATH.'/widgets.php');

// remove special characters from strings
function remove_special_chars($string) {
  return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

//Custom Theme Settings
add_action('admin_menu', 'add_gcf_interface');

function add_gcf_interface() {
	add_options_page('Company Details', 'Company Details', 'manage_options', 'company-details', 'editcompanydetails');
}

function get_court_house(){
  echo '<div class="col-sm-12 text-center court-house">' .
          '<span></span>' .
          '<i class="fa fa-university" aria-hidden="true"></i>' .
          '<span></span>' .
        '</div>';
}

function hollow_btn($btn_text, $btn_link){
	echo '<div class="col-sm-12 text-center">' .
			    '<a href="' . $btn_link . '" class="btn btn-hollow relative top50">' . $btn_text . ' <span class="absolute"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>' .
			  '</div>';
}

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_page(array(
    'page_title'  => 'Testimonials',
    'menu_title'  => 'Testimonials',
    'menu_slug'   => 'testimonials',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
}

?>
