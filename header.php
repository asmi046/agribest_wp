<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> 
<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">

    <link rel="icon" type="image/png" sizes="256x256" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png">
    <link rel="icon" type="image/png" sizes="128x128" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png">
    <link rel="icon" type="image/svg+xml" sizes="any" href="<?php echo get_template_directory_uri();?>/img/favicons/airpods.svg"> 

    <title><?php wp_title(); ?></title>
    	
    <?php wp_head();?> 
	
</head> 
<body>

<!-- Скрипт для вывода яндекс карт Подключать непосредственно перед вызовом скрипта инициализации карты-->
<!-- <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> -->



<!-- Подключение  модальных окон-->
<? include "modal-win.php";?>

<div id="wrapper">
        <header id="header">
            <div class="header__top">
                <div class="inner">
                    <nav class="store-menu__wr">
                        <ul class="store-menu">
                            <li><a href="#">Каталог</a></li>
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Оплата и доставка</a></li>
                            <li><a href="#">Сотрудничество</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="store-btn-box">
                        <a href="#" class="call_request db">
                            <span>
                                <img src = "<?php echo get_template_directory_uri();?>/img/call_mob.svg" />
                            </span>
                        </a>
                        <a href="#" class="db cart"></a>
                        <div class="purchase-couter">76</div>
                        <a href="#" class="user-account">
                            <span class="icon"></span>
                            Кабинет
                        </a>
                    </div>

                </div>
            </div>
            <div class="header__middle">
                <div class="inner">
                    <a href="/" class="logo">
                        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="spacer" alt="логотип Agribest">
                    </a>
                    <form class="search">
                        <input type="search" class="search__field inputbox" placeholder="Поиск">
                        <button type="submit">
                            <img src = "<?php echo get_template_directory_uri();?>/img/search.svg"/>
                        </button>
                    </form>
                    <div class="contacts-box ">
                        <span class="db address">
                            <span class="marker">
                                <img src = "<?php echo get_template_directory_uri();?>/img/adrmarc.svg" />
                            </span>
                            Адрес: г. Курск, Пн-Пт: с 9:00-20:00
                        </span>
                        <span class="tel db desktop">8 (800) 700-56-67</span>
                        <a href="tel:88007005667" class="tel db mobile">8 (800) 700-56-67</a>
                        <a href="#" class="call-request">
                            <span class="phone-icon-box">
                                <img src = "<?php echo get_template_directory_uri();?>/img/recal_dst.svg"/>
                            </span>
                            Заказать звонок
                        </a>
                    </div>
                    <button class="burger-btn catalog-btn"><span><span></span></span></button>
                </div>
            </div>
            <div class="header__bottom">
                <div class="inner">
                    <button class="catalog-btn">
                        <span class="burcross">
                            <span></span>

                        </span>
                        <span class="catalog-btn__caption">
                            Каталог
                        </span>
                    </button>
                    <nav class="product-menu">
                        <ul>
                            <li><a href="#">Бытовая техника</a></li>
                            <li><a href="#">Дом и уют</a></li>
                            <li><a href="#">Детские товары</a></li>
                            <li><a href="#">Сад и огород</a></li>
                            <li><a href="#">Посуда и товары для кухни</a></li>
                            <li><a href="#">Хозтовары</a></li>
                        </ul>
                    </nav>
                    <div class="catalog-menu">
                        <button class="close-menu__btn"><span></span></button>
                        <div class="catalog-menu__inner-menu">
                            <h3 class="menu-caption">Бытовая техника</h3>
                            <ul>
                                <li><a href="#">Пункт меню 1</a></li>
                                <li><a href="#">Пункт меню 2</a></li>
                                <li><a href="#">Пункт меню 3</a></li>
                                <li><a href="#">Пункт меню 4</a></li>
                                <li><a href="#">Пункт меню 5</a></li>
                                <li><a href="#">Пункт меню 6</a></li>
                                <li><a href="#">Пункт меню 7</a></li>
                                <li><a href="#">Пункт меню 8</a></li>
                                <li><a href="#">Пункт меню 9</a></li>
                                <li><a href="#">Пункт меню 10</a></li>
                            </ul>
                        </div>
                        <div class="catalog-menu__inner-menu">
                            <h3 class="menu-caption">Дом и уют</h3>
                            <ul>
                                <li><a href="#">Пункт меню 1</a></li>
                                <li><a href="#">Пункт меню 2</a></li>
                                <li><a href="#">Пункт меню 3</a></li>
                                <li><a href="#">Пункт меню 4</a></li>
                                <li><a href="#">Пункт меню 5</a></li>
                                <li><a href="#">Пункт меню 6</a></li>
                                <li><a href="#">Пункт меню 7</a></li>
                                <li><a href="#">Пункт меню 8</a></li>
                                <li><a href="#">Пункт меню 9</a></li>
                                <li><a href="#">Пункт меню 10</a></li>
                            </ul>
                        </div>
                        <div class="catalog-menu__inner-menu">
                            <h3 class="menu-caption">Детские товары</h3>
                            <ul>
                                <li><a href="#">Пункт меню 1</a></li>
                                <li><a href="#">Пункт меню 2</a></li>
                                <li><a href="#">Пункт меню 3</a></li>
                                <li><a href="#">Пункт меню 4</a></li>
                                <li><a href="#">Пункт меню 5</a></li>
                                <li><a href="#">Пункт меню 6</a></li>
                                <li><a href="#">Пункт меню 7</a></li>
                                <li><a href="#">Пункт меню 8</a></li>
                                <li><a href="#">Пункт меню 9</a></li>
                                <li><a href="#">Пункт меню 10</a></li>
                            </ul>
                        </div>
                        <div class="catalog-menu__inner-menu">
                            <h3 class="menu-caption">Сад и огород</h3>
                            <ul>
                                <li><a href="#">Пункт меню 1</a></li>
                                <li><a href="#">Пункт меню 2</a></li>
                                <li><a href="#">Пункт меню 3</a></li>
                                <li><a href="#">Пункт меню 4</a></li>
                                <li><a href="#">Пункт меню 5</a></li>
                                <li><a href="#">Пункт меню 6</a></li>
                                <li><a href="#">Пункт меню 7</a></li>
                                <li><a href="#">Пункт меню 8</a></li>
                                <li><a href="#">Пункт меню 9</a></li>
                                <li><a href="#">Пункт меню 10</a></li>
                            </ul>
                        </div>
                        <div class="catalog-menu__inner-menu">
                            <h3 class="menu-caption">Посуда и товары для кухни</h3>
                            <ul>
                                <li><a href="#">Пункт меню 1</a></li>
                                <li><a href="#">Пункт меню 2</a></li>
                                <li><a href="#">Пункт меню 3</a></li>
                                <li><a href="#">Пункт меню 4</a></li>
                                <li><a href="#">Пункт меню 5</a></li>
                                <li><a href="#">Пункт меню 6</a></li>
                                <li><a href="#">Пункт меню 7</a></li>
                                <li><a href="#">Пункт меню 8</a></li>
                                <li><a href="#">Пункт меню 9</a></li>
                                <li><a href="#">Пункт меню 10</a></li>
                            </ul>
                        </div>
                        <div class="catalog-menu__inner-menu">
                            <h3 class="menu-caption">Хозтовары</h3>
                            <ul>
                                <li><a href="#">Пункт меню 1</a></li>
                                <li><a href="#">Пункт меню 2</a></li>
                                <li><a href="#">Пункт меню 3</a></li>
                                <li><a href="#">Пункт меню 4</a></li>
                                <li><a href="#">Пункт меню 5</a></li>
                                <li><a href="#">Пункт меню 6</a></li>
                                <li><a href="#">Пункт меню 7</a></li>
                                <li><a href="#">Пункт меню 8</a></li>
                                <li><a href="#">Пункт меню 9</a></li>
                                <li><a href="#">Пункт меню 10</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="banner">
                <div class="inner">
                    <div class="banner__item cover" style="background-image: url(image/banner-item-bg-1.jpg)">
                        <div class="banner__item__caption rL ">
                            Инвентарь по весенней акции
                            <a href="#" class="db"></a>
                        </div>
                    </div>
                    <div class="banner__item cover" style="background-image: url(image/banner-item-bg-2.jpg)">
                        <div class="banner__item__caption rL ">
                            Ускоренная доставка
                            <a href="#" class="db"></a>
                        </div>
                    </div>
                    <div class="banner__item cover" style="background-image: url(image/banner-item-bg-3.jpg)">
                        <div class="banner__item__caption rL ">
                            Посуда со скидкой до 30%
                            <a href="#" class="db"></a>
                        </div>
                    </div>

                </div>
            </div>
            <section class="new-arrivals">
                <div class="inner">
                    <h2 class="section-title">Новинки</h2>
                </div>
                <div class="product__grid product__box">
                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-1.jpg" alt="Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P" class="db spacer product__img">
                            <h3 class="product__name">Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P</h3>
                            <span class="db product__price">420 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-2.jpg" alt="Бочка пластиковая пищевая квадратная c ручками, 30 л" class="db spacer product__img">
                            <h3 class="product__name">Бочка пластиковая пищевая квадратная c ручками, 30 л </h3>
                            <span class="db product__price">570 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-3.jpg" alt="Лампа керосиновая 225, 28 см" class="db spacer product__img">
                            <h3 class="product__name">Лампа керосиновая 225, 28 см</h3>
                            <span class="db product__price">350 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-4.jpg" alt="Веревка полипропиленовая d-10 мм, 25 м" class="db spacer product__img">
                            <h3 class="product__name">Веревка полипропиленовая d-10 мм, 25 м</h3>
                            <span class="db product__price">350 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-4.jpg" alt="Веревка полипропиленовая d-10 мм, 25 м" class="db spacer product__img">
                            <h3 class="product__name">Веревка полипропиленовая d-10 мм, 25 м</h3>
                            <span class="db product__price">350 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-3.jpg" alt="Лампа керосиновая 225, 28 см" class="db spacer product__img">
                            <h3 class="product__name">Лампа керосиновая 225, 28 см</h3>
                            <span class="db product__price">350 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-2.jpg" alt="Бочка пластиковая пищевая квадратная c ручками, 30 л" class="db spacer product__img">
                            <h3 class="product__name">Бочка пластиковая пищевая квадратная c ручками, 30 л </h3>
                            <span class="db product__price">570 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-1.jpg" alt="Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P" class="db spacer product__img">
                            <h3 class="product__name">Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P</h3>
                            <span class="db product__price">420 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <div class="brand-sl__section brand-sl__section-padding">
                <div class="inner">
                    <div class="brand-sl">
                        <div class="brand-sl__item">
                            <a href="#" class="db brand">
                                <img src="image/brand-img-1.png" class="spacer" alt="">
                            </a>
                        </div>
                        <div class="brand-sl__item">
                            <a href="#" class="db brand">
                                <img src="image/brand-img-2.png" class="spacer" alt="">
                            </a>
                        </div>
                        <div class="brand-sl__item">
                            <a href="#" class="db brand">
                                <img src="image/brand-img-3.png" class="spacer" alt="">
                            </a>
                        </div>
                        <div class="brand-sl__item">
                            <a href="#" class="db brand">
                                <img src="image/brand-img-4.png" class="spacer" alt="">
                            </a>
                        </div>
                        <div class="brand-sl__item">
                            <a href="#" class="db brand">
                                <img src="image/brand-img-5.png" class="spacer" alt="">
                            </a>
                        </div>
                        <div class="brand-sl__item">
                            <a href="#" class="db brand">
                                <img src="image/brand-img-6.png" class="spacer" alt="">
                            </a>
                        </div>
                        <div class="brand-sl__item">
                            <a href="#" class="db brand">
                                <img src="image/brand-img-7.png" class="spacer" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="sale-porduct">
                <div class="inner">
                    <h2 class="section-title">Товары со скидкой</h2>
                </div>
                <div class="product__grid product__box">
                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-1.jpg" alt="Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P" class="db spacer product__img">
                            <h3 class="product__name">Перчатки нейлоновые без ПВХ, ХL Fiberon PSV033P</h3>
                            <span class="db product__price">420 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-2.jpg" alt="Бочка пластиковая пищевая квадратная c ручками, 30 л" class="db spacer product__img">
                            <h3 class="product__name">Бочка пластиковая пищевая квадратная c ручками, 30 л </h3>
                            <span class="db product__price">570 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-3.jpg" alt="Лампа керосиновая 225, 28 см" class="db spacer product__img">
                            <h3 class="product__name">Лампа керосиновая 225, 28 см</h3>
                            <span class="db product__price">350 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="product__wr">
                        <div class="product">
                            <img src="image/product-img-4.jpg" alt="Веревка полипропиленовая d-10 мм, 25 м" class="db spacer product__img">
                            <h3 class="product__name">Веревка полипропиленовая d-10 мм, 25 м</h3>
                            <span class="db product__price">350 руб.</span>
                            <div class="product__bottom">
                                <a href="#" class="db btn btn__details">Подробнее</a>
                                <button class="btn btn__to-card">В корзину</button>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <div class="map-section">
                <div id="map"></div>
                <div class="inner">
                    <div class="map-address-box__wr">
                        <div class="map-address-box">
                            <h2 class="address_caption">
                                Адрес склада:
                            </h2>
                            <p>г. Курск, ул. 2-я Рабочая, д. 19,стр. 21</p>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <footer id="footer">
            <div class="inner">
                <div class="footer__item copy-logo">
                    <img src="img/footer__logo.png" alt="Логотип" class="footer__logo db">
                    <span class="db copyright">Все права защищены АгриБест©</span>
                </div>
                <div class="footer__item footer__menu">
                    <ul>
                        <li><a href="#">Каталог</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">Оплата и доставка</a></li>
                        <li><a href="#">Сотрудничество</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer__item footer__menu">
                    <ul>
                        <li><a href="#">Бытовая техника</a></li>
                        <li><a href="#">Дом и уют</a></li>
                        <li><a href="#">Детские товары</a></li>
                        <li><a href="#">Сад и огород</a></li>
                        <li><a href="#">Хозтовары</a></li>
                        <li><a href="#">Посуда</a></li>
                    </ul>
                </div>
                <div class="contacts-box">
                    <span class="db address">
                        <span class="marker">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="425.963px" height="425.963px" viewBox="0 0 425.963 425.963" style="enable-background:new 0 0 425.963 425.963;" xml:space="preserve">
                                <path class="marker-icon" d="M213.285,0h-0.608C139.114,0,79.268,59.826,79.268,133.361c0,48.202,21.952,111.817,65.246,189.081
		c32.098,57.281,64.646,101.152,64.972,101.588c0.906,1.217,2.334,1.934,3.847,1.934c0.043,0,0.087,0,0.13-0.002
		c1.561-0.043,3.002-0.842,3.868-2.143c0.321-0.486,32.637-49.287,64.517-108.976c43.03-80.563,64.848-141.624,64.848-181.482
		C346.693,59.825,286.846,0,213.285,0z M274.865,136.62c0,34.124-27.761,61.884-61.885,61.884
		c-34.123,0-61.884-27.761-61.884-61.884s27.761-61.884,61.884-61.884C247.104,74.736,274.865,102.497,274.865,136.62z" />
                            </svg>
                        </span>
                        Адрес: г. Курск, Пн-Пт: с 9:00-20:00
                    </span>
                    <span class="tel db desktop">8 (800) 700-56-67</span>
                    <a href="tel:88007005667" class="tel db mobile">8 (800) 700-56-67</a>
                    <a href="#" class="call-request">
                        <span class="phone-icon-box">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
                                <path class="phone-icon" d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
			c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
			c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
			C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                            </svg>
                        </span>
                        Заказать звонок
                    </a>
                </div>
            </div>
        </footer>
    </div>