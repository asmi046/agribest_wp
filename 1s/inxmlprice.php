<?

    //php agribest.ru/public_html/wp-content/themes/agribest/1s/inxmlprice.php
    
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    ini_set('max_execution_time', 900);

    ini_set('include_path', "/home/s/stanis9y/agribest.ru/public_html/");
    

     require_once  "wp-config.php";
    

     if (file_exists(__DIR__.'/webdata/offers0_1.xml')) {
        $xml = simplexml_load_file(__DIR__.'/webdata/offers0_1.xml');
        
        $curentTerm = array();

        echo  "Начато обновление цен: \n\r";


        foreach ($xml->{'ПакетПредложений'}->{'Предложения'}->children() as $elem)
        { 
                $sku = $elem->{'Артикул'};
                $count = $elem->{'Количество'};
                $price = $elem->{'Цены'}->{'Цена'}[0]->{'ЦенаЗаЕдиницу'};
                
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'agriproduct',
                    
                    'meta_query' => [
                            'relation' => 'OR',
                            [
                                'key' => '_offer_sku',
                                'value' => (string)$sku
                            ]
                    ]
                  );
                  $posts = new WP_Query($args);
                
                echo  "KSU: ".$sku."\n\r";
                echo  "Колличество: ".$count."\n\r";
                echo  "Цена: ".$price."\n\r";
                
                // print_r($posts->posts[0]->ID);
                
                if (!empty($posts->posts[0])) {
                    echo  "Пост ID: ".$posts->posts[0]->ID."\n\r"; 
                    echo  "Товар: ".$posts->posts[0]->post_title."\n\r";
                    carbon_set_post_meta( (int)$posts->posts[0]->ID, 'offer_nal_count', (int)$count ); 
                    carbon_set_post_meta( (int)$posts->posts[0]->ID, 'offer_price', (float)$price ); 
                } else {
                    echo  "Пост не найден. \n\r"; 
                }

                 
                echo "\n\r";
        }

    

    } 



?>