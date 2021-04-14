<?

    //php marketsveta.su/wp-content/themes/light_market/pars/inxml.php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    ini_set('max_execution_time', 900);

    ini_set('include_path', "/home/s/stanis9y/agribest.ru/public_html/");

    

    require_once  "wp-config.php";

    require_once ABSPATH . 'wp-admin/includes/media.php';
    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/image.php';

    if (file_exists(__DIR__.'/webdata/import0_1.xml')) {
        $xml = simplexml_load_file(__DIR__.'/webdata/import0_1.xml');
        
        $curentTerm = array();

        echo  "Начат разбор категорий: \n\r";


        foreach ($xml->{'Классификатор'}->{'Группы'}->children() as $elem)
        { 
                $catName = $elem->{'Наименование'};
                echo  "Категория: ".$catName;
                //print_r($elem->attributes()[id]);

                $term = get_term_by('name', $catName, 'agricat');
                
                if (empty($term)) 
                {
                    wp_insert_term( (string)$catName, 'agricat');      
                    echo " - Создана";
                } else
                    echo " - Существует";

                
                $curentTerm[(string)$elem->{'Ид'}] = (string)$catName;
                
                 
                echo "\n\r";
        }

        
        // echo  "Построение иерархии категорий \n\r";
        // foreach ($xml->shop->categories->children() as $elem)
        // {    
        //     $siteCatNameParent = $curentTerm[(string)$elem->attributes()["parentId"]];
        //     $siteCatName = $curentTerm[(string)$elem->attributes()["id"]];

        //     $termSiteParent = get_term_by('name', $siteCatNameParent, 'lightcat');
        //     $termSite = get_term_by('name', $siteCatName, 'lightcat');
            
        //     wp_update_term( $termSite->term_id, 'lightcat', array("parent" => $termSiteParent->term_id));
        // }

        // echo  "Иерархия категорий выстроена\n\r";

        echo  "\n\rНачато добавление товаров:\n\r\n\r";
        
        $offerIndex = 0;
        foreach ($xml->{'Каталог'}->{'Товары'}->children() as $elem)
        { 
            echo $sku = $elem->{'Артикул'};
            echo "\n\r";
            echo $name = $elem->{'Наименование'};
            echo "\n\r";
            echo $group =  $curentTerm[(string)$elem->{'Группы'}->{'Ид'}];
            echo "\n\r";
            echo $picture = get_bloginfo("template_url")."/1s/webdata/".$elem->{'Картинка'};
            echo "\n\r";
            echo "\n\r";

            $to_post_meta  = [ 
                '_offer_smile_descr' => (string)$name, 
                '_offer_sku' => (string)$sku, 
                '_offer_nal' => 1,
                '_offer_name' => (string)$name,
                '_offer_manufact' => "",
                '_offer_price' => "100",
                '_offer_allsearch' => (string)$name,
                '_offer_fulltext' => (string)$name,
            ];


            $post_id = wp_insert_post(  wp_slash( array(
                'post_type'     => 'agriproduct',
                'post_author'    => 1,
                'post_status'    => 'publish',
                'post_title' => (string)$name,
                'post_excerpt'  => (string)$name,
                'post_content'  => (string)$name,
                'meta_input'     => $to_post_meta,
                
            ) ) );

            
            $term = get_term_by('name', $group, 'agricat');

            $ancestors = get_ancestors( $term->term_id,  'agricat' );
            
             $catArray = array();
            // foreach ($ancestors as $as)
            //     $catArray[] = $as; 
            
            $catArray[] = $term->term_id; 

            wp_set_object_terms( $post_id, $catArray, "agricat" );   
           
            

            $indexImg = 0;
            foreach ($elem->{'Картинка'} as $galery)
            {
            
                echo $img1 = get_bloginfo("template_url")."/1s/webdata/".$galery;
                $ttl = (string)$elem->vendor." ".(string)$elem->name." ".(string)$elem->vendorCode;
                // $img_id = media_sideload_image( $img1, $post_id, $ttl, "id" );
            
                // add_post_meta( $post_id, '_offer_picture|gal_img|'.$indexImg.'|0|value', $img_id, true );
                // add_post_meta( $post_id, '_offer_picture|gal_img_sku|'.$indexImg.'|0|value',  "", true );
                // add_post_meta( $post_id, '_offer_picture|gal_img_alt|'.$indexImg.'|0|value', $ttl, true );

                if ($indexImg == 0) set_post_thumbnail($post_id, $img_id);
            
                $indexImg++;
            }


             if ($offerIndex > 50) break;

            $offerIndex ++;
        }    
    } 



?>