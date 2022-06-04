<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

	<footer class="footer">
      <div class="container">
        <div class="ftr-upper">
          <div class="row ftr-total-sec justify-content-between">
            <div class="col-lg-4 ftr-col-sec">
              <div class="ftr-wrap">
                <a href="<?php echo home_url(); ?>" class="ftr-logo">
                	<?php 
                 		$footer_logo_image = get_field('footer_logo_image','option');
            		?>
                  <img src="<?php echo esc_url($footer_logo_image['url']) ?>" alt="" />
                </a>
                <p>
                  <?php the_field('footer_text','option'); ?>
                </p>
                <ul class="cntct-list">
                  <li>
                  	<?php 
                 		$mail_icon = get_field('mail_icon','option');
            		?>
                    <span><img src="<?php echo esc_url($mail_icon['url']) ?>" alt="" /></span>
                    <div class="links2">
                    	<?php $mail = get_field('mail','option')  ?>
                      <a href="mailto:<?php echo $mail['url'] ?>"
                        ><?php echo $mail['url'] ?></a
                      >
                    </div>
                  </li>
                  <li>
                  	<?php 
                 		$call_icon = get_field('call_icon','option');
            		?>
                    <span><img src="<?php echo esc_url($call_icon['url']) ?>" alt="" /></span>
                    <div class="links2">
                    	<?php $contact_details = get_field('contact_details','option')  ?>
                      <a href="tel:<?php echo $contact_details['url'] ?>"><?php echo $contact_details['title'] ?> </a>
                      <?php $contact_details1 = get_field('contact_details1','option')  ?>
                      <a href="tel:<?php echo $contact_details1['url'] ?>"> <?php echo $contact_details1['title'] ?> </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 ftr-col-sec">
              <div class="ftr-wrap">
                <h5><?php the_field('quick_links_title','option'); ?></h5>
              
                <?php
                        wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'container'=> "ul",
                        'menu_class' => 'ftr-list'
                          ) ); 

                        ?>        
              </div>
            </div>
            <div class="col-lg-2 ftr-col-sec">
              <div class="ftr-wrap">
                <h5>Other Info</h5>
                <ul class="ftr-list">
                  <!-- <li>
                    <a href="#">FAQs </a>
                  </li>
                  <li>
                    <a href="#"> Contact Us</a>
                  </li>
                  <li>
                    <a href="terms.html"> Terms & Conditions</a>
                  </li>
                  <li>
                    <a href="privacy.html"> Privacy Policy</a>
                  </li> -->
                    <?php
                        wp_nav_menu( array(
                        'theme_location' => 'footer2',
                        'container'=> "ul",
                        'menu_class' => 'ftr-list'
                          ) ); 

                        ?>       
                </ul>
              </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 ftr-col-sec">
              <div class="ftr-wrap">
                <h5>Newsletter</h5>
                <form>
                  <div class="form-group">
                    <input
                      type="email"
                      placeholder="Enter your email address"
                      class="form-control"
                    />
                    <input type="submit" value="" class="sbt" />
                  </div>
                </form>
              </div>
            </div> -->
          </div>
        </div>
        <div class="ftr-lwr">
          <p class="copy">
          	<?php $copyright_text_within_link = get_field('copyright_text_within_link','option')  ?>
            <?php the_field('copyright_text_before_link','option'); ?> <a href="<?php echo $copyright_text_within_link['url'] ?>"> <?php echo $copyright_text_within_link['title'] ?></a> <?php the_field('copyright_text_after_link','option'); ?>
          </p>
          <div class="copy">
          	<?php $faq_link = get_field('faq_link','option')  ?>
            <a href="<?php echo $faq_link['url'] ?>"><?php echo $faq_link['title'] ?> </a> 
            <?php $contact_us_link = get_field('contact_us_link','option')  ?>
            <a href="<?php echo $contact_us_link['url'] ?>"><?php echo $contact_us_link['title'] ?></a>
            <?php $terms_and_conditions = get_field('terms_and_conditions','option')  ?>
            <a href="<?php echo $terms_and_conditions['url'] ?>"><?php echo $terms_and_conditions['title'] ?></a>
            <?php $privacy_policy = get_field('privacy_policy','option')  ?>
            <a href="<?php echo $privacy_policy['url'] ?>"><?php echo $privacy_policy['title'] ?></a>

          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
