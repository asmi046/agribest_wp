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
            <h1 class="section-title">Все товары</h1>
                    <div class="view js__view">
										<form class="view__select-block">
											<p>Товары:</p>
											<select onchange="this.form.submit()" name="naltype" class="view__select">
												<option value="alt" <? if ($_REQUEST["naltype"] === "alt") echo "selected"; ?>>все</option>
												<option value="zak" <? if ($_REQUEST["naltype"] === "zak") echo "selected"; ?> >под заказ</option>
												<option value="nal" <? if ($_REQUEST["naltype"] === "nal") echo "selected"; ?> >в наличии</option>
											</select>
                                            <p>Сортировка по:</p>
                                            <select onchange="this.form.submit()" name="orderby" class="view__select">
												<option value="alf" <? if ($_REQUEST["orderby"] === "alf") echo "selected"; ?>>алфавиту</option>
												<option value="priceupp" <? if ($_REQUEST["orderby"] === "priceupp") echo "selected"; ?> >возрастанию</option>
												<option value="pricedown" <? if ($_REQUEST["orderby"] === "pricedown") echo "selected"; ?> >убыванию</option>
											</select>

                                            <input onchange="this.form.submit()" <? if (isset($_REQUEST["showall"])) echo "checked"; ?> name = "showall" type="checkbox" id="allChec"> <label class = "checkLabel" for = "allChec">Показать все </label>
										</form>
                        
                        
                        <span class="db view__caption">Вид: </span>
                        <button class="view__btn view__btn-grid js__grid <? if (empty($_COOKIE["vtype"])||($_COOKIE["vtype"] == "plan")) echo "view__btn_select"; ?>">
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
                        <button class="view__btn view__btn-row js__row <? if ($_COOKIE["vtype"] == "grid") echo "view__btn_select"; ?>">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
            </div>
        </div>

        <div class=" product__box <? echo ($_COOKIE["vtype"] == "grid")?"product__row":"product__grid";?>">
            <? 
				$arg = $wp_query->query;

                $metaquery = array(
                    'relation' => 'AND',
                    
                    'pricenz' => array (
                        'key'     => '_offer_price',
                        'value' => 0,
                        'compare' => '!=',
                        'type'    => 'DECIMAL(9,2)',
                    )

                );
					

                
                if (isset($_REQUEST["naltype"]) && ($_REQUEST["naltype"] == "zak")) 
                    $metaquery["naltype"] = array(
                        'key'     => '_offer_nal_count',
                        'value' => 0,
                        'compare' => '=',
                        'type'    => 'NUMERIC',
                    );
                if  (isset($_REQUEST["naltype"]) && ($_REQUEST["naltype"] == "nal")) 
                    $metaquery["naltype"] = array(
                        'key'     => '_offer_nal_count',
                        'value' => 0,
                        'compare' => '>',
                        'type'    => 'NUMERIC',
                    );
                
                if (isset($_REQUEST["showall"])) $arg['posts_per_page'] = -1;

                $arg['meta_query'] = $metaquery;

                $arg['orderby'] = 'title';
					$arg['order'] = "ASC";

				if (isset($_REQUEST["orderby"])&&($_REQUEST["orderby"] === "priceupp")) {
					$arg['orderby'] = 'pricenz';
					$arg['order'] = "ASC";
				}

				if (isset($_REQUEST["orderby"])&&($_REQUEST["orderby"] === "pricedown")) {
					$arg['orderby'] = 'pricenz';
					$arg['order'] = "DESC";
				}

				if (isset($_REQUEST["orderby"])&&($_REQUEST["orderby"] === "alf")) {
					$arg['orderby'] = 'title';
					$arg['order'] = "ASC";
				}

                
				$queryM = new WP_Query($arg);
			?>
            
            <?php
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
                    $big = 999999999; 

                    the_posts_pagination( array(
                        'mid_size' => 2,
                        'prev_next'    => true,
                        'prev_text'    => __(''),
                        'next_text'    => __(''),

                        'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'current' => max( 1, get_query_var('paged') ),
								'total'   => $queryM->max_num_pages,
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