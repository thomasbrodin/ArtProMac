<?php
/*
Plugin Name: HEX Custom Post Types
Description: Custom Post Types for HEX websites.
Author: Thomas Brodin
Author URI: http://www.hexcreativenetwork.com
*/


add_action( 'init', 'hex_cpt' );
add_action( 'init', 'vnh_taxonomies' );  
add_action( 'init','maybe_rewrite_rules' );

function hex_cpt() {
  /** Artists post type */
  $labels  = array(
            'name' => 'Artists',
            'singular_name' => 'Artist',
            'add_new' => 'Add Artist',
            'add_new_item' => 'Add a new Artist',
            'edit_item' => 'Edit Artist',
            'new_item' => 'New Artist',
            'all_items' => 'All Artist',
            'view_item' => 'Voir Artist',
            'update_item'  => 'Update Artist',
            'search_items' => 'Search Artist',
            'not_found' =>  'No Artist found',
            'not_found_in_trash' => 'No Artist in the trash',
            'parent_item_colon' => '',
            'menu_name' => 'Artists'
            );
  $args = array(
        'labels' => $labels,
        'description' => 'Artists',
        'menu_icon'=> 'dashicons-admin-users',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 0,
        'has_archive' => true,
        'can_export' => true,
        'exclude_from_search' => false,
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions',),
        'rewrite' => array( 'slug' => 'artist'),
      );
  register_post_type( 'artist', $args);
  /** Exhibitions post type */
  $labels  = array(
            'name' => 'Exhibitions',
            'singular_name' => 'Exhibition',
            'add_new' => 'Add Exhibition',
            'add_new_item' => 'Add New',
            'edit_item' => 'Edit Exhibition',
            'new_item' => 'New Exhibition',
            'all_items' => 'All Exhibitions',
            'view_item' => 'View Exhibition',
            'update_item'  => 'Update Exhibition',
            'search_items' => 'Search Exhibitions',
            'not_found' =>  'No Exhibitions Found',
            'not_found_in_trash' => 'No Exhibition in the trash',
            'parent_item_colon' => '',
            'menu_name' => 'Exhibitions'
            );
  $args = array(
        'labels' => $labels,
        'description' => 'Exhibitions',
        'menu_icon'=> 'dashicons-format-gallery',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 0,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions',),
        'rewrite' => array( 'slug' => 'exhibition'),
      );
  register_post_type( 'exhibition', $args);
  /** Oeuvres post type */
  $labels = array(
    'name'                => 'Artwork',
    'singular_name'       => 'Artwork',
    'menu_name'           => 'Artworks',
    'all_items'           => 'All Artworks',
    'view_item'           => 'View Artwork',
    'add_new_item'        => 'Add Artwork',
    'add_new'             => 'Add New',
    'edit_item'           => 'Edit Artwork',
    'update_item'         => 'Update Artwork',
    'search_items'        => 'Search Artworks',
    'not_found'           => 'No Artwork Found',
    'not_found_in_trash'  => 'No Artwork in the trash',
  );
  $args = array(
    'label'               => 'Artwork',
    'description'         => 'Artwork List',
    'labels'              => $labels,
    'menu_icon'           => 'dashicons-format-image',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 0,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
    'rewrite' => array( 'slug' => 'artwork'),
  );
  register_post_type( 'artwork', $args );
  /** Publications post type */
  $labels = array(
    'name'                => 'Publications',
    'singular_name'       => 'Publication',
    'menu_name'           => 'Publications',
    'all_items'           => 'All Publications',
    'view_item'           => 'View Publication',
    'add_new_item'        => 'Add Publication',
    'add_new'             => 'Add New',
    'edit_item'           => 'Edit Publication',
    'update_item'         => 'Update Publication',
    'search_items'        => 'Search Publications',
    'not_found'           => 'No Publications Found',
    'not_found_in_trash'  => 'No Publications in the trash',
  );
  $args = array(
    'label'               => 'Publications',
    'description'         => 'Publications',
    'labels'              => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 0,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'menu_position'       =>  0,
    'menu_icon'           => 'dashicons-networking',
    'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
    'rewrite' => array( 'slug' => 'publication'),
  );
  register_post_type( 'publication', $args );
  /** Press post type */
  $labels = array(
    'name'                => 'Press',
    'singular_name'       => 'Press',
    'menu_name'           => 'Press',
    'all_items'           => 'All Press',
    'view_item'           => 'View Press',
    'add_new_item'        => 'Add Press',
    'add_new'             => 'Add New',
    'edit_item'           => 'Edit Press',
    'update_item'         => 'Update Press',
    'search_items'        => 'Search Press',
    'not_found'           => 'No Press Found',
    'not_found_in_trash'  => 'No Press in the trash',
  );
  $args = array(
    'label'               => 'Press',
    'description'         => 'Press',
    'labels'              => $labels,
    'menu_icon'           => 'dashicons-media-document',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 0,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'menu_position'       =>  0,
    'supports'            => array( 'title', 'editor', 'thumbnail', 'revision', ),
    'rewrite' => array( 'slug' => 'press'),
  );
  register_post_type( 'press', $args );
}
function vnh_taxonomies() {  
  register_taxonomy(  
    'artist_category',  
    'artist',
      array( 
          'hierarchical' => true,  
          'label' => 'Artist Category', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'artist-category')  
      )  
    ); 
  register_taxonomy(  
    'artist_tag',  
    'artist',
      array( 
          'hierarchical' => false,  
          'label' => 'Artist tag', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'artist-tag')  
      )  
    ); 
    register_taxonomy(  
    'exhibition_category',  
    'exhibition',
      array( 
          'hierarchical' => true,  
          'label' => 'Exhibition Category', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'exhibition-category')  
      )  
    ); 
    register_taxonomy(  
    'exhibition_artist',  
    'exhibition',
      array( 
          'hierarchical' => true,  
          'label' => 'Exhibition tag', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'exhibition-artist')  
      )  
    );  
    register_taxonomy(  
    'artwork_category',  
    'artwork',
      array( 
          'hierarchical' => true,  
          'label' => 'Technique', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'artwork-technique')  
      )  
    ); 
     register_taxonomy(  
    'artwork_artist',  
    'artwork',
      array( 
          'hierarchical' => true,  
          'label' => 'Artist', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'artwork-artist')  
      )  
    ); 
    register_taxonomy(  
    'publication_year',  
    'publication',
      array( 
          'hierarchical' => true,  
          'label' => 'Year', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'publication-year')  
      )  
    ); 
    register_taxonomy(  
    'publication_category',  
    'publication',
      array( 
          'hierarchical' => true,  
          'label' => 'Type', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'publication-category')  
      )  
    ); 

 function maybe_rewrite_rules() {
   
    $ver = filemtime( __FILE__ ); // Get the file time for this file as the version number
    $defaults = array( 'version' => 0, 'time' => time() );
    $r = wp_parse_args( get_option( __CLASS__ . '_flush', array() ), $defaults );
   
    if ( $r['version'] != $ver || $r['time'] + 172800 < time() ) { // Flush if ver changes or if 48hrs has passed.
      flush_rewrite_rules();
      // trace( 'flushed' );
      $args = array( 'version' => $ver, 'time' => time() );
      if ( ! update_option( __CLASS__ . '_flush', $args ) )
        add_option( __CLASS__ . '_flush', $args );
    }
   
  }
}
