<?php
namespace Elementor;

class custom_hero_slider extends Widget_Base {

	public function get_name() {
		return 'hero_slider';
	}
	
	public function get_title() {
		return 'Traction - Hero Slider';
	}
	
	public function get_icon() {
		return 'fa fa-building';
	}
	
	public function get_categories() {
		return [ 'trc-category' ];
	}
	protected function _register_controls() {
     
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Traction - Hero Slider', 'elementor' ),
			]
        );
        $this->end_controls_section();
    
		// $this->start_controls_section(
		// 	'content_section',
		// 	[
		// 		'label' => __( 'Quality Approved Logos', 'plugin-name' ),
		// 		'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		// 	]
		// );

		// $this->add_control(
		// 	'gallery',
		// 	[
		// 		'label' => __( 'Add Images', 'plugin-domain' ),
		// 		'type' => \Elementor\Controls_Manager::GALLERY,
		// 		'default' => [],
		// 	]
		// );

		// $this->end_controls_section();

	}
	
    protected function render() {
        $settings = $this->get_settings_for_display();
       
        ?>
          <section class="hero">
          <?php 
    $args = array(
        'posts_per_page'    => 4,
        'category_name'     => 'Featured',
        'order'             => 'DESC'
    );
   $slider     = new \WP_Query($args);

    ?>
    <div class="bg-slider"></div>
<div class="featured-slider">
  
    <?php
     if ( $slider->have_posts() ) {
                while ( $slider->have_posts() ) { $slider->the_post()
            ?>

    <div class="slider">

        <div class="background">
         <?php if(has_post_thumbnail()){ ?>
                            <?php the_post_thumbnail()?>
                            <?php } ?>
        </div>

        <div class="mdl__wrap --py-12">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="title">
                        <h1 class="title-first-line">We are Traction</h1>
                    </div>
                    <div class="title">
                        <h1 class="title-second-line">We Drive Growth</h1>
                    </div>
                    <a class="arrow-link" href="<?php the_permalink( ) ?>">
                        <div class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="142.9"
                                height="44.948" viewBox="0 0 142.9 44.948">
                                <g id="Group_112" data-name="Group 112" transform="translate(-1194 -71)">
                                    <path id="Path_198" data-name="Path 198"
                                        d="M.728,75.815.647,75.9l-.081.081c-.04.04-.04.081-.081.121L.4,76.18c-.04.04-.04.081-.081.121,0,.04-.04.04-.04.081-.04.04-.04.081-.081.162,0,.04-.04.04-.04.081-.04.04-.04.121-.081.162v.04a.366.366,0,0,0-.04.2v.04c0,.081-.04.121-.04.2v.567a.365.365,0,0,0,.04.2v.04c0,.081.04.121.04.2v.04c.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.081.081.121,0,.04.04.04.081.081s.04.081.081.121l.081.081.081.081.04.04,22.51,20.081a2.438,2.438,0,0,0,3.239-3.644L8.744,80.025H58.258a2.429,2.429,0,1,0,0-4.858H8.744l17.733-15.83a2.438,2.438,0,1,0-3.239-3.644L.768,75.774A.04.04,0,0,1,.728,75.815Z"
                                        transform="translate(1194.001 15.923)" fill="#fff" />
                                    <line id="Line_1" data-name="Line 1" x2="95"
                                        transform="translate(1239.5 93.5)" fill="none" stroke="#fff"
                                        stroke-linecap="round" stroke-width="4.8" />
                                </g>
                            </svg>
                        </div>See for our <?php the_title() ?>
                    </a>
                </div>
            </div>



        </div>
    </div>

    <?php
                }
            }
            wp_reset_postdata(); ?>
</div>
<div class="hero-pagination">

<?php
 if ( $slider->have_posts() ) {
    while ( $slider->have_posts() ) { $slider->the_post();
        $index = $slider->current_post + 1;
?>

    <a href="#" class="item-pagination">
        <?php echo $index ?>

        <div class="inner-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                <g id="Ellipse_1" data-name="Ellipse 1" fill="rgba(255,255,255,0)" stroke="#707070"
                    stroke-width="2">
                    <circle cx="25" cy="25" r="25" stroke="none" />
                    <circle cx="25" cy="25" r="23.5" fill="none" />
                </g>
            </svg>

        </div>
        <div class="outer-circle">

            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                <g id="Ellipse_1" data-name="Ellipse 1" fill="rgba(255,255,255,0)" stroke="#707070"
                    stroke-width="2">
                    <circle cx="25" cy="25" r="25" stroke="none" />
                    <circle cx="25" cy="25" r="23.5" fill="none" />
                </g>
            </svg>

        </div>
    </a>

 
    <?php
                }
            }
            wp_reset_postdata(); ?>
</div>


</section>
        <?php
        
    }

    /**
     * Render the widget output in the editor.
     *
     * Written as a Backbone JavaScript template and used to generate the live preview.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    protected function _content_template() {

   
    }
}
