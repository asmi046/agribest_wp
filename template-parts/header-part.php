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
                <!-- <a href="<?echo get_the_permalink(53);?>" class="db cart"></a> -->
                <a href="<?echo get_the_permalink(53);?>" class = "bascet_wrapper_head">
                    <div class = "db cart"></div>
                    <div class="purchase-couter bascet_counter">0</div>
                </a>
                
                <a href="<?echo get_the_permalink(93);?>" class="user-account">
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
            <form role="search" method="get" id="searchform" class="search" action="<?php echo home_url( '/' ) ?>">
                <input type="search" class="search__field inputbox" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s">
                <button type="submit" tabindex="2" id="searchsubmit" value="найти">
                    <img src = "<?php echo get_template_directory_uri();?>/img/search.svg"/>
                </button>
            </form>
            <div class="contacts-box ">
                <span class="db address">
                    <span class="marker">
                        <img src = "<?php echo get_template_directory_uri();?>/img/adrmarc.svg" />
                    </span>
                    Адрес: г.Курск, ул.50 лет Октября,175А, оф.21
                </span>
                <span class="tel db desktop"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></span>
                <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="tel db mobile"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></a>
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
                <?php wp_nav_menu( array('theme_location' => 'menu_cat','menu_class' => 'ul-clean',
                'container_class' => 'ul-clean','container' => false )); ?>
            </div>
        </div>
    </div>
</header>