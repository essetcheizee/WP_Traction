<?php
namespace Elementor;

class custom_strategy extends Widget_Base {

	public function get_name() {
		return 'Strategy';
	}
	
	public function get_title() {
		return 'Traction - Strategy';
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
				'label' => __( 'Traction - Strategy', 'elementor' ),
			]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'elementor'),
                'type'  =>\Elementor\Controls_Manager::TEXT,
                'placeholder'   => __('Type your title here', 'elementor')
            ]
            );
            $this->add_control(
                'top_image',
                [
                    'label' => __( 'Choose Image', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $this->add_control(
                'bottom_image',
                [
                    'label' => __( 'Choose Image', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            $this->add_control(
                'crawl',
                [
                    'label' => __('Crawl', 'elementor'),
                    'type'  =>\Elementor\Controls_Manager::TEXTAREA,
                    'placeholder'   => __('Type your description here', 'elementor')
                ]
                );
            $this->add_control(
            'walk',
            [
                'label' => __('Walk', 'elementor'),
                'type'  =>\Elementor\Controls_Manager::TEXTAREA,
                'placeholder'   => __('Type your description here', 'elementor')
            ]
            );
            $this->add_control(
            'run',
            [
                'label' => __('Run', 'elementor'),
                'type'  =>\Elementor\Controls_Manager::TEXTAREA,
                'placeholder'   => __('Type your description here', 'elementor')
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
        <section class="strategy">

            <div class="overlay__image__top">
                <img src="<?= $settings['top_image']['url']?>">
            </div>

            <div class="overlay__text">
                <h1><?= $settings['title']?></h1>
            </div>

            <div class="strategy__section">

                <div class="mdl__wrap --py-12">

                    <div class="strategy__section --wrapper">


                        <div class="strategy__section__steps">
                            <ul>
                                <li class="active" data-order="order1"><a href="javascript:void(0)">Crawl</a></li>
                                <li data-order="order2"><a href="javascript:void(0)">Walk</a></li>
                                <li data-order="order3"><a href="javascript:void(0)">Run</a></li>
                            </ul>
                        </div>

                        <div class="strategy__section__description">
                            <ul>
                                <li class="active" id="crawl" data-order="order1">
                                    <h3>Crawl</h3>
                                    <p><?= $settings['crawl'] ?></p>
                                </li>
                                    <h3>Walk</h3>
                                <li id="walk"  data-order="order2">
                                    <p><?= $settings['walk']?></p>
                                </li>
                                <li id="run"  data-order="order3">
                                    <h3>Run</h3>
                                    <p><?= $settings['run'] ?></p>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

            <div class="overlay__image__bottom">
                <img src="<?= $settings['bottom_image']['url']?>">
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
        <section class="strategy">

            <div class="overlay__image__top">
                <img src="{{settings.top_image.url}}">
            </div>

            <div class="overlay__text">
                <h1>{{settings.title}}</h1>
            </div>

            <div class="strategy__section">

                <div class="mdl__wrap --py-12">

                    <div class="strategy__section --wrapper">


                        <div class="strategy__section__steps">
                            <ul>
                                <li class="active" data-order="order1"><a href="javascript:void(0)">Crawl</a></li>
                                <li data-order="order2"><a href="javascript:void(0)">Walk</a></li>
                                <li data-order="order3"><a href="javascript:void(0)">Run</a></li>
                            </ul>
                        </div>

                        <div class="strategy__section__description">
                            <ul>
                                <li class="active" id="crawl" data-order="order1">
                                    <h3>Crawl</h3>
                                    <p>{{settings.crawl}}</p>
                                </li>
                                <li id="walk"  data-order="order2">
                                    <h3>Walk</h3>
                                    <p>{{settings.walk}}</p>
                                </li>
                                <li id="run"  data-order="order3">
                                    <h3>Run</h3>
                                    <p>{{settings.run}}</p>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

            <div class="overlay__image__bottom">
                <img src="{{settings.bottom_image.url}}">
            </div>

        </section>

    <?php
    }
}
