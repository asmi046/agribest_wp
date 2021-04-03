<div class="product__wr">
    <div class="product">
        <img class="db spacer product__img" src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>">
        <h3 class="product__name"><? the_title();?></h3>
        <span class="db product__price"><? echo $mprice =  carbon_get_post_meta(get_the_ID(),"offer_price"); ?> руб.</span>
        <div class="product__bottom">
            <a href="<?echo get_the_permalink(get_the_ID());?>" class="db btn btn__details">Подробнее</a>
            <button class="btn btn__to-card">В корзину</button>
        </div>
    </div>
</div>