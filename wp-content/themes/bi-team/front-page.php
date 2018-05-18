<?php get_header(); ?>

    <!--    <! --== Carousel ==-->
    <section class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid"
                         src="https://1.bp.blogspot.com/-4nsUmbsr7J4/VsIt6kZB4NI/AAAAAAAAAAU/vKLjCMsXjCs/s1600/priroda-gory-les-elki-ozero.jpg"
                         alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>asdasdasd</h5>
                        <p>asdasdasd asd as da sd</p>
                        <a class="d-inline-block" href="#">LINK!</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid"
                         src="http://pskovskie.ru/media/W1siZiIsIjIwMTYvMDgvMjgvNXA4aGllamFuMV9wcmlyb2RhX3Bza292c2tveV9vYmxhc3RpXzMuanBnIl1d/priroda_pskovskoy_oblasti_3.jpg?sha=3ea700107155d063"
                         alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>asd as as das d asd</h5>
                        <p>asd asd as da sd</p>
                        <a class="d-inline-block" href="#">LINK!</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="https://i.ytimg.com/vi/iqdRh9IpJ6I/maxresdefault.jpg"
                         alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>as das dasda sd</h5>
                        <p>as das das da sd</p>
                        <a class="d-inline-block" href="#">LINK!</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
                    <h2 class="white-border-text-bottom">
                        <?php _e('Our different', 'bi-team'); ?>
                    </h2>
                    <?php the_field('our_different_content'); ?>
                    <?php if (!empty(get_field('our_different_link'))) : ?>
                        <a class="text-uppercase more-link" href="<?php the_field('our_different_link'); ?>"><?php _e('VISIT MAIN
                        SITE', 'bi-tema'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!--///-->
<?php if (!empty(get_field('page_video_mp4') || get_field('page_video_webm') || get_field('page_video_external_site'))) : ?>
    <?php $image_video = get_field('video_image'); ?>
    <section class="video-block"
             style="background-image: url('<?php echo $image_video['sizes']['image_article_large']; ?>');">
        <div class="container-fluid">
            <div class="row py-7">
                <div class="col-md-12 d-flex justify-content-center flex-column align-items-center">
                    <button type="button" class="btn d-inline-block video-button" data-toggle="modal"
                            data-target="#exampleModalCenter">
                        <i class="fa fa-play" aria-hidden="true"></i>
                    </button>
                    <h2 class="text-white my-4">
                        <?php _e('See How it Works', 'bi-team') ?>
                    </h2>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-video-medium modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close button-close" data-dismiss="modal"
                                        aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
                            <?php if (!empty(get_field('page_video_mp4') || get_field('page_video_webm'))) { ?>
                                <video id="videoBlock" width="100%" height="auto" preload="auto" loop="loop" controls>
                                    <source src="<?php echo get_field('page_video_mp4'); ?>" type="video/mp4">
                                    <source src="<?php echo get_field('page_video_webm'); ?>" type="video/webm">
                                </video>
                            <?php } elseif (!empty(get_field('page_video_external_site'))) { ?>
                                <div class="embed-container">
                                    <?php the_field('page_video_external_site'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
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
    <section class="reviews-section py-5 pb-6">
        <div class="container-large container">
            <div class="row">
                <div class="col-md-10 m-auto">

                    <div id="reviewSlider" class="carousel slide" data-ride="carousel">
                        <?php global $post;
                        $featured_reviews = get_posts(['numberposts' => 10,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'meta_query' => [['key' => 'field_is_highlighted_review',
                                'compare' => '==',
                                'value' => 1]],
                            'post_type' => 'reviews']);
                        ?>
                        <div class="carousel-inner">
                            <?php $i = 1; ?>
                            <div class="carousel-item active text-center">
                                <?php foreach ($featured_reviews as $post) :
                                setup_postdata($post); ?>
                                <img class="img-fluid" 
                                     src="<?php echo get_the_post_thumbnail_url($post->ID, 'customers_logo'); ?>"
                                     alt="<?php the_post_thumbnail_caption(); ?>">

                                <h2> <?php the_title(); ?></h2>
                                <h3 class="text-silver">
                                    <?php the_field('reviews_position'); ?>
                                </h3>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_premalink(); ?>">
                                    READ THE REVIEW
                                </a>

                            </div>
                            <div class="carousel-item">
                                <!--Сюда выводим следующий слайдер!-->
                            </div>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>

                        </div>
                        <a class="carousel-control-prev" href="#reviewSlider" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#reviewSlider" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                <div class="row multirow">
                    <div class="col-md-6 p-0">
                        <div class="products-image-thumbnail"
                             style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'image_article_large'); ?>');">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 col-lg-7 multirow-item">
                                <div class="text-center p-4 pt-5 pb-7">
                                    <?php $products_logo = get_field('products_logo', $post->ID);
                                    if (!empty($products_logo)): ?>
                                        <img class="img-fluid pb-3" width="150"
                                             src="<?php echo $products_logo['sizes']['small_avatar']; ?>"
                                             alt="<?php echo $products_logo['alt']; ?>"/>
                                    <?php endif; ?>
                                    <h2 class="text-uppercase">
                                        <?php the_title(); ?>
                                    </h2>
                                    <?php the_excerpt(); ?>
                                    <a class="more-link text-uppercase" href="<?php the_permalink(); ?>">more about
                                        product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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