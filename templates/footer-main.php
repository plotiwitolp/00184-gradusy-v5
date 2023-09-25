<?php
if (!defined('ABSPATH')) {
    wp_die();
}
?>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <h1 class="footer__top_title">Связаться с нами</h1>
            <a href="mailto:" class="footer__top_link">
                <div class="footer__top_link_name">Напишите нам <span>на EMAIL</span></div>
                <div class="footer__top_link_icon"></div>
            </a>
        </div>
        <div class="footer__mid">
            <div class="footer__mid_main">
                <ul class="footer__mid_main_nav">
                    <li class="footer__mid_main_nav_item"><a href="#">Акции</a></li>
                    <li class="footer__mid_main_nav_item"><a href="<?php echo home_url('/klientskie-dni'); ?>">Клиентские дни</a></li>
                    <li class="footer__mid_main_nav_item"><a href="<?php echo home_url('/uslugi'); ?>">Услуги</a></li>
                    <li class="footer__mid_main_nav_item"><a href="#">Прайс</a></li>
                    <li class="footer__mid_main_nav_item"><a href="#">Бутик</a></li>
                    <li class="footer__mid_main_nav_item"><a href="<?php echo home_url('/o-klinike'); ?>">О клинике</a></li>
                    <li class="footer__mid_main_nav_item"><a href="<?php echo home_url('/novosti'); ?>">Новости</a></li>
                    <li class="footer__mid_main_nav_item"><a href="<?php echo home_url('/kontakty'); ?>">Контакты</a></li>
                </ul>
                <div class="footer__mid_main_soc">
                    <a href="#" class="footer__mid_main_soc_item">WHATSAPP</a>
                    <a href="#" class="footer__mid_main_soc_item">VK</a>
                    <a href="#" class="footer__mid_main_soc_item">TELEGRAM</a>
                    <a href="#" class="footer__mid_main_soc_item">YOUTUBE</a>
                </div>
            </div>
            <div class="footer__mid_ex">
                <a href="#" class="footer__mid_ex_policy">Политика конфиденциальности
                </a>
                <a href="#" class="footer__mid_ex_license">ЛИЦЕНЗИИ И ДОКУМЕНТЫ</a>
            </div>
        </div>
        <div class="footer__bottom">
            ©COPYRIGHT 2023. GRADUSY CLINIC. Powered by Jr.
        </div>
    </div>
</footer>