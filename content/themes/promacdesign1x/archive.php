<?php
/**
	* The template for displaying Archive pages.
	*
	* Used to display archive-type pages if nothing more specific matches a query.
	* For example, puts together date-based pages if no date.php file exists.
	*
	* Learn more: http://codex.wordpress.org/Template_Hierarchy
	*
	* Methods for TimberHelper can be found in the /functions sub-directory
	*
	* @package 	WordPress
	* @subpackage 	Timber
	* @since 		Timber 0.2
	*/

		$templates = array('archive.twig', 'index.twig');

		$data = Timber::get_context();

		$data['title'] = 'Archive';
		if (is_day()){
			$data['title'] = 'Archive: '.get_the_date( 'D M Y' );
		} else if (is_month()){
			$data['title'] = 'Archive: '.get_the_date( 'M Y' );
		} else if (is_year()){
			$data['title'] = 'Archive: '.get_the_date( 'Y' );
		} else if (is_tag()){
			$data['title'] = single_tag_title('', false);
		} else if (is_category()){
			$data['title'] = single_cat_title('', false);
			array_unshift($templates, 'archive-'.get_query_var('cat').'.twig');
		} else if (is_post_type_archive()){
			$data['wp_title'] = post_type_archive_title('', false);
			$data['exhibition_date'] = Timber::get_terms('exhibition_date', array('orderby' => 'term_order', 'hide_empty' => false ));
			$data['exhibition_category'] = Timber::get_terms('exhibition_category', array('orderby' => 'term_order', 'hide_empty' => false ));
			$data['artfair_date'] = Timber::get_terms('artfair_date', array('orderby' => 'term_order', 'hide_empty' => false ));
			$data['artfair_category'] = Timber::get_terms('artfair_category', array('orderby' => 'term_order', 'hide_empty' => false ));
			$data['artist_category'] = Timber::get_terms('artist_category', array('orderby' => 'term_order', 'hide_empty' => false ));
			$post_type = get_post_type();
			$args = array(
				'post_type' => $post_type,
			);
			array_unshift($templates, 'archive-'.get_post_type().'.twig');
		}
		$data['posts'] = Timber::get_posts($args);

		Timber::render($templates, $data);
