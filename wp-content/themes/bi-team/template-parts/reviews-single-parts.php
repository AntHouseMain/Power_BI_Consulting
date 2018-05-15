<article class="col-md-7 m-auto py-4 article-item text-center">
    <header class="py-2">
        <img src="<?php the_post_thumbnail_url('small_avatar_circle'); ?>"
             alt="<?php the_post_thumbnail_caption(); ?>"
             class="img-fluid"/>
        <h1 class="py-4"><?php the_title(); ?></h1>
        <i class="fa fa-quote-left fa-2x color-icon" aria-hidden="true"></i>
    </header>
    <div class="single-content">
        <?php the_content(); ?>
    </div>
</article>