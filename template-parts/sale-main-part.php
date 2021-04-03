<section class="sale-porduct">
    <div class="inner">
        <h2 class="section-title">Товары со скидкой</h2>
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
                'terms' => array(2)
              )
            )
          );
          $query = new WP_Query($args);
          
          foreach( $query->posts as $post ){
            $query->the_post();
            get_template_part('template-parts/tovar-element');
          }  
          wp_reset_postdata();
        ?>
    </div>
</section>