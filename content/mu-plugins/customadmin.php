<?php
/*
Plugin Name: HEX Custom admin UI
Description: Customisation of WP admin UI
Author: HEX creative
Author URI: http://www.hexcreativenetwork.com
*/

add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );
add_action( 'wp_before_admin_bar_render', 'artist_admin_bar_render', 100);
add_action( 'wp_before_admin_bar_render', 'expo_admin_bar_render', 100);
add_action( 'admin_menu', 'remove_menus', 999 );
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets');
add_action( 'admin_enqueue_scripts', 'chrome_fix' );

function chrome_fix() {

		if ( strpos( $_SERVER[ 'HTTP_USER_AGENT' ], 'Chrome' ) !== false ) {
				wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0) }' );
		}
}

function remove_admin_bar_links() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');
		$wp_admin_bar->remove_menu('about');
		$wp_admin_bar->remove_menu('wporg');
		$wp_admin_bar->remove_menu('documentation');
		$wp_admin_bar->remove_menu('support-forums');
		$wp_admin_bar->remove_menu('feedback');
		$wp_admin_bar->remove_menu('updates');
		$wp_admin_bar->remove_menu('comments');
		$wp_admin_bar->remove_node( 'new-link','new-content' );
		$wp_admin_bar->remove_node( 'new-media','new-content' );
		$wp_admin_bar->remove_node( 'new-produits','new-content');
		$wp_admin_bar->remove_node( 'new-user', 'new-content' );
}

function remove_menus() {
		global $wp_admin_bar, $current_user;
		remove_menu_page('index.php'); //Dashboard
		remove_menu_page('edit-comments.php');
		remove_submenu_page( 'themes.php', 'timber-getting-started');
		remove_submenu_page( 'themes.php', 'theme-editor.php');
		remove_submenu_page( 'plugins.php', 'plugin-editor.php');
}

function remove_dashboard_widgets()
	{
		remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
		remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
		remove_meta_box('dashboard_activity', 'dashboard', 'normal');

	}

/**
 * Adds admin bar items for easy access to the theme creator and editor
 */
function artist_admin_bar_render() {
		hex_add_admin_bar('Artistes'); // Parent item
		hex_add_admin_bar('Tous les artistes', '/wp/wp-admin/edit.php?post_type=artist', 'Artistes');
		hex_add_admin_bar('Ajouter un artiste', '/wp/wp-admin/post-new.php?post_type=artist', 'Artistes');
}
function expo_admin_bar_render() {
		hex_add_admin_bar('Expositions'); // Parent item
		hex_add_admin_bar('Toutes les Expositions', '/wp/wp-admin/edit.php?post_type=exhibition', 'Expositions');
		hex_add_admin_bar('Ajouter un exposition', '/wp/wp-admin/post-new.php?post_type=exhibition', 'Expositions');
}

function hex_add_admin_bar($name, $href = '', $parent = '', $custom_meta = array()) {
		global $wp_admin_bar;

		if (!is_super_admin()
						|| !is_admin_bar_showing()
						|| !is_object($wp_admin_bar)
						|| !function_exists('is_admin_bar_showing')) {
				return;
		}

		// Generate ID based on the current filename and the name supplied.
		$id = str_replace('.php', '', basename(__FILE__)) . '-' . $name;
		$id = preg_replace('#[^\w-]#si', '-', $id);
		$id = strtolower($id);
		$id = trim($id, '-');

		$parent = trim($parent);

		// Generate the ID of the parent.
		if (!empty($parent)) {
				$parent = str_replace('.php', '', basename(__FILE__)) . '-' . $parent;
				$parent = preg_replace('#[^\w-]#si', '-', $parent);
				$parent = strtolower($parent);
				$parent = trim($parent, '-');
		}

		$wp_admin_bar->add_node(array(
				'parent' => $parent,
				'id' => $id,
				'title' => $name,
				'href' => $href,
		));
}
