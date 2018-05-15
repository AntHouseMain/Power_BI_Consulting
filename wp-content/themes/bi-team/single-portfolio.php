<?php get_header(); ?>

    <div class="container py-5">
        <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>
        <article class="row">
            <header class="col-md-12">
                <h1 class="pb-5">
                    <?php the_title(); ?>
                </h1>
            </header>
            <div class="col-md-4">
                <img class="img-fluid mb-4 shadow-lg" src="<?php the_post_thumbnail_url('image_portfolio_single'); ?>"
                     alt="<?php the_post_thumbnail_caption(); ?>"/>
            </div>
            <div class="col-md-8">
                <time>
                 <span class="pl-2 text-silver">
                <?php echo get_the_date('j M, Y'); ?>
                 </span>
                <span class="pl-2 text-silver">
                <?php the_time('g:i A'); ?>
                </span>
                </time>
                <div class="single-content">
                <?php the_content(); ?>
                </div>
                <?php echo render_template_part('tags-social-post'); ?>
            </div>

        </article>
        <?php
        endwhile; // End of the loop.
        endif; ?>
        <div class="row">
            <?php echo render_template_part('back-portfolio-link'); ?>
        </div>
    </div>
<?php get_footer(); ?>