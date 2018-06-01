<?php

/*
Template Name: Home

*/

get_header();



?>

<?php
global $post;


$site = get_field("site", 8);
$mail = get_field("mail",8);
$phone = get_field("phone",8);
$map = get_field("map",8)[0];
$slider = get_field("header_slider_repeater");
?>

<?php

  $featured_news = get_posts(
    ['numberposts' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'meta_query' => [['key' => 'is_highlighted',
            'compare' => '==',
            'value' => 1]],
        'post_type' => 'products']);

  $featured_reviews = get_posts(
                             [
                             'numberposts' => 10,
                              'orderby' => 'date',
                            'order' => 'DESC',
                            'meta_query' => [['key' => 'field_is_highlighted_review',
                                'compare' => '==',
                                'value' => 1]],
                            'post_type' => 'reviews']);

//var_dump($featured_reviews);
                        ?>


    <!--    <! --== Carousel ==-->

    <section class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide main-carousel" data-ride="carousel">
            <?php if (have_rows('header_slider_repeater')):
            $i=0 ;
            ?>
            <ol class="carousel-indicators">
               <?php  foreach ($slider as $it => $slide) :?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $it ; ?> "  class="<?php if ($it == 0){echo 'active' ;} ?>"></li>
               <?php endforeach;?>
            </ol>

            <div class="carousel-inner">

               <?php while (have_rows('header_slider_repeater')): the_row();

               ?>
                <div class="carousel-item <?php if ($i==0){echo 'active' ;} ?> ">
                    <?php $slider_image = get_sub_field('header_slider_image');
                    if (!empty($slider_image)): ?>
                        <img class="d-block w-100 img-fluid"
                             src="<?php echo $slider_image['sizes']['image_main_slider']; ?>"
                             alt="<?php echo $slider_image['alt']; ?>"/>
                    <?php endif; ?>

                    <div class="carousel-caption d-none d-md-block">
                        <h3><?php the_sub_field('header_slider_title'); ?></h3>
                        <h3 class="with-line"><?php the_sub_field('header_slider_content_title'); ?></h3>
                        <p><?php the_sub_field('header_slider_content'); ?></p>
                        <button type="button" class="btn get-quote-btn">
                            <a href="<?php the_field('header_slider_link'); ?>">
                              GET A QUETE
                              <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </button>
                    </div>
                </div>

                <?php
                $i++ ;

            endwhile; ?>
                <?php endif; ?>

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
                                    <div class="occupation-img-wrapper">
                                      <img class="img-fluid"
                                           src="<?php echo $occupation_logo['sizes']['customers_logo']; ?>"
                                           alt="<?php echo $occupation_logo['alt']; ?>"/>
                                    </div>
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
<?php
$our_different_content = get_field('our_different_content');
if (!empty($our_different_content)) : ?>
    <section class="our-different py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10 text-center m-auto">
                    <h2 class="yellow-border-text-bottom white-border-text">
                        <?php _e('Our Difference', 'bi-team'); ?>
                    </h2>

        <?php while (have_rows('our_different_content')): the_row(); ?>
            <?php the_sub_field('p_different_content_1'); ?>
            <?php the_sub_field('p_different_content_2'); ?>
            <div class="our_difference_big_text">
                <?php the_sub_field('p_different_content_3'); ?>
            </div>
        <?php endwhile; ?>
                  <br>
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

    <section class="container-fluid p-0">
        <div id="carouselExampleControls" class="carousel slide review-carousel" data-ride="carousel">

            <ol class="carousel-indicators">
                <?php  foreach ($featured_reviews as $itr => $slide) :?>
                <li data-target="#carouselExampleControls" data-slide-to="<?php echo $itr ; ?> "  class="<?php if ($itr == 0){echo 'active' ;} ?>"></li>
                <?php endforeach;?>
            </ol>
            <div class="carousel-inner">
                <?php foreach ($featured_reviews as $it=> $reviews) : ;
                                                setup_postdata($reviews);

                                                $position = get_field('reviews_position',$reviews->ID);
                                                ?>

                    <div class="carousel-item text-center <?php if ($it == 0){echo 'active' ;} ?>">
                        <img
                                class="img-fluid"
                                src="<?php echo get_the_post_thumbnail_url($reviews->ID, 'customers_logo'); ?>"
                                alt="<?php the_post_thumbnail_caption($reviews->ID); ?>">
                        <h2> <?php echo  $reviews->post_title; ?></h2>
                        <h3 class="text-silver font-weight-bold">
                          <?php  echo $position ; ?>
                        </h3>
                        <i class="fa fa-quote-left fa-2x color-icon d-block py-3" aria-hidden="true"></i>
                        <?php
                        if(!empty( $reviews->post_excerpt)):
                        ?>
                        <p><?php echo $reviews->post_excerpt ; ?></p>
                        <?php else:?>
                            <p><?php echo $reviews->post_content ; ?></p>
                        <?php endif; ?>
                        <a class="d-inline-block link-read-more text-uppercase font-weight-bold" href="<?php echo  $reviews->guid ;    ?>">Read the review</a>

                    </div>

                 <?php endforeach;?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>



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



    <section class="pricing-section py-5 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-5">
                    <h2 class="text-center yellow-border-text-bottom text-white">
                        <?php _e('Pricing', 'bi-team'); ?>
                    </h2>
                </div>
                <?php foreach ($featured_news as $new) : setup_postdata($new); ?>
                    <div class="col-md-4 mb-3 d-flex">
                        <div class="pricing-item text-center py-4 px-5 w-100">
                            <h3>
                                <?php echo $new->post_title ; ?>
                            </h3>
                            <p class="circle-text">
                                <?php the_field('products_price', $new->ID); ?>
                            </p>
                            <?php if (!empty(get_field('products_list', $new->ID))): ?>
                                <div class="single-content text-left">
                                    <?php the_field('products_list', $new->ID); ?>
                                </div>
                            <?php endif; ?>
                            <a class="d-block text-uppercase link-buy-products" href="<?php echo $new->guid  ; ?>">
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
    <section class="contacts-us py-5 contact-information">
        <div class="container " >
            <div class="row ">
                <div class="col-md-12 contact-info-wrap">
                    <h2 class="yellow-border-text-bottom text-center">
                        <?php _e(' Contact Us ', 'bi-team'); ?>
                    </h2>
                    <div class="list-group-wrap">
                        <ul class="list-group">
                          <?php if (!empty($site)):?>
                            <li>
                              <a class="site" href="<?php echo $site;  ?>"><?php echo $site;  ?></a>
                            </li>
                          <?php endif; ?>
                          <?php if (!empty($mail)):?>
                            <li>
                              <a class="mail" href="mailto:<?php echo $mail;  ?>"><?php echo $mail;  ?></a>
                            </li>
                          <?php endif; ?>
                          <?php if (!empty($phone)):?>
                            <li>
                              <a class="phone" href="tel:<?php echo $phone;  ?>"><?php echo $phone;  ?></a>
                            </li>
                          <?php endif; ?>
                          <?php if (!empty($map)):?>
                            <li>
                              <a class="map" href="<?php echo $map["link"] ?>"><?php echo $map["info"] ?></a>
                            </li>
                          <?php endif; ?>
                        </ul>
                        <button type="button" class="btn send-request-btn">
                          <a class="text-uppercase" href="#">send a request</a>
                          <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>