<?php get_header(); 

/**
 * Template Name: Шаблон страницы Контакты
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

	<section class = "contacts content">
		<div class="inner">
			<h1><?php the_title();?></h1>

			<ul>
				<li>Организация: <? echo carbon_get_theme_option("as_company"); ?></li>
				<li>Адрес: <? echo carbon_get_theme_option("as_address"); ?></li>
				<li>ИНН: <? echo carbon_get_theme_option("as_inn"); ?></li>
				<li>КПП: <? echo carbon_get_theme_option("as_kpp"); ?></li>
				<li>ОРГН: <? echo carbon_get_theme_option("as_orgn"); ?></li>
				<li>Р/С: <? echo carbon_get_theme_option("as_rs"); ?></li>
				<li>К/С: <? echo carbon_get_theme_option("as_ks"); ?></li>
				<li>БИК: <? echo carbon_get_theme_option("as_bik"); ?></li>
				<li>Email: <a href="mailto:<? echo $mail = carbon_get_theme_option("as_email"); ?>"><? echo $mail; ?></a></li>
				<li>Тел: <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></a></li>
			</ul>

		</div>
	</section>

</main>

<?php get_footer(); ?>