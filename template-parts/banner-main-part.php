<?php 
    $homebg1 = wp_get_attachment_image_src( carbon_get_theme_option('banner_img_1'), 'full')[0];
    $homebg2 = wp_get_attachment_image_src( carbon_get_theme_option('banner_img_2'), 'full')[0];
    $homebg3 = wp_get_attachment_image_src( carbon_get_theme_option('banner_img_3'), 'full')[0];
 ?>

<div class="banner">
    <div class="inner">
        <a href="<? echo carbon_get_theme_option("banner_link_1"); ?>" class="banner__item cover" style="background-image: url(<?php echo $homebg1?>);">
            <div class="banner__item__caption rL ">
                <? echo carbon_get_theme_option("banner_text_1"); ?>
                <span class="db"></span>
            </div>
        </a>
        <a href="<? echo carbon_get_theme_option("banner_link_2"); ?>" class="banner__item cover" style="background-image: url(<?php echo $homebg2?>);">
            <div class="banner__item__caption rL ">
                <? echo carbon_get_theme_option("banner_text_2"); ?>
                <span class="db"></span>
            </div>
        </a>
        <a href="<? echo carbon_get_theme_option("banner_link_3"); ?>" class="banner__item cover" style="background-image: url(<?php echo $homebg3?>);">
            <div class="banner__item__caption rL ">
                <? echo carbon_get_theme_option("banner_text_3"); ?>
                <span class="db"></span>
            </div> 
        </a>

    </div>
</div>