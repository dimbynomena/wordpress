<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 class WP_Themes{

 	protected static $_instance = NULL, $_plugins_name;

		public function __construct()

		{
			static::$_plugins_name = basename(THEMES_celeon);
			$this->set_hooks();
		}

		public function set_hooks(){
			add_action('wp_enqueue_scripts', array($this,'celeon_script_front'));
			add_action( 'after_setup_theme', array($this,'celeon_custom_menu' ));
			add_action( 'after_setup_theme', array($this,'celeon_custom_logo_option' ));
			add_action( 'init', array($this,'celeon_custom_post_type_slider' ));
			add_action('login_head', array($this,'celeon_custom_login_css'));
			add_filter( 'login_headerurl', array($this,'celeon_custom_login_url' ));
			add_filter( 'login_headertitle', array($this,'celeon_custom_login_title' ));
			add_filter('login_errors', array($this,'celeon_custom_error_login'));
			add_action('login_head', array($this,'celeon_custom_login_header'));
			add_filter('admin_footer_text', array($this,'celeon_remove_footer_admin'));
			add_action('wp_before_admin_bar_render', array($this,'celeon_admin_css'));
			add_action( 'init', array($this,'celeon_custom_role_type' ));
			add_action( 'customize_register', array($this,'celeon_custom_option' ));
			add_action( 'admin_init', array($this,'data_t' ));

		}
		public function celeon_script_front(){
			wp_enqueue_style( 'celeon-style', get_stylesheet_uri() );
			wp_enqueue_style( 'celeon-cform', get_theme_file_uri( '/assets/css/cform.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-bt', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-tp_twitter_plugin', get_theme_file_uri( '/assets/css/tp_twitter_plugin.css' ), array( 'celeon-style' ));
			/*wp_enqueue_style( 'celeon-sett', get_theme_file_uri( '/assets/rs-plugin/css/settings.css' ), array( 'celeon-style' ));*/wp_enqueue_style( 'celeon-base', get_theme_file_uri( '/assets/css/base.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-animate.min', get_theme_file_uri( '/assets/css/animate.min.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-buttons', get_theme_file_uri( '/assets/css/buttons.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-fonts', get_theme_file_uri( '/assets/css/fonts.css' ), array( 'celeon-style' ));
			/*wp_enqueue_style( 'celeon-isotope', get_theme_file_uri( '/assets/css/isotope.css' ), array( 'celeon-style' ));*/
			//wp_enqueue_style( 'celeon-grid', get_theme_file_uri( '/assets/css/grid.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-layout', get_theme_file_uri( '/assets/css/layout.css' ), array( 'celeon-style' ));wp_enqueue_style( 'celeon-shortcodes', get_theme_file_uri( '/assets/css/shortcodes.css' ), array( 'celeon-style' ));wp_enqueue_style( 'celeon-variables', get_theme_file_uri( '/assets/css/variables.css' ), array( 'celeon-style' ));

			wp_enqueue_style( 'celeon-prettyPhoto', get_theme_file_uri( '/assets/css/prettyPhoto.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-oxwl', get_theme_file_uri( '/assets/js/owl-carousel/owl.carousel.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-all', get_theme_file_uri( '/assets/css/ui/jquery.ui.all.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-responsive', get_theme_file_uri( '/assets/css/responsive.css' ), array( 'celeon-style' ));
/*			wp_enqueue_style( 'celeon-imzages', get_theme_file_uri( '/assets/css/skins/red/images.css' ), array( 'celeon-style' ));*/
			wp_enqueue_style( 'celeon-style-colors', get_theme_file_uri( '/assets/css/style-colors.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-thelmr', get_theme_file_uri( '/assets/js/owl-carousel/owl.theme.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-customs', get_theme_file_uri( '/assets/css/custom.css' ), array( 'celeon-style' ));
			wp_enqueue_style( 'celeon-styles', get_theme_file_uri( '/assets/css/style-2.css' ), array( 'celeon-style' ));


/*			wp_enqueue_script( 'jquery.min.js', get_theme_file_uri( '/assets/js/jquery/jquery.js' ), array( 'jquery' ),  true);
			wp_enqueue_script( 'migrate', get_theme_file_uri( '/assets/js/jquery/jquery-migrate.min.js' ), array( 'jquery' ),  true);*/
/*			wp_enqueue_script( 'tools', get_theme_file_uri( '/assets/rs-plugin/js/jquery.themepunch.tools.min.js' ), array( 'jquery' ),  true);*/
/*			wp_enqueue_script( 'revolution', get_theme_file_uri( '/assets/rs-plugin/js/jquery.themepunch.revolution.min.js' ), array( 'jquery' ),  true);*/
			/*wp_enqueue_script( 'form', get_theme_file_uri( '/assets/js/jquery.form.min.js' ), array( 'jquery' ),  true);*/
			wp_enqueue_script( 'cform', get_theme_file_uri( '/assets/js/cform.js' ), array( 'jquery' ),  true);
			/*wp_enqueue_script( 'block', get_theme_file_uri( '/assets/js/jquery-blockui/jquery.blockUI.min.js' ), array( 'jquery' ),  true);*/
/*			wp_enqueue_script( 'core', get_theme_file_uri( '/assets/js/jquery/ui/core.min.js' ), array( 'jquery' ),  true);*/
			/*wp_enqueue_script( 'widget', get_theme_file_uri( '/assets/js/jquery/ui/widget.min.js' ), array( 'jquery' ),  true);*/
	/*		wp_enqueue_script( 'mouse', get_theme_file_uri( '/assets/js/jquery/ui/mouse.min.js' ), array( 'jquery' ),  true);*/
/*			wp_enqueue_script( 'sortable', get_theme_file_uri( '/assets/js/jquery/ui/sortable.min.js' ), array( 'jquery' ),  true);*/
			wp_enqueue_script( 'tab', get_theme_file_uri( '/assets/js/jquery/ui/tabs.min.js' ), array( 'jquery' ),  true);
/*			wp_enqueue_script( 'accordion', get_theme_file_uri( '/assets/js/jquery/ui/accordion.min.js' ), array( 'jquery' ),  true);*/
			wp_enqueue_script( 'carousel', get_theme_file_uri( '/assets/js/owl-carousel/owl.carousel.min.js' ), array( 'jquery' ),  true);
			wp_enqueue_script( 'swipre', get_theme_file_uri( '/assets/js/jquery.swiper.min.js' ), array( 'jquery' ),  true);
			wp_enqueue_script( 'plugins', get_theme_file_uri( '/assets/js/jquery.plugins.js' ), array( 'jquery' ),  true);
			wp_enqueue_script( 'menu', get_theme_file_uri( '/assets/js/mfn.menu.js' ), array( 'jquery' ),  true);
			wp_enqueue_script( 'scripts', get_theme_file_uri( '/assets/js/scripts.js' ), array( 'jquery' ),  true);
		}

		public function celeon_custom_logo_option() {
			show_admin_bar(false);
			add_theme_support( 'custom-logo', array(

				'height'      => 248,

				'width'       => 248,

				'flex-height' => true,

			) );
			add_theme_support( 'customize-selective-refresh-widgets' );

		}

		public function celeon_custom_menu()
		{
			register_nav_menus( array(
				'main' => 'Menu Principal',
				'footer' => 'Menu Footer',
			));
		}
		public function celeon_custom_post_type_slider() {
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'post-formats', array( 'video', 'gallery' ) );

			$slide = array(

				'name' => __( 'Slider', 'slide' ),

				'singular_name' => __( 'Slider page', 'slide' ),

				'add_new' => __( 'Add New', 'slide' ),

				'add_new_item' => __( 'Add New Slider page', 'slide' ),

				'edit_item' => __( 'Edit Slider page', 'slide' ),

				'new_item' => __( 'New Slider page', 'slide' ),

				'view_item' => __( 'View Slider page', 'slide' ),

				'search_items' => __( 'Search Slider', 'slide' ),

				'not_found' => __( 'No slider found', 'slide' ),

				'not_found_in_trash' => __( 'No slider found in Trash', 'slide' ),

				'parent_item_colon' => __( 'Parent Slider page:', 'slide' ),

				'menu_name' => __( 'Slider', 'slide' ),

			);
			$args = array(

				'labels' => $slide,

				'hierarchical' => true,

				'description' => 'Your slider page front end',

				'supports' => array(  ),

				'public' => false,

				'show_ui' => true,

				'show_in_menu' => true,

				'menu_position' => 20,

				'menu_icon' => 'dashicons-format-image',

				'show_in_nav_menus' => true,

				'publicly_queryable' => true,

				'exclude_from_search' => true,

				'has_archive' => false,

				'query_var' => true,

				'can_export' => true,

				'rewrite' => true,

				'capability_type' => 'post',

				'supports' => array('title', 'thumbnail', 'editor', 'link') 

			);
			register_post_type( 'slide', $args );

			$client = array(

				'name' => __( 'Nos Clients', 'List Client' ),

				'singular_name' => __( 'client page', 'client' ),

				'add_new' => __( 'Ajouter', 'client' ),

				'add_new_item' => __( 'Ajouter Client', 'client' ),

				'edit_item' => __( 'Edition Client', 'client' ),

				'new_item' => __( 'Ajouter Client', 'client' ),

				'view_item' => __( 'Voir Client', 'client' ),

				'search_items' => __( 'Cherche Client', 'client' ),

				'not_found' => __( 'No client found', 'client' ),

				'not_found_in_trash' => __( 'No client found in Trash', 'client' ),

				'parent_item_colon' => __( 'Parent client page:', 'client' ),

				'menu_name' => __( 'Nos Clients', 'client' ),

			);
			$args = array(

				'labels' => $client,

				'hierarchical' => true,

				'description' => 'Your client page front end',

				'supports' => array(  ),

				'public' => false,

				'show_ui' => true,

				'show_in_menu' => true,

				'menu_position' => 22,

				'menu_icon' => 'dashicons-schedule',

				'show_in_nav_menus' => true,

				'publicly_queryable' => true,

				'exclude_from_search' => true,

				'has_archive' => false,

				'query_var' => true,

				'can_export' => true,

				'rewrite' => true,

				'capability_type' => 'post',

				'supports' => array('title', 'thumbnail', 'editor', 'link') 

			);
			register_post_type( 'client', $args );

		}
		public function celeon_custom_login_css() {
			echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/assets/css/custom-login-styles.css" />';
		}
		public function celeon_custom_login_url() {
			return get_bloginfo( 'url' );
		}
		public function celeon_custom_login_title() {
			return 'Your Site Name and Info';
		}
		public function celeon_custom_error_login()
		{
		    return 'Incorrect login details.';
		}
		public function celeon_custom_login_header() {
			remove_action('login_head', 'wp_shake_js', 12);
		}
		public function celeon_remove_footer_admin () 
		{
		    echo '<span id="footer-thankyou">Developed by <a href="http://www.madagascar-destination.com" target="_blank">Madagascar-destination</a></span>';
		}
		public function celeon_admin_css() {
			echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/assets/css/admin.css" />';
		}
		public function celeon_custom_role_type() {
		    add_role( 'associer', 'Associer', array(
		    	     'read' => true, // true allows this capability
					    'edit_posts' => true, // Allows user to edit their own posts
					    'edit_pages' => true, // Allows user to edit pages
					    'edit_others_posts' => false, // Allows user to edit others posts not just their own
					    'create_posts' => false, // Allows user to create new posts
					    'manage_categories' => false, // Allows user to manage post categories
					    'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
					    'manage_options' => fasle,
					'cusotom_capability_name'=>true,
		    ));
		}

			public function celeon_custom_option( $wp_customize ) {
				$wp_customize->add_panel( 'panel_id', array(

				    'priority' => 10,

				    'capability' => 'edit_theme_options',

				    'theme_supports' => '',

				    'title' => __( 'Configuration des différents séction', 'vancances' ),

				    'description' => __( 'Configuration dynamique de votre header', 'vancances' ),

				) );



				$wp_customize->add_section( 'section_id', array(

				    'priority' => 10,

				    'capability' => 'edit_theme_options',

				    'theme_supports' => '',

				    'title' => __( 'Voir les différentes options', 'vancances' ),

				    'description' => '',

				    'panel' => 'panel_id',

				) );



				$wp_customize->add_setting( 'text_field_id', array(

					'default' => '',

					'type' => 'theme_mod',

					'capability' => 'edit_theme_options',

					'transport' => '',

				) );



				$wp_customize->add_control( 'text_field_id', array(

				    'type' => 'text',

				    'priority' => 10,

				    'section' => 'section_id',

				    'label' => __( 'Nos solution', 'vancances' ),

				    'description' => '',

				) );



				$wp_customize->add_setting( 'slug_field_id', array(

					'default' => '',

					'type' => 'theme_mod',

					'capability' => 'edit_theme_options',

					'transport' => '',

				) );



				$wp_customize->add_control( 'slug_field_id', array(

				    'type' => 'text',

				    'priority' => 10,

				    'section' => 'section_id',

				    'label' => __( 'Vous êtes', 'vancances' ),

				    'description' => '',

				) );

				/*description vous êtes*/

				$wp_customize->add_setting( 'section_id_4', array(

					'default' => '',

					'type' => 'theme_mod',

					'capability' => 'edit_theme_options',

					'transport' => '',

				) );



				$wp_customize->add_control( 'section_id_4', array(

					'type' => 'text',

					'priority' => 10,

					'section' => 'section_id',

					'label' => __( 'Description vous êtes ... ', 'vancances' ),

					'description' => '',

				) );
				/*fin description vous êtes*/


				$wp_customize->add_setting( 'section_id_3', array(

					'default' => '',

					'type' => 'theme_mod',

					'capability' => 'edit_theme_options',

					'transport' => '',

				) );



				$wp_customize->add_control( 'section_id_3', array(

				    'type' => 'text',

				    'priority' => 10,

				    'section' => 'section_id',

				    'label' => __( 'Ils nous ont choisi', 'vancances' ),

				    'description' => '',

				) );

		}
		public function data_t(){
		}
 }