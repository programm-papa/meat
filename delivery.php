<?php $pageTitle = 'Доставка';

require 'header.php' ?>

<div class="delivery-page content-wrap">
    <div class="subtitle">График приема заказов</div>
    <div class="table">
        <div class="row">
            <div class="title">День</div>
            <div class="cells hide-md">
                <div class="cell">Пн</div>
                <div class="cell">Вт</div>
                <div class="cell">Ср</div>
                <div class="cell">Чт</div>
                <div class="cell">Пт</div>
                <div class="cell">Сб</div>
                <div class="cell">Вс</div>
            </div>
            <div class="cells hide-xl show-md-flex">
                <div class="cell">Пн - Вс</div>
            </div>
        </div>
        <div class="row">
            <div class="title">Время</div>
            <div class="cells hide-md">
                <div class="cell">10:00-18:00</div>
                <div class="cell">10:00-18:00</div>
                <div class="cell">10:00-18:00</div>
                <div class="cell">10:00-18:00</div>
                <div class="cell">10:00-18:00</div>
                <div class="cell">10:00-18:00</div>
                <div class="cell">10:00-18:00</div>
            </div>
            <div class="cells hide-xl show-md-flex">
                <div class="cell">10:00-18:00</div>
            </div>
        </div>
    </div>
    <div class="text">
        <p>
            <span>Оформление заказов через менеджера:</span> +7 (812) 012-34-56;<br class="hide-xl show-md-inline"> с 10:00 до 18:00 с Пн-Вс
        </p>
        <p>
            <span>Через сайт</span> - круглосуточно
        </p>
        <p>
            <span>Сроки доставки</span>: При оформлении заказа до 19:00 доставка осуществляется на следующий день. При оформлении заказа после 19:00 доставка выполняется через день. Интервал доставки 11:00 - 19:00.
        </p>
    </div>
    <div class="map-block">
        <div class="subtitle">Стоимость доставки по Санкт-Петербургу и Ленинградской области</div>
        <div class="map-wrap">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A2f27e294fcb9913822990d41973ac66daf5ac806c3f92590dd8d74c939825d6b&amp;source=constructor" width="100%" height="620" frameborder="0"></iframe>
            <!-- <div class="prices">
                <div class="item">
                    <div class="num">1</div>
                    <p>250 руб.</p>
                </div>
                <div class="item">
                    <div class="num">2</div>
                    <p>350 руб.</p>
                </div>
                <div class="item">
                    <div class="num">3</div>
                    <p>350 руб.</p>
                </div>
            </div> -->
        </div>
    </div>
    <div class="text">
        <p>
            <span>Самовывоз</span>
        </p>
        <p>Адрес для самовывоза со склада:</p>
        <p>г.Санкт- Петербург, ул. Наименование улицы, дом, литера и т.д.</p>
    </div>
    <div class="text warn">
        <p>
            <span>Внимание!</span> Для своевременного получения товара с указанной точки самовывоза необходимо сделать полное оформление заказа и дождаться его подтверждения.
        </p>
        <p>Наши сотрудники свяжутся с Вами, когда он будет готов. Только после этого мы сможем быстро выдать Ваш заказ на складе-магазине, чтобы не задерживать Вас.</p>
        <p>Заказ с доставкой, оформленный после 19:00, вы можете получить только через день. Самовывоз можно сделать в любой день, в воскресенье – по согласованию с менеджером.</p>
    </div>
    <a href="#" class="btn">Выбирайте правильное мясо</a>
</div>

<?php require 'footer.php' ?>