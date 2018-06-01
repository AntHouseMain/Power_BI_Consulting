<?php
/*
Template Name: Products

*/

get_header();
?>
<?php $header_bg_image = get_field('header_content_image');


$content_title = get_field("header_content_title");
$header_logo = get_field("header_content_logo");
$content_content = get_field("header_content_content");

$c_title = get_field("connect_title");
$c_content = get_field("connect_content");

$download = get_field("header_content_link_download");
$buy_link = get_field("header_content_buy_link");


$a_title_section = get_field("accordion_title_section");
$accordion_repeater = get_field("accordion_repeater");
$p_accordion_repeater = get_field("product_multi_row_repeater");
$title_product_tab = get_field("title_product_tab");
$accordion_repeater = get_field("accordion_repeater");

//var_dump($accordion_repeater);

$site = get_field("site", 8);
$mail = get_field("mail",8);
$phone = get_field("phone",8);
$map = get_field("map",8)[0];

global $post;
    $featured_reviews = get_posts(
            [   'numberposts' => 2,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'reviews'
            ]);

    ?>


<section class="products-header py-5 position-relative d-flex align-items-center justify-content-center"
         style="background-image: url('<?php echo $header_bg_image['sizes']['large_background_image']; ?>');">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-10 m-auto text-center text-white">
                <?php
                if (!empty($header_logo)): ?>
                    <img class="img-fluid"
                         src="<?php echo $header_logo['sizes']['customers_logo']; ?>"
                         alt="<?php echo $header_logo['alt']; ?>"/>
                <?php endif; ?>
                <?php if (!empty($content_title)) : ?>
                    <h1>
                        <?php echo $content_title ; ?>
                    </h1>
                <?php endif; ?>
                <?php echo $content_content; ?>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <?php if (!empty($download)) : ?>
                        <a class="download-button text-uppercase"
                           href="<?php echo $download ; ?>">Download free
                            package</a>
                    <?php endif; ?>
                    <?php if (!empty($buy_link)) : ?>
                        <a class="buy-button text-uppercase" href="<?php echo $buy_link ; ?>"> buy
                            this product </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (!empty(get_field('connect_title'))) : ?>
    <section class="section-connect py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 text-center m-auto text-white">
                    <h2 class="yellow-border-text-bottom text-white">
                        <?php the_field('connect_title'); ?>
                    </h2>

                    <?php if (!empty(get_field('connect_content'))) : ?>
                        <?php the_field('connect_content'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!--///-->
<?php if (have_rows('two_logo_repeater')): ?>
    <section class="two-logo py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 text-center m-auto">
                    <div class="row two-logo-wrapper">
                        <?php if (have_rows('two_logo_repeater')): ?>
                            <?php while (have_rows('two_logo_repeater')):
                                the_row();
                                $two_logo_image = get_sub_field('two_logo_image'); ?>

                                <div class="col-md-4 two-logo-item">
                                    <?php if (!empty($two_logo_image)): ?>
                                        <div class="logo-image-wrapper">
                                          <img class="img-fluid"
                                               src="<?php echo $two_logo_image['sizes']['customers_logo']; ?>"
                                               alt="<?php echo $two_logo_image['alt']; ?>"/>
                                        </div>
                                    <?php endif; ?>
                                    <h3>
                                        <?php the_sub_field('two_logo_title'); ?>
                                    </h3>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-10 m-auto text-center">
                    <?php the_field('content_two_logo'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!--///-->
<?php if (have_rows('product_multi_row_repeater')): ?>
    <section class="multirow-section-products">
        <div class="container-fluid">
            <?php if (have_rows('product_multi_row_repeater')): ?>
                <?php while (have_rows('product_multi_row_repeater')):
                    the_row(); ?>
                    <div class="row py-6 products-multirow">
                        <div class="col-md-6">
                            <div class="col-sm-12 col-lg-10 products-multirow-image">
                                <?php $multirow_image = get_sub_field('product_multi_row_image');
                                if (!empty($multirow_image)): ?>
                                    <img class="img-fluid"
                                         src="<?php echo $multirow_image['sizes']['image_article_large']; ?>"
                                         alt="<?php echo $multirow_image['alt']; ?>"/>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-12 col-lg-8 col-xl-8 multirow-item">
                                    <div class="multirow-section-products-description">
                                        <h2><?php the_sub_field('product_multi_row_title'); ?></h2>
                                        <?php the_sub_field('product_multi_row_content'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
<!--///-->
<?php echo render_template_part('video-section'); ?>
<!--///-->
<?php if (!empty(get_field('section_reports_title'))) : ?>
    <section class="section-reports">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 py-5 grey-block">
                    <div class="row">
                        <div class="col-sm-12 col-lg-8 col-xl-8 ml-auto">
                            <div class="reports-desription text-white">
                                <?php if (!empty(get_field('section_reports_title'))) : ?>
                                    <h2>
                                        <?php the_field('section_reports_title'); ?>
                                    </h2>
                                <?php endif; ?>
                                <?php the_field('section_reports_content'); ?>
                                <div class="d-flex flex-column align-items-start">
                                    <?php if (!empty(get_field('section_reports_link_download'))) : ?>
                                        <a class="download-button text-uppercase"
                                           href="<?php the_field('section_reports_link_download'); ?>">
                                            Download free package
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty(get_field('section_reports_buy_link'))) : ?>
                                        <a class="buy-button text-uppercase"
                                           href="<?php the_field('section_reports_buy_link'); ?>">
                                            buy this product
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $reports_bg_image = get_field('section_reports_image'); ?>
                <div class="col-md-6"
                     style="background-image: url('<?php echo $reports_bg_image['sizes']['large_background_image']; ?>'); min-height: 400px;background-size: cover;
                         background-repeat: no-repeat;
                         background-position: center;">

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!--///-->
<?php if (!empty(get_field('list_section_title'))) : ?>
    <section class="py-5 list-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <h2 class="yellow-border-text-bottom  text-center">
                        <?php the_field('list_section_title'); ?>
                    </h2>
                    <?php the_field('list_section_content'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!--///-->
<?php if (!empty(get_field('section_what_title'))) : ?>
    <section class="py-5 what-is-new-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 text-center m-auto">
                    <?php if (!empty(get_field('section_what_title'))) : ?>
                        <h2 class="white-border-text-bottom">
                            <?php the_field('section_what_title'); ?>
                        </h2>
                    <?php endif; ?>
                    <?php the_field('section_what_content'); ?>
                    <?php if (!empty(get_field('section_what_link'))) : ?>
                        <a class="text-uppercase more-link"
                           href="<?php the_field('section_what_link'); ?>"><?php _e('SEE WHAT`S NEW', 'bi-tema'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
    <!--///-->
<?php if (!empty($accordion_repeater)): ?>
<section class="accordion-section py-5">
    <div class="container-large">
        <div class="row align-items-center">
            <?php if (!empty($title_product_tab)) : ?>
                <div class="col-md-12">
                    <h2 class="py-4 text-white"><?php echo $title_product_tab; ?></h2>
                </div>
            <?php endif; ?>
            <div class="col-md-6">
                <div id="accordion" class="accordion-wrapper">


                        <?php $i = 1; ?>
                        <?php  foreach ($accordion_repeater as $repeater):?>

                            <div class="card">
                                <div class="card-header inform-tab" id="heading<?php echo $i; ?>" data-block="<?php echo $i; ?>" >
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapse<?php echo $i; ?>"
                                                aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                            <i class="fa" aria-hidden="true"></i>
                                            <?php echo $repeater["accordion_title"]; ?>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse<?php echo $i; ?>" class="collapse <?php echo $i > 0 ? '' : 'show'; ?>"
                                     aria-labelledby="heading<?php echo $i; ?>"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <?php echo $repeater["accordion_content"];  ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endforeach; ?>

                </div>
            </div>
            <div class="col-md-6">
                <?php $i = 1; ?>
                <?php  foreach ($accordion_repeater as $repeater):

                if (!empty($repeater['accordion_image'])): ?>
                    <img id="image-b-<?php echo $i; ?>" class="img-fluid  content-media-b <?php  echo $i>1?'no-display':''; ?> "
                         src="<?php echo $repeater['accordion_image']['sizes']['image_article_large']; ?>"
                         alt="<?php echo $repeater['accordion_image']['alt']; ?>"/>
                <?php endif; ?>
                <?php
                $i++ ;
                endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!--///-->
<section class="py-5 section-reviews-product">
    <div class="container">
        <div class="row  justify-content-center align-items-center">
            <div class="col-md-12">
                <h2 class="yellow-border-text-bottom text-center">
                    <?php _e(' Reviews ', 'bi-team'); ?>
                </h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div  class="col-md-10 m-auto">
                <?php foreach ($featured_reviews as $it=> $reviews) :

                    $position = '';
                    $position = get_field('reviews_position',$reviews->ID);
                    if(!empty($reviews->post_excerpt)){
                        $content = $reviews->post_excerpt;
                    }
                    else 
                    {
                        $content = $reviews->post_content;
                    }

                ?>
                    <div class="row align-items-center py-4 reviews-item-product <?php    echo $it % 2 == 0 ? 'add-colors' : ''; ?>" data-count="<?php echo $it ?>" >
                        <div class="col-md-12 col-lg-4 text-center">
                            <a href="<?php the_permalink(); ?>">
                                <img  src="<?php echo get_the_post_thumbnail_url($reviews->ID, 'customers_logo'); ?>"
                                      alt="<?php the_post_thumbnail_caption($reviews->ID); ?>"
                                     class="img-fluid rounded-circle"/>
                            </a>
                            <h3>
                                <?php echo  $reviews->post_title; ?>
                            </h3>
                            <h2 class="text-silver">
                                <?php  echo $position ; ?>
                            </h2>
                            <i class="fa fa-quote-left fa-2x color-icon" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <?php echo $content ; ?>
                        </div>
                    </div>
                    <?php
                endforeach;
              ?>
                <div id="new-ajax" class="new-ajax">

                </div>
                <div class="row add-ajax">
                    <div class="col-md-12 text-center my-5">
                        <a class="add-new-rew link-read-more text-uppercase font-weight-bold">
                          <i class="fa fa-refresh" aria-hidden="true"></i>
                          SHOW MORE REWIEWS
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
