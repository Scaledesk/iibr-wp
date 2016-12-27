<?php
/*
Cigar theme i can develop this is my first theme for wordpress
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
*/
/*Loding main css file*/

require_once(get_template_directory().'/template-parts/admin.php');

function loadcss(){
	wp_enqueue_style('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','loadcss');

           /* Create custom logo */
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 400,
		'flex-width' => true,
		'flex-hight'=>true,
		'header-text'=>array('site-title','site-description'),
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
/* Create custom menu  */
function custom_menu(){
	register_nav_menus(array(

		'pramiry' =>__('Primary Menu','Cigar'),
          'secondry'=>__('Top menu','cigar')

		));
}
add_action('after_setup_theme','custom_menu');
/*Footer widgets part*/ 
function custom_widgets() {

	register_sidebar( array(
		'name' => 'Footer one',
		'id' => 'footer_sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'class' => 'footer-middle-in',
	) );

	register_sidebar(array(
		'name'=>'Footer two',
		'id' =>'footer_sidebar-2',
		'description' =>__('This is seconds widgets of footer sidebar'),
		'before_widget'=>'',
		'after_widget'=>'',
		'after_title'=>'',
		'before_title'=>'',
		'class'=>'',

		));
	register_sidebar(array(
		'name'=>'Footer three',
		'id' =>'footer_sidebar-3',
		'description' =>__('This is third widgets of footer sidebar'),
		'before_widget'=>'',
		'after_widget'=>'',
		'after_title'=>'',
		'before_title'=>'',
		'class'=>'tag-in',

		));
	register_sidebar(array(
		'name'=>'Footer four',
		'id'=>'footer_sidebar-4',
		'description'=>__('Thsi is four footer widgets'),
		'before_widget'=>'',
		'after_widget'=>'',
		'before_title'=>'',
		'after_title'=>'',
		'class'=>'',
		));
}
add_action( 'widgets_init', 'custom_widgets' );
/*Start woocommerce part*/ 

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 
        'jquery', 
        'http://code.jquery.com/jquery.js',
        false, 
        '1.9.1' // IMPORTANT: declare jQuery version
        );
    wp_enqueue_script( 'jquery' );
}  

add_action('wp_enqueue_scripts', 'my_scripts_method');
