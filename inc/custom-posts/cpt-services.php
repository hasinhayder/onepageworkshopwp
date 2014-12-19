<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/19/14
 * Time: 11:36 PM
 */

function cpt_service() {

    $labels = array(
        'name'                => _x( 'Services', 'Post Type General Name', 'cvx' ),
        'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'cvx' ),
        'menu_name'           => __( 'Services', 'cvx' ),
        'parent_item_colon'   => __( 'Parent Service:', 'cvx' ),
        'all_items'           => __( 'All Services', 'cvx' ),
        'view_item'           => __( 'View Services', 'cvx' ),
        'add_new_item'        => __( 'Add New Service', 'cvx' ),
        'add_new'             => __( 'Add New', 'cvx' ),
        'edit_item'           => __( 'Edit Services', 'cvx' ),
        'update_item'         => __( 'Update Services', 'cvx' ),
        'search_items'        => __( 'Search Service', 'cvx' ),
        'not_found'           => __( 'Not found', 'cvx' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'cvx' ),
    );
    $args = array(
        'label'               => __( 'service', 'cvx' ),
        'description'         => __( 'Services', 'cvx' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail', ),
        'taxonomies'          => array( 'category', 'post_tag' ),
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
    );
    register_post_type( 'service', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_service', 0 );