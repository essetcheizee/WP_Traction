<?php

class My_Elementor_Widgets {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static;
		}
		return static::$instance;
	}
	

	protected function __construct() {
        // require_once( get_theme_file_path( '/elementor-widget/widgets/widget-header.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-description.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-testimonials.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-header.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-footer.php' ) );
        // require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-services.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-page-description.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-strategy.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-group-content.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-services-slider.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-hero-slider.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-featured-projects.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-post-image.php' ) );
        require_once( get_theme_file_path( '/elementor-widgets/widgets/widgets-click-description.php' ) );



       	add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
		add_action( 'elementor/elements/categories_registered', [$this, 'add_elementor_widget_categories'], 1);
	}

	public function register_widgets() {
        // \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Transmission_Header() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_description() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_testimonials() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_header() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_footer() );
        // \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_services() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_page_description() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_strategy() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_group_content() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_services_slider() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_hero_slider() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_featured_projects() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_post_image() );
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\custom_click_desc() );
      
      
      	}
	
   
	public function add_elementor_widget_categories( $elements_manager ) {
                 //add our categories
            $category_prefix = 'trc-';
		$elements_manager->add_category(
			$category_prefix.'category',
			[
				'title' => __( 'Traction Widgets', 'elementor' ),
				'icon' => 'fa fa-plug',
			]
                );
                $reorder_cats = function() use($category_prefix){
                        uksort($this->categories, function($keyOne, $keyTwo) use($category_prefix){
                            if(substr($keyOne, 0, 4) == $category_prefix){
                                return -1;
                            }
                            if(substr($keyTwo, 0, 4) == $category_prefix){
                                return 1;
                            }
                            return 0;
                        });
        
                    };
                    $reorder_cats->call($elements_manager);
	
        }
	
}

add_action( 'init', 'my_elementor_init' );
function my_elementor_init() {
	My_Elementor_Widgets::get_instance();
}