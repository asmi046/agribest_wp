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
                echo "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = 'not'>Товар временно отсутствует</span>";
            else
            echo "<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class = 'yes'>В наличии</span>";
        ?> 
        </span>
        </div>
        <div class="price-wrap">
            <?
                $mprice =  carbon_get_post_meta(get_the_ID(),"offer_price");
                $priceold = carbon_get_post_meta(get_the_ID(),'offer_old_price');

                if (!empty($priceold)) 
                {
                    $tmp = $mprice;
                    $mprice = $priceold;
                    $priceold = $tmp;
                }
            ?>
            <span class="db product__price"><? echo $mprice; ?> руб.</span>
            <?
                
                if (!empty($priceold)) 
                {
                    echo "<span class='db product__old-price'>" . $priceold . " руб.</span>";
                    
                }
            ?> 
        </div>
        <div class="product__bottom">
            <a href="<?echo get_the_permalink(get_the_ID());?>" class="db btn btn__details">Подробнее</a>
            <button class="btn btn__to-card" onclick = "add_tocart(this, 0); return false;"
                data-price = "<? echo $mprice?>"
                data-sku1c = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku_1c")?>"
                data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
                data-oldprice = "<? echo $priceold?>"
                data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
                data-name = "<? echo  get_the_title();?>"
                data-count = "1"
                data-picture = "<?echo $imgTm;?>" 
            ><span id = "bcounter_<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"></span> В корзину</button> 
        </div>
    </div>
</div>