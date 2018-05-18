<?php
/*
Template Name: Products

*/

get_header();
?>
<section class="products-header"
         style="background-image: url('http://mirpozitiva.ru/uploads/posts/2016-10/1477469601_nature_gora.jpg');">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-10 m-auto text-center">
                <img src="" alt="">
                <h1>
                    TITLE
                </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda cupiditate delectus
                    dolore doloribus, eligendi fugiat fugit illum ipsa maiores nobis nulla obcaecati placeat provident
                    quasi
                    reiciendis reprehenderit saepe vero.
                </p>
                <a href="#"></a>
                <a href="#"></a>
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
<?php if (!empty(get_field('some_logo_title'))) : ?>
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
                                    <img class="img-fluid"
                                         src="<?php echo $two_logo_image['sizes']['customers_logo']; ?>"
                                         alt="<?php echo $two_logo_image['alt']; ?>"/>
                                <?php endif; ?>
                                <img src="" alt="">
                                <p>
                                    <?php the_sub_field('two_logo_content'); ?>
                                </p>
                                <h2>
                                    <?php the_sub_field('two_logo_title'); ?>
                                </h2>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!--///-->
<section class="multirow-section-products">
    <div class="container-fluid">
        <div class="row py-6 products-multirow">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-12 col-lg-10 products-multirow-image">
                        <img class="img-fluid"
                             src="http://mirpozitiva.ru/uploads/posts/2016-10/1477469601_nature_gora.jpg"
                             alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6  d-flex align-items-center">
                <div class="row">
                    <div class="col-sm-12 col-lg-8 col-xl-8 multirow-item">
                        <div class="multirow-section-products-description">
                            <h2>lorem lorem </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur beatae provident.
                                Accusamus
                                commodi dignissimos dolorum exercitationem laudantium numquam perspiciatis ratione. Aut
                                laboriosam
                                molestias numquam recusandae rerum sapiente voluptates voluptatum!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-6 products-multirow">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-12 col-lg-10">
                        <img class="img-fluid"
                             src="http://mirpozitiva.ru/uploads/posts/2016-10/1477469601_nature_gora.jpg"
                             alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6  d-flex align-items-center">
                <div class="row">
                    <div class="col-sm-12 col-lg-8 col-xl-8 multirow-item">
                        <div class="multirow-section-products-description multirow-item">
                            <h2>lorem lorem </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur beatae provident.
                                Accusamus
                                commodi dignissimos dolorum exercitationem laudantium numquam perspiciatis ratione. Aut
                                laboriosam
                                molestias numquam recusandae rerum sapiente voluptates voluptatum!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--///-->
<?php echo render_template_part('video-section'); ?>
<!--///-->
<section class="section-reports">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center py-5">
                <div class="row">
                    <div class="col-sm-12 col-lg-8 col-xl-8 ml-auto">
                        <div class="reports-desription">
                            <h2>lorem lorem </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur beatae provident.
                                Accusamus
                                commodi dignissimos dolorum exercitationem laudantium numquam perspiciatis ratione. Aut
                                laboriosam
                                molestias numquam recusandae rerum sapiente voluptates voluptatum!</p>
                            <div class="d-flex flex-column">
                                <a class="" href="#">Link1</a>
                                <a href="#">Link2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6"
                 style="background-image: url('http://mirpozitiva.ru/uploads/posts/2016-10/1477469601_nature_gora.jpg'); min-height: 400px;"></div>
        </div>
    </div>
</section>
<!--///-->
<section class="py-5 list-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center m-auto">
                <h2 class="white-border-text-bottom">
                    <?php the_field('list-section_content'); ?>
                </h2>
                <?php the_field('list-section_content'); ?>
            </div>
        </div>
    </div>
</section>
<!--///-->
<section class="py-5 what-is-new-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 text-center m-auto">
                <h2 class="white-border-text-bottom">
                    Title
                </h2>
                <?php the_field('our_different_content'); ?>
                <?php if (!empty(get_field('our_different_link'))) : ?>
                    <a class="text-uppercase more-link"
                       href="<?php the_field('our_different_link'); ?>"><?php _e('SEE WHAT`S NEW', 'bi-tema'); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!--///-->
<section class="accordion-section py-5">
    <div class="container-large">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="py-4 text-white">TITLE TITLE</h2>
            </div>
            <div class="col-md-6">

                <div id="accordion" class="accordion-wrapper">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne"><i class="fa"
                                                                                            aria-hidden="true"></i>
                                    Collapsible Group Item #1
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa" aria-hidden="true"></i>
                                    Collapsible Group Item #2
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <i class="fa" aria-hidden="true"></i>
                                    Collapsible Group Item #3
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="http://mirpozitiva.ru/uploads/posts/2016-10/1477469601_nature_gora.jpg" alt="">
            </div>
        </div>
    </div>
</section>
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
    <?php global $post;
    $featured_reviews = get_posts(['numberposts' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'reviews']); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <?php foreach ($featured_reviews as $post) :
                    setup_postdata($post); ?>
                    <div class="row align-items-center py-4 reviews-item-product">
                        <div class="col-md-12 col-lg-4 text-center">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url('small_avatar_circle'); ?>"
                                     alt="<?php the_post_thumbnail_caption(); ?>"
                                     class="img-fluid rounded-circle"/>
                            </a>
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <h2 class="text-silver">
                                <?php the_field('reviews_position'); ?>
                            </h2>
                            <i class="fa fa-quote-left fa-2x color-icon" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <?php
                endforeach;
                wp_reset_postdata(); ?>
                <div class="row">
                    <div class="col-md-12 text-center my-5">
                        <?php
                        echo '<a class="d-inline-block link-read-more text-uppercase font-weight-bold">SHOW MORE
                            REWIEWS</a>';
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
