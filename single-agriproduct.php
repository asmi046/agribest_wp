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


				<div class="select-prod-sl">
					<!-- Большой слайдер -->
					<div class="select-slider-big">
						<?
						$pict = carbon_get_the_post_meta('offer_picture');
						if($pict) {
							$pictIndex = 0;
							foreach($pict as $item) {
								?>
								<div class="select-slider-big__item">
									<a class="fancybox" data-fancybox="gallery" href="<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0];?>">
										<img
										id = "pict-<? echo empty($item['gal_img_sku'])?$pictIndex:$item['gal_img_sku']; ?>" 
										alt = "<? echo $item['gal_img_alt']; ?>"
										title = "<? echo $item['gal_img_alt']; ?>"
										src = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0];?>" />

									</a>
								</div>

								<?
								$pictIndex++;
							}
						}
						?>
					</div>

					<!-- Малый слайдер -->
					<div class="select-prod-slider">
						<?
						$pict = carbon_get_the_post_meta('offer_picture');
						if($pict) {
							$pictIndex = 0;
							foreach($pict as $item) {
								?>
								<div class="select-prod-slider__item">
									<img 
									data-indexelem = "<?echo $i;?>"
									id = "<? echo $item['gal_img_sku']; ?>" 
									alt = "<? echo $item['gal_img_alt']; ?>"
									title = "<? echo $item['gal_img_alt']; ?>"
									src = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'large')[0];?>" />
								</div>
								<?
								$pictIndex++;
							}
						}
						?>
					</div>
					
				</div>


                        <div class="card-product__descr card-product__column">
                            <span class="db card-product__price">Цена: <? echo $mprice =  carbon_get_post_meta(get_the_ID(),"offer_price"); ?> руб.</span>
                                <?php
									$jachejka = carbon_get_the_post_meta('offer_nal_count');

									if( strlen($jachejka) == 0 ) {

										echo 'Не установлено';

									} else if ( $jachejka === 0 || $jachejka === '0' ) { 

										echo '<span class="db card-product__status">Под заказ</span>';

									} else {

										echo '<span class="db card-product__status">В НАЛИЧИИ</span>';
									}
							    ?>
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
									data-sku1c = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku_1c")?>"
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