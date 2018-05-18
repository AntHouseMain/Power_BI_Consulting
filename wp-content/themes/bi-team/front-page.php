<?php get_header(); ?>

    <!--    <! --== Carousel ==-->
    <section class="container-fluid p-0">
        <div id="carouselMain" class="carousel slide" data-ride="carousel">
<!--            <ol class="carousel-indicators">-->
<!--                <li data-target="#carouselMain" data-slide-to="0" class="active"></li>-->
<!--                <li data-target="#carouselMain" data-slide-to="1"></li>-->
<!--                <li data-target="#carouselMain" data-slide-to="2"></li>-->
<!--            </ol>-->
            <div class="carousel-inner">
                <?php if (have_rows('header_slider_repeater')): ?>
                    <?php while (have_rows('header_slider_repeater')): the_row(); ?>
                        <div class="carousel-item active">
                            <?php $slider_image = get_sub_field('header_slider_image');
                            if (!empty($slider_image)): ?>
                                <img class="img-fluid d-block w-100 img-fluid"
                                     src="<?php echo $slider_image['sizes']['image_main_slider']; ?>"
                                     alt="<?php echo $slider_image['alt']; ?>"/>
                            <?php endif; ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h2><?php the_sub_field('header_slider_title'); ?></h2>
                                <p><?php the_sub_field('header_slider_content'); ?></p>
                                <a class="d-inline-block" href="<?php the_field('header_slider_link'); ?>">GET A QUETE</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--///-->
<?php if (!empty(have_rows('customers_repeater'))) : ?>
    <section class="occupation-section py-7">
        <div class="container">
            <div class="row">
                <?php if (have_rows('occupation_repeater')): ?>
                    <?php while (have_rows('occupation_repeater')): the_row(); ?>
                        <div class="col-md-4 mb-3 d-flex">
                            <div class="occupation-item text-center p-4 pt-5 w-100">
                                <?php $occupation_logo = get_sub_field('occupation_repeater_image');
                                if (!empty($occupation_logo)): ?>
                                    <img class="img-fluid"
                                         src="<?php echo $occupation_logo['sizes']['customers_logo']; ?>"
                                         alt="<?php echo $occupation_logo['alt']; ?>"/>
                                <?php endif; ?>
                                <h2 class="my-4"><?php the_sub_field('occupation_repeater_title'); ?></h2>
                                <?php the_sub_field('occupation_repeater_content'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!--///-->
<?php if (!empty(get_field('our_different_content'))) : ?>
    <section class="our-different py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10 text-center m-auto">
                    <h2 class="yellow-border-text-bottom">
                        <?php _e('Our different', 'bi-team'); ?>
                    </h2>
                    <?php the_field('our_different_content'); ?>
                    <?php if (!empty(get_field('our_different_link'))) : ?>
                        <a class="text-uppercase more-link"
                           href="<?php the_field('our_different_link'); ?>"><?php _e('VISIT MAIN
                        SITE', 'bi-tema'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!--///-->
<?php echo render_template_part('video-section'); ?>
    <!--///-->
<?php if (!empty(have_rows('customers_repeater'))) : ?>
    <section class="customers-section py-5">
        <div class="container container-large text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h2 class="yellow-border-text-bottom">
                        <?php _e('Customers', 'bi-team'); ?>
                    </h2>
                </div>
                <?php if (have_rows('customers_repeater')): ?>
                    <?php while (have_rows('customers_repeater')): the_row(); ?>
                        <div class="col customers-logo-item">
                            <a class="d-block" target="_blank"
                               href="<?php the_sub_field('customers_repeater_link'); ?>">
                                <?php
                                $customers_logo = get_sub_field('customers_repeater_image');
                                if (!empty($customers_logo)): ?>
                                    <img class="img-fluid"
                                         src="<?php echo $customers_logo['sizes']['customers_logo']; ?>"
                                         alt="<?php echo $customers_logo['alt']; ?>"/>
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!--///-->
<!--    <section class="reviews-section py-5 pb-6">-->
<!--        <div class="container-large container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-10 m-auto">-->
<!---->
<!--                    <div id="reviewSlider" class="carousel slide" data-ride="carousel">-->
<!--                        --><?php //global $post;
//                        $featured_reviews = get_posts(['numberposts' => 10,
//                            'orderby' => 'date',
//                            'order' => 'DESC',
//                            'meta_query' => [['key' => 'field_is_highlighted_review',
//                                'compare' => '==',
//                                'value' => 1]],
//                            'post_type' => 'reviews']);
//                        ?>
<!--                        <div class="carousel-inner">-->
<!--                            --><?php //$i = 1; ?>
<!--                            <div class="carousel-item active text-center">-->
<!--                                --><?php //foreach ($featured_reviews as $post) :
//                                setup_postdata($post); ?>
<!--                                <img class="img-fluid"-->
<!--                                     src="--><?php //echo get_the_post_thumbnail_url($post->ID, 'customers_logo'); ?><!--"-->
<!--                                     alt="--><?php //the_post_thumbnail_caption(); ?><!--">-->
<!---->
<!--                                <h2> --><?php //the_title(); ?><!--</h2>-->
<!--                                <h3 class="text-silver">-->
<!--                                    --><?php //the_field('reviews_position'); ?>
<!--                                </h3>-->
<!--                                <i class="fa fa-quote-left" aria-hidden="true"></i>-->
<!--                                --><?php //the_excerpt(); ?>
<!--                                <a href="--><?php //the_premalink(); ?><!--">-->
<!--                                    READ THE REVIEW-->
<!--                                </a>-->
<!---->
<!--                            </div>-->
<!--                            <div class="carousel-item">-->
<!--                                <!--Сюда выводим следующий слайдер!-->-->
<!--                            </div>-->
<!--                        --><?php
//                        endforeach;
//                        wp_reset_postdata();
//                        ?>
<!---->
<!--                        </div>-->
<!--                        <a class="carousel-control-prev" href="#reviewSlider" role="button" data-slide="prev">-->
<!--                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                            <span class="sr-only">Previous</span>-->
<!--                        </a>-->
<!--                        <a class="carousel-control-next" href="#reviewSlider" role="button" data-slide="next">-->
<!--                            <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                            <span class="sr-only">Next</span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    <!--    ///-->

<?php global $post;
$featured_news = get_posts(['numberposts' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'meta_query' => [['key' => 'is_highlighted',
        'compare' => '==',
        'value' => 1]],
    'post_type' => 'products']);
?>
    <section class="multirow-section">
        <div class="container-fluid">
            <?php foreach ($featured_news as $post) : setup_postdata($post); ?>
               <?php echo render_template_part('multi-row-item'); ?>
                <?php
            endforeach;
            wp_reset_postdata();
            ?>
        </div>
    </section>

    <!--///-->
<?php global $post;
$featured_news = get_posts(['numberposts' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
    'meta_query' => [['key' => 'is_highlighted',
        'compare' => '==',
        'value' => 1]],
    'post_type' => 'products']);
?>
    <section class="pricing-section py-5 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-5">
                    <h2 class="text-center yellow-border-text-bottom text-white">
                        <?php _e('Pricing', 'bi-team'); ?>
                    </h2>
                </div>
                <?php foreach ($featured_news as $post) : setup_postdata($post); ?>
                    <div class="col-md-4 mb-3 d-flex">
                        <div class="pricing-item text-center py-4 px-5 w-100">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <p class="circle-text">
                                $<?php the_field('products_price'); ?>
                            </p>
                            <?php if (!empty(get_field('products_list'))): ?>
                                <div class="single-content text-left">
                                    <?php the_field('products_list'); ?>
                                </div>
                            <?php endif; ?>
                            <a class="d-block text-uppercase link-buy-products" href="<?php the_permalink(); ?>">
                                buy product
                            </a>
                        </div>
                    </div>
                    <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <!--///-->
    <section class="contacts-us py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="yellow-border-text-bottom text-center">
                        <?php _e(' Contact Us ', 'bi-team'); ?>
                    </h2>
                </div>
                <div class="col-md-4 m-auto">
                    NAMI CODE
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>