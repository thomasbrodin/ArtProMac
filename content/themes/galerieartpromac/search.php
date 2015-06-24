<?php
/**
 * Search results page
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package 	WordPress
 * @subpackage 	Timber
 * @since 		Timber 0.1
 */


	$templates = array('search.twig', 'archive.twig', 'index.twig');
	$context = Timber::get_context();

	$context['title'] = __('Resultats de recherche','vnh') .' : ' . esc_attr( $_GET['s'] );
	$args = array(
  		'post_type'=> array('post', 'page', 'artist', 'exhibition'),
  		'numberposts' => -1,
  		's' => $s
	);
	$context['posts'] = Timber::get_posts($args);

	Timber::render($templates, $context);
