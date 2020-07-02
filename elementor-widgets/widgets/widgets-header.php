<?php
namespace Elementor;

class custom_header extends Widget_Base {

	public function get_name() {
		return 'Header';
	}
	
	public function get_title() {
		return 'Traction - Header';
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
				'label' => __( 'Traction - Header', 'elementor' ),
			]
        );
        
        $this->add_control(
			'title',
			[
				'label' => __( 'Title', 'elementor' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder'   => __('Type your title here', 'elementor'),
			]
        );
        
        // $this->add_control(
		// 	'contact',
		// 	[
		// 		'label' => __( 'Contact Number', 'elementor' ),
        //         'type' => \Elementor\Controls_Manager::TEXT,
        //         'placeholder'   => __('Type your title here', 'elementor'),
		// 	]
        // );
        
        // $this->add_control(
		// 	'mail',
		// 	[
		// 		'label' => __( 'Email or Website', 'elementor' ),
        //         'type' => \Elementor\Controls_Manager::TEXT,
        //         'placeholder'   => __('Type your title here', 'elementor'),
		// 	]
		// );
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
        global $post;
       
        ?>
 
 <a class="branding --header" href="<?php echo home_url() ?>">
        <div class="svg-wrapper --header">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34.971" viewBox="0 0 35 34.971">
                <g id="Page-1" transform="translate(0 -0.029)">
                    <g id="Homepage-V2" transform="translate(-77 -5000)">
                        <g id="TractionGrey" transform="translate(77 5000)">
                            <path id="Fill-1"
                                d="M0,25.987,8.769,35,17.5,26.026v-.078l.038.039-.038.039L26.231,35,35,25.987,17.5,8Z"
                                fill="#24d6df" fill-rule="evenodd" />
                            <path id="Fill-2" d="M17,27.159l.08-.08L17,27Z" fill-rule="evenodd" />
                            <g id="Group-22" transform="translate(17)">
                                <path id="Fill-18" d="M.1,8.749l8.651,8.756,8.613-8.719L8.717.029.1,8.749V26.264h0Z"
                                    fill="#f497b9" fill-rule="evenodd" />
                                <path id="Fill-20" d="M8.755,17.506.1,26.264V8.749Z" fill="#2e3b95"
                                    fill-rule="evenodd" />
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <span class="brand-text"><?= $settings['title']?></span>
    </a>

    <div class="menus-wrapper">
        <a class="toggle-menu open">

            <span>Menu</span>
            <div class="svg-wrapper">
                <svg width="37px" height="17px" viewBox="0 0 37 17" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                        stroke-linecap="square">
                        <g id="Homepage-V2" transform="translate(-1349.000000, -55.000000)" fill-rule="nonzero"
                            stroke="#FFFFFF" stroke-width="2">
                            <g id="Group" transform="translate(1350.000000, 55.000000)">
                                <line x1="0.7" y1="1.8" x2="34.3" y2="1.8" id="Line"></line>
                                <line x1="0.7" y1="8.7" x2="34.3" y2="8.7" id="Line-Copy"></line>
                                <line x1="0.7" y1="15.9" x2="34.3" y2="15.9" id="Line-Copy-2"></line>
                            </g>
                        </g>
                    </g>
                </svg>

            </div>

        </a>
        <a class="toggle-menu close" class="close">
            <span>Close</span>
            <div class="svg-wrapper">
                <img src="<?=  get_template_directory_uri();?>/assets/img/close.png" alt="">

            </div>
        </a>
    </div>


    <div class="navigation">
        <div class="overlay"></div>


        <div class="navigation__wrapper">

            <div class="navigation__links">
            <?php 
        
                if(has_nav_menu( 'header_menu' )){
                    
                    wp_nav_menu( [

                        'theme_location'    => 'header_menu',
                        'container'         => false,
                        'fallback_cb'       => false,
                        'depth'             => 0,
            
                    ] );
                    
                }
                
        ?>
            </div>

            <div class="navigation__wrapper__inner --py-5">
                <div class="navigation__contact">
                <?php
                            if(has_nav_menu('contacts')){
                                wp_nav_menu( [
                                    'theme_location'    => 'contacts',
                                    'container'         => false,
                                    'fallback_cb'       => false,
                                    'depth'             => 0,
                                    'menu_class'        => 'contact-list'
                                ] );
                            }
                        ?>
                </div>
                <div class="navigation__social">
                <ul>
                    <?php if(!empty(get_the_author_meta('facebook', $post->post_author))){ ?>
                        <li><a href="<?= the_author_meta('facebook', $post->post_author) ?>">
                                <div class="svg-wrapper">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0" />
                                    </svg>
                                </div>
                            </a></li>
                    <?php } ?>
                    <?php if(!empty(get_the_author_meta('facebook', $post->post_author))){ ?>
                        <li><a href="<?= the_author_meta('facebook', $post->post_author) ?>">
                                <div class="svg-wrapper">
                                    <svg height="512pt" viewBox="0 0 512 512" width="512pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-293.464844 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0" />
                                    </svg>
                                </div>
                            </a></li>
                    <?php } ?>
                    <?php if(!empty(get_the_author_meta('facebook', $post->post_author))){ ?>
                        <li><a href="<?= the_author_meta('facebook', $post->post_author) ?>">
                                <div class="svg-wrapper">
                                    <svg height="511pt" viewBox="0 0 511 511.9" width="511pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0" />
                                        <path
                                            d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0" />
                                        <path
                                            d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0" />
                                    </svg>
                                </div>
                            </a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
        global $post;

    ?>
    
    
    <a class="branding --header">
        <div class="svg-wrapper --header">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34.971" viewBox="0 0 35 34.971">
                <g id="Page-1" transform="translate(0 -0.029)">
                    <g id="Homepage-V2" transform="translate(-77 -5000)">
                        <g id="TractionGrey" transform="translate(77 5000)">
                            <path id="Fill-1"
                                d="M0,25.987,8.769,35,17.5,26.026v-.078l.038.039-.038.039L26.231,35,35,25.987,17.5,8Z"
                                fill="#24d6df" fill-rule="evenodd" />
                            <path id="Fill-2" d="M17,27.159l.08-.08L17,27Z" fill-rule="evenodd" />
                            <g id="Group-22" transform="translate(17)">
                                <path id="Fill-18" d="M.1,8.749l8.651,8.756,8.613-8.719L8.717.029.1,8.749V26.264h0Z"
                                    fill="#f497b9" fill-rule="evenodd" />
                                <path id="Fill-20" d="M8.755,17.506.1,26.264V8.749Z" fill="#2e3b95"
                                    fill-rule="evenodd" />
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <span class="brand-text">{{settings.title}}</span>
    </a>

    <div class="menus-wrapper">
        <a class="toggle-menu open">

            <span>Menu</span>
            <div class="svg-wrapper">
                <svg width="37px" height="17px" viewBox="0 0 37 17" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                        stroke-linecap="square">
                        <g id="Homepage-V2" transform="translate(-1349.000000, -55.000000)" fill-rule="nonzero"
                            stroke="#FFFFFF" stroke-width="2">
                            <g id="Group" transform="translate(1350.000000, 55.000000)">
                                <line x1="0.7" y1="1.8" x2="34.3" y2="1.8" id="Line"></line>
                                <line x1="0.7" y1="8.7" x2="34.3" y2="8.7" id="Line-Copy"></line>
                                <line x1="0.7" y1="15.9" x2="34.3" y2="15.9" id="Line-Copy-2"></line>
                            </g>
                        </g>
                    </g>
                </svg>

            </div>

        </a>
        <a class="toggle-menu close" class="close">
            <span>Close</span>
            <div class="svg-wrapper">
                <img src="<?=  get_template_directory_uri();?>/assets/img/close.png" alt="">

            </div>
        </a>
    </div>


    <div class="navigation">
        <div class="overlay"></div>


        <div class="navigation__wrapper">

            <div class="navigation__links">
            <?php 
        
                if(has_nav_menu( 'header_menu' )){
                    
                    wp_nav_menu( [

                        'theme_location'    => 'header_menu',
                        'container'         => false,
                        'fallback_cb'       => false,
                        'depth'             => 0,
            
                    ] );
                    
                }
                
        ?>
            </div>

            <div class="navigation__wrapper__inner --py-5">
                <div class="navigation__contact">
                <?php
                            if(has_nav_menu('contacts')){
                                wp_nav_menu( [
                                    'theme_location'    => 'contacts',
                                    'container'         => false,
                                    'fallback_cb'       => false,
                                    'depth'             => 0,
                                    'menu_class'        => 'contact-list'
                                ] );
                            }
                        ?>
                </div>
                <div class="navigation__social">
                    <ul>
                    <?php if(!empty(get_the_author_meta('facebook', $post->post_author))){ ?>
                        <li><a href="<?= the_author_meta('facebook', $post->post_author) ?>">
                                <div class="svg-wrapper">
                                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0" />
                                    </svg>
                                </div>
                            </a></li>
                    <?php } ?>
                    <?php if(!empty(get_the_author_meta('facebook', $post->post_author))){ ?>
                        <li><a href="<?= the_author_meta('facebook', $post->post_author) ?>">
                                <div class="svg-wrapper">
                                    <svg height="512pt" viewBox="0 0 512 512" width="512pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-293.464844 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0" />
                                    </svg>
                                </div>
                            </a></li>
                    <?php } ?>
                    <?php if(!empty(get_the_author_meta('facebook', $post->post_author))){ ?>
                        <li><a href="<?= the_author_meta('facebook', $post->post_author) ?>">
                                <div class="svg-wrapper">
                                    <svg height="511pt" viewBox="0 0 511 511.9" width="511pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0" />
                                        <path
                                            d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0" />
                                        <path
                                            d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0" />
                                    </svg>
                                </div>
                            </a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <?php
    }
}
