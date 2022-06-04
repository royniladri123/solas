<?php
/**
* Template Name: Home Page
*
* @package WordPress
* @subpackage Wordpress
* @since Wordpress
*/
?>
<?php get_header(); ?>
  
     <section
      class="banner-sec"
      style="background-image: url(<?php echo get_template_directory_uri();?>/images/ban-pic.jpg)"
    >
      <div class="container">
        <div class="banner-outr">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="banner-left">
                <h1>Solas Healthcare</h1>
                <p>
                  Provider of high quality responsible officer services to
                  independent healthcare organisations
                </p>
                <a class="btn" href="#form-id">Get Started</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="banner-right">
                <figure>
                  <img src="<?php echo get_template_directory_uri();?>/images/doc2.png" alt="" />
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="beat">
          <img src="<?php echo get_template_directory_uri();?>/images/beat.png" alt="" />
        </div>
      </div>
    </section>

    <section class="do-sec" id="do-id">
      <div class="container">
        <div class="do-outr text-center">
          <h2 class="cmn-hdr">What We do</h2>
          <span>We offer the following services</span>
          <div class="cate-innr">
            <div class="card-upr">
              <div class="card-inn">
                <figure>
                  <img src="<?php echo get_template_directory_uri();?>/images/doctor.png" alt="" />
                </figure>
                <h6>Responsible Officer Services</h6>
              </div>
            </div>

            <div class="card-upr">
              <div class="card-inn">
                <figure>
                  <img src="<?php echo get_template_directory_uri();?>/images/healthcare.png" alt="" />
                </figure>
                <h6>
                  Establishing Designated Body Status for Healthcare Entities
                </h6>
              </div>
            </div>

            <div class="card-upr">
              <div class="card-inn">
                <figure>
                  <img src="<?php echo get_template_directory_uri();?>/images/call-center-service.png" alt="" />
                </figure>
                <h6>Suitable Person Services</h6>
              </div>
            </div>

            <div class="card-upr">
              <div class="card-inn">
                <figure>
                  <img src="<?php echo get_template_directory_uri();?>/images/checklist.png" alt="" />
                </figure>
                <h6>Access to Medical Appraisal</h6>
              </div>
            </div>

            <div class="card-upr">
              <div class="card-inn">
                <figure>
                  <img src="<?php echo get_template_directory_uri();?>/images/health-insurance.png" alt="" />
                </figure>
                <h6>Achieving Care Quality Commission Recognition</h6>
              </div>
            </div>
          </div>
          <div class="do-btm">
            <div class="row do-row">
              <div class="col-md-6 do-left">
                <div class="do-innr">
                  <ul>
                    <li>Help establish your healthcare entity</li>
                    <li>
                      Achieve Designated Body status for your healthcare entity
                    </li>
                    <li>
                      Establish a relationship between your healthcare entity
                      and a fully trained Responsible Officer
                    </li>
                    <li>Help you understand Responsible officer regulations</li>
                    <li>
                      Develop policies and procedures required by your
                      healthcare entity required for regulatory compliance
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 do-rgt">
                <div class="do-innr">
                  <ul>
                    <li>
                      Maintain, review and keep secure supporting documentation
                      relevant to Responsible Officer requirements (including
                      appraisal records, database and NHS England returns)
                    </li>
                    <li>
                      Assist in organising appraisal of connected doctors by
                      experienced, trained medical appraisers
                    </li>
                    <li>
                      Liaise with the General Medical Council and NHS England
                    </li>
                    <li>
                      Manage revalidation recommendations and submit returns to
                      NHS England
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="who-sec" id="about-id">
      <div class="container">
        <div class="who-outr">
          <div class="row align-items-center">
            <div class="col-md-7 text-center">
              <div class="who-left">
                <figure>
                  <img src="<?php echo get_template_directory_uri();?>/images/wh1.png" alt="" />
                </figure>
              </div>
            </div>
            <div class="col-md-5">
              <div class="who-right">
                <h2 class="cmn-hdr">Who We Are</h2>
                <p class="who-para">
                  Solas Healthcare was established in 2013 to provide healthcare
                  services to individuals, hospitals and other healthcare
                  entities.
                </p>
                <p>
                  We can help provide your healthcare entity with Responsible
                  Officer services thereby supporting you in meeting your
                  organisational readiness and revalidation obligations.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="officer-sec" id="officer-id">
      <div class="container">
        <div class="officer-outr">
          <div class="row align-items-center">
            <div class="col-md-7">
              <div class="ofcr-left">
                <h2 class="cmn-hdr">Responsible Officer</h2>
                <span>About the Responsible Officer</span>
                <p>
                  Mr Nadeem Ashraf is a Consultant Laparoscopic and Colorectal
                  Surgeon practicing in the Mid and South Essex Hospital Trust
                  and Clinical Lead for Endoscopy at Eastwood Endoscopy Centre.
                </p>
                <p>
                  He is a Responsible Officer with the skills, experience and
                  ability to help offer a high-quality service to clients
                  seeking External Responsible Officer services.
                </p>
              </div>
            </div>
            <div
              class="col-md-5 ofcr-rgt"
              style="background-image: url(<?php echo get_template_directory_uri();?>/images/res-pic.png)"
            >
              <figure class="ofcr-pic">
                <img src="images/res-pic.png" alt="" />
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="faq-sec cmn-gap" id="faq-id">
      <div class="container">
        <div class="faq-outr text-center">
          <h2 class="cmn-hdr">FAQs</h2>
          <span>Frequently asked questions</span>
        </div>
        <div id="accordion" class="accordion wow fadeInUp">
          <div class="card">
            <div class="card-header">
              <a class="collapsed card-link" data-bs-toggle="collapse" href="#qs1">
                Q. What is revalidation?
              </a>
            </div>
            <div id="qs1" class="collapse " data-bs-parent="#accordion">
              <div class="card-body">
                <ul>
                  <li>
                    In 2012 the GMC made revalidation a requirement for all doctors working in the UK to retain their license to practise. Revalidation requires evidencing that you are working to required standards.
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <a
                class="collapsed card-link"
                data-bs-toggle="collapse"
                href="#qs2"
              >
                Q. What is a Responsible Officer?
              </a>
            </div>
            <div id="qs2" class="collapse" data-bs-parent="#accordion">
              <div class="card-body">
                <ul>
                  <li>
                    Under the amended
                    <a
                      class="accor"
                      href="https://www.legislation.gov.uk/ukdsi/2010/9780111500286/contents"
                      target="_blank"
                      >Medical Profession (Responsible Officer) Regulations
                      2010</a
                    >,it is a legal requirement for healthcare entities that employ or contract doctors not already connected to appoint or nominate a Responsible Officer to oversee the process of revalidation. The Responsible Officer will have a prescribed connection to the medical practitioners for the purposes of making revalidation recommendations to the GMC.
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <a
                class="collapsed card-link"
                data-bs-toggle="collapse"
                href="#qs3"
              >
                Q. What is a Designated Body?
              </a>
            </div>
            <div id="qs3" class="collapse" data-bs-parent="#accordion">
              <div class="card-body">
                <p>
                  Every doctor working in the UK is required to have a
                  connection to a healthcare entity or Designated Body with
                  which they are employed or to which they are contracted.
                </p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <a
                class="collapsed card-link"
                data-bs-toggle="collapse"
                href="#qs4"
              >
                Q. What is the benefit of external Responsible Officer services?
              </a>
            </div>
            <div id="qs4" class="collapse" data-bs-parent="#accordion">
              <div class="card-body">
                <ul>
                  <li>
                    If you are a healthcare entity that employs or contracts
                    doctors, the process of appointing a Responsible Officer and
                    establishing systems and procedures can be costly in terms
                    of both staff and money. Commissioning a third party to
                    provide external responsible officer services can help avoid
                    this.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="info-sec" id="info-id">
      <div class="container">
        <div class="info-txt">
          <h2 class="cmn-hdr">Useful Information</h2>
          <div class="row info-row justify-content-between">
            <div class="col-md-4">
              <div class="info-wrap">
                <h5>General Medical Council</h5>
                <ul class="info-list">
                  <li>
                    <a
                      href="https://www.gmc-uk.org/registration-and-licensing/managing-your-registration/revalidation"
                      target="_blank"
                    >
                      Revalidation
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://www.gmc-uk.org/registration-and-licensing/managing-your-registration/revalidation/guidance-on-supporting-information-for-appraisal-and-revalidation
                    "
                      target="_blank"
                    >
                      Appraisal
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info-wrap">
                <h5>NHS England</h5>
                <ul class="info-list">
                  <li>
                    <a
                      href="https://www.england.nhs.uk/medical-revalidation/ro/"
                      target="_blank"
                    >
                      Responsible Officer
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://www.england.nhs.uk/medical-revalidation/doctors/10-steps/"
                      target="_blank"
                      >Revalidation
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://www.england.nhs.uk/medical-revalidation/emp-bod-hr/"
                      target="_blank"
                      >Designated Body</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.england.nhs.uk/revalidation/wp-content/uploads/sites/10/2015/05/medical-appraisal-policy-0415.pdf"
                      target="_blank"
                      >Appraisal</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info-wrap">
                <h5>
                  <a
                    href="https://www.gov.uk/government/organisations/department-of-health-and-social-care"
                    target="_blank"
                    >Department of Health</a
                  >
                </h5>
                <h5>
                  <a
                    href="https://www.england.nhs.uk/revalidation/wp-content/uploads/sites/10/2015/05/medical-appraisal-policy-0415.pdf"
                    target="_blank"
                    >Academy of Medical Royal Colleges
                  </a>
                </h5>
                <h5>
                  <a
                    href="https://www.bma.org.uk/advice-and-support/career-progression/revalidation/revalidation-for-doctors"
                    target="_blank"
                    >BMA</a
                  >
                </h5>
                <!-- <ul class="info-list">
                  <li>
                    <a href="https://www.england.nhs.uk/revalidation/wp-content/uploads/sites/10/2015/05/medical-appraisal-policy-0415.pdf" target="_blank">Academy of Medical Royal Colleges</a>
                  </li>
                  <li>
                    <a href="https://www.bma.org.uk/advice-and-support/career-progression/revalidation/revalidation-for-doctors" target="_blank">BMA</a>
                  </li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cnt-sec cmn-gap" id="contact-id">
      <div class="container">
        <div class="cnt-wrap text-center">
          <h2 class="cmn-hdr">Contact Us</h2>
          <h4>Get In Touch</h4>
          <div class="cnt-txt">
            <span
              >We offer bespoke services for your healthcare entity provided as
              part of several packages.</span
            >
            <p>
              These range from full in-house support from beginning
              (establishing your healthcare entity) to end (revalidation
              governance).
            </p>
            <h5>For further information, you can contact us by</h5>
          </div>
          <div class="cnt-inner">
            <ul class="cnt-lst-inner">
              <li>
                <div class="icon">
                  <span><img src="<?php echo get_template_directory_uri();?>/images/mail.svg" alt="" /></span>
                </div>
                <div class="links">
                  <a href="mailto:info@solashealthcare.com"
                    >info@solashealthcare.com</a
                  >
                </div>
              </li>
              <li>
                <div class="icon">
                  <span><img src="<?php echo get_template_directory_uri();?>/images/telephone.svg" alt="" /></span>
                </div>
                <div class="links">
                  <a href="tel:+44(0)2034887919">+44 (0) 203 488 7919 </a>
                  <a href="tel:+44(0)7570186099">+44 (0) 7570 186 099 </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="form-content" id="form-id">
      <div class="container">
        <div class="form-outr">
          <div class="row align-items-center">
            <div
              class="col-lg-5 form-left"
              style="background-image: url(<?php echo get_template_directory_uri();?>/images/frm.png)"
            ></div>
            <div class="col-lg-7 form-right">
              <div class="frm-inner-rgt">
                <h4>Fill Out This form</h4>

                <div class="contact-form">
                  <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                  <!-- <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="First Name" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Last Name" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" placeholder="Email" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="tel" placeholder="Phone" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea placeholder="Message..."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="contact-btm">
                    <div class="capcha">
                      <img src="images/capcha1.png" alt="" />
                    </div>
                    <div class="submit-inn">
                      <input
                        type="submit"
                        value="Contact Us"
                        class="btn-innr"
                      />
                    </div>
                  </div>-->
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>