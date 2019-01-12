<?php
add_action( 'init', 'product_cpt' );
function product_cpt() {
  $labels = array(
    'name'               => _x( 'Products', 'post type general name', 'c9headless' ),
    'singular_name'      => _x( 'Product', 'post type singular name', 'c9headless' ),
    'menu_name'          => _x( 'Products', 'admin menu', 'c9headless' ),
    'name_admin_bar'     => _x( 'Product', 'add new on admin bar', 'c9headless' ),
    'add_new'            => _x( 'Add New', 'Product', 'c9headless' ),
    'add_new_item'       => __( 'Add New Product', 'c9headless' ),
    'new_item'           => __( 'New Product', 'c9headless' ),
    'edit_item'          => __( 'Edit Product', 'c9headless' ),
    'view_item'          => __( 'View Product', 'c9headless' ),
    'all_items'          => __( 'All Products', 'c9headless' ),
    'search_items'       => __( 'Search Products', 'c9headless' ),
    'parent_item_colon'  => __( 'Parent Products:', 'c9headless' ),
    'not_found'          => __( 'No Products found.', 'c9headless' ),
    'not_found_in_trash' => __( 'No Products found in Trash.', 'c9headless' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'c9headless' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'product' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_rest'       => true,
    'rest_base'          => 'products-api',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'product', $args );
}