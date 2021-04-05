<header id="header">
    <div class="header__top">
        <div class="inner">
            <nav class="store-menu__wr">
                <?php wp_nav_menu( array('theme_location' => 'menu_corp', 'container' => false, 'menu_class' => "store-menu" )); ?>
            </nav>
            <div class="store-btn-box">
                <a href="#" class="call_request db">
                    <span>
                        <img src = "<?php echo get_template_directory_uri();?>/img/call_mob.svg" />
                    </span>
                </a>
                <a href="<?echo get_the_permalink(53);?>" class="db cart"></a>
                <div class="purchase-couter bascet_counter">0</div>
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
            <?php wp_nav_menu( array('theme_location' => 'menu_hot', 'container' => false, 'menu_class' => "hot-menu" )); ?>
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