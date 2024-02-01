<?php get_header(); ?>

<main class="main">
            
    <?php get_template_part('template-parts/banner-main-part');?>
    <?php get_template_part('template-parts/novinki-main-part');?>
    <?php get_template_part('template-parts/brand-line-part');?>
    <section class="sb_banner">
        <div class="inner">
            <a href="http://www.sberbank.ru/businesscredit/partner/info?id=agribest&site=https://agribest.ru/&nocredit=true&utm_source=agribest&utm_medium=banner&utm_campaign=credit_light&erid=2RanynLq6TS">
                <img src="<?bloginfo('template_url')?>/img/rassrochka_sber_1297x369@1x.jpg" alt="Покупки в нашем магазине в кредит">
            </a>
        </div>
    </section>
    
    <?php get_template_part('template-parts/sale-main-part');?>
            

</main>

<?php get_footer(); ?>