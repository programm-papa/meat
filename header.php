<?php require 'const.php' ?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $pageTitle ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css?v=<?= time() ?>">
        <link rel="stylesheet" href="responsive.css?v=<?= time() ?>">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        <link rel="stylesheet" href="lib/lightbox2-2.11.3/dist/css/lightbox.min.css">
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/jquery.maskedinput.min.js"></script>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="lib/lightbox2-2.11.3/dist/js/lightbox.min.js"></script>
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
        <script src="js/scripts.js?v=<?= time() ?>"></script>
    </head>
    <body>
        <header class="header content-wrap">
            <div class="menu-wrap">
                <a href="#" class="menu-btn">
                    <div class="burger">
                        <img src="img/svg/menu-burger.svg" alt>
                        <img src="img/svg/menu-close.svg" alt>
                    </div>
                    <div class="text hide-sm">
                        <span>Каталог</span>
                        <span>Закрыть</span>
                    </div>
                </a>
                <div class="separator"></div>
                <a href="#" class="menu-link">О ферме</a>
                <div class="separator"></div>
                <a href="#" class="menu-link">Что приготовить</a>
                <a href="/" class="logo">
                    <img src="img/svg/logo.svg" alt>
                </a>
                <a href="#" class="menu-link ml-auto">Доставка</a>
                <div class="separator"></div>
                <a href="#" class="menu-link">Отзывы</a>
                <div class="separator"></div>
                <a href="#" class="menu-link">Контакты</a>
                <div class="separator"></div>
                <div class="cart-btn-wrapper">
                    <a href="#" class="cart-btn">
                        <div class="count hide-sm">12</div>
                        <div class="icon">
                            <img src="img/svg/cart.svg" alt>
                        </div>
                        
                    </a>
                    <div class="cart-info-popup hide-md">
                            <div class="cart-info-content">
                                <div class="cart-item">
                                    <div class="cart-item__image">
                                            <img src="img/cart-page/item-1.png" alt="">
                                    </div>
                                    <div class="column">
                                        <div class="cart-item__name">фрикадельки из мраморной говядины. Свежемороженные</div>
                                        <div class="cart-item__size">1 упаковка: 0.4 кг (20 шт)</div>
                                    </div>
                                    <div class="column">
                                        <div class="cart-item__amount">
                                            <a class="btn minus">
                                                <?= SVG__MINUS ?>
                                            </a>
                                            <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                                            <a class="btn plus">
                                                <?= SVG__PLUS ?>
                                            </a>
                                        </div>
                                        <div class="cart-item__price">
                                            790 руб./0.3 кг
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="cart-item__cost discount">
                                            12 370 руб.
                                        </div>
                                    </div>
                                    <div class="column">
                                        <a href="#" class="cart-item__remove">
                                            <img src="img/svg/trash.svg" alt>
                                        </a>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="cart-item__image">
                                            <img src="img/cart-page/item-1.png" alt="">
                                    </div>
                                    <div class="column">
                                        <div class="cart-item__name">фрикадельки из мраморной говядины. Свежемороженные</div>
                                        <div class="cart-item__size">1 упаковка: 0.4 кг (20 шт)</div>
                                    </div>
                                    <div class="column">
                                        <div class="cart-item__amount">
                                            <a class="btn minus">
                                                <?= SVG__MINUS ?>
                                            </a>
                                            <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                                            <a class="btn plus">
                                                <?= SVG__PLUS ?>
                                            </a>
                                        </div>
                                        <div class="cart-item__price">
                                            790 руб./0.3 кг
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="cart-item__cost">
                                            2 370 руб.
                                        </div>
                                    </div>
                                    <div class="column">
                                        <a href="#" class="cart-item__remove">
                                            <img src="img/svg/trash.svg" alt>
                                        </a>
                                    </div>
                                </div>
                                <div class="cart-result">
                                    <div class="cart-result__cost">
                                        <div class="title">
                                            Общая стоимость
                                        </div>
                                        <div class="total-cost">
                                            9 500 руб.
                                        </div>
                                        <div class="notification">
                                            Без учета стоимости доставки
                                        </div>
                                    </div>
                                    <a href="#" class="cart-result__cart">
                                        Перейти в корзину
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="contacts-wrap hide-sm">
                <a href="#" class="link">instagram</a>
                <div class="separator"></div>
                <a href="#" class="link">facebook</a>
                <a href="tel:88000000000" class="phone">8 (800) 000 00 00</a>
                <a href="#" class="link">telegram</a>
                <div class="separator"></div>
                <a href="#" class="link">whatsapp</a>
            </div>
            <div class="header-menu">
                <a href="#" class="main-link current">Вся продукция</a>
                <a href="#" class="main-link">Стейки</a>
                <a href="#" class="main-link">Мясо бескостное</a>
                <a href="#" class="main-link">Мясо на кости</a>
                <a href="#" class="main-link">Субпродукты</a>
                <div class="links-wrap hide-xl show-lg">
                    <a href="#" class="link">Главная</a>
                    <a href="#" class="link">О ферме</a>
                    <a href="#" class="link">Что приготовить</a>
                    <a href="#" class="link">Доставка</a>
                    <a href="#" class="link">Отзывы</a>
                    <a href="#" class="link">Контакты</a>
                </div>
                <div class="phone-wrap hide-xl show-sm-flex">
                    <a href="tel:88000000000" class="menu-phone">8 (800) 000 00 00</a>
                    <a href="#" class="social" target="_blank">telegram</a>
                    <a href="#" class="social" target="_blank">whatsapp</a>
                </div>
                <div class="social-wrap hide-xl show-sm-flex">
                    <a href="#" class="social" target="_blank">instagram</a>
                    <div class="separator"></div>
                    <a href="#" class="social" target="_blank">facebook</a>
                </div>
            </div>
        </header>
        <?php if ( $pageTitle !== 'Главная' ) { ?> <!-- Если не главная, то выводим крошки и h1 -->
            <div class="breadcrumbs content-wrap">
                <a href="/" class="item">Главная</a>
                <div class="separator">|</div>
                <a href="/" class="item">Еще страница</a>
                <div class="separator">|</div>
                <div class="item current"><?= $pageTitle ?></div>
            </div>
            <?php if ( $backArrow ) { ?>
                <div class="page-title-wrap content-wrap">
                    <h1 class="page-title"><?= $pageTitle ?></h1>
                    <a href="#" class="back-arrow">
                        <?= SVG__ARROW_R ?>
                        <?= SVG__ARROW_L_SHORT ?>
                    </a>
                </div>
            <?php } else { ?>
                <h1 class="page-title content-wrap"><?= $pageTitle ?></h1>
            <?php }
        } ?>