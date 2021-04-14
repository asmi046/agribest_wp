<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )

->add_tab('Контакты', array(
	Field::make( 'text', 'them_company', __( 'Название' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_phones_1', __( 'Телефон' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_email', __( 'Email' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_email_send', __( 'Email для отправки' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_inn', __( 'ИНН' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_orgn', __( 'ОРГН' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_kpp', __( 'КПП' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_address', __( 'Адрес' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_bik', __( 'БИК' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_rs', __( 'Р/С' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_ks', __( 'К/С' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_insta', __( 'instagram' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_face', __( 'facebook' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_vk', __( 'Вконтакте' ) )
	  ->set_width(50),
	Field::make( 'text', 'them_youtube', __( 'youtube' ) )
	  ->set_width(50),
	Field::make('text', 'map_point', 'Координаты карты')
	  ->set_width(50),
	Field::make('text', 'text_map', 'Текст метки карты')
	  ->set_width(50),
) );


Container::make('post_meta', 'agri_product_cr', 'Характеристики товара') 
    ->show_on_post_type(array( 'agriproduct'))
      ->add_fields(array(   
      Field::make('rich_text', 'offer_smile_descr', 'Краткое описание')->set_width(100),
      Field::make('text', 'offer_name', 'Название товара')->set_width(50),
      Field::make('text', 'offer_manufact', 'Производитель')->set_width(50),
      Field::make('text', 'offer_allsearch', 'Все артикулы для поиска')->set_width(50),

      Field::make('text', 'offer_sku', 'Артикул (Базовый)')->set_width(50),
      Field::make('text', 'offer_nal_count', 'Колличество на складе')->set_default_value( '1')->set_width(50), 

      Field::make('text', 'offer_sticker', 'Стикер')->set_width(50),
      
	  Field::make('text', 'offer_price', 'Цена (Базовая)')->set_width(50),
      Field::make('text', 'offer_old_price', 'Старая цена (Базовая)')->set_width(50),

      Field::make( 'complex', 'offer_cherecter', "Характеристики товара" )
      ->add_fields( array(
        Field::make( 'text', 'c_name', 'Наименование параметра' )->set_width(50),
        Field::make( 'text', 'c_val',  'Значение' )->set_width(50),
      ) ),

        
      Field::make( 'complex', 'offer_picture', "Галерея товара" )
      ->add_fields( array(
        Field::make('image', 'gal_img', 'Изображение' )->set_width(30),
        Field::make('text', 'gal_img_sku', 'ID для модификации')->set_width(30),
        Field::make('text', 'gal_img_alt', 'alt и title')->set_width(30)        
      ) ),

      Field::make('rich_text', 'offer_fulltext', 'Полное описание (SEO)')->set_width(50),
            
    ));

?>