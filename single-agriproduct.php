<?php get_header(); ?>
	<main class="main">	
		<div class="bread-crumbs-box">
			<div class="inner">	
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<div class="bread-crumbs">','</div>' );
						}
					?> 
			</div>
		</div>

        <?
            $pagePrice = (int)carbon_get_the_post_meta('offer_price' );
            $pagePriceOld = (int)carbon_get_the_post_meta('offer_old_price' );
        ?>

		<section class="card-product__section">
                <div class="inner">
                    <h1 class="section-title">
						<? the_title();?>
                    </h1>
                    <div class="card-product">
					    <?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); ?> 
						<a href="<?echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm;?>" class="card-product__img-box db fancybox card-product__column">
                            <img src="<?echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm;?>" alt="<? the_title();?>" title="<? the_title();?>" class="spacer">
                        </a>
                        <div class="card-product__descr card-product__column">
                            <span class="db card-product__price">Цена: <? echo $mprice =  carbon_get_post_meta(get_the_ID(),"offer_price"); ?> руб.</span>
                            <? $countProd = carbon_get_post_meta(get_the_ID(),"offer_nal_count"); if (empty($countProd)){ ?>
								<span class="db card-product__status">Под заказ</span>
							<?} else {?>
								<span class="db card-product__status">В наличии <?php echo $countProd; ?> шт. </span>
							<?}?>

                            <div class="db card-product__manufacturer">Артикул: <span class="inb rL cerecterVal"> <? echo carbon_get_post_meta(get_the_ID(),"offer_sku"); ?></span></div>
                            <? $manufactur = carbon_get_post_meta(get_the_ID(),"offer_manufact"); if (!empty($manufactur)){ ?>
								<div class="db card-product__manufacturer">Производитель: <span class="inb rL cerecterVal"><?php echo $manufactur; ?></span></div>
							<?}?>

                            <!-- <div class="db card-product__feature">Цвет: <span class="inb rL cerecterVal">Белый</span></div> -->
                            <form class="card-product__form">
                                <div class="card-product__form__counter">
                                    <button class="card-product__form__btn minus"> - </button>
                                    <input id = "pageNumeric" class="quantity" type="number" max = "<?php echo !empty($countProd)?$countProd:99999; ?>" value="1" />
                                    <button class="card-product__form__btn plus"> + </button>
                                </div>
                                <button class="btn" type="submit" onclick = "add_tocart(this, document.getElementById('pageNumeric').value); return false;"
                                    data-price = "<? echo $pagePrice?>"
			                        data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
			                        data-oldprice = "<? echo $pagePriceOld?>"
			                        data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
			                        data-name = "<? echo  get_the_title();?>"
			                        data-count = "1"
			                        data-picture = "<?echo $imgTm;?>"
                                >В корзину</button>
                            </form>
                            <p>
                               <? echo carbon_get_post_meta(get_the_ID(),"offer_smile_descr");?>
                            </p>
                        </div>

                    </div>
                </div>
        </section>
	</main>
<?php get_footer(); ?>