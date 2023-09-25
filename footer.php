<?php
if (!defined('ABSPATH')) {
    wp_die();
}

?>
<!-- footer -->
<?php get_template_part('templates/footer-main'); ?>
<!-- /footer -->
<div class="menu">
    <div class="container">
        <div class="menu__in">
            <ul class="menu__part">
                <li class="menu__part_item active">
                    <a class="menu__part_item_link" href="<?php echo home_url('/uslugi'); ?>">Услуги</a>
                    <div class="menu__part_item_arrow active"></div>
                    <ul class="menu__part_submenu">
                        <div class="menu__part_submenu-inner">
                            <li class="menu__part_submenu_item"><a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Аппаратная косметология </a></li>
                            <li class="menu__part_submenu_item"><a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Инъекционная косметология</a></li>
                            <li class="menu__part_submenu_item"><a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Кабинет по телу</a></li>
                            <li class="menu__part_submenu_item"><a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Капельницы</a></li>
                            <li class="menu__part_submenu_item"><a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>">Терапевт + анализы крови</a></li>
                        </div>
                    </ul>
                </li>

            </ul>
            <ul class="menu__part">
                <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">Акции</a>
                </li>
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/klientskie-dni'); ?>" class="menu__part_item_link">Клиентские дни</a>
                </li>
                <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">Прайс</a>
                </li>
                <li class="menu__part_item">
                    <a href="#" class="menu__part_item_link">Бутик</a>
                </li>
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/o-klinike'); ?>" class="menu__part_item_link">О клинике</a>
                </li>
                </li>
            </ul>
            <ul class="menu__part">
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/novosti'); ?>" class="menu__part_item_link">Новости</a>
                </li>
                <li class="menu__part_item">
                    <a href="<?php echo home_url('/kontakty'); ?>" class="menu__part_item_link">Контакты</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- footer -->
    <?php get_template_part('templates/footer-main'); ?>
    <!-- /footer -->

</div>


</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.0/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>

</html>