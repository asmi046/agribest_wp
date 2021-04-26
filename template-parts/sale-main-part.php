<section class="sale-porduct">
    <?
      $args = array(
        'posts_per_page' => 4,
        'post_type' => 'agriproduct',
        'tax_query' => array(
          array(
            'taxonomy' => 'agricat',
            'field' => 'id',
            'terms' => array(2)
          )
        )
      );
      $query = new WP_Query($args);
      $zag = "Товары со скидкой";

      if (empty ($query->posts)) {
        $args = array(
          'posts_per_page' => 4,
          'post_type' => 'agriproduct',
          'orderby' => 'rand',
          'meta_query' =>  array(
              'relation' => 'AND',
              
              'pricenz' => array (
                  'key'     => '_offer_price',
                  'value' => 0,
                  'compare' => '!=',
                  'type'    => 'DECIMAL(9,2)',
              )

          )
        );
        $query = new WP_Query($args);
        $zag = "Популярные товары";
      }
    ?>

    <div class="inner">
        <h2 class="section-title"><? echo $zag;?></h2>
    </div>
    <div class="product__grid product__box">
        
        <?

          
          foreach( $query->posts as $post ){
            $query->the_post();
            get_template_part('template-parts/tovar-element');
          }  
          wp_reset_postdata();
        ?>
    </div>
</section>