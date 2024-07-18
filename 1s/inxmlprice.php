<?

    //php agribest.ru/public_html/wp-content/themes/agribest/1s/inxmlprice.php
    
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    ini_set('max_execution_time', 900);
    ini_set('memory_limit', '1024M');

    ini_set('include_path', "/home/s/stanis9y/agribest.ru/public_html/");
    

     require_once  "wp-config.php";

     $fileAdr = "http://asmi046.myjino.ru";


    // $crl = curl_init($fileAdr."/webdata/offers0_1.xml");
    //     curl_setopt($crl, CURLOPT_NOBODY, true);
    //     curl_exec($crl);
        
    //     $ret = curl_getinfo($crl, CURLINFO_HTTP_CODE);
    //     curl_close($crl);

    if (file_exists(__DIR__.'/webdata/offers0_1.xml')) {
        $xml = simplexml_load_file(__DIR__.'/webdata/offers0_1.xml');
        
    // if ($ret == 200) {    
    //     $xml = simplexml_load_file($fileAdr.'/webdata/offers0_1.xml');

        $curentTerm = array();

        echo  "Начато обновление цен: \n\r";


        foreach ($xml->{'ПакетПредложений'}->{'Предложения'}->children() as $elem)
        { 
                $sku = $elem->{'Артикул'};
                // if ((string)$sku !== "11599") continue;
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
                echo  "Количество: ".$count."\n\r";
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