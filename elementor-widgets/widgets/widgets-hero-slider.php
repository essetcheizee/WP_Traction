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
        $args = array(
            'numberposts'    =>10,
            'orderby' => 'name',
            'order'   => 'ASC',
            'post_type'        => 'post'
        );
        $posts = get_posts($args);
        $output = '';
        foreach($posts as $post){
            $output .= '<option value="'.$post->post_title.'">'.$post->post_title.'</option>'.',';
            // print_r($category);
        }
       

		$this->start_controls_section(
			'section_content1',
			[
				'label' => __( 'Traction - Hero Slider | Slider 1', 'elementor' ),
			]
        );
        $this->add_control(
			'get_post1',
			[
				'label' => __( 'Post', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [$output],
			]
        );
        $this->add_control(
			'first_title1',
			[
				'label' => __( 'First Title', 'elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Type your title here', 'elementor' ),
			]
		);

        $this->add_control(
			'second_title1',
			[
				'label' => __( 'Second Title', 'elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Type your title here', 'elementor' ),
			]
		);

    
        $this->end_controls_section();
        $this->start_controls_section(
			'section_content2',
			[
				'label' => __( 'Traction - Hero Slider | Slider 2', 'elementor' ),
			]
        );
        $this->add_control(
			'get_post2',
			[
				'label' => __( 'Post', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [$output],
			]
        );
        $this->add_control(
			'first_title2',
			[
				'label' => __( 'First Title', 'elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Type your title here', 'elementor' ),
			]
		);

        $this->add_control(
			'second_title2',
			[
				'label' => __( 'Second Title', 'elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Type your title here', 'elementor' ),
			]
        );
        
        $this->end_controls_section();
        $this->start_controls_section(
			'section_content3',
			[
				'label' => __( 'Traction - Hero Slider | Slider 3', 'elementor' ),
			]
        );
        $this->add_control(
			'get_post3',
			[
				'label' => __( 'Post', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [$output],
			]
        );
        $this->add_control(
			'first_title3',
			[
				'label' => __( 'First Title', 'elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Type your title here', 'elementor' ),
			]
		);

        $this->add_control(
			'second_title3',
			[
				'label' => __( 'Second Title', 'elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Type your title here', 'elementor' ),
			]
		);

    
        $this->end_controls_section();
        $this->start_controls_section(
			'section_content4',
			[
				'label' => __( 'Traction - Hero Slider | Slider 4', 'elementor' ),
			]
        );
        $this->add_control(
			'get_post4',
			[
				'label' => __( 'Post', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [$output],
			]
        );
        $this->add_control(
			'first_title4',
			[
				'label' => __( 'First Title', 'elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Type your title here', 'elementor' ),
			]
		);

        $this->add_control(
			'second_title4',
			[
				'label' => __( 'Second Title', 'elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Type your title here', 'elementor' ),
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
         
  

    <div class="bg-slider">
    <img src="<?php echo get_template_directory_uri()?>/assets/img/hero1.jpg" alt="">
    </div>
<div class="featured-slider">
  

             <?php 
        $ax_query1           = new \WP_Query([
            'posts_per_page'    => 1,
            'name'      => $settings['get_post1']

        ]);
        $ax_query2           = new \WP_Query([
            
            'posts_per_page'    => 1,
            'name'      => $settings['get_post2']

        ]);
        $ax_query3           = new \WP_Query([
            
            'posts_per_page'    => 1,
            'name'      => $settings['get_post3']

        ]);
        $ax_query4           = new \WP_Query([
            
            'posts_per_page'    => 1,
            'name'      => $settings['get_post4']

        ]);
        
    ?>
    <div class="slider">

    <?php
     if ( $ax_query1->have_posts() ) {
                while ( $ax_query1->have_posts() ) { $ax_query1->the_post()
            ?>

        <div class="background">
         <?php if(has_post_thumbnail()){ ?>
                            <?php the_post_thumbnail('full')?>
                            <?php } ?>
        </div>

        <div class="mdl__wrap --py-12">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="title">
                        <h1 class="title-first-line"><?= $settings['first_title1'] ?></h1>
                    </div>
                    <div class="title">
                        <h1 class="title-second-line"><?= $settings['second_title1'] ?></h1>
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
        <?php
                }
            }
             ?>
             <?php

wp_reset_postdata();
?>
    </div>
    <div class="slider">

<?php
 if ( $ax_query2->have_posts() ) {
            while ( $ax_query2->have_posts() ) { $ax_query2->the_post()
        ?>

    <div class="background">
     <?php if(has_post_thumbnail()){ ?>
                        <?php the_post_thumbnail('full')?>
                        <?php } ?>
    </div>

    <div class="mdl__wrap --py-12">
        <div class="hero-content">
            <div class="hero-text">
                <div class="title">
                    <h1 class="title-first-line"><?= $settings['first_title2'] ?></h1>
                </div>
                <div class="title">
                    <h1 class="title-second-line"><?= $settings['second_title2'] ?></h1>
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
    <?php
            }
        }
         ?>
         <?php

wp_reset_postdata();
?>
</div>
<div class="slider">

<?php
 if ( $ax_query3->have_posts() ) {
            while ( $ax_query3->have_posts() ) { $ax_query3->the_post()
        ?>

    <div class="background">
     <?php if(has_post_thumbnail()){ ?>
                        <?php the_post_thumbnail('full')?>
                        <?php } ?>
    </div>

    <div class="mdl__wrap --py-12">
        <div class="hero-content">
            <div class="hero-text">
                <div class="title">
                    <h1 class="title-first-line"><?= $settings['first_title3'] ?></h1>
                </div>
                <div class="title">
                    <h1 class="title-second-line"><?= $settings['second_title3'] ?></h1>
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
    <?php
            }
        }
         ?>
         <?php

wp_reset_postdata();
?>
</div>
<div class="slider">

<?php
 if ( $ax_query4->have_posts() ) {
            while ( $ax_query4->have_posts() ) { $ax_query4->the_post()
        ?>

    <div class="background">
     <?php if(has_post_thumbnail()){ ?>
                        <?php the_post_thumbnail('full')?>
                        <?php } ?>
    </div>

    <div class="mdl__wrap --py-12">
        <div class="hero-content">
            <div class="hero-text">
                <div class="title">
                    <h1 class="title-first-line"><?= $settings['first_title4'] ?></h1>
                </div>
                <div class="title">
                    <h1 class="title-second-line"><?= $settings['second_title4'] ?></h1>
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
    <?php
            }
        }
         ?>
         <?php

wp_reset_postdata();
?>
</div>

    
</div>
<div class="hero-pagination">

<?php
 if ( $ax_query1->have_posts() ) {
    while ( $ax_query1->have_posts() ) { $ax_query1->the_post();
       
?>

    <a href="javascript:void(0)" class="item-pagination" data-bg='<?= get_the_post_thumbnail_url()?>'>
    1
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
            <?php
 if ( $ax_query2->have_posts() ) {
    while ( $ax_query2->have_posts() ) { $ax_query2->the_post();
       
?>

    <a href="javascript:void(0)" class="item-pagination" data-bg='<?= get_the_post_thumbnail_url()?>'>
    2
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
            <?php
 if ( $ax_query3->have_posts() ) {
    while ( $ax_query3->have_posts() ) { $ax_query3->the_post();
       
?>

    <a href="javascript:void(0)" class="item-pagination" data-bg='<?= get_the_post_thumbnail_url()?>'>
    3
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
            <?php
 if ( $ax_query4->have_posts() ) {
    while ( $ax_query4->have_posts() ) { $ax_query4->the_post();
       
?>

    <a href="javascript:void(0)" class="item-pagination" data-bg='<?= get_the_post_thumbnail_url()?>'>
    4
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
