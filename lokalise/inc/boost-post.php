<?php 
/**
 * Card section Boost
*/

function lokalise_boost_post_type() {
    $labels = array(
        'name'               => 'Boost Post',
        'singular_name'      => 'Boost Post',
        'menu_name'          => 'Boost Posts',
        'name_admin_bar'     => 'Boost Post',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Boost Post',
        'edit_item'          => 'Edit Boost Post',
        'new_item'           => 'New Boost Post',
        'view_item'          => 'View Boost Post',
        'all_items'          => 'All Boost Posts',
        'search_items'       => 'Search Boost Posts',
        'not_found'          => 'No Boost Posts Found',
        'not_found_in_trash' => 'No Boost Posts Found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'boost-post'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('boost_post', $args);
}

add_action('init', 'lokalise_boost_post_type');
