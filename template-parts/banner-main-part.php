<?php 
    $homebg1 = wp_get_attachment_image_src( carbon_get_theme_option('banner_img_1'), 'full')[0];
    $homebg2 = wp_get_attachment_image_src( carbon_get_theme_option('banner_img_2'), 'full')[0];
    $homebg3 = wp_get_attachment_image_src( carbon_get_theme_option('banner_img_3'), 'full')[0];
 ?>

<div class="banner">
    <div class="inner">
        <div class="banner__item cover" style="background-image: url(<?php echo $homebg1?>);">
            <div class="banner__item__caption rL ">
                <? echo carbon_get_theme_option("banner_text_1"); ?>
                <a href="<? echo carbon_get_theme_option("banner_link_1"); ?>" class="db"></a>
            </div>
        </div>
        <div class="banner__item cover" style="background-image: url(<?php echo $homebg2?>);">
            <div class="banner__item__caption rL ">
                <? echo carbon_get_theme_option("banner_text_2"); ?>
                <a href="<? echo carbon_get_theme_option("banner_link_2"); ?>" class="db"></a>
            </div>
        </div>
        <div class="banner__item cover" style="background-image: url(<?php echo $homebg3?>);">
            <div class="banner__item__caption rL ">
                <? echo carbon_get_theme_option("banner_text_3"); ?>
                <a href="<? echo carbon_get_theme_option("banner_link_3"); ?>" class="db"></a>
            </div> 
        </div>

    </div>
</div>