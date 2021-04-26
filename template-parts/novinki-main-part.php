<section class="new-arrivals">
    <div class="inner">
        <h2 class="section-title">Новинки</h2>
    </div>
    <div class="product__grid product__box">
    <?
           $args = array(
            'posts_per_page' => 4,
            'post_type' => 'agriproduct',
            'tax_query' => array(
              array(
                'taxonomy' => 'agricat',
                'field' => 'id',
                'terms' => array(3)
              )
            )
          );
          $query = new WP_Query($args);
          
          if (empty($query->posts)) {
            $args = array(
              'posts_per_page' => 4,
              'post_type' => 'agriproduct',
              'orderby' => 'date',
              'order' => 'DESC',
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
          }

          foreach( $query->posts as $post ){
            $query->the_post();
            get_template_part('template-parts/tovar-element');
          }  
          wp_reset_postdata();
        ?>
       
    </div>
</section>