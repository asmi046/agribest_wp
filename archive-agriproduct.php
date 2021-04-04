<?php get_header(); ?>

<main class="main">
    
    <div class="bread-crumbs-box">
                <div class="inner">
                    
                    <div class="bread-crumbs">
                        <ul>
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Каталог</a></li>
                            <li><a href="#">Посуда и товары для кухни</a></li>
                            <li><span>Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P</span></li>
                        </ul>
                    </div>
                </div>
    </div>
    
    <div class="bread-crumbs-box">
        <div class="inner">
                    
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<div class="bread-crumbs">','</div>' );
                    }
                ?> 
        </div>
    </div>

    <section class="products-catalog">
        <div class="inner">
            <h1 class="section-title">Посуда и товары для кухня</h1>
                    <div class="view js__view">
                        <span class="db view__caption">Вид: </span>
                        <button class="view__btn view__btn-grid js__grid">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <button class="view__btn view__btn-row js__row">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
            </div>
        </div>

        <div class=" product__box product__grid">
            <?php
                $arg = $wp_query->query;
                $queryM = new WP_Query($arg);
                while($queryM->have_posts()):
                    $queryM->the_post();
                    get_template_part('template-parts/tovar-element');
                endwhile;
                
                wp_reset_postdata();
            ?>
        </div>
    </section>

    <div class="inner">
        <div class="page-nav">
            <ul>
                <li><a href="#" class="page-nav__prev"></a></li>
                <li><span class="page-nav__current">1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><span>...</span></li>
                <li><a href="#">10</a></li>
                <li><a href="#" class="page-nav__next"></a></li>
            </ul>
        </div>
        <p class="common-page-text">
            Социальная интеграция в условиях модерна, лишённого традиционных и религиозных связей, представляли главный исследовательский интерес Дюркгейма. Первый крупный труд социолога, «О разделении общественного труда», увидел свет в 1893 году, а через два года он опубликовал свои «Правила социологического метода». Тогда же он стал первым профессором социологии первого во Франции социологического факультета[8]. В 1897 году он представил монографию «Суицид», где провёл сравнительный анализ статистики самоубийств в католических и протестантских обществах. Данная работа, положившая начало современным социологическим исследованиям, позволила окончательно отделить социологию от психологии и социальной философии. В 1898 году Дюркгейм учредил журнал L’Année Sociologique («Социологический ежегодник»). Наконец, в книге 1912 года «Элементарные формы религиозной жизни» Дюркгейм представил свою теорию религии, основанную на сопоставлении общественной и культурной жизни аборигенов и современников.
        </p>
    </div>


</main>

<?php get_footer(); ?>