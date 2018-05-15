<?php global $post; ?>
<article class="col-md-6 col-lg-4 pb-5 d-flex">
    <div class="card shadow-lg portfolio-card position-relative">
        <img class="card-img-top img-fluid"
             src="<?php the_post_thumbnail_url('image_portfolio_small'); ?>"
             alt="<?php the_post_thumbnail_caption(); ?>"/>
        <div class="card-body text-center">
            <h2 class="card-title color-icon">
                <?php the_title(); ?>
            </h2>
            <?php $excerpt_posrtfolio = get_the_excerpt(); ?>
            <p>
                <?php echo $post->post_excerpt; ?>
            </p>
        </div>
        <a class="d-block position-cover" href="<?php the_permalink(); ?>"></a>
    </div>
</article>