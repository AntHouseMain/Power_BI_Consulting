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
        <div class="col-md-9">
            <?php if (have_posts()) : ?>

                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                //            the_archive_description('<div class="archive-description">', '</div>');
                ?>

                <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post(); ?>
                    <article class="py-4">
                        <header class="py-2">
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <?php echo render_template_part('article-post-meta'); ?>
                        </header>

                        <img src="<?php the_post_thumbnail_url('image_article_large'); ?>"
                             alt="<?php the_post_thumbnail_caption(); ?>"
                             class="img-fluid"/>
                        <?php the_excerpt(); ?>
                        <footer class="d-flex justify-content-between pb-3 align-items-center">
                            <p>
                                <?php
                                $comments_count = get_comments_number();
                                if ($comments_count == 0) {
                                    _e('    0', 'mb');
                                } else {
                                    printf(_n('%d <i uk-icon="icon: comments; ratio: 0.9"></i>', '%d <i uk-icon="icon: comments; ratio: 0.9"></i>', get_comments_number(), 'mb'), get_comments_number());
                                }
                                ?>
                            </p>
                            <a class="d-inline-block link-read-more text-uppercase"
                               href="<?php the_permalink(); ?>"><?php _e('read more', 'bi-team') ?></a>
                        </footer>
                        <hr>
                    </article>
                    <?php
                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                endwhile;
                the_posts_navigation();
            else :
                get_template_part('template-parts/content', 'none');

            endif;
            ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
