<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */

get_header(); ?>

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

			<?
				// $arg = $wp_query->query;

				//$arg['relation']  = 'OR';
				//$arg['title']  = "%Торфотаблетка%";
				
				


 				$metaquery = array(

					'relation' => 'AND',
					'searchFild' => array (
						'relation' => 'OR',
						'tqAll' => array(
							'key'     => '_offer_allsearch',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						),

						'tqSku' => array(
							'key'     => '_offer_sku',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						),

						'tqDescr' => array(
							'key'     => '_offer_smile_descr',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						),

						'tqDescr' => array(
							'key'     => '_offer_name',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						)
						
					),
						
					'pricenz' => array (
							'key'     => '_offer_price',
							'value' => 0,
							'compare' => '!=',
							'type'    => 'DECIMAL(9,2)',
						)

					
					
				); 

				$arg['post_type']  = 'agriproduct';
				$arg['posts_per_page'] = -1;
				$arg['meta_query'] = $metaquery;
				
			
				$queryM = new WP_Query($arg);
				// echo "<pre>";
				// print_r($queryM);
				// echo "</pre>";
			?>

			<section id="content" class="content">
				<div class="inner">

					<h1>Результаты поиска</h1> 

					<div class="product__grid product__box">
						<?php
							while($queryM->have_posts()):  
								$queryM->the_post();
								get_template_part('template-parts/tovar-element');
							endwhile;
							wp_reset_postdata();
						?>
					</div>

				</div>
			</section>

		</main>
<?php get_footer(); ?>   