<?php global $post; ?>
<div class="row multirow">
    <div class="col-md-6 p-0">
        <div class="products-image-thumbnail"
             style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'image_article_large'); ?>');">
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12 col-lg-7 multirow-item">
                <div class="text-center p-4 pt-5 pb-7">
                    <?php $products_logo = get_field('products_logo', $post->ID);
                    if (!empty($products_logo)): ?>
                        <img class="img-fluid pb-3" width="150"
                             src="<?php echo $products_logo['sizes']['small_avatar']; ?>"
                             alt="<?php echo $products_logo['alt']; ?>"/>
                    <?php endif; ?>
                    <h2 class="text-uppercase">
                        <?php the_title(); ?>
                    </h2>
                    <?php the_excerpt(); ?>
                    <a class="more-link text-uppercase" href="<?php the_permalink(); ?>">more about
                        product</a>
                </div>
            </div>
        </div>
    </div>
</div>