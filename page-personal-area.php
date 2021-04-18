<?php get_header();

/**
 * Template Name: Шаблон страницы Личный кабинет
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

	<template id = "autorisation">
		<section class = "content">
			<div class="inner">
				<h1>Авторизация</h1>

				<form action="#" class="authoriz__form reviews__form">
					<input autocomplete="off" type="email" name="email" placeholder="Email" id="form-emailw" class="reviews__form-input input">
					<input autocomplete="off" type="password" name="password" placeholder="Пароль" id="form-telw" class="reviews__form-input input">
					<div class = "btn_wrapper">
						<button type="button" class="reviews__form-btn agriwind btn">Войти</button>
						<button type="button" class="reviews__form-btn agriwind btn btn-tr" id = "registerbtn">Регистрация</button>
					</div>

					<div class = "btn_wrapper" id = "passRecoveryWrapper">
						<a href = "#">Не можете войти в личный кабинет?</a>
					</div>
				</form> 

			</div>
		</section>
	</template>


	
	<template id = "kabinet">
		<section class = "personal content">
			<div class="inner">
				<h1>Личный кабинет</h1>

				<div class="personal__row product__box product__row">
					<div class="product__wr">
						<div class="product">
							<h3 class="product__name">Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P (4)</h3>
							<span class="db product__price">50 руб.</span>
							<div class="product__bottom">
								<a href="#" class="db btn btn__details">Подробнее</a>
								<button class="btn btn__to-card">Повторить</button>
							</div>
						</div>
					</div><div class="product__wr">
						<div class="product">
							<h3 class="product__name">Бочка пластиковая пищевая квадратная c ручками, 30 л (3)</h3>
							<span class="db product__price">1000 руб.</span>
							<div class="product__bottom">
								<a href="#" class="db btn btn__details">Подробнее</a>
								<button class="btn btn__to-card">Повторить</button>
							</div>
						</div>
					</div><div class="product__wr">
						<div class="product">
							<h3 class="product__name">Лампа керосиновая 225, 28 см (3)</h3>
							<span class="db product__price">568 руб.</span>
							<div class="product__bottom">
								<a href="#" class="db btn btn__details">Подробнее</a>
								<button class="btn btn__to-card">Повторить</button>
							</div>
						</div>
					</div><div class="product__wr">
						<div class="product">
							<h3 class="product__name">Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P (2)</h3>
							<span class="db product__price">50 руб.</span>
							<div class="product__bottom">
								<a href="#" class="db btn btn__details">Подробнее</a>
								<button class="btn btn__to-card">Повторить</button>
							</div>
						</div>
					</div><div class="product__wr">
						<div class="product">
							<h3 class="product__name">Лампа керосиновая 225, 28 см (2)</h3>
							<span class="db product__price">568 руб.</span>
							<div class="product__bottom">
								<a href="#" class="db btn btn__details">Подробнее</a>
								<button class="btn btn__to-card">Повторить</button>
							</div>
						</div>
					</div><div class="product__wr">
						<div class="product">
							<h3 class="product__name">Бочка пластиковая пищевая квадратная c ручками, 30 л (2)</h3>
							<span class="db product__price">1000 руб.</span>
							<div class="product__bottom">
								<a href="#" class="db btn btn__details">Подробнее</a>
								<button class="btn btn__to-card">Повторить</button>
							</div>
						</div>
					</div><div class="product__wr">
						<div class="product">
							<h3 class="product__name">Лампа керосиновая 225, 28 см (1)</h3>
							<span class="db product__price">568 руб.</span>
							<div class="product__bottom">
								<a href="#" class="db btn btn__details">Подробнее</a>
								<button class="btn btn__to-card">Повторить</button>
							</div>
						</div>
					</div><div class="product__wr">
						<div class="product">
							<h3 class="product__name">Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P (1)</h3>
							<span class="db product__price">50 руб.</span>
							<div class="product__bottom">
								<a href="#" class="db btn btn__details">Подробнее</a>
								<button class="btn btn__to-card">Повторить</button>
							</div>
						</div>
					</div><div class="product__wr">
						<div class="product">
							<h3 class="product__name">Лампа керосиновая 225, 28 см(1)</h3>
							<span class="db product__price">568 руб.</span>
							<div class="product__bottom">
								<a href="#" class="db btn btn__details">Подробнее</a>
								<button class="btn btn__to-card">Повторить</button>
							</div>
						</div>
					</div><div class="product__wr">
						<div class="product">
							<h3 class="product__name">Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P (1)</h3>
							<span class="db product__price">50 руб.</span>
							<div class="product__bottom">
								<a href="#" class="db btn btn__details">Подробнее</a>
								<button class="btn btn__to-card">Повторить</button>
							</div>
						</div>
					</div>        
				</div>

			</div>
		</section>
	</template>

	<div id = "main_cabinet">
		<autorisation v-show="showAutorize" ></autorisation>
		<kabinet v-show="showRegistration"></kabinet>
	</div>
</main>
<?php get_footer(); ?> 