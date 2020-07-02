<?php
namespace Elementor;

class custom_post_image extends Widget_Base {

	public function get_name() {
		return 'Post Image';
	}
	
	public function get_title() {
		return 'Traction - Post Image';
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
				'label' => __( 'Traction - Page Description', 'elementor' ),
			]
        );
        $this->add_control(
			'image_position',
			[
				'label' => __( 'Image Position', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '--center',
				'options' => [
					'--center'  => __( 'Center', 'elementor' ),
					'--left' => __( 'Left', 'elementor' ),
					'--right' => __( 'Right', 'elementor' ),
					
				],
			]
		);
        $this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
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
         <section class="preview <?= $settings['image_position']?>">

            <div class="mdl__wrap">
                <div class="img-wrapper">
                    <img src="<?= $settings['image']['url'] ?>" alt="">
                </div>
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
     <section class="preview {{settings.image_position}}">

<div class="mdl__wrap">
    <div class="img-wrapper">
        <img src="{{settings.image.url}}" alt="">
    </div>
</div>

</section>


    <?php
    }
}
