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


<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

<script>
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {
                center: [51.733664, 36.238463],
                zoom: 16
            });

            myMap.controls.add('zoomControl', {
                size: "large"
            });

            myPlacemark1 = new ymaps.Placemark([51.735152, 36.240919], {
                // Свойства. 
                hintContent: '<div class="map-hint">Склад</div>',
                balloonContent: '<div class="map-hint">Главный склад <span class="db">Agribest</span></div>',
            }, {
                iconImageHref: '/img/marker.svg',
                // Размеры метки.
                iconImageSize: [26, 41],
                iconImageOffset: [-13, -20]
            });



            myMap.geoObjects
                .add(myPlacemark1)
                .add(myPlacemark2)
        }

    </script>