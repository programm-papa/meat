<?php $pageTitle = 'Корзина';
$backArrow = true;

require 'header.php' ?>

<div class="cart-page content-wrap">
    <div class="columns-wrap">
        <div class="left">
            <a href="#" class="clear-btn">очистить корзину</a>
            <div class="items-list">
                <!-- <div class="cart-item">
                    <a href="#" class="img-wrap">
                        <img src="img/cart-page/item-1.png" alt>
                        <div class="tags-wrap">
                            <div class="tag red">
                                <div class="l"></div>
                                -20%
                                <div class="r"></div>
                            </div>
                        </div>
                    </a>
                    <div class="desc-wrap">
                        <div class="title-wrap">
                            <a href="#" class="title">Стейк Рибай. Choice</a>
                            <a href="#" class="remove">
                                <img src="img/svg/trash.svg" alt>
                            </a>
                        </div>
                        <div class="amount-wrap">
                            <div class="size">Порция: 0.25 - 0.35 кг/отруб</div>
                            <div class="amount">
                                <a href="#" class="btn minus">
                                    <?= SVG__MINUS ?>
                                </a>
                                <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                                <a href="#" class="btn plus">
                                    <?= SVG__PLUS ?>
                                </a>
                            </div>
                            <a href="#" class="remove">
                                <img src="img/svg/trash.svg" alt>
                            </a>
                        </div>
                        <div class="price-wrap">
                            <div class="price crossed">2 500 руб.</div>
                            <div class="price-new">2 200 руб./порция</div>
                        </div>
                    </div>
                </div>
                <div class="cart-item">
                    <a href="#" class="img-wrap">
                        <img src="img/cart-page/item-2.png" alt>
                    </a>
                    <div class="desc-wrap">
                        <div class="title-wrap">
                            <a href="#" class="title">Стейк Рибай. Select</a>
                            <a href="#" class="remove">
                                <img src="img/svg/trash.svg" alt>
                            </a>
                        </div>
                        <div class="amount-wrap">
                            <div class="size">Порция: 0.25 - 0.35 кг/отруб</div>
                            <div class="amount">
                                <a href="#" class="btn minus">
                                    <?= SVG__MINUS ?>
                                </a>
                                <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                                <a href="#" class="btn plus">
                                    <?= SVG__PLUS ?>
                                </a>
                            </div>
                            <a href="#" class="remove">
                                <img src="img/svg/trash.svg" alt>
                            </a>
                        </div>
                        <div class="price-wrap">
                            <div class="price ">1 800 руб.</div>
                        </div>
                    </div>
                </div> -->
                <div class="cart-item">
                    <a href="#" class="img-wrap">
                        <img src="img/cart-page/item-3.png" alt>
                    </a>
                    <div class="desc-wrap">
                        <div class="title-wrap">
                            <a href="#" class="title">Фарш из мраморной говядины</a>
                        </div>
                        <div class="size-wrap">
                            <div class="size">Порция: 0.25 - 0.35 кг/отруб</div>
                        </div>
                        <div class="price-wrap">
                            <div class="amount">
                                <a href="#" class="btn minus">
                                    <?= SVG__MINUS ?>
                                </a>
                                <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                                <a href="#" class="btn plus">
                                    <?= SVG__PLUS ?>
                                </a>
                            </div>
                            <div class="price ">1 200 руб.</div>
                            <a href="#" class="remove">
                                <img src="img/svg/trash.svg" alt>
                            </a>
                        </div>
                        <div class="cost-serving">
                            <div class="price">390 руб./0.4 кг</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right hide-md">
            <a href="#" class="next-btn hide-lg">Перейти к оформлению</a>
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
            <a href="#" class="next-btn hide-xl show-lg-flex">Перейти к оформлению</a>
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
    <div class="gift-block">
        <div class="block-title">Подарок</div>
        <div class="flex-wrap">
            <div class="left">
                <div class="cart-item">
                    <a href="#" class="img-wrap">
                        <img src="img/cart-page/item-4.png" alt>
                    </a>
                    <div class="desc-wrap">
                        <div class="title-wrap">
                            <a href="#" class="title">Минеральная вода из источников Крыма</a>
                        </div>
                        <div class="amount-wrap">
                            <div class="amount">
                                <a href="#" class="btn minus">
                                    <?= SVG__MINUS ?>
                                </a>
                                <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                                <a href="#" class="btn plus">
                                    <?= SVG__PLUS ?>
                                </a>
                            </div>
                            <a href="#" class="remove">
                                <img src="img/svg/trash.svg" alt>
                            </a>
                        </div>
                        <div class="price-wrap">
                            <div class="price crossed">80 руб.</div>
                            <div class="price-new">0 руб.</div>
                            <a href="#" class="to-cart-btn">В корзину</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right hide-md">
                <div class="text">Вы пополнили корзину на сумму: 9&nbsp;500 руб.</div>
                <div class="text">Вы можете воспользоваться нашим подарком, добавив его в корзину</div>
            </div>
        </div>
    </div>
    <div class="columns-wrap hide-xl show-md">
        <div class="right">
            <a href="#" class="next-btn hide-lg">Перейти к оформлению</a>
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
            <a href="#" class="next-btn hide-xl show-lg-flex">Перейти к оформлению</a>
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