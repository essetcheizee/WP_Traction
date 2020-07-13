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
 <div class="traction__header">
 <a class="branding --header" href="<?php echo home_url() ?>">
        <div class="svg-wrapper --header">
        <svg width="175px" height="35px" viewBox="0 0 175 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Homepage-V2" transform="translate(-45.000000, -49.000000)">
            <g id="TractionGrey" transform="translate(45.000000, 49.000000)">
                <polygon id="Fill-1" fill="#24D6DF" points="0 25.9869301 8.7690441 35 17.49994 26.0261399 17.49994 25.9477203 17.5380882 25.9869301 17.49994 26.0261399 26.2309559 35 35 25.9869301 17.49994 8"></polygon>
                <polygon id="Fill-2" fill="#000000" points="17 27.15875 17.0795 27.07925 17 27"></polygon>
                <g id="Group-22" transform="translate(17.000000, 0.000000)">
                    <path d="M55.9704369,19.4484826 C54.8213977,19.0720532 53.5369685,18.9010906 51.8133504,18.9010906 C48.7377266,18.9010906 46.2365631,21.0223694 46.2365631,24.6148617 L46.2365631,34.5029013 L42.5526313,34.5029013 L42.5526313,15.6849079 L46.1691049,15.6849079 L46.1691049,18.9010906 C46.6759887,16.7798117 49.5150352,15.2743339 52.489235,15.2743339 C54.1791239,15.2743339 55.1931283,15.4454164 55.9704369,15.6506435 L55.9704369,19.4484826 Z" id="Fill-4" fill="#FFFFFF"></path>
                    <path d="M66.9890476,25.6755131 C64.7244615,25.7097775 62.7979952,25.949269 61.4798369,26.7361525 C60.6687991,27.2152553 60.2293736,28.0021388 60.2293736,28.9258404 C60.2293736,29.6786991 60.3645268,30.2602357 60.8716473,30.7393385 C61.5475319,31.3892842 62.9671143,31.8341226 64.7921565,31.8341226 C66.5158929,31.8341226 67.8340512,31.5946311 69.1858203,30.8076277 C69.9632473,30.3286448 70.808251,29.3022697 71.0109808,27.7969117 C71.1124049,27.044053 71.1461341,26.2571695 71.1461341,25.9150046 C69.72667,25.7439221 68.3747825,25.6412487 66.9890476,25.6755131 L66.9890476,25.6755131 Z M71.517983,34.5029132 C71.3489823,34.5029132 71.0786758,33.373745 71.1124049,32.1078785 C69.9970948,33.5790919 67.9015095,34.7081403 63.8119996,34.7081403 C59.3506408,34.7081403 56.6804767,32.894762 56.5791709,29.8155171 C56.5791709,29.5760257 56.5454418,29.1311873 56.5791709,28.7890223 C56.6804767,25.7439221 59.2153692,23.1095157 65.7723134,22.9725778 C67.3946256,22.9383134 69.1182437,23.0068422 71.0448283,23.2120693 C71.0448283,22.7330863 71.0448283,21.7751203 70.9771333,21.1250549 C70.808251,19.3115567 69.3210919,18.3878551 66.2117389,18.3878551 C64.1500011,18.3878551 62.8318427,18.7300201 61.9868391,19.5169036 C61.2432596,20.2012335 60.9729531,21.0223814 60.9729531,22.0146118 L57.4917512,22.0146118 C57.4917512,20.6460719 58.0324825,19.003776 58.8436386,18.0799546 C60.2969502,16.1981673 62.6289945,15.2743459 66.1440439,15.2743459 C71.5518305,15.2743459 74.2217579,17.3614801 74.4583353,20.3723159 C74.5260302,21.2960175 74.5936069,23.9989528 74.5598777,25.4360216 C74.5260302,26.6335989 74.5260302,29.3022697 74.5260302,30.6024007 C74.5260302,32.0394694 74.6611835,34.0580749 74.8977608,34.5029132 L71.517983,34.5029132 Z" id="Fill-6" fill="#FFFFFF"></path>
                    <path d="M92.5399218,22.7330743 C92.5399218,22.0830089 92.2696153,20.8855514 91.6273416,20.2012215 C90.7147613,19.2089911 89.1600256,18.5589256 86.8279813,18.5589256 C84.6987852,18.5589256 83.2792027,19.1063177 82.1638926,20.2012215 C81.0823116,21.2618609 80.6430044,23.0068302 80.6430044,25.0938447 C80.6430044,27.3520614 81.0823116,29.0627663 82.2314692,30.1234057 C83.2454736,31.1156361 84.8002093,31.6288835 86.9294054,31.6288835 C89.1939915,31.6288835 90.6471847,30.9445536 91.5260358,30.0891413 C92.2357678,29.4049312 92.5399218,28.4468454 92.6074984,27.7283709 L96.1224295,27.7283709 C96.0548529,29.3706668 95.4126975,31.1840451 93.9932334,32.5184405 C92.573651,33.8869804 90.2416066,34.8108018 86.8279813,34.8108018 C83.7186283,34.8108018 81.4203131,34.0580629 79.7304242,32.5184405 C77.9391112,30.9102892 76.9589543,28.5153742 76.9589543,25.0254356 C76.9589543,21.9119264 77.8715345,19.551156 79.4599994,17.9431246 C81.2513124,16.1638909 83.6847808,15.2400695 87.1322536,15.2400695 C91.2554926,15.2400695 93.6552319,16.6428739 95.210086,19.1063177 C95.9873946,20.3380396 96.1224295,21.9119264 96.1224295,22.7330743 L92.5399218,22.7330743 Z" id="Fill-8" fill="#FFFFFF"></path>
                    <path d="M103.456706,18.8668262 L103.456706,28.7548657 C103.456706,30.9102892 104.30171,31.457801 106.363447,31.457801 C107.107027,31.457801 108.391219,31.3551276 108.932069,31.2524541 L108.932069,34.3660832 C108.154642,34.5713103 106.600025,34.7081283 105.011442,34.7081283 C102.037242,34.7081283 99.7727742,33.5790799 99.7727742,29.8839142 L99.7727742,18.8668262 L96.6294554,18.8668262 L96.6294554,15.6849079 L99.7051976,15.6849079 C99.8403508,15.411152 99.8741983,11.6817219 99.8741983,11.6817219 L103.389248,11.6475773 L103.389248,15.6849079 L109.134917,15.6849079 L109.134917,18.8668262 L103.456706,18.8668262 Z" id="Fill-10" fill="#FFFFFF"></path>
                    <path d="M111.703373,34.5028773 C111.568102,34.4344683 111.466796,34.0238943 111.466796,32.7921724 L111.466796,15.6848839 L115.150728,15.6848839 L115.150728,32.689499 C115.150728,33.9212209 115.218304,34.4002039 115.319729,34.5028773 L111.703373,34.5028773 Z M111.365372,13.2898492 L115.25227,13.2898492 L115.25227,9.04729145 L111.365372,9.04729145 L111.365372,13.2898492 Z" id="Fill-12" fill="#FFFFFF"></path>
                    <path d="M133.06355,20.2011856 C132.049664,19.1748105 130.427352,18.4904807 128.027613,18.4904807 C125.695568,18.4904807 124.17468,19.2432196 123.093099,20.4406771 C121.943942,21.7066634 121.673635,23.3146948 121.673635,25.0596641 C121.673635,27.2152074 122.14679,28.8232388 123.025523,29.8154692 C124.17468,31.0814555 125.796992,31.6972566 128.061342,31.6972566 C130.190775,31.6972566 131.914393,31.0471911 132.962245,29.8154692 C133.908554,28.7548298 134.415556,27.1467984 134.415556,25.0596641 C134.415556,23.1094677 134.111402,21.330234 133.06355,20.2011856 M135.463171,32.0051571 C133.80713,33.7843908 131.339932,34.8450303 128.027613,34.8450303 C124.749141,34.8450303 122.214366,33.8869445 120.49063,32.0736859 C118.969742,30.4313901 118.023314,28.2074378 118.023314,25.0255195 C118.023314,22.2883198 118.834589,19.893285 120.524478,18.1141711 C122.112942,16.4033464 124.512563,15.2400336 128.061342,15.2400336 C131.542544,15.2400336 133.942283,16.3007928 135.564595,18.0114977 C137.254484,19.756467 137.998064,22.2199108 137.998064,25.0255195 C137.998064,28.0363553 137.051754,30.3287166 135.463171,32.0051571" id="Fill-14" fill="#FFFFFF"></path>
                    <path d="M157.871401,34.5028773 L154.356352,34.5028773 C154.153622,34.5028773 154.153622,34.2976502 154.153622,22.8357238 C154.153622,20.2011975 152.598768,18.6958395 149.556992,18.6958395 C146.819369,18.6958395 144.2169,20.0986439 144.2169,23.0752153 L144.2169,34.5028773 L140.566697,34.5028773 L140.566697,15.6848839 L144.081628,15.6848839 L144.081628,18.6273107 C145.095633,16.2323957 148.036103,15.3085744 150.908997,15.3085744 C156.080088,15.3085744 157.803825,18.3536746 157.803825,22.0145759 C157.803825,33.7844028 157.803825,34.4686129 157.871401,34.5028773" id="Fill-16" fill="#FFFFFF"></path>
                    <polygon id="Fill-18" fill="#F497B9" points="0.104252619 8.74921499 8.75548028 17.5056902 17.3683632 8.78671416 8.71725392 0.0291606954 0.104015923 8.74861596 0.104015923 26.2637229 0.104252619 26.2633635"></polygon>
                    <polygon id="Fill-20" fill="#2E3B95" points="8.75549211 17.505798 0.104264454 26.2635911 0.104264454 8.74920301"></polygon>
                    <polygon id="Fill-3" fill="#FFFFFF" points="38.0078554 10.588575 38.0078554 34 33.9578931 34 33.9578931 10.588575 25 10.588575 25 7 47 7 47 10.588575"></polygon>
                </g>
            </g>
        </g>
    </g>
</svg>
        </div>
        
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
                    <?php if(!empty(get_the_author_meta('linkedin', $post->post_author))){ ?>
                        <li><a href="<?= the_author_meta('linkedin', $post->post_author) ?>">
                                <div class="svg-wrapper">
                                    <svg height="512pt" viewBox="0 0 512 512" width="512pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-293.464844 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0" />
                                    </svg>
                                </div>
                            </a></li>
                    <?php } ?>
                    <?php if(!empty(get_the_author_meta('instagram', $post->post_author))){ ?>
                        <li><a href="<?= the_author_meta('instagram', $post->post_author) ?>">
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
    
 <div class="traction__header">
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
       
    </a>
</div>
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
      </g>
    </g>
</svg>
  
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
                    <?php if(!empty(get_the_author_meta('linkedin', $post->post_author))){ ?>
                        <li><a href="<?= the_author_meta('linkedin', $post->post_author) ?>">
                                <div class="svg-wrapper">
                                    <svg height="512pt" viewBox="0 0 512 512" width="512pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m475.074219 0h-438.148438c-20.394531 0-36.925781 16.53125-36.925781 36.925781v438.148438c0 20.394531 16.53125 36.925781 36.925781 36.925781h438.148438c20.394531 0 36.925781-16.53125 36.925781-36.925781v-438.148438c0-20.394531-16.53125-36.925781-36.925781-36.925781zm-293.464844 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0" />
                                    </svg>
                                </div>
                            </a></li>
                    <?php } ?>
                    <?php if(!empty(get_the_author_meta('instagram', $post->post_author))){ ?>
                        <li><a href="<?= the_author_meta('instagram', $post->post_author) ?>">
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
</div>

    <?php
    }
}