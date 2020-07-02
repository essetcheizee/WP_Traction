<?php
namespace Elementor;

class custom_group_content extends Widget_Base {

	public function get_name() {
		return 'Group Content';
	}
	
	public function get_title() {
		return 'Traction - Group Content';
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
				'label' => __( 'Traction - Services', 'elementor' ),
			]
        );
        
        $this->add_control(
			'title',
			[
				'label' => __( 'Title', 'elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder'   => __('Type your title here', 'elementor'),
			]
        );
        $this->add_control(
			'content',
			[
				'label' => __( 'Content', 'elementor' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'placeholder' => __( 'Type your Content here', 'elementor' ),
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
          <section class="group__content">
            <div class="mdl__wrap --py-12 --pt-50">
                <div class="group__content__wrapper">
                    <div class="group__content__heading">
                        <h2 class="title">
                           <?= $settings['title'] ?>
                        </h2>
                    </div>
                    <div class="group__content__text">
                        <p><?= $settings['content']?>
                        </p>

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
    
    <section class="group__content">
            <div class="mdl__wrap --py-12 --pt-50">
                <div class="group__content__wrapper">
                    <div class="group__content__heading">
                        <h2 class="title">
                           {{settings.title}}
                        </h2>
                    </div>
                    <div class="group__content__text">
                        <p>{{settings.content}}
                        </p>

                    </div>
                </div>
        </section>

    <?php
    }
}
