<?php $pageTitle = 'Оформление заказа';
$backArrow = true;

require 'header.php' ?>

<div class="checkout-page content-wrap">
    <div class="columns-wrap">
        <div class="left">
            <div class="subtitle">Доставка и оплата</div>
            <div class="flex-wrap">
                <div class="column">
                    <div class="input-wrap">
                        <div class="label">Город*</div>
                        <div class="select-wrap">
                            <div class="select">
                                <div class="value">Санкт-Петербург</div>
                                <div class="icon">
                                    <img src="img/svg/triangle-d.svg" alt>
                                </div>
                            </div>
                            <div class="dd-wrap">
                                <a href="#" class="item">Великий Новгород</a>
                                <a href="#" class="item current">Санкт-Петербург</a>
                                <a href="#" class="item">Что-нибудь еще</a>
                            </div>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <div class="label">Адрес*</div>
                        <div class="input">
                            <input type="text" placeholder="просп. Труда, 14" required>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <div class="label">Дата доставки*</div>
                        <div class="select-wrap">
                            <div class="select">
                                <div class="value">27.11.21</div>
                                <div class="icon">
                                    <img src="img/svg/triangle-d.svg" alt>
                                </div>
                            </div>
                            <div class="dd-wrap">
                                <a href="#" class="item current">27.11.21</a>
                                <a href="#" class="item">28.11.21</a>
                                <a href="#" class="item">29.11.21</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <label class="radio-wrap">
                        <input type="radio" name="radio1" checked>
                        <span class="radio"></span>
                        <span class="text">
                            Курьером.<br>
                            Оплата товара и доставки заранее
                        </span>
                    </label>
                    <label class="radio-wrap">
                        <input type="radio" name="radio1">
                        <span class="radio"></span>
                        <span class="text">
                            Курьером.<br>
                            Оплата товара и доставки при получении
                        </span>
                    </label>
                    <label class="radio-wrap">
                        <input type="radio" name="radio1">
                        <span class="radio"></span>
                        <span class="text">
                            Самовывоз.<br>
                            Оплата в <a href="#">розничном магазине</a>
                        </span>
                    </label>
                </div>
            </div>
            <div class="line"></div>
            <div class="subtitle">Карта доставки и стоимость</div>
            <div class="map-wrap">
                <img src="img/product-page/map.png" alt>
                <div class="prices">
                    <div class="item">
                        <div class="num">1</div>
                        <p>800 руб.</p>
                    </div>
                    <div class="item">
                        <div class="num">2</div>
                        <p>1200 руб.</p>
                    </div>
                    <div class="item">
                        <div class="num">3</div>
                        <p>1500 руб.</p>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="subtitle">Контактная информация</div>
            <div class="flex-wrap">
                <div class="column">
                    <div class="input-wrap">
                        <div class="label">Ваше имя*</div>
                        <div class="input">
                            <input type="text" placeholder="Иванов Иван" required>
                        </div>
                    </div>
                    <div class="input-wrap w-auto">
                        <div class="label">Ваш номер телефона*</div>
                        <div class="input">
                            <input type="tel" placeholder="+7 (985) 001-80-90" required>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <div class="label">Ваш E-mail</div>
                        <div class="input">
                            <input type="email" placeholder="E-Mail">
                        </div>
                        <div class="err-wrap">
                            <div class="text">Неправильный адрес</div>
                            <img src="img/svg/error.svg" alt>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <div class="label">Каким способом удобно будет с вами связаться?</div>
                        <label class="radio-wrap">
                            <input type="radio" name="radio2" checked>
                            <span class="radio"></span>
                            <span class="text">По телефону</span>
                        </label>
                        <label class="radio-wrap">
                            <input type="radio" name="radio2">
                            <span class="radio"></span>
                            <span class="text">Email</span>
                        </label>
                        <label class="radio-wrap">
                            <input type="radio" name="radio2">
                            <span class="radio"></span>
                            <span class="text">Whatsapp</span>
                        </label>
                        <label class="radio-wrap">
                            <input type="radio" name="radio2">
                            <span class="radio"></span>
                            <span class="text">Viber</span>
                        </label>
                        <label class="radio-wrap">
                            <input type="radio" name="radio2">
                            <span class="radio"></span>
                            <span class="text">Telegram</span>
                        </label>
                    </div>
                    <div class="input-wrap">
                        <div class="label">Комментарий</div>
                        <div class="input">
                            <input type="text" maxlength="100" placeholder="Текст сообщения">
                        </div>
                        <div class="length">100</div>
                    </div>
                    <div class="required">Поля помеченые *, обязательные для заполнения</div>
                </div>
            </div>
        </div>
        <div class="right">
            <a href="#" class="next-btn hide-lg">Подтвердить заказ</a>
            <div class="personal-data hide-lg">
                Нажимая на кнопку, вы соглашаетесь<br>
                с <a href="#">Условиями обработки перс. данных</a>,<br>
                а также с <a href="#">Условиями продажи</a>
            </div>
            <div class="line hide-lg"></div>
            <div class="subtitle">Ваш заказ</div>
            <div class="flex-wrap">
                <div class="param">Кол-во товара (6)</div>
                <div class="value">9 800 руб.</div>
            </div>
            <div class="flex-wrap">
                <div class="param">Скидка</div>
                <div class="value red">-300 руб.</div>
            </div>
            <div class="line short"></div>
            <div class="subtitle">Общая стоимость</div>
            <div class="price-wrap">
                <div class="price">9 500 руб.</div>
                <img src="img/svg/warn-circle.svg" alt>
            </div>
            <div class="line hide-xl show-lg"></div>
            <a href="#" class="next-btn hide-xl show-lg-flex">Подтвердить заказ</a>
            <div class="personal-data hide-xl show-lg">
                Нажимая на кнопку, вы соглашаетесь<br>
                с <a href="#">Условиями обработки перс. данных</a>,<br>
                а также с <a href="#">Условиями продажи</a>
            </div>
            <div class="line"></div>
            <div class="info">
                <img src="img/svg/warn-circle.svg" alt>
                <div class="text">
                    Для оформления заказа необходимо пополнить корзину на минимальную сумму: <span class="bolder">1500 руб</span>
                </div>
            </div>
            <div class="info">
                <img src="img/svg/warn-circle.svg" alt>
                <div class="text">
                    При заказе на общую сумму <span class="bolder">от 5000 руб.</span> действует дополнительная скидка <span class="red">– 5%</span>
                </div>
            </div>
            <div class="info">
                <img src="img/svg/warn-circle.svg" alt>
                <div class="text">
                    Обращаем внимание на то, что ряд товаров в нашем магазине <span class="bolder">не имеет четко фиксированного веса.</span> Средний вес единицы товара указан в карточке товара.<br>
                    <br>
                    <span class="bolder">Итоговая стоимость вашего заказа может незначительно отличаться от суммы, указанной в корзине.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>