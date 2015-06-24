<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_54203ac67e3ef',
	'title' => 'Artistes Main',
	'fields' => array (
		array (
			'key' => 'field_54186dcc96fc3',
			'label' => 'Citation',
			'name' => 'quote_1',
			'type' => 'wysiwyg',
			'instructions' => 'Sans les guillemets',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_54dba1ae6555d',
			'label' => 'Position de la citation',
			'name' => 'position_quote',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'hg' => 'En haut a gauche',
				'hd' => 'En haut a droite',
				'bg' => 'En bas a gauche',
				'bd' => 'En bas a droite',
			),
			'default_value' => array (
				'' => '',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_54da98f41c269',
			'label' => 'Statement',
			'name' => 'statement',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'visual',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_54da977358cf8',
			'label' => 'Solo Shows',
			'name' => 'solo_shows',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'visual',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_54da978758cf9',
			'label' => 'Group Shows',
			'name' => 'group_shows',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'visual',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_54111102aa274',
			'label' => 'Artist Contact Email',
			'name' => 'artist_contact_email',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5411111daa275',
			'label' => 'Artist Website',
			'name' => 'artist_website',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'html',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54341825193dc',
			'label' => 'Download CV',
			'name' => 'download_cv',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_54111308e59b4',
			'label' => 'Selected Works',
			'name' => 'images_artist',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'artwork',
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'taxonomy',
			),
			'elements' => array (
				0 => 'featured_image',
			),
			'max' => '',
			'return_format' => 'object',
			'min' => 0,
		),
		array (
			'key' => 'field_54caaacb853d6',
			'label' => 'videos',
			'name' => 'videos_related',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'artwork',
			),
			'taxonomy' => array (
				0 => 'artwork_category:video',
			),
			'filters' => '',
			'elements' => '',
			'max' => '',
			'return_format' => 'object',
			'min' => 0,
		),
		array (
			'key' => 'field_5433ffac020eb',
			'label' => 'selected Exhibitions',
			'name' => 'artists_related',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'exhibition',
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'search',
			),
			'elements' => array (
				0 => 'featured_image',
			),
			'max' => '',
			'return_format' => 'object',
			'min' => 0,
		),
		array (
			'key' => 'field_543eaded69c52',
			'label' => 'Selected special projects',
			'name' => 'musee_show',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'exhibition',
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'search',
			),
			'elements' => array (
				0 => 'featured_image',
			),
			'max' => '',
			'return_format' => 'object',
			'min' => 0,
		),
		array (
			'key' => 'field_543d519c00246',
			'label' => 'Press',
			'name' => 'press_related',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'press',
			),
			'taxonomy' => array (
			),
			'filters' => array (
				0 => 'search',
			),
			'elements' => array (
				0 => 'featured_image',
			),
			'max' => '',
			'return_format' => 'object',
			'min' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'artist',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'discussion',
		3 => 'comments',
		4 => 'revisions',
		5 => 'author',
		6 => 'format',
		7 => 'send-trackbacks',
	),
));

acf_add_local_field_group(array (
	'key' => 'group_543431820706f',
	'title' => 'Artists Side',
	'fields' => array (
		array (
			'key' => 'field_543431a6b8b37',
			'label' => 'Couleur de la citation',
			'name' => 'quote_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'artist',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'custom_fields',
		4 => 'discussion',
		5 => 'comments',
		6 => 'revisions',
		7 => 'slug',
		8 => 'author',
		9 => 'format',
		10 => 'page_attributes',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
));

acf_add_local_field_group(array (
	'key' => 'group_543432abb054a',
	'title' => 'Exhibition Side',
	'fields' => array (
		array (
			'key' => 'field_5440147bcc9a2',
			'label' => 'Catégories',
			'name' => 'categories_expo',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'EXPOSITION PERSONNELLE' => 'EXPOSITION PERSONNELLE',
				'EXPOSITION COLLECTIVE' => 'EXPOSITION COLLECTIVE',
				'INSTALLATION' => 'INSTALLATION',
				'EXPOSITION EN MUSEE' => 'EXPOSITION EN MUSEE',
				'PROJET PUBLIQUE' => 'PROJET PUBLIQUE',
				'BIENNALE' => 'BIENNALE',
				'FOIRE' => 'FOIRE',
				'HORS LES MURS' => 'HORS LES MURS',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'exhibition',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'excerpt',
		1 => 'custom_fields',
		2 => 'discussion',
		3 => 'comments',
		4 => 'revisions',
		5 => 'slug',
		6 => 'author',
		7 => 'format',
		8 => 'page_attributes',
		9 => 'send-trackbacks',
	),
));

acf_add_local_field_group(array (
	'key' => 'group_54203ac6a5d36',
	'title' => 'Exhibitions',
	'fields' => array (
		array (
			'key' => 'field_5411119dc1629',
			'label' => 'Date Exhibition',
			'name' => 'date_exhibition',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_541111e8c162b',
			'label' => 'Exhibition Place',
			'name' => 'exhibition_place',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_541111b1c162a',
			'label' => 'Date Exhibition ANNEE',
			'name' => 'date_exhibition_annee',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54111280f7731',
			'label' => 'Vue de l"exposition',
			'name' => 'images_show',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min' => 0,
			'max' => 0,
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_541b11610149f',
			'label' => 'Behind the scenes',
			'name' => 'making_of',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min' => 0,
			'max' => 0,
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_54111258c162c',
			'label' => 'PDF',
			'name' => 'exhib_pdf',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'exhibition',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'excerpt',
		1 => 'custom_fields',
		2 => 'discussion',
		3 => 'comments',
		4 => 'revisions',
		5 => 'author',
		6 => 'format',
		7 => 'categories',
		8 => 'tags',
		9 => 'send-trackbacks',
	),
));

acf_add_local_field_group(array (
	'key' => 'group_54ca8d570e36a',
	'title' => 'Oeuvres',
	'fields' => array (
		array (
			'key' => 'field_54db9592a09e3',
			'label' => 'Date',
			'name' => 'artwork_date',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54db979732e28',
			'label' => 'Available work',
			'name' => 'artwork_available',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Available Work' => 'Available Work',
				'Unavailable' => 'Unavailable',
			),
			'default_value' => array (
				'Available Work' => 'Available Work',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
		array (
			'key' => 'field_543d6bb1eda76',
			'label' => 'Images',
			'name' => 'artwork_images',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_54ca8ed229734',
			'label' => 'Vidéos',
			'name' => 'artwork_video',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => 960,
			'height' => 520,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'artwork',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'custom_fields',
		3 => 'discussion',
		4 => 'comments',
		5 => 'slug',
		6 => 'author',
		7 => 'format',
		8 => 'page_attributes',
		9 => 'send-trackbacks',
	),
));

acf_add_local_field_group(array (
	'key' => 'group_54203ac6bbb9b',
	'title' => 'Options',
	'fields' => array (
		array (
			'key' => 'field_5417428148b4c',
			'label' => 'Logo Icone',
			'name' => 'logoVnh',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'return_format' => 'url',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_5417429f48b4d',
			'label' => 'Logo Nom',
			'name' => 'vnhName',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'return_format' => 'url',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_545d4c3870dc6',
			'label' => 'Facebook',
			'name' => 'facebook',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_545d4c9a70dc7',
			'label' => 'twitter',
			'name' => 'twitter',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_545d4fd6be0fd',
			'label' => 'Adresse',
			'name' => 'adresse',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_545d4fecbe0fe',
			'label' => 'telephone',
			'name' => 'telephone',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_545d50f17b27a',
			'label' => 'Image Exterieur',
			'name' => 'image_exterieur',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_5460ed58b108b',
			'label' => 'google Map',
			'name' => 'google_map',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_543ea26f12136',
	'title' => 'Page Galerie',
	'fields' => array (
		array (
			'key' => 'field_54db7cf459bb0',
			'label' => 'Where?',
			'name' => 'where',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_54db7d1d59bb1',
			'label' => 'Who?',
			'name' => 'who',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '2',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '112',
			),
		),
		array (
			array (
				'param' => 'page',
				'operator' => '==',
				'value' => '115',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5434048dc40f8',
	'title' => 'Press',
	'fields' => array (
		array (
			'key' => 'field_54451b44b27e9',
			'label' => 'Année de Publication',
			'name' => 'press_date',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54451b36b27e8',
			'label' => 'Editeur',
			'name' => 'press_editeur',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_543404c121c31',
			'label' => 'PDF',
			'name' => 'press_pdf',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'library' => 'all',
			'min_size' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_54db9fa9f16f0',
			'label' => 'Langues',
			'name' => 'Press_langues',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'English' => 'English',
				'Francais' => 'Francais',
				'ZH' => 'ZH',
			),
			'default_value' => array (
				'' => '',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'press',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'custom_fields',
		4 => 'discussion',
		5 => 'comments',
		6 => 'revisions',
		7 => 'slug',
		8 => 'author',
		9 => 'format',
		10 => 'page_attributes',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
));

endif;
