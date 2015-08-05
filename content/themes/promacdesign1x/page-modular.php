<?php
/*
 * Template Name: Page Modulable
 * 
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

Timber::render(array('page-modular.twig'), $context);