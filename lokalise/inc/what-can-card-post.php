<?php 
/**
 * Card section What Can
*/

function lokalise_what_can_post_type() {
    $labels = array(
        'name'               => 'What Can Post',
        'singular_name'      => 'What Can Post',
        'menu_name'          => 'What Can Posts',
        'name_admin_bar'     => 'What Can Post',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New What Can Post',
        'edit_item'          => 'Edit What Can Post',
        'new_item'           => 'New What Can Post',
        'view_item'          => 'View What Can Post',
        'all_items'          => 'All What Can Posts',
        'search_items'       => 'Search What Can Posts',
        'not_found'          => 'No What Can Posts Found',
        'not_found_in_trash' => 'No What Can Posts Found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'what-can-post'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('what_can_post', $args);
}

add_action('init', 'lokalise_what_can_post_type');
