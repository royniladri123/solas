<?php
/**
* Template Name: Contact Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<?php get_header(); ?>

<!-- banner-section -->
    

      <section class="contact_otr sec_gap">
         <div class="container">
            <div class="sing_txt text-center full_p_width_big">
               <p><?php the_field('contact_text'); ?> </p>
            </div>
            <div class="contact_row row">
               <div class="col-lg-6 con_frm">
                  <div class="con_frmm_in">
                     <?php echo do_shortcode('[contact-form-7 id="311" title="Contact form 2"]')  ?>
                  </div>
               </div>
               <div class="col-lg-6 con_rgt">
                  <h3><?php the_field('title_before_map'); ?></h3>
                  <div class="con_mapp radius">
                    <?php
                    $map = get_field('map');
                    ?>
                     <img src="<?php echo esc_url($map['url']) ?>" alt="">
                  </div>
                  <div class="ul_style conn_lst icc_imgg">
                     <ul>
                        <li>
                            <a>
                                <span>
                                <?php if( get_field('location_icon') ): ?> 
                                <img src="<?php the_field('location_icon'); ?>" alt="">
                                <?php endif; ?>
                                </span>
                                <?php the_field('address_details'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field('contact_link'); ?>">
                                <span>
                                <?php if( get_field('phone_icon') ): ?>       
                                <img src="<?php the_field('phone_icon'); ?>" alt="">
                                <?php endif; ?>
                                </span>
                                <?php the_field('contact_details'); ?>
                            </a>
                        </li>
                     </ul>
                  </div>
                  <div class="timeing_list ul_style">
                     <h3><?php the_field('hours_title'); ?></h3>
                     <?php the_field('hours_details'); ?>
                  </div>
               </div>
            </div>
         </div>
      </section>

<?php get_footer(); ?>