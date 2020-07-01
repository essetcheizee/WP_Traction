<?php get_header()?>

<main>

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

    <section class="page-banner">
    <div class="background">
        <img src="./../assets/img/hero1.jpg">
    </div>
    <div class="mdl__wrap --py-20">
        <div class="content">
            <h1 class="content__title"><?php the_title()?>/h1>
            <a href="javascript:void(0);" class="content__arrow">
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="142.9" height="44.948"
                        viewBox="0 0 142.9 44.948">
                        <g id="Group_112" data-name="Group 112" transform="translate(-1194 -71)">
                            <path id="Path_198" data-name="Path 198"
                                d="M.728,75.815.647,75.9l-.081.081c-.04.04-.04.081-.081.121L.4,76.18c-.04.04-.04.081-.081.121,0,.04-.04.04-.04.081-.04.04-.04.081-.081.162,0,.04-.04.04-.04.081-.04.04-.04.121-.081.162v.04a.366.366,0,0,0-.04.2v.04c0,.081-.04.121-.04.2v.567a.365.365,0,0,0,.04.2v.04c0,.081.04.121.04.2v.04c.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.081.081.121,0,.04.04.04.081.081s.04.081.081.121l.081.081.081.081.04.04,22.51,20.081a2.438,2.438,0,0,0,3.239-3.644L8.744,80.025H58.258a2.429,2.429,0,1,0,0-4.858H8.744l17.733-15.83a2.438,2.438,0,1,0-3.239-3.644L.768,75.774A.04.04,0,0,1,.728,75.815Z"
                                transform="translate(1194.001 15.923)" fill="#fff" />
                            <line id="Line_1" data-name="Line 1" x2="95" transform="translate(1239.5 93.5)"
                                fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4.8" />
                        </g>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</section>

        <!-- <div class= -->

        <section class="post-featured">
            <div class="global-wrapper section-padding npt npb">
                <div class="img-wrapper">
                    <?php if(has_post_thumbnail()){ ?>
                    <?php the_post_thumbnail() ?>
                    <?php } ?>
                </div>
            </div>
        </section>
	
	<?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>


<?php wp_reset_postdata(); ?>
	<?php 
        // $prev_post = get_adjacent_post(false, '', true);
        $next_post = get_adjacent_post(false, '', false);
        ?>
        

<section class="post-pagination">
    <div class="mdl__wrap">
    <?php if(!empty($next_post)){ ?>
        <a href="<?php get_permalink($next_post->ID)?>">
            <h1>Next Project</h1>
            <span><?= $next_post->post_title ?>
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="142.9" height="44.948"
                        viewBox="0 0 142.9 44.948">
                        <g id="Group_112" data-name="Group 112" transform="translate(-1194 -71)">
                            <path id="Path_198" data-name="Path 198"
                                d="M.728,75.815.647,75.9l-.081.081c-.04.04-.04.081-.081.121L.4,76.18c-.04.04-.04.081-.081.121,0,.04-.04.04-.04.081-.04.04-.04.081-.081.162,0,.04-.04.04-.04.081-.04.04-.04.121-.081.162v.04a.366.366,0,0,0-.04.2v.04c0,.081-.04.121-.04.2v.567a.365.365,0,0,0,.04.2v.04c0,.081.04.121.04.2v.04c.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.081.081.121,0,.04.04.04.081.081s.04.081.081.121l.081.081.081.081.04.04,22.51,20.081a2.438,2.438,0,0,0,3.239-3.644L8.744,80.025H58.258a2.429,2.429,0,1,0,0-4.858H8.744l17.733-15.83a2.438,2.438,0,1,0-3.239-3.644L.768,75.774A.04.04,0,0,1,.728,75.815Z"
                                transform="translate(1194.001 15.923)" fill="#fff" />
                            <line id="Line_1" data-name="Line 1" x2="95" transform="translate(1239.5 93.5)"
                                fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4.8" />
                        </g>
                    </svg>
                </div>
            </span>
        </a>
    <?php }else{
            $first = new WP_Query('posts_per_page=1&order=ASC'); $first->the_post();   
        ?>
             <a href="<?php get_permalink($first->ID)?>">
             <h1>Next Project</h1>
             <span><?= $first->post_title ?>
                 <div class="svg-wrapper">
                     <svg xmlns="http://www.w3.org/2000/svg" width="142.9" height="44.948"
                         viewBox="0 0 142.9 44.948">
                         <g id="Group_112" data-name="Group 112" transform="translate(-1194 -71)">
                             <path id="Path_198" data-name="Path 198"
                                 d="M.728,75.815.647,75.9l-.081.081c-.04.04-.04.081-.081.121L.4,76.18c-.04.04-.04.081-.081.121,0,.04-.04.04-.04.081-.04.04-.04.081-.081.162,0,.04-.04.04-.04.081-.04.04-.04.121-.081.162v.04a.366.366,0,0,0-.04.2v.04c0,.081-.04.121-.04.2v.567a.365.365,0,0,0,.04.2v.04c0,.081.04.121.04.2v.04c.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.121.081.162,0,.04.04.04.04.081.04.04.04.081.081.121,0,.04.04.04.081.081s.04.081.081.121l.081.081.081.081.04.04,22.51,20.081a2.438,2.438,0,0,0,3.239-3.644L8.744,80.025H58.258a2.429,2.429,0,1,0,0-4.858H8.744l17.733-15.83a2.438,2.438,0,1,0-3.239-3.644L.768,75.774A.04.04,0,0,1,.728,75.815Z"
                                 transform="translate(1194.001 15.923)" fill="#fff" />
                             <line id="Line_1" data-name="Line 1" x2="95" transform="translate(1239.5 93.5)"
                                 fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4.8" />
                         </g>
                     </svg>
                 </div>
             </span>
         </a>

<?php
wp_reset_query();
    }?>

    </div>
</section>
	

</main>
<?php get_footer(); ?>


