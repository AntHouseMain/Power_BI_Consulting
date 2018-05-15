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

    <div class="container py-5">
        <div class="row">
            <?php echo render_template_part('back-review-link');
            if (have_posts()) : while (have_posts()) :
            the_post(); ?>
        <?php echo render_template_part('reviews-single-parts'); ?>
            <div>
                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                endwhile; // End of the loop.
                endif; ?>

            </div>
            <?php echo render_template_part('back-review-link'); ?>
        </div>
    </div>
<?php
get_footer();
