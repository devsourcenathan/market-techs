<?php
    include './layouts/header.php';
?>

<!-- ================= SHOP ==============-->
    <section class="shop section container">
        <h2 class="breadcrumb__title">Boutique</h2>
        <h3 class="breadcrumb__subtitle">Accueil > <span>Boutique</span></h3>


        <div class="shop__container grid">
            <div class="sidebar">
                <h3 class="filter__title">Choisir les Filtres</h3>
                <div class="filter__content">
                    <h3 class="filter__subtitle">Condition</h3>

                    <div class="filter">
                        <input type="checkbox" name="" id="">
                        <p>Nouveau <span>(13)</span></p>
                    </div>
                    <div class="filter">
                        <input type="checkbox" name="" id="">
                        <p>Vendu <span>(13)</span></p>
                    </div>
                </div>

                <div class="filter__content">
                    <h3 class="filter__subtitle">Size</h3>

                    <div class="filter">
                        <input type="checkbox" name="" id="">
                        <p>s <span>(13)</span></p>
                    </div>
                    <div class="filter">
                        <input type="checkbox" name="" id="">
                        <p>M <span>(15)</span></p>
                    </div>
                    <div class="filter">
                        <input type="checkbox" name="" id="">
                        <p>L <span>(5)</span></p>
                    </div>
                </div>
            </div>

            <div class="shop__items grid">

            </div>
        </div>
    </section>

<?php   
    include './layouts/footer.php';
?>