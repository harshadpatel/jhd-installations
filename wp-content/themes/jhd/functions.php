<?php

/*
 * function includes
 */
require_once('functions/functions.post-types.php');

/**
 * register navigation menus
 */
function register_navigation() {
    register_nav_menu('nav-primary', 'Primary');
    register_nav_menu('nav-main-footer', 'Footer');

}
add_action('init', 'register_navigation');

/**
 * Pagination
 */
function paginate() {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

    $pagination = array(
        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'show_all' => false,
        'type' => 'list',
        'next_text' => '&raquo;',
        'prev_text' => '&laquo;',
        'class' => 'pagination'
    );

    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if( !empty($wp_query->query_vars['s']) )
        $search = str_replace(' ', '+', get_query_var( 's' ));
    $pagination['add_args'] = array( 's' =>  $search);

    return paginate_links( $pagination );
}

/**
 * Thumbnails
 */

    // This theme uses post thumbnails
    add_theme_support( 'post-thumbnails' );
   
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
