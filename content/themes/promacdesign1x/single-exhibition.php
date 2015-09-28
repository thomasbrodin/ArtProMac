<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;

if (post_password_required($post->ID)){
	Timber::render('single-password.twig', $context);
} else {
	$context['wp_title'] = $post->title();
	$context['cpt_title'] = get_post_type();
	$context['press'] = Timber::get_posts(array(
		'post_type' => 'press',
		'meta_query' => array(
			array(
				'key' => 'press_expo', // name of custom field
				'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
				'compare' => 'LIKE'
			)
		)
	));
	$context['publications'] = Timber::get_posts(array(
		'post_type' => 'publication',
		'meta_query' => array(
			array(
				'key' => 'pub_expo', // name of custom field
				'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
				'compare' => 'LIKE'
			)
		)
	));
		Timber::render(array('single-exhibition.twig'), $context);
}
