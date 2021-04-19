<?

    //php agribest.ru/public_html/wp-content/themes/agribest/1s/inxml.php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    ini_set('max_execution_time', 900);

    ini_set('include_path', "/home/s/stanis9y/agribest.ru/public_html/");
    

     require_once  "wp-config.php";
     require_once  "subcatdetect.php";



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

    

        echo  "\n\rНачато добавление товаров:\n\r\n\r";
        
        $offerIndex = 0;
        foreach ($xml->{'Каталог'}->{'Товары'}->children() as $elem)
        { 
            $sku = $elem->{'Артикул'};
            $name = $elem->{'Наименование'};

            foreach($elem->{'ЗначенияРеквизитов'}->children() as $toname)
            {
                if ($toname->{'Наименование'} == "Полное наименование")
                {
                        $name = $toname->{'Значение'};
                        echo "Изменено имя для выгрузке на сайт: ". $name."\n\r";
                }
            }

            $group =  $curentTerm[(string)$elem->{'Группы'}->{'Ид'}];
            $picture = get_bloginfo("template_url")."/1s/webdata/".$elem->{'Картинка'};
            echo "Артикул: ". $sku ."\n\r";
            echo "Имя: ". $name."\n\r";
            echo "Группа: ". $group."\n\r";
            echo "Картинка: ". $picture."\n\r";
           

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

            if (empty($posts->posts[0])) {
                echo "Добавление нового поста.\n\r";
                $post_id = wp_insert_post(  wp_slash( array(
                    'post_type'     => 'agriproduct',
                    'post_author'    => 1,
                    'post_status'    => 'publish',
                    'post_title' => (string)$name,
                    'post_excerpt'  => (string)$name,
                    'post_content'  => (string)$name,
                    'meta_input'     => $to_post_meta,
                    
                ) ) );
            } else  {
                echo "Обновление поста: ". $posts->posts[0]->post_title." id: ".$posts->posts[0]->ID.".\n\r";
                $post_id = wp_update_post(  wp_slash( array(
                    'ID' => $posts->posts[0]->ID,
                    'post_type'     => 'agriproduct',
                    'post_author'    => 1,
                    'post_status'    => 'publish',
                    'post_title' => (string)$name,
                    'post_excerpt'  => (string)$name,
                    'post_content'  => (string)$name,
                    'meta_input'     => $to_post_meta,
                    
                ) ) );
            }

            
            $term = get_term_by('name', $group, 'agricat');

            $ancestors = get_ancestors( $term->term_id,  'agricat' );
            
             $catArray = array();
            // foreach ($ancestors as $as)
            //     $catArray[] = $as; 
            
            
            $parenCat = get_parent_by_subkat($group);
            if (!empty($parenCat))  $catArray[] = $parenCat;

            $catArray[] = $term->term_id;
            

            wp_set_object_terms( $post_id, $catArray, "agricat" );   
           
    
            echo "Удаление старых вложений: \n\r";

            $media = get_attached_media( 'image', $post_id );
            foreach ($media as $mf)
            {
                $atdelrez = wp_delete_attachment( $mf->ID );
                echo empty($atdelrez)?"Ничего не удалено. \n\r":"Удалено вложение. \n\r";
            }

            echo "Галерея: \n\r";
            $indexImg = 0;
            foreach ($elem->{'Картинка'} as $galery)
            {
            
                echo $img1 = get_bloginfo("template_url")."/1s/webdata/".$galery;
                echo "\n\r";
                $ttl = (string)$sku." ".(string)$name;

                $img_id = media_sideload_image( $img1, $post_id, $ttl, "id" );
            
                add_post_meta( $post_id, '_offer_picture|gal_img|'.$indexImg.'|0|value', $img_id, true );
                add_post_meta( $post_id, '_offer_picture|gal_img_sku|'.$indexImg.'|0|value',  "", true );
                add_post_meta( $post_id, '_offer_picture|gal_img_alt|'.$indexImg.'|0|value', $ttl, true );

                if ($indexImg == 0) set_post_thumbnail($post_id, $img_id);
            
                $indexImg++;
            }

            echo "\n\r";
            echo "\n\r";

            // if ($offerIndex > 10) break;

            $offerIndex ++;
        }    
    } 



?>