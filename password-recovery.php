<?php get_header();

/**
 * Template Name: Шаблон страницы Восстановление пароля
 * Template Post Type: page
 */

 ?>
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
			<h1><?php the_title();?></h1>

			<form action="#" class="authoriz__form reviews__form">
				<input type="email" name="email" placeholder="Email" id="form-emailw" class="reviews__form-input input">
				<button type="submit" class="reviews__form-btn agriwind btn">Восстановить</button>
			</form> 

		</div>
	</section>

</main>
<?php get_footer(); ?> 