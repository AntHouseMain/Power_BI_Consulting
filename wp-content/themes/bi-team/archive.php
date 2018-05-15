<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bi-team
 */

get_header();
?>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="py-4">
                    <?php echo post_type_archive_title('', false); ?>
                </h1>
            </div>
            <?php if (have_posts()) : ?>

                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();

                    switch (get_post_type()) {
                        case 'portfolio':
                            echo render_template_part('portfolio-archive-parts');
                            break;
                        case 'products':
                            echo render_template_part('portfolio-archive-parts');
                            break;
                        case 'reviews':
                            echo render_template_part('reviews-archive-parts');
                            break;

                    }
                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */


                endwhile;
                ?>
                <div class="col-md-12">
                    <?php custom_paginate_links(); ?>
                </div>
            <?php else :

                get_template_part('template-parts/content', 'none');

            endif;
            ?>


        </div>
    </div>
<?php
get_footer();
