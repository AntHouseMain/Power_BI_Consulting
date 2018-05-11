<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bi-team
 */

get_header();
?>

    <div class="container py-3">
        <div class="row">
            <div class="col-md-12 pt-3 d-flex flex-row align-items-center back-link">
                <i class="fa fa-angle-left angel-link" aria-hidden="true"></i>
                <a class="ml-2" href="#" onclick="history.back();return false;">
                    Back to blog
                </a>
            </div>
            <?php
            while (have_posts()) :
            the_post(); ?>


            <article class="col-md-8 m-auto py-4">
                <header class="py-2">
                    <h1><?php the_title(); ?></h1>
                    <?php echo render_template_part('article-post-meta'); ?>
                </header>

                <img src="<?php the_post_thumbnail_url('image_article_large'); ?>"
                     alt="<?php the_post_thumbnail_caption(); ?>"
                     class="img-fluid"/>

                <?php the_content(); ?>
                <footer>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p>Share this article</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="tag-news list-style-none p-0 m-0 d-flex flex-row flex-wrap align-items-center">
                                <li>
                                    <i class="fa fa-tag fa-rotate-90 fa-2x align-middle" aria-hidden="true"></i>
                                    <span>Tags:</span>
                                </li>
                                <?php $taxonomies = get_the_terms(get_the_ID(), 'news-tag');
                                if (!empty($taxonomies)) :
                                    $taxonomies = get_the_terms(get_the_ID(), 'news-tag');
                                    foreach ($taxonomies as $term) :
                                        ?>
                                        <li class="tag-news-item mx-2 mt-1">
                                            <a class="link-hover" href="<?php echo get_term_link($term); ?>">
                                                <?php echo $term->name; ?>
                                            </a>
                                        </li>
                                        <?php
                                    endforeach;
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </footer>
            </article>
            <div>
                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

                endwhile; // End of the loop.
                ?>
            </div>
            <div class="col-md-12 pt-3 d-flex flex-row align-items-center back-link">
                <i class="fa fa-angle-left angel-link" aria-hidden="true"></i>
                <a class="ml-2" href="#" onclick="history.back();return false;">
                    Back to blog
                </a>
            </div>
        </div>
    </div>
<?php
get_footer();
