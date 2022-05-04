<?php $pageTitle = 'Стейк Рибай. Choice';
$backArrow = true;

require 'header.php' ?>

<div class="product-page content-wrap">
    <div class="info-wrap">
        <div class="slider-wrap hide-xl show-md">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/product-page/img-1.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/product-page/img-2.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/product-page/img-3.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/product-page/img-4.png" alt>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="tags-wrap">
                <div class="tag red">
                    <div class="l"></div>
                    -20%
                    <div class="r"></div>
                </div>
            </div>
            <a href="#" class="arrow l">
                <img src="img/svg/arrow-l-short.svg" alt>
            </a>
            <a href="#" class="arrow r">
                <img src="img/svg/arrow-l-short.svg" alt>
            </a>
        </div>
        <div class="img-wrap hide-md">
            <div class="img">
                <img src="img/product-page/img-1.png" alt class="current">
                <img src="img/product-page/img-2.png" alt>
                <img src="img/product-page/img-3.png" alt>
                <img src="img/product-page/img-4.png" alt>
                <div class="tags-wrap">
                    <div class="tag red">
                        <div class="l"></div>
                        -20%
                        <div class="r"></div>
                    </div>
                </div>
            </div>
            <div class="thumbs-wrap">
                <a href="#" class="item current">
                    <img src="img/product-page/img-1-thumb.png" alt>
                </a>
                <div class="separator"></div>
                <a href="#" class="item">
                    <img src="img/product-page/img-2-thumb.png" alt>
                </a>
                <div class="separator"></div>
                <a href="#" class="item">
                    <img src="img/product-page/img-3-thumb.png" alt>
                </a>
                <div class="separator"></div>
                <a href="#" class="item">
                    <img src="img/product-page/img-4-thumb.png" alt>
                </a>
            </div>
        </div>
        <div class="info">
            <div class="desc-wrap">
                <div class="price-wrap">
                    <div class="price crossed">2 500 руб.</div>
                    <div class="price-new">2 200 руб./порция</div>
                </div>
                <div class="price-params-wrap">
                    <div class="param">Вес порции, кг: 0.25 - 0.35</div>
                    <div class="separator"></div>
                    <div class="param">Цена за кг: 6 340 руб.</div>
                </div>
                <div class="to-cart-wrap">
                    <div class="amount-wrap">
                        <a href="#" class="btn minus">
                            <?= SVG__MINUS ?>
                        </a>
                        <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                        <a href="#" class="btn plus">
                            <?= SVG__PLUS ?>
                        </a>
                    </div>
                    <a href="#" class="cart-btn">В корзину</a>
                </div>
                <div class="desc">
                    <div class="text">
                        Нежный вкус и обильная сочность — за это мы и любим Рибай. Обладает второй степенью мраморности.
                    </div>
                </div>
                <div class="params-wrap">
                    <div class="param">Белки</div>
                    <div class="param">16</div>
                    <div class="separator"></div>
                    <div class="param">Жиры</div>
                    <div class="param">18.7</div>
                    <div class="separator"></div>
                    <div class="param">кКал</div>
                    <div class="param">226</div>
                </div>
                <a href="#" class="qm">
                    <img src="img/svg/qm.svg" alt>
                </a>
                <div class="tooltip">
                    <div class="text">
                        Обращаем внимание, что точную стоимость весовго товара сможем сообщить вам после оформления<br>
                        и сборки заказа.
                    </div>
                    <a href="#" class="close">
                        <img src="img/svg/close.svg" alt>
                    </a>
                </div>
            </div>
            <div class="props-wrap">
                <div class="item">
                    <div class="text">
                        Вакуумная<br>
                        упаковка
                    </div>
                    <img src="img/product-page/svg/icon-1.svg" alt class="icon hide-lg show-md">
                    <img src="img/product-page/svg/icon-1-lg.svg" alt class="icon hide-xl show-lg hide-md">
                </div>
                <div class="item">
                    <div class="text">
                        Влажное<br>
                        созревание
                    </div>
                    <img src="img/product-page/svg/icon-2.svg" alt class="icon hide-lg show-md">
                    <img src="img/product-page/svg/icon-2-lg.svg" alt class="icon hide-xl show-lg hide-md">
                </div>
                <div class="item">
                    <div class="text">
                        Охлажденная<br>
                        продукция
                    </div>
                    <img src="img/product-page/svg/icon-3.svg" alt class="icon hide-lg show-md">
                    <img src="img/product-page/svg/icon-3-lg.svg" alt class="icon hide-xl show-lg hide-md">
                </div>
                <div class="item">
                    <div class="text">
                        Срок годности<br>
                        21 день
                    </div>
                    <img src="img/product-page/svg/icon-4.svg" alt class="icon hide-lg show-md">
                    <img src="img/product-page/svg/icon-4-lg.svg" alt class="icon hide-xl show-lg hide-md">
                </div>
            </div>
        </div>
    </div>
    <div class="tabs-wrap">
        <a href="#" class="tab current">Описание</a>
        <div class="separator"></div>
        <a href="#" class="tab">Доставка</a>
        <div class="separator"></div>
        <a href="#" class="tab">Отзывы</a>
        <div class="separator"></div>
        <a href="#" class="tab">Рецепт</a>
    </div>
    <div class="tab-content-wrap">
        <div class="tab-content desc">
            <div class="columns-wrap">
                <div class="left">
                    Король мраморных стейков. Полученный из премиальной говядины Black Angus зернового откорма, рибай стейк с превосходной мраморной текстурой покорит вас своим богатым вкусом и ароматом. Это очень сочный и в меру жирный классический стейк.<br>
                    <br>
                    К такому стейку в качестве гарнира подойдет любой овощной салат с томатами. Уловить тонкие нотки вкуса поможет и сухое вино. Сделав заказ в нашем магазине можно устроить необычайно красивый романтический ужин для второй половинки или провести семейное торжество в кругу семьи.<br>
                    Рекомендуем прожарку "Medium".
                </div>
                <div class="right">
                    <div class="title">Грудинка</div>
                    <div class="scheme part-13">
                        <?= file_get_contents('img/svg/bull-2.svg') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content delivery">
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
                    <img src="img/product-page/map.png" alt>
                    <div class="prices">
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
                    </div>
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
        </div>
        <div class="tab-content reviews">
            <div class="columns-wrap">
                <div class="subtitle-wrap-md">
                    <div class="subtitle">Отзывы на нашем сайте</div>
                    <div class="desc">
                        На этой странице Вы можете оставить отзывы, предложения и комментарии по продукции и нашему сервису.
                        Мы открыты к вашим предложениям и пожеланиям.
                    </div>
                </div>
                <div class="left">
                    <div class="subtitle hide-md">Отзывы на нашем сайте</div>
                    <div class="desc hide-md">
                        На этой странице Вы можете оставить отзывы, предложения и комментарии по продукции и нашему сервису.<br>
                        Мы открыты к вашим предложениям и пожеланиям.
                    </div>
                    <div class="reviews-list">
                        <div class="review-card">
                            <div class="author-wrap">
                                <div class="img-wrap">
                                    <img src="img/mainpage/block-10-img-1.png" alt>
                                </div>
                                <div class="name">Иван Боярский</div>
                                <a href="img/product-page/img-1.png" class="photos-wrap" data-lightbox="review-1">
                                    <div class="count">
                                        <?= SVG__PIC ?>
                                        3
                                    </div>
                                    <div class="thumb-wrap">
                                        <img src="img/review-thumb.png" alt>
                                    </div>
                                </a>
                                <a href="img/product-page/img-2.png" class="photos-wrap" data-lightbox="review-1"></a>
                                <a href="img/product-page/img-3.png" class="photos-wrap" data-lightbox="review-1"></a>
                            </div>
                            <div class="text">
                                Мы заказываем мясо уже на протяжении порядка года, ни разу не было такого, чтобы не устроило качество. Мясо всегда свежее, качественное, охлажденное. Пахнет настоящим деревенским мясом, после приготовления не жесткое.<br>
                                Рекомендую, с уважением, Иван!
                            </div>
                            <div class="date-wrap">
                                <div class="stars">
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2-alt.svg" alt>
                                </div>
                                <div class="date">11.08.2021</div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="author-wrap">
                                <div class="img-wrap">
                                    <img src="img/mainpage/block-10-img-1.png" alt>
                                </div>
                                <div class="name">Иван Боярский</div>
                                <a href="img/product-page/img-1.png" class="photos-wrap" data-lightbox="review-2">
                                    <div class="count">
                                        <?= SVG__PIC ?>
                                        3
                                    </div>
                                    <div class="thumb-wrap">
                                        <img src="img/review-thumb.png" alt>
                                    </div>
                                </a>
                                <a href="img/product-page/img-2.png" class="photos-wrap" data-lightbox="review-2"></a>
                                <a href="img/product-page/img-3.png" class="photos-wrap" data-lightbox="review-2"></a>
                            </div>
                            <div class="text">
                                Мы заказываем мясо уже на протяжении порядка года, ни разу не было такого, чтобы не устроило качество. Мясо всегда свежее, качественное, охлажденное. Пахнет настоящим деревенским мясом, после приготовления не жесткое.<br>
                                Рекомендую, с уважением, Иван!
                            </div>
                            <div class="date-wrap">
                                <div class="stars">
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                </div>
                                <div class="date">11.08.2021</div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="author-wrap">
                                <div class="img-wrap">
                                    <img src="img/mainpage/block-10-img-1.png" alt>
                                </div>
                                <div class="name">Иван Боярский</div>
                                <a href="img/product-page/img-1.png" class="photos-wrap" data-lightbox="review-3">
                                    <div class="count">
                                        <?= SVG__PIC ?>
                                        3
                                    </div>
                                    <div class="thumb-wrap">
                                        <img src="img/review-thumb.png" alt>
                                    </div>
                                </a>
                                <a href="img/product-page/img-2.png" class="photos-wrap" data-lightbox="review-3"></a>
                                <a href="img/product-page/img-3.png" class="photos-wrap" data-lightbox="review-3"></a>
                            </div>
                            <div class="text">
                                Мы заказываем мясо уже на протяжении порядка года, ни разу не было такого, чтобы не устроило качество. Мясо всегда свежее, качественное, охлажденное. Пахнет настоящим деревенским мясом, после приготовления не жесткое.<br>
                                Рекомендую, с уважением, Иван!
                            </div>
                            <div class="date-wrap">
                                <div class="stars">
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                </div>
                                <div class="date">11.08.2021</div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="author-wrap">
                                <div class="img-wrap">
                                    <img src="img/mainpage/block-10-img-1.png" alt>
                                </div>
                                <div class="name">Иван Боярский</div>
                                <a href="img/product-page/img-1.png" class="photos-wrap" data-lightbox="review-4">
                                    <div class="count">
                                        <?= SVG__PIC ?>
                                        3
                                    </div>
                                    <div class="thumb-wrap">
                                        <img src="img/review-thumb.png" alt>
                                    </div>
                                </a>
                                <a href="img/product-page/img-2.png" class="photos-wrap" data-lightbox="review-4"></a>
                                <a href="img/product-page/img-3.png" class="photos-wrap" data-lightbox="review-4"></a>
                            </div>
                            <div class="text">
                                Мы заказываем мясо уже на протяжении порядка года, ни разу не было такого, чтобы не устроило качество. Мясо всегда свежее, качественное, охлажденное. Пахнет настоящим деревенским мясом, после приготовления не жесткое.<br>
                                Рекомендую, с уважением, Иван!
                            </div>
                            <div class="date-wrap">
                                <div class="stars">
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                </div>
                                <div class="date">11.08.2021</div>
                            </div>
                        </div>
                        <div class="review-card">
                            <div class="author-wrap">
                                <div class="img-wrap">
                                    <img src="img/mainpage/block-10-img-1.png" alt>
                                </div>
                                <div class="name">Иван Боярский</div>
                                <a href="img/product-page/img-1.png" class="photos-wrap" data-lightbox="review-5">
                                    <div class="count">
                                        <?= SVG__PIC ?>
                                        3
                                    </div>
                                    <div class="thumb-wrap">
                                        <img src="img/review-thumb.png" alt>
                                    </div>
                                </a>
                                <a href="img/product-page/img-2.png" class="photos-wrap" data-lightbox="review-5"></a>
                                <a href="img/product-page/img-3.png" class="photos-wrap" data-lightbox="review-5"></a>
                            </div>
                            <div class="text">
                                Мы заказываем мясо уже на протяжении порядка года, ни разу не было такого, чтобы не устроило качество. Мясо всегда свежее, качественное, охлажденное. Пахнет настоящим деревенским мясом, после приготовления не жесткое.<br>
                                Рекомендую, с уважением, Иван!
                            </div>
                            <div class="date-wrap">
                                <div class="stars">
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                    <img src="img/svg/star-2.svg" alt>
                                </div>
                                <div class="date">11.08.2021</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <a href="#" class="btn hide-md">Оставьте свой отзыв</a>
                    <div class="line"></div>
                    <div class="input-wrap">
                        <div class="label">Ваше имя*</div>
                        <div class="input">
                            <input type="text" placeholder="Иванов Иван">
                        </div>
                    </div>
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
                        <div class="label">Ваш E-mail</div>
                        <div class="input">
                            <input type="email" placeholder="E-Mail">
                        </div>
                    </div>
                    <div class="input-wrap">
                        <div class="label">Добавьте фотографии</div>
                        <div class="photos-wrap">
                            <input type="file" name="photos" multiple>
                            <div class="photo">
                                <img src="img/svg/photo.svg" alt>
                            </div>
                            <div class="text">
                                Нажмите на кнопку или перетащите фото в эту область<br>
                                <span>
                            до 3 изображений<br>
                            в формате PNG, JPEG.
                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <div class="label">Отзыв*</div>
                        <div class="input">
                            <input type="text" maxlength="250" placeholder="Текст сообщения">
                        </div>
                        <div class="length">250</div>
                    </div>
                    <div class="input-wrap">
                        <div class="label">Оцените продукцию*</div>
                        <div class="stars-wrap">
                            <?= SVG__STAR_BIG ?>
                            <?= SVG__STAR_BIG ?>
                            <?= SVG__STAR_BIG ?>
                            <?= SVG__STAR_BIG ?>
                            <?= SVG__STAR_BIG ?>
                        </div>
                    </div>
                    <div class="required">
                        Поля помеченые *, обязательные для заполнения
                    </div>
                </div>
                <div class="right hide-xl show-md">
                    <a href="#" class="btn">Оставьте свой отзыв</a>
                </div>
            </div>
            <a href="#" class="more-btn">Смотреть больше</a>
        </div>
        <div class="tab-content recipes">
            <div class="items-grid">
                <div class="product-card">
                    <a href="#" class="img-wrap">
                        <img src="img/recipes-category-page/img-1.png" alt>
                        <div class="tags-wrap">
                            <div class="tag red">
                                <div class="l"></div>
                                Жарим
                                <div class="r"></div>
                            </div>
                        </div>
                    </a>
                    <div class="desc-wrap">
                        <a href="#" class="title">Говядина Веллингтон</a>
                    </div>
                </div>
                <div class="product-card">
                    <a href="#" class="img-wrap">
                        <img src="img/recipes-category-page/img-2.png" alt>
                        <div class="tags-wrap">
                            <div class="tag red">
                                <div class="l"></div>
                                Жарим
                                <div class="r"></div>
                            </div>
                        </div>
                    </a>
                    <div class="desc-wrap">
                        <a href="#" class="title">Жареный стейк из говядины</a>
                    </div>
                </div>
                <div class="product-card">
                    <a href="#" class="img-wrap">
                        <img src="img/recipes-category-page/img-3.png" alt>
                        <div class="tags-wrap">
                            <div class="tag black">
                                <div class="l"></div>
                                Для Бургеров
                                <div class="r"></div>
                            </div>
                            <div class="tag red">
                                <div class="l"></div>
                                Жарим
                                <div class="r"></div>
                            </div>
                        </div>
                    </a>
                    <div class="desc-wrap">
                        <a href="#" class="title">Стейк терияки</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>