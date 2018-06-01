<?php

/*
Template Name: Index Product

*/

get_header();



?>

<?php
global $post;


$site = get_field("site", 8);
$mail = get_field("mail",8);
$phone = get_field("phone",8);
$map = get_field("map",8)[0];
$slider = get_field("p_main_slider");
$products = get_field("product");
$pricings = get_field("pricing")[0];
$customers = get_field("customers");


?>

    <!--    <! --== Carousel ==-->
    <section class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide main-carousel" data-ride="carousel">
            <?php if(!empty($slider)):
            $i=0 ;
            ?>
            <ol class="carousel-indicators">
                <?php  foreach ($slider as $it => $slide) :?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $it ; ?> "  class="<?php if ($it == 0){echo 'active' ;} ?>"></li>
                <?php endforeach;?>
            </ol>

            <div class="carousel-inner">

                <?php   foreach ($slider as $it => $slide) :?>


                    <div class="carousel-item <?php if ($i==0){echo 'active' ;} ?> ">
                        <?php $slider_image = get_sub_field('header_slider_image');
    if (!empty($slide['image'])): ?>
                                    <img class="d-block w-100 img-fluid"
                                         src="<?php echo $slide['image']["url"]; ?>"
                                         alt="<?php echo $slide['image']['alt']; ?>"/>
                                <?php endif; ?>

                        <div class="carousel-caption d-none d-md-block">
                            <h3><?php echo $slide['slider_title']; ?></h3>
                            <h3 class="with-line"><?php echo $slide['header_slider_content_title']; ?></h3>
                            <p><?php echo $slide['slider_content']; ?></p>
                            <button type="button" class="btn get-quote-btn">
                                <a href="<?php echo $slide['button_link'] ; ?>">
                                    GET A QUETE
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </button>
                        </div>
                    </div>

                    <?php
                    $i++ ;

                endforeach; ?>
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
<!--    <section class="container-fluid p-0">-->
<!--        --><?php //if(!empty($slider)):  ?>
<!---->
<!--        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
<!--            --><?php
//            $i=0 ;
//            ?>
<!--            <ol class="carousel-indicators">-->
<!--                --><?php // foreach ($slider as $it => $slid) :?>
<!--                    <li data-target="#carouselExampleIndicators" data-slide-to="--><?php //echo $it ; ?><!-- "  class="--><?php //if ($it == 0){echo 'active' ;} ?><!--"></li>-->
<!--                --><?php //endforeach;?>
<!--            </ol>-->
<!---->
<!--            <div class="carousel-inner">-->
<!---->
<!--        --><?php //  foreach ($slider as $it => $slide) :?>
<!--                    <div class="carousel-item --><?php //if ($i==0){echo 'active' ;} ?><!-- ">-->
<!--                        --><?php //$slider_image = get_sub_field('header_slider_image');
//                        if (!empty($slide['image'])): ?>
<!--                            <img class="d-block w-100 img-fluid"-->
<!--                                 src="--><?php //echo $slide['image']["url"]; ?><!--"-->
<!--                                 alt="--><?php //echo $slide['image']['alt']; ?><!--"/>-->
<!--                        --><?php //endif; ?>
<!---->
<!--                        <div class="carousel-caption d-none d-md-block">-->
<!--                            <h3>--><?php //echo $slide['slider_title']; ?><!--</h3>-->
<!--                            <p>--><?php //echo $slide['slider_content']; ?><!--</p>-->
<!--                            <button type="button" class="btn get-quote-btn">-->
<!--                                <a class="d-inline-block" href="--><?php //echo $slide['button_link'] ; ?><!--">GET A QUETE</a>-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    --><?php
//                    $i++ ;
//
//                   endforeach; ?>
<!--                --><?php //endif; ?>
<!---->
<!--            </div>-->
<!--            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
<!--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                <span class="sr-only">Previous</span>-->
<!--            </a>-->
<!--            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
<!--                <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                <span class="sr-only">Next</span>-->
<!--            </a>-->
<!--        </div>-->
<!---->
<!--    </section>-->

    <section class="multirow-section">
        <?php if(!empty($products)): ;?>
        <div class="container-fluid ddfd">
            <?php foreach ($products as $product) :  ; ?>
                <div class="row multirow">
                    <div class="col-md-6 p-0">
                        <div class="products-image-thumbnail"
                             style="background-image: url('<?php echo $product['image']['url']; ?>');">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 col-lg-7 multirow-item">
                                <div class="text-center p-4 pt-5 pb-7">
                                    <?php $products_logo = get_field('products_logo', $post->ID);
                                    if (!empty($product['image_logo'])): ?>
                                        <img class="img-fluid pb-3" width="150"
                                             src="<?php echo $product['image_logo']['url']; ?>"
                                             alt="<?php echo $product['image_logo']['alt']; ?>"/>
                                    <?php endif; ?>
                                    <h2 class="text-uppercase">
                                        <?php echo $product['title']; ?>
                                    </h2>
                                    <?php echo $product['content']; ?>
                                    <a class="more-link text-uppercase" href="  <?php echo $product['link']; ?>">more about
                                        product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    <?php endif; ?>
    </section>



    <section class="pricing-section py-5 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-5">
                    <h2 class="text-center yellow-border-text-bottom text-white">
                        <?php echo $pricings['title']; ?>
                    </h2>
                </div>
                <?php foreach ($pricings['price'] as $pricing) :   ?>
                    <div class="col-md-4 mb-3 d-flex">
                        <div class="pricing-item text-center py-4 px-5 w-100">
                            <h3>
                                <?php echo $pricing['title']; ?>
                            </h3>
                            <p class="circle-text">
                                $ <?php echo $pricing['price']; ?>
                            </p>
                            <?php if (!empty($pricing['content'])): ?>
                                <div class="single-content text-left">
                                    <?php echo $pricing['content']; ?>
                                </div>
                            <?php endif; ?>
                            <a class="d-block text-uppercase link-buy-products" href=" <?php echo $pricing['link']; ?>">
                                buy product
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--///-->

<?php if (!empty($customers)) : ?>
    <section class="customers-section py-5">
        <div class="container container-large text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <h2 class="yellow-border-text-bottom">
                        <?php _e('Customers', 'bi-team'); ?>
                    </h2>
                </div>
                    <?php foreach ($customers as $customer) :   ?>
                        <div class="col customers-logo-item">
                            <a class="d-block" target="_blank"
                               href="<?php echo $customer['link']; ?>">
                                <?php
                                if (!empty($customer['logo'])): ?>
                                    <img class="img-fluid"
                                         src="<?php echo $customer['logo']['url']; ?>"
                                         alt="<?php echo $customer['logo']['alt']; ?>"/>
                                <?php endif; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

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