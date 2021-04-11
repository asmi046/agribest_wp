<?php

define("COMPANY_NAME", "Магазин АгриБест");
define("MAIL_RESEND", "noreply@agribest.ru");


//----Подключене carbon fields
//----Инструкции по подключению полей см. в комментариях themes-fields.php
include "carbon-fields/carbon-fields-plugin.php";

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' ); 
function crb_attach_theme_options() {
	require_once __DIR__ . "/themes-fields.php";
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

//-----Блок описания вывода меню
// 1. Осмысленные названия для алиаса и для описания на русском.
// если это меню в подвали пишем - Меню в подвале 
// если в шапке то пишем - Меню в шапке 
// если 2 меню в шапке пишем  - Меню в шапке (верхняя часть)

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'menu_hot' => 'Меню актуальных предложений (рядом с каталогом)',
		'menu_cat' => 'Меню каталога',
		'menu_corp' => 'Общекорпоративное меню (верхняя шапка)'
	] );
} ); 

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 185, 185 ); 

add_post_type_support( 'page', 'excerpt' );

// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin(){
	wp_enqueue_style("style-adm",get_template_directory_uri()."/style-admin.css");
	
	wp_localize_script( 'jquery', 'allAjax', array(
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
}

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
define("ALL_VERSION", "1.0.1");
add_action( 'wp_enqueue_scripts', 'my_assets' );
	function my_assets() {

		// Подключение стилей 

		wp_enqueue_script( 'imasc', get_template_directory_uri().'/js/imask.js', array(), ALL_VERSION , true);
		
		if ( is_page(53))
		{
			wp_enqueue_script( 'vue', get_template_directory_uri().'/js/vue.js', array(), ALL_VERSION , true);
			wp_enqueue_script( 'axios', get_template_directory_uri().'/js/axios.min.js', array(), ALL_VERSION , true);
			wp_enqueue_script( 'bascet', get_template_directory_uri().'/js/bascet.js', array(), ALL_VERSION , true);
		}

		wp_enqueue_style("style-modal", get_template_directory_uri()."/css/jquery.arcticmodal-0.3.css", array(), ALL_VERSION, 'all'); //Модальные окна (стили)
		//wp_enqueue_style("style-lightbox", get_template_directory_uri()."/css/lightbox.min.js", array(), ALL_VERSION, 'all'); //Лайтбокс (стили)
		//wp_enqueue_style("style-slik", get_template_directory_uri()."/css/slick.css", array(), ALL_VERSION, 'all'); //Слайдер (стили)

		wp_enqueue_style("main-style", get_stylesheet_uri(), array(), ALL_VERSION, 'all' ); // Подключение основных стилей в самом конце

		// Подключение скриптов
		
		wp_enqueue_script( 'jquery');

		wp_enqueue_script( 'html5', get_template_directory_uri().'/js/html5.js', array(), ALL_VERSION , true); //Модальные окна
		wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.min.js', array(), ALL_VERSION , true); //Слайдер
		wp_enqueue_script( 'fancybox', get_template_directory_uri().'/js/jquery.fancybox.min.js', array(), ALL_VERSION , true); //fancybox

		wp_enqueue_script( 'amodal', get_template_directory_uri().'/js/jquery.arcticmodal-0.3.min.js', array(), ALL_VERSION , true); //Модальные окна
		// wp_enqueue_script( 'mask', get_template_directory_uri().'/js/jquery.inputmask.bundle.js', array(), ALL_VERSION , true); //маска для инпутов
		// wp_enqueue_script( 'lightbox', get_template_directory_uri().'/js/lightbox.min.js', array(), ALL_VERSIONn , true); //Лайтбокс
		

		wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), ALL_VERSION , true); // Подключение основного скрипта в самом конце
		
		
		wp_localize_script( 'main', 'allAjax', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
	}

	// Заготовка для вызова ajax
	
	add_action( 'wp_ajax_aj_fnc', 'aj_fnc' );
	add_action( 'wp_ajax_nopriv_aj_fnc', 'aj_fnc' );

	function aj_fnc() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {


			
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
	}
	

	//Добавление "Цитаты" для страниц
	function page_excerpt() {
		add_post_type_support('page', array('excerpt'));
	}
	add_action('init', 'page_excerpt');
	
	
	// Регистрация кастомного поста
	
	add_action( 'init', 'create_taxonomies' );
	
	function create_taxonomies(){
	
		register_taxonomy('agricat', array('agriproduct'), array(
			'hierarchical'  => true,
			'labels'        => array(
				'name'              => "Категория товара",
				'singular_name'     => "Категория товара",
				'search_items'      => "Найти категорию товара",
				'all_items'         => __( 'Все категории' ),
				'parent_item'       => __( 'Дочерние категории' ),
				'parent_item_colon' => __( 'Дочерние категории:' ),
				'edit_item'         => __( 'Редактировать категорию' ),
				'update_item'       => __( 'Обновить категорию' ),
				'add_new_item'      => __( 'Добавить новую категорию товара' ),
				'new_item_name'     => __( 'Имя новой категории товара' ),
				'menu_name'         => __( 'Категории товара' ),
			),
			'description' => "Категория товаров для магазина",
			'public' => true,
			'show_ui'       => true,
			'query_var'     => true,
			'show_in_rest'  => true,
			'show_admin_column'     => true,
		));

	}
	
	
	add_action('init', 'light_custom_init');
	
	function light_custom_init(){
		register_post_type('agriproduct', array(
			'labels'             => array(
				'name'               => 'Продукты', // Основное название типа записи
				'singular_name'      => 'Продукты', // отдельное название записи типа Book
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить новый товар',
				'edit_item'          => 'Редактировать товар',
				'new_item'           => 'Новый товар',
				'view_item'          => 'Посмотреть товар',
				'search_items'       => 'Найти товар',
				'not_found'          =>  'Товаров не найдено',
				'not_found_in_trash' => 'В корзине товаров не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Товары'
	
			  ),
			'taxonomies' => array('agricat'), 
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'show_admin_column'        => true,
			'show_in_quick_edit'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
			'supports'           => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats')
		) );
	}
	
	// _____________________Колонки в таблицу админки
	
	add_filter('manage_posts_columns', 'posts_columns', 5);
	add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
	 
	function posts_columns($defaults){
		$defaults['riv_post_sku'] = __('Артикул');
		$defaults['riv_post_thumbs'] = __('Миниатюра');
		$defaults['riv_post_price'] = __('Цена');
		return $defaults;
	}
	 
	function posts_custom_columns($column_name, $id){
		
		
		if($column_name === 'riv_post_sku'){
			$SKU_t = get_post_meta(get_the_ID(), "_offer_sku", true);
			echo empty($SKU_t)?"-":$SKU_t;
		}
		
		if($column_name === 'riv_post_thumbs'){	
			$img1 = get_the_post_thumbnail_url( get_the_ID(), "thumbnail");
			
			if (empty($img1))
				$img1 = get_bloginfo("template_url")."/img/no-photo.jpg";
			
			echo '<img width = "60" src = "'.$img1.'" />';
		}
		
		if($column_name === 'riv_post_price'){
			$PRICE = get_post_meta(get_the_ID(), "_offer_price", true);
			echo empty($PRICE)?"0 руб.":$PRICE." руб.";
		}
		
		
	}

	// Отправка корзины
	
	add_action( 'wp_ajax_send_cart', 'send_cart' );
	add_action( 'wp_ajax_nopriv_send_cart', 'send_cart' );

	function send_cart() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {

			$headers = array(
				'From: Сайт '.COMPANY_NAME.' <'.MAIL_RESEND.'>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			
			$adr_to_send = carbon_get_theme_option("mail_to_send");
			$adr_to_send = (empty($adr_to_send))?"asmi046@gmail.com,s9606741999@yandex.ru":$adr_to_send;
			
			$zak_number = "AGRI-".date("H").date("s").date("s")."-".rand(100,999);

			$mail_content = "<h1>Заказ на сайте №".$zak_number."</h1>";
			
			$bscet_dec = json_decode(stripcslashes ($_REQUEST["bascet"]));
			
			$mail_content .= "<table style = 'text-align: left;' width = '100%'>";
				$mail_content .= "<tr>";
					$mail_content .= "<th></th>";
					$mail_content .= "<th>ТОВАР</th>";
					$mail_content .= "<th>КОЛЛИЧЕСТВО</th>";
					$mail_content .= "<th>СУММА</th>";
				$mail_content .= "</tr>";

				for ($i = 0; $i<count($bscet_dec); $i++) {
					$mail_content .= "<tr>";
						$mail_content .= "<td><img src = '".$bscet_dec[$i]->picture."' width = '70' height = '70'></td>";
						$mail_content .= "<td><a href = '".$bscet_dec[$i]->lnk."'>".$bscet_dec[$i]->name." / ".$bscet_dec[$i]->sku."</a></td>";
						$mail_content .= "<td>".$bscet_dec[$i]->count."</td>";
						$mail_content .= "<td>".$bscet_dec[$i]->subtotal." р.</td>";
					$mail_content .= "</tr>";
				}

			$mail_content .= "</table>";
			$mail_content .= "<h2>Сумма: ".$_REQUEST["bascetsumm"]." р.</h2>";

			
			$mail_content .= "<strong>Имя:</strong> ".$_REQUEST["name"]."<br/>";
			$mail_content .= "<strong>Телефон:</strong> ".$_REQUEST["phone"]."<br/>";
			$mail_content .= "<strong>e-mail:</strong> ".$_REQUEST["mail"]."<br/>";
			$mail_content .= "<strong>Адрес:</strong> ".$_REQUEST["adres"]."<br/>";
			$mail_content .= "<strong>Комментарий:</strong> ".$_REQUEST["comment"]."<br/>";

			$mail_them = "Заказ на сайте AgriBest";

			
			if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {
				wp_die(json_encode(array("send" => true )));
			}
			else {
				wp_die( 'Ошибка отправки!', '', 403 );
			}
			
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
	}

	/* Отправка почты
		
			$headers = array(
				'From: Сайт '.COMPANY_NAME.' <MAIL_RESEND>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			
			$adr_to_send = <Присваиваем поле карбона c адресами для отправки>;
			$mail_content = "<Тело письма>";
			$mail_them = "<Тема письма>";

			if (wp_mail($adr_to_send, $mail_them, $mail_content, $headers)) {
				wp_die(json_encode(array("send" => true )));
			}
			else {
				wp_die( 'Ошибка отправки!', '', 403 );
			}
	*/
	
	
	/*	Заготовка шорткода
		function true_url_external( $atts ) {
			$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
				'anchor' => 'Миша Рудрастых', // параметр 1
				'url' => 'https://misha.blog', // параметр 2
			), $atts );
			return "<a href='{$params['url']}' target='_blank'>{$params['anchor']}</a>";
		}
		add_shortcode( 'trueurl', 'true_url_external' );
	*/
	
?>