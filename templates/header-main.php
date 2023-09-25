<?php
if (!defined('ABSPATH')) {
    wp_die();
}
?>
<header class="header">
    <div class="container">
        <div class="header__in">
            <a href="<?php echo home_url(); ?>" class="header__logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/icons/logo-04.png" alt="logo">
            </a>
            <ul class="header__list">
                <li class="header__item"><a href="#">Мы на карте</a></li>
                <li class="header__item"><a href="#">whatsapp</a></li>
                <li class="header__item"><a href="#">+ 7 495 123 45 67</a></li>
            </ul>
            <button class="header__burger">
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>