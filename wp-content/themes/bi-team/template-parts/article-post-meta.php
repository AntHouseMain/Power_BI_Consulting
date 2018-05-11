<ul class="article-date-time list-style-none m-0 p-0 d-flex align-items-center flex-wrap">
    <li>
        <img class="img-fluid rounded-circle" src="http://robert.msk.ru/koken/storage/cache/images/000/099/IMG-1461-2,medium.1492395618.jpg" width="80" alt="">
        <?php the_author(); ?>
    </li>
    <li>
     <span class="pl-2">
          <time>
                <?php echo get_the_date('j M, Y');
                 the_time('g:i a');
                ?>
          </time>
     </span>
    </li>
<!--    <li>-->
<!--        <a class="link-hover" href="--><?php //the_permalink(); ?><!--#comments">-->
<!--            --><?php
//            $comments_count = get_comments_number();
//            if ($comments_count == 0) {
//                _e('   <i uk-icon="icon: comments; ratio: 0.9"></i> 0', 'mb');
//            } else {
//                printf(_n('%d <i uk-icon="icon: comments; ratio: 0.9"></i>', '%d <i uk-icon="icon: comments; ratio: 0.9"></i>', get_comments_number(), 'mb'), get_comments_number());
//            }
//            ?>
<!--        </a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <span class="uk-icon-eye">-->
<!--            --><?php //if (function_exists('the_views')) {
//                the_views();
//            } ?>
<!--            <i class="uk-icon uk-icon-image"-->
<!--               style="background-image: url(https://image.flaticon.com/icons/svg/64/64873.svg);"></i>-->
<!--        </span>-->
<!--    </li>-->
</ul>