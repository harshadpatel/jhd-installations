<?php

function register_custom_post_types() {
    /*  Case studies */
    $labels = array(
        'name' => 'Case Studies',
        'singular_name' => 'Case Study',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Case Study',
        'edit_item' => 'Edit Case Study',
        'new_item' => 'New Case Study',
        'view_item' => 'View Case Study',
        'search_items' => 'Search Case Studies',
        'not_found' => 'No case studies found',
        'not_found_in_trash' => 'No case studies found in Trash',
    );
    $args = array(
        'label' => 'Case Studies',
        'labels' => $labels,
        'public' => true,
        'capability_type' => 'page',
        'hierarchical' => false,
        'show_in_nav_menu' => true,
        'rewrite' => array(
            'slug' => 'case-studies',
            'with_front' => false,
            'pages' => true
        ),
        'query_var' => true,
        'can_export' => true,
        'supports' => array( 'title', 'thumbnail', 'page-attributes', 'editor' ),
    );
    register_post_type('case-studies', $args);

}
add_action('init', 'register_custom_post_types');


function flush_rewrite(){
    register_custom_post_types();
    flush_rewrite_rules();
}
add_action('after_theme_switch', 'flush_rewrite');