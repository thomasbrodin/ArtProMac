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
	$args = array(
			'post_type'=> array('post', 'page', 'artist', 'exhibition', 'artfair', 'publication', 'bibliography', 'press'),
			'numberposts' => -1,
			's' => $s
	);
	$context['search_title'] = get_search_query();
	$context['posts'] = Timber::get_posts($args);

	Timber::render($templates, $context);
