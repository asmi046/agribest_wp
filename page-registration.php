<?php get_header();

/**
 * Template Name: Шаблон страницы Регистрация
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
				<input type="text" name="name" placeholder="ФИО" id="form-namew" class="reviews__form-input input">
				<input type="tel" name="tel" placeholder="Телефон*" id="form-telw" class="reviews__form-input input">
				<input type="email" name="email" placeholder="Email" id="form-emailw" class="reviews__form-input input">
				<input type="text" name="name" placeholder="Наименование организации" id="form-namew" class="reviews__form-input input">
				<input type="password" name="password" placeholder="Пароль" id="form-telw" class="reviews__form-input input">
				<input type="password" name="password" placeholder="Подтверждение пароля" id="form-telw" class="reviews__form-input input">
				<button type="submit" class="reviews__form-btn agriwind btn">Зарегистрироваться</button>
			</form> 

		</div>
	</section>

</main>
<?php get_footer(); ?> 