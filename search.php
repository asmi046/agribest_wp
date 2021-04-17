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

			<section id="content" class="content">
				<div class="inner">

					<h1>Результаты поиска</h1> 

					<div class="product__grid product__box">
						<?php
							while(have_posts()):  
								the_post();
								get_template_part('template-parts/tovar-element');
							endwhile;
						?>
					</div>

				</div>
			</section>

		</main>
<?php get_footer(); ?>   