<?php
/*
Plugin Name: HEX Custom Post Types
Description: Custom Post Types for HEX websites.
Author: Thomas Brodin
Author URI: http://www.hexcreativenetwork.com
*/

add_action( 'init', 'apm_cpt' );
add_action( 'init', 'apm_taxonomies' );
add_action( 'init','maybe_rewrite_rules' );

function apm_cpt() {

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
				'show_in_admin_bar' => true,
				'menu_position' => 0,
				'can_export' => true,
				'has_archive' => true,
				'exclude_from_search' => false,
				'supports' => array( 'title', 'editor', 'thumbnail', 'revisions',),
				'rewrite' => array( 'slug' => 'exhibition'),
			);
	register_post_type( 'exhibition', $args);

	/** Press post type */
	$labels = array(
		'name'                => 'Foires',
		'singular_name'       => 'Foires',
		'menu_name'           => 'Foires',
		'all_items'           => 'Toutes les foires',
		'view_item'           => 'Voir la foire',
		'add_new_item'        => 'Ajouter une foire',
		'add_new'             => 'Ajouter',
		'edit_item'           => 'Modifier la foire',
		'update_item'         => 'Mettre a jour la foire',
		'search_items'        => 'Rechercher dans la foire',
		'not_found'           => 'Aucune foire trouvée',
		'not_found_in_trash'  => 'Aucune foire dans la corbeille',
	);
	$args = array(
		'label'               => 'Foire',
		'description'         => 'Foire',
		'labels'              => $labels,
		'menu_icon'=> 'dashicons-format-gallery',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 0,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'menu_position'       =>  0,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revision', ),
		'rewrite' => array( 'slug' => 'artfair'),
	);
	register_post_type( 'artfair', $args );

	/** Publications post type */
	$labels = array(
		'name'                => 'Publications',
		'singular_name'       => 'Publications',
		'menu_name'           => 'Publications',
		'all_items'           => 'Toutes les Publications',
		'view_item'           => 'Voir la publication',
		'add_new_item'        => 'Ajouter une publication',
		'add_new'             => 'Ajouter',
		'edit_item'           => 'Modifier la publication',
		'update_item'         => 'Mettre a jour la publication',
		'search_items'        => 'Rechercher une publication',
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
		'show_in_admin_bar' => true,
		'menu_position' => 0,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'menu_position'       =>  0,
		'menu_icon'           => 'dashicons-media-text',
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'rewrite' => array( 'slug' => 'publication'),
	);
	register_post_type( 'publication', $args );

	/** Bibliographie post type */
	$labels = array(
		'name'                => 'Bibliographie',
		'singular_name'       => 'Bibliographie',
		'menu_name'           => 'Bibliographie',
		'all_items'           => 'Toute la Bibliographie',
		'view_item'           => 'Voir la bibliographie',
		'add_new_item'        => 'Ajouter une bibliographie',
		'add_new'             => 'Ajouter',
		'edit_item'           => 'Modifier la bibliographie',
		'update_item'         => 'Mettre a jour la bibliographie',
		'search_items'        => 'Rechercher une bibliographie',
		'not_found'           => 'Aucune bibliographie trouvée',
		'not_found_in_trash'  => 'Aucune bibliographie dans la corbeille',
	);
	$args = array(
		'label'               => 'Bibliographie',
		'description'         => 'Bibliographie',
		'labels'              => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 0,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'menu_position'       =>  0,
		'menu_icon'           => 'dashicons-media-text',
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'rewrite' => array( 'slug' => 'bibliography'),
	);
	register_post_type( 'bibliography', $args );

	/** Press post type */
	$labels = array(
		'name'                => 'Presse',
		'singular_name'       => 'Presse',
		'menu_name'           => 'Presse',
		'all_items'           => 'Toute la presse',
		'view_item'           => 'Voir la presse',
		'add_new_item'        => 'Ajouter de la presse',
		'add_new'             => 'Ajouter',
		'edit_item'           => 'Modifier la presse',
		'update_item'         => 'Mettre a jour la presse',
		'search_items'        => 'Rechercher dans la presse',
		'not_found'           => 'Aucune presse trouvée',
		'not_found_in_trash'  => 'Aucune presse dans la corbeille',
	);
	$args = array(
		'label'               => 'Presse',
		'description'         => 'Presse',
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-media-spreadsheet',
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
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

function apm_taxonomies() {
	/** Artist post type hierarchical TAX */
	$labels = array(
		'name'              => 'Artiste Categories',
		'singular_name'     => 'Artiste Categorie',
		'search_items'      => 'Rechercher dans les categories',
		'all_items'         => 'Toutes les categories',
		'edit_item'         => 'Modifier la categorie',
		'update_item'       => 'Mettre a jour la categorie',
		'add_new_item'      => 'Ajouter une categorie',
		'new_item_name'     => 'Nouvelle categorie',
		'menu_name'         => 'Artiste Categories',
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'artist_category' ),
	);
	register_taxonomy( 'artist_category', 'artist', $args);

	/** Artist post type NOT hierarchical TAX */
	$labels = array(
		'name'                       => 'Artiste mots clés',
		'singular_name'              => 'Artiste mot clé',
		'search_items'               => 'Rechercher dans les mots clés',
		'popular_items'              => 'Mots Clés souvent utilisées',
		'all_items'                  => 'Tous les mots clés',
		'edit_item'                  => 'Modifier le mot clé',
		'update_item'                => 'Mettre a jour le mot clé',
		'add_new_item'               => 'Ajouter un mot clé',
		'new_item_name'              => 'Nouveau mot clé',
		'separate_items_with_commas' => 'Separer les mots clés avec une virgule',
		'add_or_remove_items'        => 'Ajouter ou retirer le mot clé',
		'choose_from_most_used'      => 'Choisir parmi les mots clés les plus utilisés',
		'not_found'                  => 'Aucun mot clé trouvé',
		'menu_name'                  => 'Artiste mots clés',
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite' => array('slug' => 'artist-tag')
	);

	register_taxonomy( 'artist_tag', 'artist', $args );

	/** Exhibition post type hierarchical TAX */
	$labels = array(
		'name'              => 'Exposition Categories',
		'singular_name'     => 'Exposition Categorie',
		'search_items'      => 'Rechercher dans les categories',
		'all_items'         => 'Toutes les categories',
		'edit_item'         => 'Modifier la categorie',
		'update_item'       => 'Mettre a jour la categorie',
		'add_new_item'      => 'Ajouter une categorie',
		'new_item_name'     => 'Nouvelle categorie',
		'menu_name'         => 'Exposition Categories',
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite' => array('slug' => 'exhibition-category')
	);

	register_taxonomy(  'exhibition_category',  'exhibition', $args );

	/** Exhibition post type hierarchical TAX */
	$labels = array(
		'name'              => 'Années',
		'singular_name'     => 'Année',
		'search_items'      => 'Rechercher dans les années',
		'all_items'         => 'Toutes les années',
		'edit_item'         => 'Modifier l\'année',
		'update_item'       => 'Mettre a jour l\'année',
		'add_new_item'      => 'Ajouter une année',
		'new_item_name'     => 'Nouvelle année',
		'menu_name'         => 'Années',
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite' => array('slug' => 'expo-year')
	);

	register_taxonomy( 'exhibition_date', 'exhibition', $args );

	/** Artfair post type hierarchical TAX */
	$labels = array(
		'name'              => 'Foires Categories',
		'singular_name'     => 'Foires Categorie',
		'search_items'      => 'Rechercher dans les categories',
		'all_items'         => 'Toutes les categories',
		'edit_item'         => 'Modifier la categorie',
		'update_item'       => 'Mettre a jour la categorie',
		'add_new_item'      => 'Ajouter une categorie',
		'new_item_name'     => 'Nouvelle categorie',
		'menu_name'         => 'Foires Categories',
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite' => array('slug' => 'artfair-category')
	);

	register_taxonomy(  'artfair_category',  'artfair', $args );

	/** Artfair post type hierarchical TAX */
	$labels = array(
		'name'              => 'Années',
		'singular_name'     => 'Année',
		'search_items'      => 'Rechercher dans les années',
		'all_items'         => 'Toutes les années',
		'edit_item'         => 'Modifier l\'année',
		'update_item'       => 'Mettre a jour l\'année',
		'add_new_item'      => 'Ajouter une année',
		'new_item_name'     => 'Nouvelle année',
		'menu_name'         => 'Années',
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite' => array('slug' => 'artfair-year')
	);

	register_taxonomy( 'artfair_date', 'artfair', $args );

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
