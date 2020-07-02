<?php
namespace Elementor;

class custom_page_description extends Widget_Base {

	public function get_name() {
		return 'Page Description';
	}
	
	public function get_title() {
		return 'Traction - Page Description';
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
			'description',
			[
				'label' => __( 'Page Description', 'elementor' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
				'placeholder' => __( 'Type your description here', 'elementor' ),
			]
        );
        $this->add_control(
			'show_arrow',
			[
				'label' => __( 'Show Arrow', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'elementor' ),
				'label_off' => __( 'Hide', 'elementor' ),
				'return_value' => 'yes',
				'default' => 'yes',
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
         <section class="page__content <?php
         	if ( 'yes' === $settings['show_arrow'] ) {
                echo '--arrow-down';
             }
        ?>">
            <div class="mdl__wrap --py-20">
                <h1 class="page__content__title"><?= $settings['description'] ?></h1>
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
