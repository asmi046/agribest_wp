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
    ->add_tab('Банеры на главной', array(
      Field::make( 'image', 'banner_img_1', 'Картинка банера 1') 
        ->set_width(30),
      Field::make('text', 'banner_text_1', 'Текст банера 1')
        ->set_width(30),
      Field::make('text', 'banner_link_1', 'Ссылка банера 1')
        ->set_width(30),
      Field::make( 'image', 'banner_img_2', 'Картинка банера 2') 
        ->set_width(30),
      Field::make('text', 'banner_text_2', 'Текст банера 2')
        ->set_width(30),
      Field::make('text', 'banner_link_2', 'Ссылка банера 2')
        ->set_width(30),
      Field::make( 'image', 'banner_img_3', 'Картинка банера 3') 
        ->set_width(30),
      Field::make('text', 'banner_text_3', 'Текст банера 3')
        ->set_width(30),
      Field::make('text', 'banner_link_3', 'Ссылка банера 3')
        ->set_width(30),
    ))
    ->add_tab('Бренды на главной', array(
      Field::make('complex', 'brand_banner', 'Бренд на главной')
        ->add_fields(array(
      Field::make('image', 'brand_img', 'Фото бренда')
        ->set_width(50),
      Field::make( 'text', 'brand_img_title', 'title')
         ->set_width(50),
        ))
    ))
->add_tab('Контакты', array(
        Field::make( 'text', 'as_company', __( 'Название' ) )
          ->set_width(50),
        // Field::make( 'text', 'as_schedule', __( 'Режим работы' ) )
        //   ->set_width(50),
        Field::make( 'text', 'as_phones_1', __( 'Телефон' ) )
          ->set_width(50),
        // Field::make( 'text', 'as_phone_2', __( 'Телефон дополнительный' ) )
        //   ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) ) 
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) )
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_kpp', __( 'КПП' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bik', __( 'БИК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_rs', __( 'Р/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_ks', __( 'К/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_insta', __( 'instagram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_face', __( 'facebook' ) )
          ->set_width(50),
        Field::make( 'text', 'as_vk', __( 'Вконтакте' ) )
          ->set_width(50),
        Field::make( 'text', 'as_telegr', __( 'telegram' ) )
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
      Field::make('text', 'offer_sku_1c', 'Артикул (1C)')->set_width(50),
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