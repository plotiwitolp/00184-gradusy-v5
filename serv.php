<?php
if (!defined('ABSPATH')) {
    wp_die();
}
/*
Template Name: Услуги 
Template Post Type: page
*/

get_header('second');
?>

<!-- main -->
<main class="main">
    <div class="serv-page">
        <div class="container">
            <div class="serv-page__in">
                <h2 class="serv-page__head section__title dark">Услуги</h2>
                <div class="serv-page__body">
                    <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>" class="serv-page__body_item">
                        <div class="serv-page__body_item_img">
                            <picture>
                                <source srcset="" type="image/webp">
                                <img src="" alt="serv-img">
                            </picture>
                        </div>
                        <div class="serv-page__body_item_name">Эстетическая
                            косметология</div>
                    </a>
                    <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>" class="serv-page__body_item">
                        <div class="serv-page__body_item_img">
                            <picture>
                                <source srcset="" type="image/webp">
                                <img src="" alt="serv-img">
                            </picture>
                        </div>
                        <div class="serv-page__body_item_name">Эстетическая
                            косметология</div>
                    </a>
                    <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>" class="serv-page__body_item">
                        <div class="serv-page__body_item_img">
                            <picture>
                                <source srcset="" type="image/webp">
                                <img src="" alt="serv-img">
                            </picture>
                        </div>
                        <div class="serv-page__body_item_name">Эстетическая
                            косметология</div>
                    </a>
                    <a href="<?php echo home_url('/esteticheskaya-kosmetologiya'); ?>" class="serv-page__body_item">
                        <div class="serv-page__body_item_img">
                            <picture>
                                <source srcset="" type="image/webp">
                                <img src="" alt="serv-img">
                            </picture>
                        </div>
                        <div class="serv-page__body_item_name">Эстетическая
                            косметология</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>