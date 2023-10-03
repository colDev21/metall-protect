<header class="site-header">
    <div class="mp-header" id="mpHeader">
        <a href="/" class="mp-header__logo">
            <img class="mp-header__logo-image" src="./assets/img/logo.png" alt="site-logo">
        </a>
        <nav class="mp-header__menu" id="mpMenu">
            <?php include('parts/headerMenu.php') ?>
            <div class="mp-header__sm-contacts">
                <a class="mp-button mp-button_lg mp-button_fullWidth" href="#!">связаться с нами</a>
                <div class="mp-social-networks">
                    <a href="#!" class="mp-social-networks__link mp-social-networks_vk">
                        <img class="mp-social-networks__icon" src="./assets/icons/icon-vk.svg" alt="vk icon">
                    </a>
                    <a href="#!" class="mp-social-networks__link mp-social-networks_yt">
                        <img class="mp-social-networks__icon" src="./assets/icons/icon-youtube.svg" alt="youtube icon">
                    </a>
                    <a href="#!" class="mp-social-networks__link mp-social-networks_ig">
                        <img class="mp-social-networks__icon" src="./assets/icons/icon-instagram.svg" alt="instagram icon">
                    </a>
                </div>
            </div>
        </nav>
        <div class="mp-header__buttons">
            <a class="mp-button mp-button_tel" href="tel: +78432501073">
                <img class="mp-button__icon" src="./assets/icons/icon-phone.svg" alt="icon-phone">
                <span class="mp-button__text">+7 (843) 250-10-73</span>
            </a>
            <a class="mp-button mp-button_email mp-button_orange mp-button_icon-only" href="mailto:">
                <img class="mp-button__icon" src="./assets/icons/icon-envelope.svg" alt="icon-envelope">
            </a>
            <button class="mp-button mp-button_calc mp-button_red mp-button_icon-only" id="mpModalOpen">
                <img class="mp-button__icon" src="./assets/icons/icon-calculator.svg" alt="icon-calculator">
            </button>
            <button class="mp-mobile-menu-toggler" id="mpMenuToggler">
                <img class="mp-mobile-menu-toggler__icon" src="./assets/icons/icon-bars.svg" alt="mobile menu toggler">
            </button>
        </div>
    </div>
</header>
<?php include('calculator.php'); ?>