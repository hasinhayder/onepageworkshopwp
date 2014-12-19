<?php
/**
 * Created by PhpStorm.
 * User: storyteller
 * Date: 12/19/14
 * Time: 11:36 PM
 */

function cpt_teammember() {

    $labels = array(
        'name'                => _x( 'Team members', 'Post Type General Name', 'cvx' ),
        'singular_name'       => _x( 'Team member', 'Post Type Singular Name', 'cvx' ),
        'menu_name'           => __( 'Team members', 'cvx' ),
        'parent_item_colon'   => __( 'Parent Team member:', 'cvx' ),
        'all_items'           => __( 'All Team members', 'cvx' ),
        'view_item'           => __( 'View Team members', 'cvx' ),
        'add_new_item'        => __( 'Add New Team member', 'cvx' ),
        'add_new'             => __( 'Add New', 'cvx' ),
        'edit_item'           => __( 'Edit Team members', 'cvx' ),
        'update_item'         => __( 'Update Team members', 'cvx' ),
        'search_items'        => __( 'Search Team member', 'cvx' ),
        'not_found'           => __( 'Not found', 'cvx' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'cvx' ),
    );
    $args = array(
        'label'               => __( 'team member', 'cvx' ),
        'description'         => __( 'Team members', 'cvx' ),
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
    register_post_type( 'teammember', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_teammember', 0 );