<div class="product__wr">
    <div class="product">
        <a href = "<?echo get_the_permalink(get_the_ID());?>" class = "tov_elem_img_wrapper">
            <!-- <a href = "<?echo get_the_permalink(get_the_ID());?>"> -->
                <img class="db product__img" src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo $imgTm = empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>">
            <!-- </a> -->
        </a>
        <div class="product__title-bl">
        <h3 class="product__name"><? the_title();?></h3>
        <span class="spacer__vendor">Артикул: <? echo carbon_get_post_meta(get_the_ID(),"offer_sku"); ?> 
        <?
            $jachejka = carbon_get_post_meta(get_the_ID(),'offer_nal_count');
            if (empty($jachejka)) 
                echo "&nbsp;&nbsp;&nbsp;<span class = 'not'>Под заказ</span>";
            else
            echo "&nbsp;&nbsp;&nbsp;<span class = 'yes'>В наличии</span>";
        ?> 
        </span>
        </div>
        <div class="price-wrap">
            <span class="db product__price"><? echo $mprice =  carbon_get_post_meta(get_the_ID(),"offer_price"); ?> руб.</span>
            <?
                $priceold = carbon_get_post_meta(get_the_ID(),'offer_old_price');
                if (empty($priceold)) 
                    echo "";
                else
                    echo "<span class='db product__old-price'>" . $mprice =  carbon_get_post_meta(get_the_ID(),'offer_old_price') . " руб.</span>";
            ?> 
        </div>
        <div class="product__bottom">
            <a href="<?echo get_the_permalink(get_the_ID());?>" class="db btn btn__details">Подробнее</a>
            <button class="btn btn__to-card" onclick = "add_tocart(this, 0); return false;"
                data-price = "<? echo $mprice?>"
                data-sku1c = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku_1c")?>"
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