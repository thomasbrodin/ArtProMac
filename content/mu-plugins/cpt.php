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
            'name' => 'Artistes',
            'singular_name' => 'Artiste',
            'add_new' => 'Ajouter',
            'add_new_item' => 'Ajouter un nouvel Artiste',
            'edit_item' => 'Modifier Artiste',
            'new_item' => 'Nouvel Artiste',
            'all_items' => 'Tous les Artistes',
            'view_item' => 'Voir artiste',
            'update_item'  => 'Mettre a jour l\'artiste',
            'search_items' => 'Rechercher un artiste',
            'not_found' =>  'Aucun artiste trouvé',
            'not_found_in_trash' => 'Aucun artiste dans la corbeille',
            'parent_item_colon' => '',
            'menu_name' => 'Artistes'
            );
  $args = array(
        'labels' => $labels,
        'description' => 'Artistes',
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
            'name' => 'Expositions',
            'singular_name' => 'Exposition',
            'add_new' => 'Ajouter',
            'add_new_item' => 'Ajouter une nouvelle exposition',
            'edit_item' => 'Mettre a jour l\'exposition',
            'new_item' => 'Nouvelle exposition',
            'all_items' => 'Toutes les expositions',
            'view_item' => 'Voir exposition',
            'update_item'  => 'Mettre a jour l\'exposition',
            'search_items' => 'Rechercher une exposition',
            'not_found' =>  'Aucune exposition trouvée',
            'not_found_in_trash' => 'Aucune exposition dans la corbeille',
            'parent_item_colon' => '',
            'menu_name' => 'Expositions'
            );
  $args = array(
        'labels' => $labels,
        'description' => 'Expositions',
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
    'name'                => 'Oeuvres',
    'singular_name'       => 'Oeuvre',
    'menu_name'           => 'Oeuvres',
    'all_items'           => 'Toutes les Oeuvres',
    'view_item'           => 'Voir Oeuvre',
    'add_new_item'        => 'Ajouter une nouvel Oeuvre',
    'add_new'             => 'Ajouter',
    'edit_item'           => 'Modifier Oeuvre',
    'update_item'         => 'Mettre a jour l\'oeuvre',
    'search_items'        => 'Rechercher une Oeuvres',
    'not_found'           => 'Aucune Oeuvre trouvée',
    'not_found_in_trash'  => 'Aucune Oeuvres dans la corbeille',
  );
  $args = array(
    'label'               => 'Oeuvre',
    'description'         => 'liste des oeuvres',
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
    'all_items'           => 'Toutes les publications',
    'view_item'           => 'Voir publication',
    'add_new_item'        => 'Ajouter une publication',
    'add_new'             => 'Ajouter',
    'edit_item'           => 'Edit publication',
    'update_item'         => 'Mettre a jour la publication',
    'search_items'        => 'Rechercher une publications',
    'not_found'           => 'Aucune publication trouvée',
    'not_found_in_trash'  => 'Aucune publication dans la corbeille',
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
    'name'                => 'Presse',
    'singular_name'       => 'Presse',
    'menu_name'           => 'Presse',
    'all_items'           => 'Toute la presse',
    'view_item'           => 'Voir la presse',
    'add_new_item'        => 'Ajouter de la presse',
    'add_new'             => 'Ajouter',
    'edit_item'           => 'modifier la presse',
    'update_item'         => 'Mettre a jour la presse',
    'search_items'        => 'Rechercher dans la presse',
    'not_found'           => 'Aucune Presse trouvée',
    'not_found_in_trash'  => 'Aucune Presse dans la corbeille',
  );
  $args = array(
    'label'               => 'Presse',
    'description'         => 'Presse',
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
          'label' => 'Artiste Categories', 
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
          'label' => 'Artiste Etiquettes', 
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
          'label' => 'Exposition Categories', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'exhibition-category')  
      )  
    ); 
    register_taxonomy(  
    'exhibition_date',  
    'exhibition',
      array( 
          'hierarchical' => true,  
          'label' => 'Année', 
          'show_admin_column' => true, 
          'query_var' => true,  
          'rewrite' => array('slug' => 'expo-year')  
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
    'publication_year',  
    'publication',
      array( 
          'hierarchical' => true,  
          'label' => 'Année', 
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
