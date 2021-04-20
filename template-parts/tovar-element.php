<div class="product__wr">
    <div class="product">
        <a href = "<?echo get_the_permalink(get_the_ID());?>" class = "tov_elem_img_wrapper">
            <!-- <a href = "<?echo get_the_permalink(get_the_ID());?>"> -->
                <img class="db product__img" src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>">
            <!-- </a> -->
        </a>
        <div class="product__title-bl">
        <h3 class="product__name"><? the_title();?></h3>
        <span class="spacer__vendor">Артикул: <? echo carbon_get_post_meta(get_the_ID(),"offer_sku"); ?></span>
        </div>
        <span class="db product__price"><? echo $mprice =  carbon_get_post_meta(get_the_ID(),"offer_price"); ?> руб.</span>
        <div class="product__bottom">
            <a href="<?echo get_the_permalink(get_the_ID());?>" class="db btn btn__details">Подробнее</a>
            <button class="btn btn__to-card" onclick = "add_tocart(this, 0); return false;"
                data-price = "<? echo $mprice?>"
                data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
                data-oldprice = "<? echo carbon_get_post_meta(get_the_ID(),"offer_old_price")?>"
                data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
                data-name = "<? echo  get_the_title();?>"
                data-count = "1"
                data-picture = "<?echo $imgTm;?>"
            >В корзину</button> 
        </div>
    </div>
</div>