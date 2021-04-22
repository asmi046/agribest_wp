// возвращает куки с указанным name,
// или undefined, если ничего не найдено
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

  
$ = jQuery;

function number_format() {
    let elements = document.querySelectorAll('.price_formator');
    for (let elem of elements) {
        elem.dataset.realPrice = elem.innerHTML;
        elem.innerHTML = Number(elem.innerHTML).toLocaleString('ru-RU');
    }
}

//Маска для телефона
let mascedPhoneElem = document.querySelectorAll('input[type=tel]');
console.log(mascedPhoneElem);
if (mascedPhoneElem != undefined)
    for (let elem of mascedPhoneElem) {
        IMask(elem, {
            mask: '+{7}(000)000-00-00',
            lazy: true,  // make placeholder always visible
            placeholderChar: '_'     // defaults to '_'
        });
    }


document.addEventListener("DOMContentLoaded", () => {
    number_format();
    cart_recalc();
});
//-------------------------------------Корзина

let cart = [];
let cartCount = 0;

function cart_recalc() {
    cart = JSON.parse(localStorage.getItem("cart"));
    if (cart == null) cart = [];
    cartCount = 0;
    cartSumm = 0;
    for (let i = 0; i < cart.length; i++) {
        cartCount += Number(cart[i].count);

        cartSumm += Number(cart[i].count) * parseFloat(cart[i].price);
    }

    localStorage.setItem("cartcount", cartCount);
    localStorage.setItem("cartsumm", cartSumm);

    let elements = document.querySelectorAll('.bascet_counter');
    for (let elem of elements) {
        elem.innerHTML = cartCount;
    }

}

function add_tocart(elem, countElem) {


    let cartElem = {
        sku1c: elem.dataset.sku1c,
        sku: elem.dataset.sku,
        lnk: elem.dataset.lnk,
        price: elem.dataset.price,
        priceold: elem.dataset.oldprice,
        subtotal: elem.dataset.price,
        name: elem.dataset.name,
        count: (countElem == 0) ? elem.dataset.count : countElem,
        picture: elem.dataset.picture
    };

    if (cart.length == 0) {
        cart.push(cartElem);
    } else {
        let addet = true;
        for (let i = 0; i < cart.length; i++) {
            if (cart[i].sku == cartElem.sku) {
                cart[i].count++;
                cart[i].subtotal = Number(cart[i].count) * parseFloat(cart[i].price);
                addet = false;
                break;
            }
        }

        if (addet)
            cart.push(cartElem);
    }

    localStorage.setItem("cart", JSON.stringify(cart));
    cart_recalc();

    console.log(cartElem);
}

//-------------------------------------

// Функция верификации e-mail
function isEmail(email) {
    var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return regex.test(email);
}


(function () {

    // begin - catalog menu
    let $catalogBtn = jQuery('.catalog-btn');
    let $catalogMenu = jQuery('.catalog-menu');
    let $closeMenuBtn = jQuery('.close-menu__btn');
    let $body = jQuery('body');
    let $catalogMenuCaption = jQuery('.menu-caption');

    //    клик по кнопке Каталог в десктопной версии
    $catalogBtn.on('click', function () {
        jQuery(this).toggleClass('js__catalog-open');
        $catalogMenu.toggleClass('catalog-menu-open');

        if (jQuery(window).outerWidth() < 850) {
            $body.addClass('fixed');
        }
    });

    //    клик по заголовку каталога в версии для смартфонов
    $catalogMenuCaption.on('click', function () {
        if (jQuery(window).outerWidth() < 500) {
            jQuery(this).next('ul').slideToggle(300);
        }
    })

    //    клик по крестику в меню каталога в мобильной версии
    $closeMenuBtn.on('click', function () {
        $catalogMenu.removeClass('catalog-menu-open');
        $body.removeClass('fixed');
    });

    //  end - catalog menu
    //    подключаю слайдер
    jQuery('.brand-sl').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        dots: false,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 999,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });


    // Slider Товара
    $('.select-prod-slider').slick({
        arrows: false,
        dots: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 10,
        slidesToScroll: 1,
        centerMode: true,
        focusOnSelect: true,
        autoplaySpeed: 1800,
        asNavFor: ".select-slider-big",
        adaptiveHeight: true,
        vertical: true
    });
    $('.select-slider-big').slick({
        arrows: false,
        dots: false,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: false,
        asNavFor: ".select-prod-slider"
    });



    //подключаю фансибокс
    jQuery('.fancybox').fancybox();

    //    input type number
    (function quantityProducts() {
        var $quantityArrowMinus = jQuery(".minus");
        var $quantityArrowPlus = jQuery(".plus");
        var $quantityNum = jQuery(".quantity");

        $quantityArrowMinus.click(function (e) {
            e.preventDefault();
            quantityMinus();
        });
        $quantityArrowPlus.click(function (e) {
            e.preventDefault();
            quantityPlus();
        });

        function quantityMinus() {
            if ($quantityNum.val() > 1) {
                $quantityNum.val(+$quantityNum.val() - 1);
            }
        }

        function quantityPlus() {
            let maxVal = $quantityNum.attr("max");

            if ($quantityNum.val() + 1 > maxVal) return;

            $quantityNum.val(+$quantityNum.val() + 1);
        }
    })();

    //    управление видом каталога
    let $btnGrid = jQuery('.js__grid');
    let $btnRow = jQuery('.js__row');
    let $productBox = jQuery('.product__box');
    let $viewBox = jQuery('.js__view');

    //    ф-ция делает каталог строками
    function makeARow() {
        $productBox.removeClass('product__grid');
        $productBox.addClass('product__row');
    }
    //    ф-ция делает каталог сеткой
    function makeAGrid() {
        $productBox.removeClass('product__row');
        $productBox.addClass('product__grid');
    }

    //    фукнция слежения за отображением переключателя вида каталога товаров в зависимости от расширения
    function watchView() {
        if (jQuery(window).outerWidth() < 740) {
            makeAGrid();
            // $viewBox.hide();
        } else {

            if (jQuery('.product__row').length) { } else {
                if (jQuery('.js__view').attr('style') == 'display: none;') {
                    jQuery('.js__view').attr('style', 'display: flex;')
                }
                // $viewBox.show();
                makeAGrid()
            }

        }
    }

    watchView();

    $btnRow.on('click', function () {

        jQuery(".view__btn").removeClass("view__btn_select");
        jQuery(this).addClass("view__btn_select");
        makeARow();
        document.cookie = "vtype=grid";
        console.log("vtype=grid");
    });
    $btnGrid.on('click', function () {
        jQuery(".view__btn").removeClass("view__btn_select");
        jQuery(this).addClass("view__btn_select");
        makeAGrid();
        document.cookie = "vtype=plan";
        console.log("vtype=plan");
    });
    // конец   управление видом каталога 

    //    функция адаптации шапки сайта
    function headerTransformMobile() {
        if (jQuery(window).outerWidth() < 850) {
            let mailLogo = $('.logo').delay();
            let headerTop = $('.header__top .inner');
            headerTop.prepend(mailLogo);

            let storeMenu = $('.store-menu__wr');
            let catalogMenu = $('.catalog-menu');
            catalogMenu.append(storeMenu);

        } else {
            if (jQuery('.header__top .logo').length) {
                let mailLogo = jQuery('.logo').delay();
                jQuery('.header__middle .inner').prepend(mailLogo);

                let storeMenu = $('.store-menu__wr');
                jQuery('.header__top .inner').prepend(storeMenu);
            }
        }
    }

    headerTransformMobile()
    jQuery(window).resize(function () {
        watchView();
        headerTransformMobile();
        if ($(window).outerWidth() >= 500) {
            console.log('Вали инлафные стили!')
            $('.catalog-menu ul').removeAttr('style'); //чищу инлайновые стили которые могли остаться у внутренних меню каталога
        }
    });

})();


jQuery(document).ready(function () {

    // Сразу маскируем все поля телефонов
    var inputmask_phone = { "mask": "+7(999)999-99-99" };
    jQuery("input[type=tel]").inputmask(inputmask_phone);

    // Типовой скрипт для отправки сообщений на почту

    jQuery("#clsubmit").click(function () {

        e.preventDefault();

        var jqXHR = jQuery.post(
            allAjax.ajaxurl,
            {
                action: 'send_mail',
                nonce: allAjax.nonce,
                formsubject: jQuery("#formsubject").val(),
            }

        );


        jqXHR.done(function (responce) {  //Всегда при удачной отправке переход для страницу благодарности
            document.location.href = 'https://osagoprofi.su/stranica-blagodarnosti';
        });

        jqXHR.fail(function (responce) {
            jQuery('#messgeModal #lineMsg').html("Произошла ошибка. Попробуйте позднее.");
            jQuery('#messgeModal').arcticmodal();
        });
    });
});


$(".call-request").on('click', function (e) {
    e.preventDefault();
    jQuery("#agriwind").arcticmodal();
});


$('.agriwind').click(function (e) {

    e.preventDefault();
    var namew = $("#form-namew").val();
    var emailw = $("#form-emailw").val();
    var telw = $("#form-telw").val();

    // if (jQuery("#form-namew").val() == "") {
    //     jQuery("#form-namew").css("border","1px solid red");
    //     return;
    // }

    // if (jQuery("#form-emailw").val() == ""){
    //     jQuery("#form-emailw").css("border","1px solid red");
    //     return;
    // }

    if (jQuery("#form-telw").val() == "") {
        jQuery("#form-telw").css("border", "1px solid red");
        return;
    }

    else {
        var jqXHR = jQuery.post(
            allAjax.ajaxurl,
            {
                action: 'sendagri',
                nonce: allAjax.nonce,
                namew: namew,
                emailw: emailw,
                telw: telw,
            }
        );

        jqXHR.done(function (responce) {
            jQuery(".headen_form_blk").hide();
            jQuery('.SendetMsg').show();
        });

        jqXHR.fail(function (responce) {
            alert("Произошла ошибка. Попробуйте позднее.");
        });

    }
});
