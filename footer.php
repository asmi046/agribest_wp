<?php get_template_part('template-parts/map-part');?>
	
<footer id="footer">
    <div class="inner">
        <div class="footer__item copy-logo">
            <img src="<?php echo get_template_directory_uri();?>/img/footer__logo.png" alt="Логотип" class="footer__logo db">
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
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>