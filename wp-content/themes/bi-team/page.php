<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bi-team
 */

get_header();
?>

<!--    <div class="container py-5">-->
<!--        <div class="row">-->
<!---->
<!--            --><?php
//            while (have_posts()) :
//                the_post(); ?>
<!--                <div class="col-md-12">-->
<!--                    <h1>-->
<!--                        --><?php //the_title(); ?>
<!--                    </h1>-->
<!--                </div>-->
<!--                <div class="col-md-12">-->
<!--                    --><?php //the_content(); ?>
<!--                  <p>Some content</p>-->
<!--                </div>-->
<!---->
<!--                --><?php
//                // If comments are open or we have at least one comment, load up the comment template.
//                if (comments_open() || get_comments_number()) :
//                    comments_template();
//                endif;
//
//            endwhile; // End of the loop.
//            ?>
<!---->
<!--        </div>-->
<!--    </div>-->

<section class="about-us-header py-5 position-relative d-flex align-items-center justify-content-center"
         style="background-image: url('http://webneel.com/daily/sites/default/files/images/daily/05-2014/12-sunrise-picture.jpg');">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-8 m-auto text-center text-white">
          <h1>
            About Bi Team
          </h1>
          <p>Description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
</section>
<section class="about-us-content position-relative d-flex align-items-center justify-content-center">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-9 py-3 m-auto">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h2>
<!--        тут с админки выводить текст и делать их отдельными параграфами-->
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum.
          </p>
          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
            rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt e
            xplicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
            magni dolores eos qui ratione voluptatem sequi nesciunt.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.
          </p>
          <img src="https://media.wired.com/photos/598e35fb99d76447c4eb1f28/master/pass/phonepicutres-TA.jpg" alt="">
      </div>
      <div class="col-md-9 py-3 m-auto">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </h2>
        <!--        тут с админки выводить текст и делать их отдельными параграфами-->
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
          mollit anim id est laborum.
        </p>
        <p>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
          rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt e
          xplicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
          magni dolores eos qui ratione voluptatem sequi nesciunt.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
          eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.
        </p>
        <!--  видео-блок из админки -->
        <?php echo render_template_part('video-section'); ?>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
          eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="col-md-9 py-5 m-auto list-section">
        <h2>
          Our priciples
        </h2>
        <ul class="principles-list">
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit</li>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
