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
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title();?></h1>
                    <?php the_content();?>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </section>
		
	</main>
<?php get_footer(); ?>