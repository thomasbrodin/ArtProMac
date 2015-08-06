<?php
	include_once('inc/apm_acf.php');
	include_once ('inc/hexplugins.php');

	define('THEME_URL', get_template_directory_uri());
	load_theme_textdomain('artpromac', THEME_URL. '/languages/themes');
	include_once('inc/apm_strings.php');

	if (!class_exists('Timber')){
		add_action( 'admin_notices', function(){
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . admin_url('plugins.php#timber') . '">' . admin_url('plugins.php') . '</a></p></div>';
		});
		return;
	}
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
	}

	class StarterSite extends TimberSite {

		function __construct(){
			add_theme_support('post-thumbnails');
			add_theme_support('menus');

			add_editor_style('editor-style.css');

			add_filter('timber_context', array($this,'add_to_context'));
			add_filter('get_twig', array($this,'add_to_twig'));
			add_filter('acf/options_page/settings', array($this, 'options_page_settings'));

			add_filter('acf/settings/show_admin', array($this,'__return_false'));

			add_action( 'widgets_init', array($this, 'lang_bar') );

			add_action('wp_enqueue_scripts', array($this, 'load_scripts'));
			add_action('wp_enqueue_scripts', array($this, 'load_styles'));

			add_action('init', array($this,'removeHeadLinks'));

			add_action( 'widgets_init', array($this,'hex_widgets_init'));

			register_nav_menus( array(
				'primary' => 'Menu',
			) );

			parent::__construct();
		}

		function add_to_context($context){
			$context['options'] = get_fields('options');

			$context['langues'] = pll_the_languages(array('raw'=>1));
			$context['current_lang'] =pll_current_language('slug');
			
			$context['footer_sidebar'] = Timber::get_widgets('footer_sidebar');

			$context['menu'] = new TimberMenu('primary');
			$context['site'] = $this;
			return $context;
		}

		function add_to_twig($twig){
			/* this is where you can add your own fuctions to twig */
			$twig->addExtension(new Twig_Extension_StringLoader());
			return $twig;
		}
		function hex_widgets_init() {
			register_sidebar(
				array(
					'name' => 'Footer',
					'id' => 'footer_sidebar',
					'before_widget' => '<div class="widget">',
					'after_widget' => '</div>',
					'before_title' => '<h3">',
					'after_title' => '</h3>',
				)
			);
		}
		function load_scripts(){
			wp_enqueue_script('jquery');
			wp_enqueue_script( 'modernizr', THEME_URL . '/js/modernizr.js', array('jquery'), false, false);
			wp_enqueue_script( 'main-compressed', THEME_URL . '/js/main-min.js', array('jquery'), '', true);
		}

		function load_styles() {
			wp_enqueue_style( 'custom', THEME_URL . '/css/main.css');
		}


		function removeHeadLinks() {
						remove_action('wp_head', 'rsd_link');
						remove_action('wp_head', 'wlwmanifest_link');
						remove_action('wp_head', 'wp_generator');
						remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
					}
	}
	new StarterSite();
