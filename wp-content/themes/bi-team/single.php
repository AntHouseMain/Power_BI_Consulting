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
            <?php
            while (have_posts()) :
                the_post();
                 ?>
            <div class="col-md-12">
                <article>
                    <header>
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                    </header>
                    <div class="single-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            </div>

<?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>
    </div>

<?php
get_footer();