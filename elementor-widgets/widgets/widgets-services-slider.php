<?php
namespace Elementor;

class custom_services_slider extends Widget_Base {

	public function get_name() {
		return 'Slider';
	}
	
	public function get_title() {
		return 'Traction - Service Slider';
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
				'label' => __( 'Traction - Slider', 'elementor' ),
			]
        );
        

        $this->add_control(
			'title',
			[
				'label' => __( 'Title', 'elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Type your title here', 'elementor' ),
			]
        );
        

        $repeater = new \Elementor\Repeater();
        
        $repeater->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $repeater->add_control(
            'item_title',
            [
                'label' => __('Item Title', 'elementor'),
                'type'  =>\Elementor\Controls_Manager::TEXT,
                'placeholder'   => __('Type the title here', 'elementor')
            ]
            );
            
        $repeater->add_control(
            'item_content',
            [
                'label' => __('Item Content', 'elementor'),
                'type'  =>\Elementor\Controls_Manager::TEXTAREA,
                'rows'  => 5,
                'placeholder'   => __('Type the content here', 'elementor')
            ]
            );
            $this->add_control(
                'list',
                [
                    'label' => __( 'Repeater List', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'title_field' => '{{{ item_title }}}',
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
          <div class="circle">
            <div class="left"></div>
            <div class="right"></div>
        </div>
           <section class="services">
            <div class="--py-12">

                <div class="mdl__wrap">
                    <h2><?= $settings['title']?>
                    </h2>
                </div>

                <div class="services__slider">
                    <?php if ( $settings['list'] ) { 
                            foreach (  $settings['list'] as $item ) {
                        
                        ?>
                                <div class="services__slider__item">

                                    <div class="services__slider__item__img">
                                        <img src="<?= $item['image']['url'] ?>">
                                    </div>

                                    <div class="services__slider__item__content">
                                        <h4><?= $item['item_title']?></h4>
                                        <p><?= $item['item_content']?></p>
                                    </div>
                   

                                </div>
                    <?php
                            }}
                    ?>
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
      <div class="circle">
            <div class="left"></div>
            <div class="right"></div>
        </div>
      <section class="services">
            <div class="--py-12">

                <div class="mdl__wrap">
                    <h2>{{settings.title}}
                    </h2>
                </div>

                <div class="services__slider">
                    <# if ( settings.list.length ) { #>
                        <# _.each( settings.list, function( item ) { #>
                                <div class="services__slider__item">

                                    <div class="services__slider__item__img">
                                        <img src="{{item.image.url}}">
                                    </div>

                                    <div class="services__slider__item__content">
                                        <h4>{{item.item_title}}</h4>
                                        <p>{{item.item_content}}</p>
                                    </div>


                                </div>
                        <# }); #>
                    <# } #>
                </div>

            </div>
        </section>

    <?php
    }
}
