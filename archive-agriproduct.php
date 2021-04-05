<?php get_header(); ?>

<main class="main">
    <div class="bread-crumbs-box">
        <div class="inner">
                    
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<div class="bread-crumbs">','</div>' );
                    }
                ?> 
        </div>
    </div>

    <section class="products-catalog">
        <div class="inner">
            <h1 class="section-title"><?php single_cat_title( '', true );?></h1>
                    <div class="view js__view">
                        <span class="db view__caption">Вид: </span>
                        <button class="view__btn view__btn-grid js__grid view__btn_select">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <button class="view__btn view__btn-row js__row">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
            </div>
        </div>

        <div class=" product__box product__grid">
            <?php
                $arg = $wp_query->query;
                $queryM = new WP_Query($arg);
                while($queryM->have_posts()):
                    $queryM->the_post();
                    get_template_part('template-parts/tovar-element');
                endwhile;
                
                wp_reset_postdata();
            ?>
        </div>
    </section>

    <div class="inner">
        
        
        <div class="page-nav">
            <div class="page-nav-wrapper">
                <?php 
                    the_posts_pagination( array(
                        'mid_size' => 2,
                        'prev_next'    => true,
                        'prev_text'    => __(''),
                        'next_text'    => __(''),
                    ) ); 
                ?>
            </div>
        </div>



        <div class="common-page-text">
            <?echo category_description();?>
        </div>
    </div>


</main>

<?php get_footer(); ?>