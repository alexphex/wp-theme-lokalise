<?php 
/**
 * Custom Post (section)
 */
function lokalise_custom_section_post_type() {
    $labels = array(
        'name'               => 'Custom Sections',
        'singular_name'      => 'Custom Section',
        'menu_name'          => 'Custom Sections',
        'name_admin_bar'     => 'Custom Section',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Custom Section',
        'edit_item'          => 'Edit Custom Section',
        'new_item'           => 'New Custom Section',
        'view_item'          => 'View Custom Section',
        'all_items'          => 'All Custom Sections',
        'search_items'       => 'Search Custom Sections',
        'not_found'          => 'No Custom Sections Found',
        'not_found_in_trash' => 'No Custom Sections Found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'custom-section'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('custom_section', $args);
}

add_action('init', 'lokalise_custom_section_post_type');
