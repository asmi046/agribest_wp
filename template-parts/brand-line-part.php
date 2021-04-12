<div class="brand-sl__section brand-sl__section-padding">
    <div class="inner">
        <div class="brand-sl">
            <?
            $brand = carbon_get_theme_option('brand_banner');
            if($brand) {
                $brandIndex = 0;
                foreach($brand as $itemb) { 
                    ?>
                    <div class="brand-sl__item">
                        <a href="#" class="db brand"> 
                            <img src="<?php echo wp_get_attachment_image_src($itemb['brand_img'], 'full')[0];?>" title = "<? echo $itemb['brand_img_title']; ?>" class="spacer" alt="">
                        </a>
                    </div>
                    <?
                    $brandIndex++;
                }
            }
            ?>
        </div>
    </div>
</div>