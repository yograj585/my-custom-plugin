<?php
/**
* Plugin Name: Groot
* Plugin URI: https://www.your-site.com/
* Description: This is test plugin which is created by yograj thakur for study purpose .He is created this plugin in his office .
* Version: 0.1
* Author: Yograj Thakur
* Author URI: https://www.your-site.com/
**/


// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
define( 'GROOT__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

register_activation_hook( __FILE__, array( 'Groot', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'Groot', 'plugin_deactivation' ) );


//require_once( GROOT__PLUGIN_DIR . 'includes/mfp-functions.php' );

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

function custom_post_type() {
        $labels = array(
            'name'                => _x( 'Travel', 'Post Type General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'Travel', 'Post Type Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'Travel', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent Travel', 'twentytwentyone' ),
            'all_items'           => __( 'All Travel', 'twentytwentyone' ),
            'view_item'           => __( 'View Travel', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New Travel', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit Travel', 'twentytwentyone' ),
            'update_item'         => __( 'Update Travel', 'twentytwentyone' ),
            'search_items'        => __( 'Search Travel', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
          
        $args = array(
            'label'               => __( 'Travel', 'twentytwentyone' ),
            'description'         => __( 'Travel news and reviews', 'twentytwentyone' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'genres' ),
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
        register_post_type( 'Travel', $args );
      
    }
    add_action( 'init', 'custom_post_type', 0 );