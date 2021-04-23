<?php get_template_part('template-parts/map-part');?>
	
<footer id="footer">
    <div class="inner">
        <div class="footer__item copy-logo">
            <img src="<?php echo get_template_directory_uri();?>/img/footer__logo.png" alt="Логотип" class="footer__logo db">
            <span class="db copyright">Все права защищены АгриБест©</span>
        </div>
        <div class="footer__item footer__menu">
            <ul>
                <!-- <li><a href="#">Каталог</a></li>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Оплата и доставка</a></li>
                <li><a href="#">Сотрудничество</a></li>
                <li><a href="#">Контакты</a></li> -->
                
                <?php wp_nav_menu( array('theme_location' => 'menu_corp', 'container' => false )); ?>
        </div>
        <div class="footer__item footer__menu">
            <ul>
                <!-- <li><a href="#">Бытовая техника</a></li>
                <li><a href="#">Дом и уют</a></li>
                <li><a href="#">Детские товары</a></li>
                <li><a href="#">Сад и огород</a></li>
                <li><a href="#">Хозтовары</a></li>
                <li><a href="#">Посуда</a></li> -->
                <?php wp_nav_menu( array('theme_location' => 'menu_hot', 'container' => false )); ?>
            </ul>
        </div>
        <div class="contacts-box">
            <span class="db address">
                <span class="marker">
                    <img src = "<?php echo get_template_directory_uri();?>/img/adrmarc.svg" />
                </span>
                Адрес:  г.Курск, ул.50 лет Октября,175А, оф.21
            </span>
            <span class="tel db desktop"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></span>
            <a href="tel:tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="tel db mobile"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></a>
            <a href="#" class="call-request">
                <span class="phone-icon-box">
                    <img src = "<?php echo get_template_directory_uri();?>/img/recal_dst.svg"/>
                </span>
                Заказать звонок
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>