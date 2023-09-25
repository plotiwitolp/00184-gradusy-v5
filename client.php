<?php
if (!defined('ABSPATH')) {
    wp_die();
}
/*
Template Name: Клиентские дни
Template Post Type: page
*/
get_header('second');
?>

<!-- main -->
<main class="main">
    <div class="client-page">
        <div class="client">
            <div class="container">
                <div class="client__in">
                    <h2 class="client__head section__title">Клиентские дни</h2>
                    <div class="client__body">
                        <div class="client__body_slider swiper">
                            <div class="client__body_slider_wr swiper-wrapper">
                                <a href="<?php echo home_url('/klientskie-dni-item'); ?>" class="client__body_slider_slide swiper-slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/client-img-1.png" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name">Duft & Doft −30%</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            24 — 25 августа
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            средства ухода за кожей и волосами
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo home_url('/klientskie-dni-item'); ?>" class="client__body_slider_slide swiper-slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/client-img-2.png" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name">Duft & Doft −30%</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            24 — 25 августа
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            средства ухода за кожей и волосами
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo home_url('/klientskie-dni-item'); ?>" class="client__body_slider_slide swiper-slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/client-img-1.png" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name">Duft & Doft −30%</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            24 — 25 августа
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            средства ухода за кожей и волосами
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo home_url('/klientskie-dni-item'); ?>" class="client__body_slider_slide swiper-slide">
                                    <div class="client__body_slider_slide_img">
                                        <picture>
                                            <source srcset="" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/client-img-2.png" alt="client-img">
                                        </picture>
                                    </div>
                                    <div class="client__body_slider_slide_descr">
                                        <div class="client__body_slider_slide_descr_name">Duft & Doft −30%</div>
                                        <div class="client__body_slider_slide_descr_date">
                                            24 — 25 августа
                                        </div>
                                        <div class="client__body_slider_slide_descr_text">
                                            средства ухода за кожей и волосами
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /main -->

<?php get_footer(); ?>