<?php

function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'post-formats' );



if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'anotherside' ),
	    	'footer_menu'  => __( 'Footer Menu', 'anotherside' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}


/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * https://codex.wordpress.org/Function_Reference/register_taxonomy
 */
  
function custom_post_type__artists() {
  
        $labels = array(
            'name'                => _x( 'Clients', 'Post Type General Name', 'anotherside' ),
            'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'anotherside' ),
            'menu_name'           => __( 'Clients', 'anotherside' ),
            'parent_item_colon'   => __( 'Parent Client', 'anotherside' ),
            'all_items'           => __( 'All Clients', 'anotherside' ),
            'view_item'           => __( 'View Client', 'anotherside' ),
            'add_new_item'        => __( 'Add New Client', 'anotherside' ),
            'add_new'             => __( 'Add New', 'anotherside' ),
            'edit_item'           => __( 'Edit Client', 'anotherside' ),
            'update_item'         => __( 'Update Client', 'anotherside' ),
            'search_items'        => __( 'Search Clients', 'anotherside' ),
            'not_found'           => __( 'Not Found', 'anotherside' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'anotherside' ),
        );
          
        $args = array(
            'label'               => __( 'clients', 'anotherside' ),
            'description'         => __( 'Clients we work with', 'anotherside' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        register_post_type( 'clients', $args );
      
    }
    
  add_action( 'init', 'custom_post_type__artists', 0 );

  add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
  
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'clients' ) );
    return $query;
}