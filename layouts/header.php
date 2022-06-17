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
                        <a href="index.php" class="nav__link active-link">Acceuil</a>
                    </li>

                    <li class="nav__item">
                        <a href="shop.php" class="nav__link">Boutique</a>
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