<?php if (!empty(get_field('page_video_mp4') || get_field('page_video_webm') || get_field('page_video_external_site'))) : ?>
    <?php $image_video = get_field('video_image'); ?>
    <section class="video-block"
             style="background-image: url('<?php echo $image_video['sizes']['image_article_large']; ?>');">
        <div class="container-fluid">
            <div class="row py-7">
                <div class="col-md-12 d-flex justify-content-center flex-column align-items-center">
                    <button type="button" class="btn d-inline-block video-button" data-toggle="modal"
                            data-target="#exampleModalCenter">
                        <i class="fa fa-play" aria-hidden="true"></i>
                    </button>
                    <h2 class="text-white my-4">
                        <?php _e('See How it Works', 'bi-team') ?>
                    </h2>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-video-medium modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close button-close" data-dismiss="modal"
                                        aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                            </div>
                            <?php if (!empty(get_field('page_video_mp4') || get_field('page_video_webm'))) { ?>
                                <video id="videoBlock" width="100%" height="auto" preload="auto" loop="loop"
                                       controls>
                                    <source src="<?php echo get_field('page_video_mp4'); ?>" type="video/mp4">
                                    <source src="<?php echo get_field('page_video_webm'); ?>" type="video/webm">
                                </video>
                            <?php } elseif (!empty(get_field('page_video_external_site'))) { ?>
                                <div class="embed-container">
                                    <?php the_field('page_video_external_site'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>