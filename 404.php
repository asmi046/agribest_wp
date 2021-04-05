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

        <section class = "content">
            <div class="inner">
			<h1 class = "h404">404</h1>
			<p>Запрашиваемая страница не была найдена</p>
            </div>
        </section>
		
	</main>
<?php get_footer(); ?>