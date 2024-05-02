<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/'; ?>assets/libs/effect-shutters.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/'; ?>assets/libs/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/'; ?>assets/css/style.css">
    <title>Title</title>
    
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="header__top-wrap">
                        <span class="location">
                            Офис - г. Астрахань Рождественского 1-й проезд 4а
                        </span>
                        <div class="header__info">
                            <a href="tel:+79371378667">+7(937)137-86-67</a>
                            <span class="work-time">09:00-17:00 ПН-ПТ</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__content">

                <div class="container">
                    <div class="header__content-wrap">
                        <div class="header__mobile-btn">
                            <button class="burger-btn"><span></span></button>
                        </div>
                        <div class="header__title">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/title.png" alt="">
                            </a>
                        </div>
                        <div class="header__nav">
                            <ul>
                                <li>
                                    <a href="#">Каталог</a>
                                </li>
                                <li>
                                    <a href="#">О нас</a>
                                </li>
                                <li>
                                    <a href="#">Бренды</a>
                                </li>
                                <li>
                                    <a href="#">Услуги</a>
                                </li>
                                <li>
                                    <a href="#">Советы</a>
                                </li>
                                <li>
                                    <a href="#">Контакты</a>
                                </li>
                            </ul>
                        </div>

                        <div class="header__actions">
                            <ul>
                                <li>
                                    <button class="search-btn"><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/search.svg" alt=""></button>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/settings.svg" alt=""></a>
                                </li>
                                <li>
                                    <a href=""><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/heart.svg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/cart.svg" alt=""></a>
                                </li>
                            </ul>
                            <a class="header__profile" href="#">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/profile.jpg" alt="">
                                </div>
                                <span>
                                    Привет,
                                    <span> Имя Фамилия</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile__menu">
            <button class="close-menu"></button>
            <div class="mobile__actions">
                <a class="mobile__profile" href="#">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/profile.jpg" alt="">
                    <span>Профиль</span>
                </a>
                <a class="mobile__cart" href="#">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/cart.svg" alt="">Корзина
                </a>
                <a href="#" class="mobile__favorite">
                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/icons/heart.svg" alt="">Избранное
                </a>
            </div>
            <nav class="mobile__nav">
                <ul>
                    <li>
                        <a href="#">Каталог</a>
                    </li>
                    <li>
                        <a href="#">О нас</a>
                    </li>
                    <li>
                        <a href="#">Бренды</a>
                    </li>
                    <li>
                        <a href="#">Услуги</a>
                    </li>
                    <li>
                        <a href="#">Советы</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="black_modal">
            
        </div>
        
        <main class="main">
            <section class="hero">
                <div class="container">
                    <div class="hero__slider swiper">
                        <div class="hero__slider-wrapper swiper-wrapper">
                            <article
                                class="hero__slider-slide swiper-slide">
                                <img class="swiper-gl-image" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/slide1.png" alt="">
                                <h1 data-swiper-parallax="10%">Галерея вариантов дизайна</h1>
                                <p data-swiper-parallax="10%">
                                    С фурнитурой Hettich в ваших проектах
                                </p>
                                <a data-swiper-parallax="15%" class="main-btn" href="#">Подробнее</a>
                            </article>
                            <article
                                class="hero__slider-slide swiper-slide">
                                <img class="swiper-gl-image" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/slide2.png" alt="">
                                <h1 data-swiper-parallax="10%">Галерея вариантов дизайна</h1>
                                <p data-swiper-parallax="10%">
                                    С фурнитурой Hettich в ваших проектах
                                </p>
                                <a data-swiper-parallax="15%" class="main-btn" href="#">Подробнее</a>
                            </article>
                            <article
                                class="hero__slider-slide swiper-slide">
                                <img class="swiper-gl-image" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/slide3.png" alt="">
                                <h1 data-swiper-parallax="10%">Галерея вариантов дизайна</h1>
                                <p data-swiper-parallax="10%">
                                    С фурнитурой Hettich в ваших проектах
                                </p>
                                <a data-swiper-parallax="15%" class="main-btn" href="#">Подробнее</a>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <div class="subtitle">
                <div class="container">
                    <div class="subtitle__text">
                        <span>О нас</span>
                    </div>
                </div>
            </div>

            <div class="breaker-title">
                <div class="container">
                    <div class="section-title">
                        <h2 class="title-elem">
                            С 2003 года успешно комплектуем
                            частных клиентов и мебельщиков
                        </h2>
                    </div>
                </div>
            </div>
            <section class="slider-catalog">
                <div class="container">
                    <div class="slider-catalog__title">
                        <h3 class="catalog-title">
                            Материалы для производства мебели
                        </h3>
                    </div>
                    <div class="slider-catalog__slider swiper">
                        <div class="slider-catalog__slider-wrapper swiper-wrapper">
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="slider-catalog">
                <div class="container">
                    <div class="slider-catalog__title">
                        <h3 class="catalog-title">
                            Фурнитура для производства мебели
                        </h3>
                    </div>
                    <div class="slider-catalog__slider swiper">
                        <div class="slider-catalog__slider-wrapper swiper-wrapper">
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                            <a href="#" class="slider-catalog__slide swiper-slide">
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat1.png" alt="">
                                    <img class="hover-img" src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/cat2.png" alt="">
                                </div>
                                <div class="text">
                                    <span>
                                        Название товара
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="subtitle">
                <div class="container">
                    <div class="subtitle__text">
                        <span>Бренды</span>
                    </div>
                </div>
            </div>

            <section class="partners">
                <div class="container">
                    <div class="partners__title section-title">
                        <h2 class="title-elem">
                            Являемся официальными
                            дилерами брендов
                        </h2>
                    </div>

                    <div class="partners__slider swiper">
                        <div class="parters__slider-wrapper swiper-wrapper">
                            <article class="partners__slider-slide swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/partner.png" alt="">
                            </article>
                            <article class="partners__slider-slide swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/partner.png" alt="">
                            </article>
                            <article class="partners__slider-slide swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/partner.png" alt="">
                            </article>
                            <article class="partners__slider-slide swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/partner.png" alt="">
                            </article>
                            <article class="partners__slider-slide swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/partner.png" alt="">
                            </article>
                            <article class="partners__slider-slide swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/partner.png" alt="">
                            </article>
                            <article class="partners__slider-slide swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/partner.png" alt="">
                            </article>
                            <article class="partners__slider-slide swiper-slide">
                                <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/partner.png" alt="">
                            </article>
                        </div>
                    </div>
                </div>
            </section>

           <div class="subtitle">
                <div class="container">
                    <div class="subtitle__text">
                        <span>Услуги</span>
                    </div>
                </div>
            </div>

            <section class="factory">
                <div class="container">
                    <div class="factory__title section-title">
                        <h2 class="title-elem">
                            Полный цикл производства
                        </h2>
                    </div>
                    <div class="factory__elems">
                        <div class="factory__elem">
                            <button class="factory__btn">
                                <span>1</span>
                                <span>Распил</span>
                            </button>
                            <div class="factory__text">
                                <p>
                                    Философия производителй наших станков-высокотехнологичные методы раскроя,
                                    автсрийская точность и повторяемость рузльтатов обработки. За последий год увеличили
                                    скорость распила вдвое и улучшие точность до 0.1мм.
                                    Это дает возможность гарантировать нашим клиентам требуемое качество продукции и
                                    обраотку заказов на этапе распила в течение 0,5-1 рабочих дней в зависимости от
                                    нагрузки.
                                </p>
                            </div>
                        </div>
                        <div class="factory__elem">
                            <button class="factory__btn">
                                <span>1</span>
                                <span>Распил</span>
                            </button>
                            <div class="factory__text">
                                <p>
                                    Философия производителй наших станков-высокотехнологичные методы раскроя,
                                    автсрийская точность и повторяемость рузльтатов обработки. За последий год увеличили
                                    скорость распила вдвое и улучшие точность до 0.1мм.
                                    Это дает возможность гарантировать нашим клиентам требуемое качество продукции и
                                    обраотку заказов на этапе распила в течение 0,5-1 рабочих дней в зависимости от
                                    нагрузки.
                                </p>
                            </div>
                        </div>
                        <div class="factory__elem">
                            <button class="factory__btn">
                                <span>1</span>
                                <span>Распил</span>
                            </button>
                            <div class="factory__text">
                                <p>
                                    Философия производителй наших станков-высокотехнологичные методы раскроя,
                                    автсрийская точность и повторяемость рузльтатов обработки. За последий год увеличили
                                    скорость распила вдвое и улучшие точность до 0.1мм.
                                    Это дает возможность гарантировать нашим клиентам требуемое качество продукции и
                                    обраотку заказов на этапе распила в течение 0,5-1 рабочих дней в зависимости от
                                    нагрузки.
                                </p>
                            </div>
                        </div>
                        <div class="factory__elem">
                            <button class="factory__btn">
                                <span>1</span>
                                <span>Распил</span>
                            </button>
                            <div class="factory__text">
                                <p>
                                    Философия производителй наших станков-высокотехнологичные методы раскроя,
                                    автсрийская точность и повторяемость рузльтатов обработки. За последий год увеличили
                                    скорость распила вдвое и улучшие точность до 0.1мм.
                                    Это дает возможность гарантировать нашим клиентам требуемое качество продукции и
                                    обраотку заказов на этапе распила в течение 0,5-1 рабочих дней в зависимости от
                                    нагрузки.
                                </p>
                            </div>
                        </div>
                        <div class="factory__elem">
                            <button class="factory__btn">
                                <span>1</span>
                                <span>Распил</span>
                            </button>
                            <div class="factory__text">
                                <p>
                                    Философия производителй наших станков-высокотехнологичные методы раскроя,
                                    автсрийская точность и повторяемость рузльтатов обработки. За последий год увеличили
                                    скорость распила вдвое и улучшие точность до 0.1мм.
                                    Это дает возможность гарантировать нашим клиентам требуемое качество продукции и
                                    обраотку заказов на этапе распила в течение 0,5-1 рабочих дней в зависимости от
                                    нагрузки.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

              <section class="offer">
                <div class="container">
                    <div class="offer__title section-title">
                        <b class="title-elem">
                            Хотите заказать детали готовые к сборке?
                        </b>
                    </div>
                    <div class="offer__actions">
                        <button class="main-btn trans-btn">Скачать форму</button>
                        <button class="main-btn">Оставить заявку</button>
                    </div>
                </div>
            </section>

            <div class="subtitle">
                <div class="container">
                    <div class="subtitle__text">
                        <span>Услуги</span>
                    </div>
                </div>
            </div>
            <section class="articles">
                <div class="container">
                        <div class="articles__title section-title">
                            <h2>Читать статьи</h2>
                            <a href="#">Смотреть все</a>
                        </div>
                        <div class="articles__slider swiper">
                            <div class="articles__wrapper swiper-wrapper">

                                <div class="articles__slide swiper-slide">
                                    <div class="articles__item">
                                        <div class="articles__img">
                                            <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/slide1.png" alt="slide">
                                        </div>
                                        <div class="articles__subtext">
                                            <p>Особености планирования прямой кухни</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="articles__slide swiper-slide">
                                    <div class="articles__item">
                                        <div class="articles__img">
                                            <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/slide1.png" alt="slide">
                                        </div>
                                        <div class="articles__subtext">
                                            <p>Ваш интерьер в 3D студии Egger</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="articles__slide swiper-slide">
                                    <div class="articles__item">
                                        <div class="articles__img">
                                            <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/slide1.png" alt="slide">
                                        </div>
                                        <div class="articles__subtext">
                                            <p>Особености планирования прямой кухни</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="articles__slide swiper-slide">
                                    <div class="articles__item">
                                        <div class="articles__img">
                                            <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/slide1.png" alt="slide">
                                        </div>
                                        <div class="articles__subtext">
                                            <p>Наполнение шкафа под разные задачи</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="articles__slide swiper-slide">
                                    <div class="articles__item">
                                        <div class="articles__img">
                                            <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/slide1.png" alt="slide">
                                        </div>
                                        <div class="articles__subtext">
                                            <p>Особености планирования прямой кухни</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="articles__slide swiper-slide">
                                    <div class="articles__item">
                                        <div class="articles__img">
                                            <img src="<?php echo get_template_directory_uri() . '/'; ?>assets/imgs/slide1.png" alt="slide">
                                        </div>
                                        <div class="articles__subtext">
                                            <p>Особености планирования прямой кухни</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
            </section> 
        </main>
        <footer class="footer">
            <div class="footer__container container">
                <div class="footer__header">
                    <h3 class="footer__subTitel">Хотите узнать больше?</h3>
                    <p class="footer_subText">Наши последние новости, предложения и 10% скидка на ваши 1 заказ, <br>
                        подпишитесь на нашу новостную рассылку:</p>
                    <form action="#">
                        <div class="footer__form-Item">
                            <input type="text" placeholder="Email" class="footer__input">
                            <button type="button" class="footer__btn">Подписаться</button>
                        </div>
                    </form>
                </div>
                <div class="footer__grid">
                    <div class="footer__item">
                        <ul class="footer_list">
                            <li class="footer__li footer__li--black">Контакты</li>
                            <li class="footer__li"><a href="" class="footer__link">Офис</a></li>
                            <li class="footer__li"><a href="" class="footer__link">7 (937) 137 86 67</a></li>
                            <li class="footer__li"><a href="" class="footer__link">1-й пр. Рождественского, 4а Цех</a>
                            </li>
                            <li class="footer__li"><a href="" class="footer__link">7 (927) 576 98 10</a></li>
                            <li class="footer__li"><a href="" class="footer__link">1-й пр. Рождественского, 1а/2</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__item">
                        <ul class="footer_list">
                            <li class="footer__li footer__li--black">Антураж</li>
                            <li class="footer__li"><a href="" class="footer__link">Услуги</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Бренды</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Вакансии</a></li>
                            <li class="footer__li"><a href="" class="footer__link">О компании</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Обратная связь</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <ul class="footer_list">
                            <li class="footer__li footer__li--black">Помощь</li>
                            <li class="footer__li"><a href="" class="footer__link">Как купить</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Пользовательское соглашение</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Часто задаваемые вопросы Задать
                                    вопрос</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Задать вопрос</a></li>

                        </ul>
                    </div>
                    <div class="footer__item">
                        <ul class="footer_list">
                            <li class="footer__li footer__li--black">Каталог</li>
                            <li class="footer__li"><a href="" class="footer__link">Новинки</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Акции</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Плитные материалы:</a></li>
                            <li class="footer__li"><a href="" class="footer__link">ЛДСП</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Фасадные полотна</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Столешницы</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <ul class="footer_list footer_list--befor">

                            <li class="footer__li"><a href="" class="footer__link">Фурнитура:</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Лицевая фурнитура</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Функциональная фурнитура</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Крепеж</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Кухонные комплектующие</a></li>
                            <li class="footer__li"><a href="" class="footer__link">Системы раздвижных дверей</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer__blockFooter">
                    <p class="footer__text">Вся представленная на сайте информация, касающаяся цен, условий поставки и
                        обслуживания носит информационный характер и ни при каких условиях не является публичной
                        офертой, определяемой положениями Статьи 437 (2) Гражданского кодекса Российской Федерации. Для
                        получения подробной информации о наличии, комплектации, стоимости товаров и услуг, обращайтесь
                        по телефону +7-937-137-66-67</p>
                    <p class="footer__subTextTwo">© 2024 Все права защищены. Индивидуальный предприниматель Рыков В.В.
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <script src="<?php echo get_template_directory_uri() . '/'; ?>assets/libs/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . '/'; ?>assets/libs/effect-shutters.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . '/'; ?>assets/libs/swiper-gl.js"></script>
    <script src="<?php echo get_template_directory_uri() . '/'; ?>assets/js/app.js"></script>
</body>
<?php wp_footer(); ?>

</html>