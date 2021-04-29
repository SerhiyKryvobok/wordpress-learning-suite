<?php
	
	add_action('after_setup_theme', function(){
		
		register_nav_menus([
			'header-menu' => 'Top',
			'mainpage-menu' => 'MainTop',
			'footer-menu' => 'Bottom'
		]);
		
	});
	
	function themename_custom_header_setup() {
		$args = array(
			//Default header image
			'default-image' 		=> get_template_directory_uri() . '/images/header.jpg',
			// Display the header text along with image
			'header-text' 			=> false,
			'default-text-color' 	=> '000',
			'width'					=> 500,
			'height'				=> 198,
			//image random rotation
			'random-default'		=> false,
			//enable upload image file in admin
			'uploads'				=> false,
			//function to be called in preview page head section
			'admin-head-callback'	=> 'adminhead_cb',
			//function to produce preview markup in the admin screen
			'admin-preview-callback'=> 'adminpreview_cb',
		);
		add_theme_support( 'custom-header', $args );

	}
	add_action( 'after_setup_theme', 'themename_custom_header_setup' );
	
	add_action('wp_enqueue_scripts', function(){
		
		/*if ( is_page_template('mogo-page-template.php') ) {

			wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );

			wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/mogo.css');

			wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
			
			wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' );

			wp_enqueue_script( 'newscript', get_template_directory_uri() . '/assets/js/mogo.js' );

		} elseif ( is_page_template('activebox-page-template.php') ) {

			wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/activebox.css');

		} else {

			wp_enqueue_style('style', get_stylesheet_uri());

		}*/

		switch (get_page_template_slug(get_queried_object_id())) {

			case 'mogo-page-template.php':
				wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );

				wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/mogo.css');

				wp_deregister_script( 'jquery' );

				wp_register_script( 'jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );

				wp_enqueue_script( 'jquery' );

				//wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
				
				wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' );

				wp_enqueue_script( 'newscript', get_template_directory_uri() . '/assets/js/mogo.js' );

			case 'activebox-page-template.php':

				wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );

				wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/activebox.css');

				wp_enqueue_script( 'jquery' );

				wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' );

				wp_enqueue_script( 'activebox_script', get_template_directory_uri() . '/assets/js/activebox.js');
				
			default: 

				wp_enqueue_style('style', get_stylesheet_uri());

		}
		
	});
	
	add_filter('show_admin_bar', '__return_false');
?>