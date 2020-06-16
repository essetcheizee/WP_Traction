<?php
namespace Elementor;

class custom_featured_projects extends Widget_Base {

	public function get_name() {
		return 'featured_projects';
	}
	
	public function get_title() {
		return 'Traction - Featured Projects';
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
				'label' => __( 'Traction - Featured Projects', 'elementor' ),
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
        <section class="featured mdl__wrap --py-12">
            <div class="section-heading">
                <h2>Selected Projects</h2>
            </div>
            
            <div class="featured-box">
            <?php 
                $args = array(
                    'posts_per_page'    => 6,
                    'category_name'     => 'Featured'
                );
               $slider     = new \WP_Query($args);
               if ( $slider->have_posts() ) {
                while ( $slider->have_posts() ) { $slider->the_post();
            ?>      
                    <a href="<?php the_permalink() ?>" class="box <?php 
                    $x = $slider->current_post + 1;
                    if($x == 1 || $x == 6){
                        echo 'short';
                    }else{
                        echo ' ';
                    } ?>">
                        <div class="featured__image">
                        <?php if(has_post_thumbnail()){ ?>
                            <?php the_post_thumbnail('full')?>
                            <?php } ?>
                        </div>
                        <div class="featured__content">
                            <h2 class="title"><?php the_title() ?></h2>
                            <div class="paragraph"><?php the_excerpt() ?></div>
                        </div>
                    </a>
            <?php
                    }
                }
                wp_reset_postdata();
            ?>
            
            <div class="clear"></div>
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

    ?>
       <section class="featured mdl__wrap --py-12">
            <div class="section-heading">
                <h2>Selected Projects</h2>
            </div>
            
            <div class="featured-box">
            <?php 
                $args = array(
                    'posts_per_page'    => 6,
                    'category_name'     => 'Featured',
                    'order'             => 'ASC'
                );
               $slider     = new \WP_Query($args);
               if ( $slider->have_posts() ) {
                while ( $slider->have_posts() ) { $slider->the_post();
            ?>      
                    <a href="<?php the_permalink() ?>" class="box <?php 
                    $x = $slider->current_post + 1;
                    if($x == 1 || $x == 6){
                        echo 'short';
                    }else{
                        echo ' ';
                    } ?>">
                        <div class="featured__image">
                        <?php if(has_post_thumbnail()){ ?>
                            <?php the_post_thumbnail()?>
                            <?php } ?>
                        </div>
                        <div class="featured__content">
                            <h2 class="title"><?php the_title() ?></h2>
                            <div class="paragraph"><?php the_excerpt() ?></div>
                        </div>
                    </a>
            <?php
                    }
                }
                wp_reset_postdata();
            ?>
            
            <div class="clear"></div>
            </div>
        </section>



    <?php
    }
}
