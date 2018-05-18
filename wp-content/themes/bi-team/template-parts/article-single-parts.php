<article class="col-md-8 m-auto py-4 article-item">
    <header class="py-2">
        <h1><?php the_title(); ?></h1>
        <?php echo render_template_part('post-date'); ?>
    </header>
    <div class="single-content">
        <img src="<?php the_post_thumbnail_url('image_article_large'); ?>"
             alt="<?php the_post_thumbnail_caption(); ?>"
             class="img-fluid"/>
        <?php the_content(); ?>
    </div>
    <footer class="pt-5">
        <?php echo render_template_part('tags-social-post'); ?>
    </footer>
</article>