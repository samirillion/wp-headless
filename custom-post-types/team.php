<?php
add_action( 'init', 'member_cpt' );
function member_cpt() {
  $labels = array(
    'name'               => _x( 'Team', 'post type general name', 'c9headless' ),
    'singular_name'      => _x( 'Member', 'post type singular name', 'c9headless' ),
    'menu_name'          => _x( 'Team', 'admin menu', 'c9headless' ),
    'name_admin_bar'     => _x( 'Team', 'add new on admin bar', 'c9headless' ),
    'add_new'            => _x( 'Add New', 'Member', 'c9headless' ),
    'add_new_item'       => __( 'Add New Member', 'c9headless' ),
    'new_item'           => __( 'New Member', 'c9headless' ),
    'edit_item'          => __( 'Edit Member', 'c9headless' ),
    'view_item'          => __( 'View Member', 'c9headless' ),
    'all_items'          => __( 'All Members', 'c9headless' ),
    'search_items'       => __( 'Search Members', 'c9headless' ),
    'parent_item_colon'  => __( 'Parent Members:', 'c9headless' ),
    'not_found'          => __( 'No Members found.', 'c9headless' ),
    'not_found_in_trash' => __( 'No Members found in Trash.', 'c9headless' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'c9headless' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'member' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'show_in_rest'       => true,
    'rest_base'          => 'team-api',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'member', $args );
}