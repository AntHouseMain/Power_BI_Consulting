<?php
/*
Template Name: Contacts

*/

get_header();

?>


<?php

$site = get_field("site");
$mail = get_field("mail");
$phone = get_field("phone");
$map = get_field("map")[0];

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-xs-12 p-0">
      <div class="contact-information">
        <div class="row justify-content-end m-0 p-0">
          <div class="col-lg-7 col-md-12 col-xs-12 contact-info-wrap">
            <h2>Contact Information</h2>
            <ul class="list-group">
                <?php if (!empty($site)):?>
              <li>
                <a class="site" href="<?php echo $site;  ?>"><?php echo $site;  ?></a>
              </li>
                <?php endif; ?>
                <?php if (!empty($mail)):?>
              <li>
                <a class="mail" href="mailto:<?php echo $mail;  ?>"><?php echo $mail;  ?></a>
              </li>
                <?php endif; ?>
                <?php if (!empty($phone)):?>
              <li>
                <a class="phone" href="tel:<?php echo $phone;  ?>"><?php echo $phone;  ?></a>
              </li>
                <?php endif; ?>
                <?php if (!empty($map)):?>
                    <li>
                        <a class="map" href="<?php echo $map["link"] ?>"><?php echo $map["info"] ?></a>
                    </li>
                <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xs-12">
      <div class="row contact-us-form">
        <div class="col-lg-9 col-md-12 col-xs-12">
            <h2>Contact Us Form
                <?php the_title() ; ?>
            </h2>
            <p>
                <?php the_content() ; ?>
            </p>

            <?php echo do_shortcode("[contact-form-7 id=\"87\" title=\"Contact\"]");  ?>
<!--          <form>-->
<!---->
<!--            <div class="form-row">-->
<!--              <div class="form-group col-xl-6 col-lg-12">-->
<!--                <input type="text" class="form-control contact-form" id="inputFirstName" placeholder="First Name">-->
<!--              </div>-->
<!--              <div class="form-group col-xl-6 col-lg-12">-->
<!--                <input type="text" class="form-control contact-form" id="inputLastName" placeholder="Last Name">-->
<!--              </div>-->
<!--            </div>-->
<!---->
<!--            <div class="form-row">-->
<!--              <div class="form-group col-xl-6 col-lg-12">-->
<!--                <input type="text" class="form-control contact-form" id="inputCompanyName" placeholder="Company Name">-->
<!--              </div>-->
<!--              <div class="form-group col-xl-6 col-lg-12">-->
<!--                <input type="text" class="form-control contact-form" id="inputPhoneNumber" placeholder="Phone Number">-->
<!--              </div>-->
<!--            </div>-->
<!---->
<!--            <div class="form-row">-->
<!--              <div class="form-group col-xl-6 col-lg-12">-->
<!--                <input type="email" class="form-control contact-form" id="inputEmail" placeholder="Email">-->
<!--              </div>-->
<!--              <div class="form-group col-xl-6 col-lg-12">-->
<!--                <input type="text" class="form-control contact-form" id="inputWebsite" placeholder="Website">-->
<!--              </div>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--              <textarea-->
<!--                class="form-control contact-form message"-->
<!--                name="textareaMessage"-->
<!--                id="textareaMessage"-->
<!--                placeholder="Message"-->
<!--                cols="30"-->
<!--                rows="10"></textarea>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--              <p class="checkbox-label">I would like to subscribe Bi Team Software newsletter:</p>-->
<!--              <div class="form-check">-->
<!--                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">-->
<!--                <label class="form-check-label" for="defaultCheck1">-->
<!--                  Bi Team Software Newsletter-->
<!--                </label>-->
<!--              </div>-->
<!--              <div class="form-check">-->
<!--                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">-->
<!--                <label class="form-check-label" for="defaultCheck1">-->
<!--                  Bi Team Product News-->
<!--                </label>-->
<!--              </div>-->
<!--            </div>-->
<!---->
<!--            <button type="submit" class="btn contact-btn">Submit request</button>-->
<!---->
<!--          </form>-->
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
