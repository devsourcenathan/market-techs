<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/color-1.css">

    <title>Market Techs</title>
</head>
<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.html" class="nav__logo">
                <i class="bx bxs-shopping-bags nav__logo-icon"></i>Market Techs
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.html" class="nav__link active-link">Acceuil</a>
                    </li>

                    <li class="nav__item">
                        <a href="shop.html" class="nav__link">Boutique</a>
                    </li>

                    <li class="nav__item">
                        <a href="cart.html" class="nav__link">Panier</a>
                    </li>

                    <li class="nav__item">
                        <a href="blog.html" class="nav__link">Blog</a>
                    </li>

                    <li class="nav__item">
                        <a href="faq.html" class="nav__link">FAQ</a>
                    </li>

                    <li class="nav__item">
                        <a href="contact.html" class="nav__link">Contact</a>
                    </li>
                </ul>
                <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>
            </div>

            <div class="nav__btns">
                <div class="login_toggle" id="login-button">
                    <i class="bx bx-user"></i>
                </div>

                <div class="cart_shop" id="cart-shop">
                    <i class="bx bx-shopping-bag"></i>
                </div>

                <div class="nav_toggle" id="nav-toggle">
                    <i class="bx bx-grid-alt"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--=============== CART ===============-->
    <div class="cart" id="cart">
        <i class="bx bx-x cart__close" id="cart-close"></i>

        <h2 class="cart__title-center">Mon Panier</h2>

        <div class="cart__container">
            <article class="cart__card">
                <div class="cart__box">
                    <img src="./assets/img/cart-1.png" alt="cart" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Blablabla</h3>
                    <span class="cart__price">2500 F</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="./assets/img/cart-2.png" alt="cart" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Bliblibli</h3>
                    <span class="cart__price">5000 F</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">3</span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="./assets/img/cart-3.png" alt="cart" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Blobloblo</h3>
                    <span class="cart__price">1750 F</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class="bx bx-minus"></i>
                            </span>

                            <span class="cart__amount-number">2</span>

                            <span class="cart__amount-box">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>

                        <i class="bx bx-trash-alt cart__amount-trash"></i>
                    </div>

                </div>
            </article>
        </div>

        <div class="cart__prices">
            <span class="cart__prices-item">3 produits</span>
            <span class="cart__prices-total">8250 F</span>
        </div>
    </div>

    <!--=============== LOGIN ===============-->
    <div class="login" id="login">
        <i class="bx bx-x login__close" id="login-close"></i>

        <h2 class="login__title-close">Connexion</h2>

        <form action="" class="login__form grid">
            <div class="login__content">
                <label for="" class="login__label">Email</label>
                <input type="email" name="email" id="email" class="login__input">
            </div>

            <div class="login__content">
                <label for="" class="login__label">Mot de passe</label>
                <input type="password" name="password" id="password" class="login__input">
            </div>

            <div>
                <a href="" class="button">Se Connecter</a>
            </div>

            <div>
                <p class="signup">Pas encore de compte ? <a href="./registration.html">Créer un</a></p>
            </div>
        </form>
    </div>

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== HOME ===============-->
        <section class="home container">
            <div class="swiper home-swiper">
                <div class="swiper-wrapper">

                    <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__group">
                                <img src="./assets/img/slide-2.png" alt="slide 1" class="home__img">
                                <div class="home__indicator"></div>

                                <div class="home__details-img">
                                    <h4 class="home__details-title">Le "Gillet"</h4>
                                    <span class="home__details-subtitlte">De laine</span>
                                </div>
                            </div>

                            <div class="home__data">
                                <h3 class="home__subtitle">#1 ARTICLE TENDANCE </h3>
                                <h1 class="home__title">L'ORIGINAL  <br> N'EST JAMAIS <br> TERMINÉ !</h1>
                                <p class="home__description">c'est un lieu d'espoir, de sens et de but. Visitez et faites partie de quelque chose de plus grand - un mouvement qui change des vies.</p>
                            
                            
                                <div class="home__buttons">
                                    <a href="./details.html" class="button">Acherter Maintenant</a>
                                    <a href="./details.html" class="button--link button--flex">Voir les details <i class="bx bx-right-arrow-alt button__icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__group">
                                <img src="./assets/img/slide-3.png" alt="slide 1" class="home__img">
                                <div class="home__indicator"></div>

                                <div class="home__details-img">
                                    <h4 class="home__details-title">Le "Gillet"</h4>
                                    <span class="home__details-subtitlte">De laine</span>
                                </div>
                            </div>

                            <div class="home__data">
                                <h3 class="home__subtitle">#1 ARTICLE TENDANCE </h3>
                                <h1 class="home__title">L'ORIGINAL  <br> N'EST JAMAIS <br> TERMINÉ !</h1>
                                <p class="home__description">c'est un lieu d'espoir, de sens et de but. Visitez et faites partie de quelque chose de plus grand - un mouvement qui change des vies.</p>
                            
                            
                                <div class="home__buttons">
                                    <a href="./details.html" class="button">Acherter Maintenant</a>
                                    <a href="./details.html" class="button--link button--flex">Voir les details <i class="bx bx-right-arrow-alt button__icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__group">
                                <img src="./assets/img/slide-1.png" alt="slide 1" class="home__img">
                                <div class="home__indicator"></div>

                                <div class="home__details-img">
                                    <h4 class="home__details-title">Le "Gillet"</h4>
                                    <span class="home__details-subtitlte">De laine</span>
                                </div>
                            </div>

                            <div class="home__data">
                                <h3 class="home__subtitle">#1 ARTICLE TENDANCE </h3>
                                <h1 class="home__title">L'ORIGINAL  <br> N'EST JAMAIS <br> TERMINÉ !</h1>
                                <p class="home__description">c'est un lieu d'espoir, de sens et de but. Visitez et faites partie de quelque chose de plus grand - un mouvement qui change des vies.</p>
                            
                            
                                <div class="home__buttons">
                                    <a href="./details.html" class="button">Acherter Maintenant</a>
                                    <a href="./details.html" class="button--link button--flex">Voir les details <i class="bx bx-right-arrow-alt button__icon"></i></a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--=============== DISCOUNT ===============-->
        <section class="discount section">
            <div class="discount__container container grid">
                <img src="./assets/img/discount.png" alt="discount img" class="discount__img">

                <div class="discount__data">
                    <h2 class="discount__title">50% de Reduction sur <br> les nouveaux produits</h2>
                    <a href="" class="button">Aller aux nouveautés</a>
                </div>
            </div>
        </section>

        <!--=============== NEW ARRIVALS ===============-->
        <section class="new section">
            <h2 class="section__title">Nouvelles Arrivées</h2>

            <div class="new__container container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">

                        <div class="new__content swiper-slide">
                            <div class="new__tag">Nouveaux</div>
                            <img src="./assets/img/new-1.png" alt="" class="new__img">
                            <h3 class="new__title">Un nouveau produit</h3>
                            <span class="new__subtitle">Une categorie</span>

                            <div class="new__prices">
                                <span class="new__price">3250 F</span>
                                <span class="new__discount">500 F</span>
                            </div>

                            <a href="./details.html" class="button new__button">
                                <i class="bx bx-cart-alt new-icon"></i>
                            </a>
                        </div>

                        <div class="new__content swiper-slide">
                            <div class="new__tag">Nouveaux</div>
                            <img src="./assets/img/new-2.png" alt="" class="new__img">
                            <h3 class="new__title">Un autre produit</h3>
                            <span class="new__subtitle">Une categorie</span>

                            <div class="new__prices">
                                <span class="new__price">3250 F</span>
                                <span class="new__discount">500 F</span>
                            </div>

                            <a href="./details.html" class="button new__button">
                                <i class="bx bx-cart-alt new-icon"></i>
                            </a>
                        </div>

                        <div class="new__content swiper-slide">
                            <div class="new__tag">Nouveaux</div>
                            <img src="./assets/img/new-3.png" alt="" class="new__img">
                            <h3 class="new__title">Un nouveau truc</h3>
                            <span class="new__subtitle">Une categorie</span>

                            <div class="new__prices">
                                <span class="new__price">3250 F</span>
                                <span class="new__discount">500 F</span>
                            </div>

                            <a href="./details.html" class="button new__button">
                                <i class="bx bx-cart-alt new-icon"></i>
                            </a>
                        </div>

                        <div class="new__content swiper-slide">
                            <div class="new__tag">Nouveaux</div>
                            <img src="./assets/img/new-4.png" alt="" class="new__img">
                            <h3 class="new__title">Un produit</h3>
                            <span class="new__subtitle">Une categorie</span>

                            <div class="new__prices">
                                <span class="new__price">3250 F</span>
                                <span class="new__discount">500 F</span>
                            </div>

                            <a href="./details.html" class="button new__button">
                                <i class="bx bx-cart-alt new-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== STEPS ===============-->
        <section class="steps section container">
            <div class="steps__bg">
                <h2 class="section__title">Comment acheter un produit <br> sur Market Techs</h2>

                <div class="steps__container grid">
                    <div class="steps__card">
                        <div class="steps__card-number">01</div>
                        <h3 class="steps__card-title">Choisir vos produits</h3>
                        <p class="card-description">
                            Nous avons plusieurs variétés de produits parmi lesquels vous pouvez choisir.
                        </p>
                    </div>

                    <div class="steps__card">
                        <div class="steps__card-number">02</div>
                        <h3 class="steps__card-title">Commander</h3>
                        <p class="card-description">
                            Une fois votre commande réglée, nous passons à l'étape suivante qui est l'expédition.
                        </p>
                    </div>

                    <div class="steps__card">
                        <div class="steps__card-number">03</div>
                        <h3 class="steps__card-title">Faites-vous livrer la commande</h3>
                        <p class="card-description">
                            Notre processus de livraison est simple, vous recevez la commande directement chez vous.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== NEWSLETTER ===============-->
        <section class="newsletter section">
            
        </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="bx bxs-shopping-bags footer__logo-icon"></i> Market Techs
                </a>

                <p class="footer__description">Profitez de la plus grande vente <br> de votre vie.</p>

                <div class="footer__social">
                    <a href="#" class="footer__social-link"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="footer__social-link"><i class="bx bxl-instagram-alt"></i></a>
                    <a href="#" class="footer__social-link"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="footer__social-link"><i class="bx bxl-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Infos</h3>

                <ul class="footer__links">
                    <li><a href="#" class="footer__link">A propos de nous</a></li>
                    <li><a href="#" class="footer__link">Service Client</a></li>
                    <li><a href="#" class="footer__link">Service Central</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Nos Services</h3>

                <ul class="footer__links">
                    <li><a href="#" class="footer__link">Boutique</a></li>
                    <li><a href="#" class="footer__link">Remises</a></li>
                    <li><a href="#" class="footer__link">Mode d'expédition</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Notre Entreprise</h3>

                <ul class="footer__links">
                    <li><a href="#" class="footer__link">S'inscrire</a></li>
                    <li><a href="#" class="footer__link">Nous Contacter</a></li>
                    <li><a href="#" class="footer__link">A propos de nous</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__copy">&#169; Market Techs Tout droit reservé.</div>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>
    <!--=============== STYLE SWITCHER ===============-->

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== JS ===============-->
    <script src="assets/js/main.js"></script>
</body>
</html>