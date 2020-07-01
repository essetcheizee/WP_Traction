<?php
namespace Elementor;

class custom_click_desc extends Widget_Base {

	public function get_name() {
		return 'click_desc';
	}
	
	public function get_title() {
		return 'Traction - Click Description';
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
				'label' => __( 'Traction - Click Description', 'elementor' ),
			]
        );
        
        $this->add_control(
			'website_link',
			[
				'label' => __( 'Website Link', 'elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Type your link here', 'elementor' ),
			]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
			'description',
			[
				'label' => __( 'Description', 'elementor' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Type your description here', 'elementor' ),
			]
        );
        $repeater->add_control(
            'toggle_title',
            [
                'label' => __('Title', 'elementor'),
                'type'  =>\Elementor\Controls_Manager::TEXT,
                'placeholder'   => __('Type the toggle title here', 'elementor')
            ]
            );
            $this->add_control(
                'list',
                [
                    'label' => __( 'Repeater List', 'plugin-domain' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'title_field' => '{{{ toggle_title }}}',
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
        
        <section class="click-description">
            <div class="mdl__wrap --py-12">


                <div class="description-list">
                    <ul>
                        <?php if ( $settings['list'] ) {  $i = 1;?>
                           
                            <?php foreach (  $settings['list'] as $item ) {?>
                                <li data-target="<?php echo $i++?>">
                                    <p><?= $item['description']?></p>
                                </li>
                            <?php } }?>
                    </ul>

                    <a class="arrow-link" href="<?= $settings['website_link'] ?>">
                        <div class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="142.9" height="44.948"
                                viewBox="0 0 142.9 44.948">
                                <g id="Group_112" data-name="Group 112" transform="translate(-1194 -71)">
                                    <path id="Path_198" data-name="Path 198"
                                        d="M.728,75.815.647,75.9l-.081.081c-.04.04-.04.081-.081.121L.4,76.18c-.04.04-.04.081-.081.121,0,.04-.04.04-.04.081-.04.04-.04.081-.081.162,0,.04-.04.04-.04.081-.04.04-.04.121-.081.162v.04a.366.366,0,0,0-.04.2v.04c0,.081-.04.121-.04.2v.567a.365.365,0,0,0,.04.2v.04c0,.081.04.121.04.2v.04c.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.081.081.121,0,.04.04.04.081.081s.04.081.081.121l.081.081.081.081.04.04,22.51,20.081a2.438,2.438,0,0,0,3.239-3.644L8.744,80.025H58.258a2.429,2.429,0,1,0,0-4.858H8.744l17.733-15.83a2.438,2.438,0,1,0-3.239-3.644L.768,75.774A.04.04,0,0,1,.728,75.815Z"
                                        transform="translate(1194.001 15.923)" fill="#fff" />
                                    <line id="Line_1" data-name="Line 1" x2="95" transform="translate(1239.5 93.5)"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4.8" />
                                </g>
                            </svg>
                        </div>Visit Website
                    </a>
                </div>

                <div class="description-toggle">
                    <ul>
                        <?php if ( $settings['list'] ) { $i = 1;?>
                            <?php foreach (  $settings['list'] as $item ) {?>
                                <li>
                                    <a href="#" data-target="<?php echo $i++?>"><?= $item['toggle_title']?></a>
                                </li>
                            <?php } }?>
                    </ul>
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
          <section class="click-description">
            <div class="mdl__wrap --py-12">


                <div class="description-list">
                    <ul>
                    <# if ( settings.list.length ) { #>
                           <?php $i = 1; ?> 
                        <# _.each( settings.list, function( item ) { #>
                                <li data-target="<?php echo $i++?>">
                                    <p>{{item.description}}</p>
                                </li>
                                <# }); } #>
                    </ul>

                    <a class="arrow-link" href="{{settings.website_link}}">
                        <div class="svg-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="142.9" height="44.948"
                                viewBox="0 0 142.9 44.948">
                                <g id="Group_112" data-name="Group 112" transform="translate(-1194 -71)">
                                    <path id="Path_198" data-name="Path 198"
                                        d="M.728,75.815.647,75.9l-.081.081c-.04.04-.04.081-.081.121L.4,76.18c-.04.04-.04.081-.081.121,0,.04-.04.04-.04.081-.04.04-.04.081-.081.162,0,.04-.04.04-.04.081-.04.04-.04.121-.081.162v.04a.366.366,0,0,0-.04.2v.04c0,.081-.04.121-.04.2v.567a.365.365,0,0,0,.04.2v.04c0,.081.04.121.04.2v.04c.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.081.081.121,0,.04.04.04.081.081s.04.081.081.121l.081.081.081.081.04.04,22.51,20.081a2.438,2.438,0,0,0,3.239-3.644L8.744,80.025H58.258a2.429,2.429,0,1,0,0-4.858H8.744l17.733-15.83a2.438,2.438,0,1,0-3.239-3.644L.768,75.774A.04.04,0,0,1,.728,75.815Z"
                                        transform="translate(1194.001 15.923)" fill="#fff" />
                                    <line id="Line_1" data-name="Line 1" x2="95" transform="translate(1239.5 93.5)"
                                        fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4.8" />
                                </g>
                            </svg>
                        </div>Visit Website
                    </a>
                </div>

                <div class="description-toggle">
                    <ul>
                    <# if ( settings.list.length ) { #>
                           <?php $i = 1;?>
                           <# _.each( settings.list, function( item ) { #>
                                <li>
                                    <a href="#" data-target="<?php echo $i++?>">{{item.toggle_title}}</a>
                                </li>
                                <# }); } #>
                    </ul>
                </div>

            </div>
        </section>



    <?php
    }
}
