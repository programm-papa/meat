<?php $pageTitle = 'Каталог продукции';

require 'header.php' ?>

<div class="catalog-page content-wrap">
    <a href="#" class="filters-btn hide-xl show-md-flex">
        Фильтр каталога
        <img src="img/svg/triangle-d.svg" alt>
    </a>
    <div class="left">
        <div class="list">
            <div class="title-wrap">
                <div class="title">Ассортимент</div>
            </div>
            <a href="#" class="link current">Вся продукция</a>
            <a href="#" class="link">Стейки</a>
            <a href="#" class="link">Мясо бескостное</a>
            <a href="#" class="link">Мясо на кости</a>
            <a href="#" class="link">Субпродукты</a>
        </div>
        <div class="list">
            <div class="title-wrap">
                <div class="title">Подборки</div>
                <div class="separator"></div>
                <a href="#" class="more-link">Узнать рецепты</a>
            </div>
            <a href="#" class="link">Жарим</a>
            <a href="#" class="link">Запекаем</a>
            <a href="#" class="link">Тушим/Варим</a>
            <a href="#" class="link">Для Бургеров</a>
        </div>
        <div class="list">
            <div class="title-wrap">
                <div class="title">Категория мраморности</div>
            </div>
            <a href="#" class="link">
                Прайм (Prime)
                <span>максимальная</span>
            </a>
            <a href="#" class="link">
                Чойс (Choice)
                <span>средняя</span>
            </a>
            <a href="#" class="link">
                Селект (Select)
                <span>умеренная</span>
            </a>
        </div>
    </div>
    <div class="right">
        <div class="product-card">
            <a href="#" class="img-wrap">
                <img src="img/catalog-page/img-1.png" alt>
                <div class="tags-wrap">
                    <div class="tag red">
                        <div class="l"></div>
                        -20%
                        <div class="r"></div>
                    </div>
                </div>
            </a>
            <div class="desc-wrap">
                <a href="#" class="title">Стейк Рибай. Choice</a>
                <div class="desc">
                    <div class="subtitle">Порция: 0.25 - 0.35 кг/отруб</div>
                    <div class="text">
                        18 дней, влажное созревание. вакуумная упаковка
                        срок годности 21 день. охлажденная продукция
                    </div>
                </div>
                <div class="to-cart-wrap">
                    <div class="price crossed">2 500 руб.</div>
                    <div class="new-price">2 200 руб./порция</div>
                    <a href="#" class="to-cart-link">В корзину</a>
                    <div class="to-cart">
                        <a href="#" class="btn minus">
                            <?= SVG__MINUS ?>
                        </a>
                        <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                        <a href="#" class="btn plus">
                            <?= SVG__PLUS ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <a href="#" class="img-wrap">
                <img src="img/catalog-page/img-2.png" alt>
                <div class="tags-wrap">
                    <div class="tag lightgreen">
                        <div class="l"></div>
                        Популярное
                        <div class="r"></div>
                    </div>
                </div>
            </a>
            <div class="desc-wrap">
                <a href="#" class="title">Стейк Рибай. Choice Стейк Рибай. Choice Стейк Рибай. Choice</a>
                <div class="desc">
                    <div class="subtitle">Порция: 0.25 - 0.35 кг/отруб</div>
                    <div class="text">
                        18 дней, влажное созревание. вакуумная упаковка
                        срок годности 21 день. охлажденная продукция
                    </div>
                </div>
                <div class="to-cart-wrap">
                    <div class="price crossed">2 500 руб.</div>
                    <div class="new-price">2 200 руб./порция</div>
                    <a href="#" class="to-cart-link">В корзину</a>
                    <div class="to-cart">
                        <a href="#" class="btn minus">
                            <?= SVG__MINUS ?>
                        </a>
                        <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                        <a href="#" class="btn plus">
                            <?= SVG__PLUS ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <a href="#" class="img-wrap">
                <img src="img/catalog-page/img-3.png" alt>
                <div class="tags-wrap">
                    <div class="tag green">
                        <div class="l"></div>
                        Новинка
                        <div class="r"></div>
                    </div>
                </div>
            </a>
            <div class="desc-wrap">
                <a href="#" class="title">Стейк Рибай. Choice</a>
                <div class="desc">
                    <div class="subtitle">Порция: 0.25 - 0.35 кг/отруб</div>
                    <div class="text">
                        18 дней, влажное созревание. вакуумная упаковка
                        срок годности 21 день. охлажденная продукция
                        18 дней, влажное созревание. вакуумная упаковка
                        срок годности 21 день. охлажденная продукция
                    </div>
                </div>
                <div class="to-cart-wrap">
                    <div class="price crossed">2 500 руб.</div>
                    <div class="new-price">2 200 руб./порция</div>
                    <a href="#" class="to-cart-link">В корзину</a>
                    <div class="to-cart">
                        <a href="#" class="btn minus">
                            <?= SVG__MINUS ?>
                        </a>
                        <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                        <a href="#" class="btn plus">
                            <?= SVG__PLUS ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <a href="#" class="img-wrap">
                <img src="img/catalog-page/img-4.png" alt>
                <div class="tags-wrap">
                    <div class="tag cyan">
                        <div class="l"></div>
                        Свежемороженая
                        <div class="r"></div>
                    </div>
                </div>
            </a>
            <div class="desc-wrap">
                <a href="#" class="title">Стейк Рибай. Choice</a>
                <div class="desc">
                    <div class="subtitle">Порция: 0.25 - 0.35 кг/отруб</div>
                    <div class="text">
                        18 дней, влажное созревание. вакуумная упаковка
                        срок годности 21 день. охлажденная продукция
                    </div>
                </div>
                <div class="to-cart-wrap">
                    <div class="price crossed">2 500 руб.</div>
                    <div class="new-price">2 200 руб./порция</div>
                    <a href="#" class="to-cart-link">В корзину</a>
                    <div class="to-cart">
                        <a href="#" class="btn minus">
                            <?= SVG__MINUS ?>
                        </a>
                        <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                        <a href="#" class="btn plus">
                            <?= SVG__PLUS ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <a href="#" class="img-wrap">
                <img src="img/catalog-page/img-5.png" alt>
                <div class="tags-wrap">
                    <div class="tag green">
                        <div class="l"></div>
                        Новинка
                        <div class="r"></div>
                    </div>
                    <div class="tag lightgreen">
                        <div class="l"></div>
                        Популярное
                        <div class="r"></div>
                    </div>
                </div>
            </a>
            <div class="desc-wrap">
                <a href="#" class="title">Стейк Рибай. Choice</a>
                <div class="desc">
                    <div class="subtitle">Порция: 0.25 - 0.35 кг/отруб</div>
                    <div class="text">
                        18 дней, влажное созревание. вакуумная упаковка
                        срок годности 21 день. охлажденная продукция
                    </div>
                </div>
                <div class="to-cart-wrap">
                    <div class="price crossed">2 500 руб.</div>
                    <div class="new-price">2 200 руб./порция</div>
                    <a href="#" class="to-cart-link">В корзину</a>
                    <div class="to-cart">
                        <a href="#" class="btn minus">
                            <?= SVG__MINUS ?>
                        </a>
                        <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                        <a href="#" class="btn plus">
                            <?= SVG__PLUS ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-card">
            <a href="#" class="img-wrap">
                <img src="img/catalog-page/img-1.png" alt>
                <div class="overlay">
                    <div class="text">Сообщить о поступлении</div>
                </div>
                <div class="tags-wrap">
                    <div class="tag white">
                        <div class="l"></div>
                        Все съели
                        <div class="r"></div>
                    </div>
                </div>
            </a>
            <div class="desc-wrap">
                <a href="#" class="title">Стейк Рибай. Choice</a>
                <div class="desc">
                    <div class="subtitle">Порция: 0.25 - 0.35 кг/отруб</div>
                    <div class="text">
                        18 дней, влажное созревание. вакуумная упаковка
                        срок годности 21 день. охлажденная продукция
                    </div>
                </div>
                <div class="to-cart-wrap">
                    <div class="price crossed">2 500 руб.</div>
                    <div class="new-price">2 200 руб./порция</div>
                    <a href="#" class="to-cart-link">В корзину</a>
                    <div class="to-cart">
                        <a href="#" class="btn minus">
                            <?= SVG__MINUS ?>
                        </a>
                        <input type="text" value="1" onkeyup="this.value=parseInt(this.value) | 0">
                        <a href="#" class="btn plus">
                            <?= SVG__PLUS ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php' ?>