<?php global $post; ?>
<article class="col-md-6 col-lg-6 pb-5 d-flex justify-content-center">
    <div class="reviews-item text-center w-100 p-4 shadow-lg">
        <img src="<?php the_post_thumbnail_url('small_avatar_circle'); ?>"
             alt="<?php the_post_thumbnail_caption(); ?>"
             class="img-fluid"/>
        <h2 class="font-weight-bold"><?php the_title(); ?></h2>
        <?php if (!empty(get_field('reviews_position'))): ?>
        <h3 class="text-silver font-weight-bold">
           <?php the_field('reviews_position'); ?>
        </h3>
        <?php endif; ?>
        <i class="fa fa-quote-left fa-2x color-icon d-block py-3" aria-hidden="true"></i>
           <?php the_excerpt(); ?>
        <a class="d-inline-block link-read-more text-uppercase font-weight-bold" href="<?php the_permalink(); ?>">
           <?php _e('READ THE REVIEW','bi-team'); ?>
        </a>
    </div>
</article>