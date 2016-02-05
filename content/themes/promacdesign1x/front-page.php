<?php
/**
 * The template for Front Page
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */

	if (!class_exists('Timber')){
		echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
	}
	$context = Timber::get_context();
	$post = new TimberPost();
	$context['post'] = $post;

	$artist = array(
		'post_type' => 'artist',
		'numberposts' => -1,
		'post_status' => 'publish',
		'orderby' => 'menu_order',
		'order'         => 'ASC',
		'suppress_filters' => false,
	);
	$context['artists'] = Timber::get_posts($artist);

	Timber::render('front-page.twig', $context);
