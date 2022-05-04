<?php $pageTitle = 'Главная';

require 'header.php' ?>

<div class="mainpage content-wrap">
    <div class="block-1">
        <div class="title">
            Доставка мяса<br class="hide-xl show-sm-inline"> и продуктов<br class="hide-sm">
            из мраморной говядины
        </div>
       
        <div class="flex-wrap">
            <div class="description">
                <div class="text bold-text">
                    С домашней фермы к вашему столу
                </div>
                <div class="text">
                в Санкт-Петербург 
                и Ленинградскую область
                </div>
            </div>
            <div class="delivery-date">
               <div class="text">Ближайшие дни доставки: </div>
               <div class="month">май</div>
               <div class="days">
                   <div class="day">
                       <div class="date"></div>
                       <div class="reduction">вт</div>
                   </div>
                   <div class="day">
                       <div class="date"></div>
                       <div class="reduction">ср</div>
                   </div>
                   <div class="day">
                       <div class="date"></div>
                       <div class="reduction">чт</div>
                   </div>
                   <div class="day available">
                       <div class="date">6</div>
                       <div class="reduction">пт</div>
                   </div>
                   <div class="day available">
                       <div class="date">7</div>
                       <div class="reduction">сб</div>
                   </div>
                   <div class="day available">
                       <div class="date">8</div>
                       <div class="reduction">вс</div>
                   </div>
                   <div class="day available">
                       <div class="date">9</div>
                       <div class="reduction">пн</div>
                   </div>
               </div>
            </div>
        </div>
        <div class="img">
            <img src="img/mainpage/block-1-img-2.png" class="hide-lg" alt>
            <img src="img/mainpage/block-1-img-2-lg.png" class="hide-xl show-lg hide-md" alt>
            <img src="img/mainpage/block-1-img-2-md.png" class="hide-xl show-md hide-sm" alt>
            <img src="img/mainpage/block-1-img-2-sm.png" class="hide-xl show-sm" alt>
        </div>
    </div>
    <div class="block-2">
        <div class="title-wrap">
            <div class="title">Каталог</div>
            <a href="#" class="more-btn hide-lg show-md">
                <?= SVG__ARROW_R ?>
            </a>
        </div>
        <div class="items-grid">
            <a href="#" class="item">
                <img src="img/mainpage/catalog-item.png" alt class="img">
                <div class="overlay">
                    <div class="title">Вырезка</div>
                    <div class="price">
                        <span>4 000</span>
                        <span>РУБ/КГ</span>
                    </div>
                    <?= SVG__ARROW_R ?>
                </div>
            </a>
            <a href="#" class="item">
                <img src="img/mainpage/catalog-item.png" alt class="img">
                <div class="overlay">
                    <div class="title">Вырезка</div>
                    <div class="price">
                        <span>4 000</span>
                        <span>РУБ/КГ</span>
                    </div>
                    <?= SVG__ARROW_R ?>
                </div>
            </a>
            <a href="#" class="item">
                <img src="img/mainpage/catalog-item.png" alt class="img">
                <div class="overlay">
                    <div class="title">Вырезка</div>
                    <div class="price">
                        <span>4 000</span>
                        <span>РУБ/КГ</span>
                    </div>
                    <?= SVG__ARROW_R ?>
                </div>
            </a>
            <a href="#" class="item">
                <img src="img/mainpage/catalog-item.png" alt class="img">
                <div class="overlay">
                    <div class="title">Вырезка</div>
                    <div class="price">
                        <span>4 000</span>
                        <span>РУБ/КГ</span>
                    </div>
                    <?= SVG__ARROW_R ?>
                </div>
            </a>
        </div>
    </div>
    <div class="block-3">
        <div class="slider-wrap">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/mainpage/block-3-slider-1.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/mainpage/block-3-slider-2.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/mainpage/block-3-slider-3.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/mainpage/block-3-slider-4.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/mainpage/block-3-slider-5.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/mainpage/block-3-slider-5.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/mainpage/block-3-slider-4.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/mainpage/block-3-slider-3.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/mainpage/block-3-slider-2.png" alt>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/mainpage/block-3-slider-1.png" alt>
                    </div>
                </div>
            </div>
        </div>
        <div class="desc-wrap">
            <div class="title">
                Традиция<br>
                семейного дела
            </div>
            <div class="text">Загляните к нам на ферму</div>
            <div class="text">
                Животные обитают в природных условиях<br class="hide-lg">
                и питаются натуральными кормами. Не используем антибиотики и гормоны роста.<br>
                <br>
                Наши дети едят натуральное мясо с нашей фермы.
            </div>
        </div>
    </div>
    <div class="block-4">
        <div class="block-title">
            Как обрабатываем<br>
            мясо
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide item">
                    <div class="num">1</div>
                    <img src="img/mainpage/svg/block-4-item-1.svg" alt>
                    <div class="title">Охлаждаем мясо</div>
                    <div class="desc">
                        Мясо не выделяет сок, остается нежным и сочным
                    </div>
                </div>
                <div class="swiper-slide item">
                    <div class="num">2</div>
                    <img src="img/mainpage/svg/block-4-item-2.svg" alt>
                    <div class="title">Даем мясу созреть</div>
                    <div class="desc">
                        Мясо хранится в камере<br>
                        до 21 дня для изысканного вкуса
                    </div>
                </div>
                <div class="swiper-slide item">
                    <div class="num">3</div>
                    <img src="img/mainpage/svg/block-4-item-3.svg" alt>
                    <div class="title">Удаляем обрезки</div>
                    <div class="desc">
                        Мясо не требует дополнительной обработки
                    </div>
                </div>
                <div class="swiper-slide item">
                    <div class="num">4</div>
                    <img src="img/mainpage/svg/block-4-item-4.svg" alt>
                    <div class="title">Режем и фасуем</div>
                    <div class="desc">
                        Мясо не заветривается<br>
                        и не портится, фасуем в вакуум
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-5">
        <div class="columns-wrap">
            <div class="left">
                <div class="title">
                    Как работает<br>
                    доставка
                </div>
                <div class="subtitle">
                    Доставляем заказы в специальной<br class="hide-xl show-lg-inline"> машине<br class="hide-lg">
                    -холодильнике - бесплатно
                </div>
            </div>
            <div class="right">
                <div class="item">
                    <div class="title-wrap">
                        <div class="check">
                            <img src="img/svg/check.svg" alt>
                        </div>
                        <div class="title">Позвоним</div>
                    </div>
                    <div class="subtitle">
                        Позвоним по указанному вами<br>
                        телефону при заказе на сайте
                    </div>
                </div>
                <div class="item">
                    <div class="title-wrap">
                        <div class="check">
                            <img src="img/svg/check.svg" alt>
                        </div>
                        <div class="title">Уточним</div>
                    </div>
                    <div class="subtitle">
                        Уточним время доставки,<br>
                        вес и стоимость заказа.
                    </div>
                </div>
                <div class="item">
                    <div class="title-wrap">
                        <div class="check">
                            <img src="img/svg/check.svg" alt>
                        </div>
                        <div class="title">Доставим</div>
                    </div>
                    <div class="subtitle">
                        Дождитесь курьера, проверьте<br>
                        содержимое и оплатите заказ
                    </div>
                </div>
            </div>
            <img src="img/mainpage/block-5-img.png" alt class="img hide-lg">
            <img src="img/mainpage/block-5-img-lg.png" alt class="img hide-xl show-lg hide-md">
            <img src="img/mainpage/block-5-img-md.png" alt class="img hide-xl show-md hide-sm">
            <img src="img/mainpage/block-5-img-sm.png" alt class="img hide-xl show-sm">
            <img src="img/mainpage/svg/block-5-decor.svg" alt class="decor">
        </div>
    </div>
    <div class="block-6">
        <div class="block-title">
            Какое блюдо<br>
            приготовить
        </div>
        <div class="subtitle">Делимся опытом в кулинарии</div>
        <div class="scheme-wrap">
            <div class="info-column">
                <div class="icon-wrap">
                    <img src="img/svg/warn.svg" alt>
                </div>
                <div class="text">Выбери чаcть, чтобы узнать подробнее</div>
            </div>
            <div class="scheme-column">
                <?= file_get_contents('img/svg/bull-2.svg') ?>
                <div class="info-wrap">
                    <div class="title">Хвост</div>
                </div>
                <div class="info-wrap">
                    <div class="title">Задок</div>
                    <a href="#" class="link">Бедро копченое</a>
                    <a href="#" class="link">Филе бедра</a>
                    <a href="#" class="link">Оссо Буко</a>
                </div>
                <div class="info-wrap">
                    <div class="title">Вырезка</div>
                </div>
                <div class="info-wrap">
                    <div class="title">Тонкий край</div>
                    <a href="#" class="link">Стейк Нью-Йорк</a>
                    <a href="#" class="link">Стейк Филе-Миньон</a>
                </div>
                <div class="info-wrap">
                    <div class="title">Кострец</div>
                </div>
                <div class="info-wrap">
                    <div class="title">Оковалок</div>
                </div>
                <div class="info-wrap">
                    <div class="title">Пашина</div>
                </div>
                <div class="info-wrap">
                    <div class="title">Покромка</div>
                    <a href="#" class="link">Стейк Мачете</a>
                </div>
                <div class="info-wrap">
                    <div class="title">Ребра</div>
                </div>
                <div class="info-wrap">
                    <div class="title">Толстый край</div>
                    <a href="#" class="link">Стэйк Рибай</a>
                </div>
                <div class="info-wrap">
                    <div class="title">Копыта???</div>
                    <a href="#" class="link">???</a>
                </div>
                <div class="info-wrap">
                    <div class="title">Голяшка</div>
                    <a href="#" class="link">Коленный сустав</a>
                </div>
                <div class="info-wrap">
                    <div class="title">Грудинка</div>
                    <a href="#" class="link">Брискет</a>
                    <a href="#" class="link">Грудинка без кости</a>
                </div>
                <div class="info-wrap">
                    <div class="title">Лопатка</div>
                    <a href="#" class="link">Филе лопатки</a>
                    <a href="#" class="link">Вырезка лопатки</a>
                    <a href="#" class="link">Стейк Топ-Блейд</a>
                    <a href="#" class="link">Стейк Чак Рол</a>
                </div>
                <div class="info-wrap">
                    <div class="title">Шея</div>
                    <a href="#" class="link">Филе шейного отруба</a>
                </div>
                <div class="info-wrap">
                    <div class="title">Щечки</div>
                </div>
                <div class="info-wrap">
                    <div class="title">Язык</div>
                </div>
                <div class="info-wrap">
                    <div class="title">Голова???</div>
                    <a href="#" class="link">???</a>
                </div>
            </div>
            <div class="links-column">
                <a href="#" class="btn-wrap">
                    <div class="icon">
                        <?= SVG__STAR ?>
                    </div>
                    <div class="text">Субпродукты</div>
                    <div class="chevron">
                        <?= SVG__CHEVRON_D ?>
                    </div>
                </a>
                <div class="dd-wrap">
                    <div class="products">Язык, Щечки, Голяшка, Ребра, Толстый край, Тонкий край, Хвост</div>
                    <div class="links-wrap">
                        <a href="#" class="link">Набор для костного бульона</a>
                        <a href="#" class="link">Берцовые косточки</a>
                        <a href="#" class="link">Суповой набор</a>
                        <a href="#" class="link">Мослы</a>
                        <a href="#" class="link">Сердце</a>
                        <a href="#" class="link">Печень</a>
                        <a href="#" class="link">Почки</a>
                        <a href="#" class="link">Котлеты для бургеров</a>
                        <a href="#" class="link">Котлеты домашние</a>
                        <a href="#" class="link">Колбаски для гриля</a>
                        <a href="#" class="link">Фрикадельки</a>
                        <a href="#" class="link">Пельмени</a>
                        <a href="#" class="link">Купаты</a>
                        <a href="#" class="link">Фарш</a>
                        <a href="#" class="link">Бефстроганов</a>
                        <a href="#" class="link">Гуляш</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-7">
        <a href="img/mainpage/block-7-img-1.png" class="cert hide-sm" data-lightbox="cert">
            <img src="img/mainpage/block-7-img-1.png" alt>
        </a>
        <a href="img/mainpage/block-7-img-2.png" class="cert hide-sm" data-lightbox="cert">
            <img src="img/mainpage/block-7-img-2.png" alt>
        </a>
        <a href="img/mainpage/block-7-img-3.png" class="cert hide-sm" data-lightbox="cert">
            <img src="img/mainpage/block-7-img-3.png" alt>
        </a>
        <div class="certs-wrap hide-xl show-sm-flex">
            <a href="img/mainpage/block-7-img-1.png" class="cert" data-lightbox="cert-sm">
                <img src="img/mainpage/block-7-img-1.png" alt>
            </a>
            <a href="img/mainpage/block-7-img-2.png" class="cert" data-lightbox="cert-sm">
                <img src="img/mainpage/block-7-img-2.png" alt>
            </a>
            <a href="img/mainpage/block-7-img-3.png" class="cert" data-lightbox="cert-sm">
                <img src="img/mainpage/block-7-img-3.png" alt>
            </a>
        </div>
        <div class="title-wrap">
            <div class="title">
                Декларации<br>
                о соответствии
            </div>
            <div class="subtitle">
                Каждая партия мяса<br>
                сопровождается документами
            </div>
        </div>
    </div>
    <div class="block-8">
        <div class="title-wrap">
            <div class="title">
                Все еще есть<br>
                вопросы?
            </div>
            <div class="subtitle">
                Оставьте заявку<br>
                и мы вам перезвоним!
            </div>
        </div>
        <form method="post" class="form-wrap">
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
                <div class="label">Ваш E-mail*</div>
                <div class="input">
                    <input type="email" placeholder="E-mail" required>
                </div>
            </div>
            <div class="text">
                Поля, помеченные <span>*</span>, обязательные<br>
                для заполнения
            </div>
            <div class="separator"></div>
            <button type="submit" class="send-btn">Отправить</button>
            <div class="agreement">
                Нажимая на кнопку, вы соглашаетесь<br>
                с <a href="#">Условиями обработки перс. данных</a>
            </div>
        </form>
        <div class="success-popup"> <!-- Add class "opened" on form submit to show popup -->
            <div class="popup-title">
                Сообщение<br>
                отправлено
            </div>
            <div class="popup-text">
                Ваше сообщение очень важно для нас.<br>
                Мы ознакомимся с вашим запросом и обязательно свяжемся с вами по указанным контактам.
            </div>
            <a href="#" class="close-btn">OK</a>
            <a href="#" class="x">
                <img src="img/svg/close.svg" alt>
            </a>
        </div>
    </div>
    <div class="block-9">
        <div class="title-wrap">
            <div class="title">
                Наш Instagram
            </div>
            <div class="subtitle">
                Еще больше интересной информации<br>
                в нашем профиле, отзывы, рецепты<br>
                и многое другое.<br>
                <br>
                Нажмите на фото, переходите,<br>
                и подписывайтесь!
            </div>
        </div>
        <div class="items-wrap">
            <a href="img/mainpage/block-9-img-1.png" class="item" data-lightbox="instagram">
                <img src="img/mainpage/block-9-img-1.png" alt>
            </a>
            <a href="img/mainpage/block-9-img-2.png" class="item" data-lightbox="instagram">
                <img src="img/mainpage/block-9-img-2.png" alt>
            </a>
            <a href="img/mainpage/block-9-img-3.png" class="item" data-lightbox="instagram">
                <img src="img/mainpage/block-9-img-3.png" alt>
            </a>
        </div>
    </div>
    <div class="block-10">
        <div class="block-title">
            Впечатления<br>
            наших<br>
            клиентов
        </div>
        <div class="review-wrap">
            <div class="review">
                <div class="author-wrap">
                    <div class="img-wrap">
                        <img src="img/mainpage/block-10-img-1.png" alt>
                    </div>
                    <div class="name-wrap">
                        <div class="name">Аня Ярковая</div>
                        <div class="links-wrap">
                            <a href="#" class="link">instagram</a>
                            <div class="separator"></div>
                            <a href="#" class="link">facebook</a>
                        </div>
                    </div>
                </div>
                <div class="text">
                    Спасибо за быструю доставку и свежее мясо. Все очень понравилось: от заказа, до доставки. Отдельное спасибо Марине, которая помогла подобрать мясо. Сервис на высоте! И очень приятно было получить в подарок специи и фирменный рецепт. Ребята, продолжайте в том же духе!
                </div>
                <div class="date-wrap">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star-alt.svg" alt class="star">
                    <div class="date">26 дек 2020г.</div>
                </div>
            </div>
            <div class="review">
                <div class="author-wrap">
                    <div class="img-wrap">
                        <img src="img/mainpage/block-10-img-2.png" alt>
                    </div>
                    <div class="name-wrap">
                        <div class="name">Андрей Мирнов</div>
                        <div class="links-wrap">
                            <a href="#" class="link">instagram</a>
                            <div class="separator"></div>
                            <a href="#" class="link">facebook</a>
                        </div>
                    </div>
                </div>
                <div class="text">
                    Текст поменьше
                </div>
                <div class="date-wrap">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star-alt.svg" alt class="star">
                    <img src="img/svg/star-alt.svg" alt class="star">
                    <img src="img/svg/star-alt.svg" alt class="star">
                    <div class="date">13 ноя 2021г.</div>
                </div>
            </div>
            <div class="review">
                <div class="author-wrap">
                    <div class="img-wrap">
                        <img src="img/mainpage/block-10-img-3.png" alt>
                    </div>
                    <div class="name-wrap">
                        <div class="name">Маша Мирохина</div>
                        <div class="links-wrap">
                            <a href="#" class="link">instagram</a>
                            <div class="separator"></div>
                            <a href="#" class="link">facebook</a>
                        </div>
                    </div>
                </div>
                <div class="text">
                    Спасибо за быструю доставку и свежее мясо. Все очень понравилось: от заказа, до доставки. Отдельное спасибо Марине, которая помогла подобрать мясо. Сервис на высоте! И очень приятно было получить в подарок специи и фирменный рецепт. Ребята, продолжайте в том же духе! Спасибо за быструю доставку и свежее мясо. Все очень понравилось: от заказа, до доставки. Отдельное спасибо Марине, которая помогла подобрать мясо. Сервис на высоте! И очень приятно было получить в подарок специи и фирменный рецепт. Ребята, продолжайте в том же духе!
                </div>
                <div class="date-wrap">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star.svg" alt class="star">
                    <div class="date">29 июн 2020г.</div>
                </div>
            </div>
            <div class="review">
                <div class="author-wrap">
                    <div class="img-wrap">
                        <img src="img/mainpage/block-10-img-4.png" alt>
                    </div>
                    <div class="name-wrap">
                        <div class="name">Мирон Андреев</div>
                        <div class="links-wrap">
                            <a href="#" class="link">instagram</a>
                            <div class="separator"></div>
                            <a href="#" class="link">facebook</a>
                        </div>
                    </div>
                </div>
                <div class="text">
                    Спасибо за быструю доставку и свежее мясо. Все очень понравилось: от заказа, до доставки. Отдельное спасибо Марине, которая помогла подобрать мясо. Сервис на высоте! И очень приятно было получить в подарок специи и фирменный рецепт. Ребята, продолжайте в том же духе! Спасибо за быструю доставку и свежее мясо. Все очень понравилось: от заказа, до доставки. Отдельное спасибо Марине, которая помогла подобрать мясо. Сервис на высоте! И очень приятно было получить в подарок специи и фирменный рецепт. Ребята, продолжайте в том же духе!<br>
                    Спасибо за быструю доставку и свежее мясо. Все очень понравилось: от заказа, до доставки. Отдельное спасибо Марине, которая помогла подобрать мясо. Сервис на высоте! И очень приятно было получить в подарок специи и фирменный рецепт. Ребята, продолжайте в том же духе! Спасибо за быструю доставку и свежее мясо. Все очень понравилось: от заказа, до доставки. Отдельное спасибо Марине, которая помогла подобрать мясо. Сервис на высоте! И очень приятно было получить в подарок специи и фирменный рецепт. Ребята, продолжайте в том же духе!
                </div>
                <div class="date-wrap">
                    <img src="img/svg/star.svg" alt class="star">
                    <img src="img/svg/star-alt.svg" alt class="star">
                    <img src="img/svg/star-alt.svg" alt class="star">
                    <img src="img/svg/star-alt.svg" alt class="star">
                    <img src="img/svg/star-alt.svg" alt class="star">
                    <div class="date">01 янв 2022г.</div>
                </div>
            </div>
        </div>
        <div class="list-wrap">
            <a href="#" class="item current">
                <div class="img-wrap">
                    <img src="img/mainpage/block-10-img-1.png" alt>
                </div>
                <div class="name">Аня Ярковая</div>
            </a>
            <a href="#" class="item">
                <div class="img-wrap">
                    <img src="img/mainpage/block-10-img-2.png" alt>
                </div>
                <div class="name">Андрей Мирнов</div>
            </a>
            <a href="#" class="item">
                <div class="img-wrap">
                    <img src="img/mainpage/block-10-img-3.png" alt>
                </div>
                <div class="name">Маша Мирохина</div>
            </a>
            <a href="#" class="item">
                <div class="img-wrap">
                    <img src="img/mainpage/block-10-img-4.png" alt>
                </div>
                <div class="name">Мирон Андреев</div>
            </a>
        </div>
    </div>
    <div class="block-11">
        <div class="map" id="map"></div>
        <div class="contacts-wrap">
            <div class="title">Контакты</div>
            <a href="#" class="address current" data-center="59.936563, 30.323950">
                Санкт-Петербург<br>
                улица Новгородская, 11
            </a>
            <a href="#" class="address" data-center="59.948183, 30.444116">
                г. Санкт-Петербург,<br>
                проспект Поканеизвестный д.4, корп.9
            </a>
            <div class="phone-wrap">
                <a href="tel:88000000000" class="item">8 800 000 00 00</a>
                <a href="mailto:meat@gmail.com" class="item">meat@gmail.com</a>
            </div>
        </div>
    </div>
</div>

<script>
    let map;

    $(() => {
        ymaps.ready(() => {
            map = new ymaps.Map('map', {
                    center: [59.936563, 30.323950],
                    zoom: 15,
                    controls: [
                        'zoomControl'
                    ]
                },
                {
                    suppressMapOpenBlock: true
                }),
                marks = [
                    [59.936563, 30.323950],
                    [59.948183, 30.444116]
                ];

            marks.forEach(coords => {
                let mark = new ymaps.Placemark(coords);
                map.geoObjects.add(mark);
            });
        });
    });
</script>

<?php require 'footer.php' ?>