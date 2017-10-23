<?php /* Template Name: Contact */?>
<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('contact'); ?>

 <main>
      <!--Start: Banner-->
      <section class="section section--contactBanner">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container clearfix">
              <div class="col-sm-12">
                <ul class="breadcrumb breadcrumb-menu">
                  <li class="breadcrumb__list"><a href="<?php echo site_url();?>" class="breadcrumb__link">home</a></li>
                  <li class="breadcrumb__list active">contact</li>
                </ul>
                <h3 class="heading heading--lg"><?php echo get_field('contact_heading');?></h3>
                <div class="contact-form-wrapper clearfix">
                  <div class="col-sm-7">
                    <div class="row">
                        <?php //echo do_shortcode('[contact-form-7 id="249" title="contact form 2"]');?>
                      
                      <div class="contact-form-container">
                        <h3 class="heaing-bold heaing-bold--initial"><?php echo get_field('drop_heading');?></h3>
                        <div role="form" class="wpcf7" id="wpcf7-f249-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
                      <form data-parsley-validate="" class="contact-form wpcf7-form failed" action="/training/zinnov/contact/#wpcf7-f249-o1" method="post" novalidate="novalidate">
                      
                          <div style="display: none;">
<input type="hidden" name="_wpcf7" value="249">
<input type="hidden" name="_wpcf7_version" value="4.9">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f249-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
</div>
                          <div class="form-group"> 
                            <label for="name" class="input-label">
                               
                              name<i class="required">*</i>
                            </label>
                            <input id="name" name="name" type="text" required placeholder="Enter your full name" class="form-control input-field">
                          </div>
                          
                          
                          
                          
                          <div class="form-group">
                            <label for="email" class="input-label">
                               
                              Email address<i class="required">*</i>
                            </label>
                            <input id="email" name="email" type="email" required placeholder="sam@compayname.com" class="form-control input-field">
                          </div>
                          <div class="form-group">
                            <label for="regarding" class="input-label">regarding</label>
                            <select class="select-time" id="regarding" name="regarding">
                              <option>General</option>
                              <option>Product related</option>
                              <option>Career</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="message" class="input-label">message<i class="required">*</i></label>
                            <textarea id="message" name="message" type="text" required placeholder="Message" class="form-control input-field"></textarea>
                          </div>
                          <div class="send-btn-container"><span class="info info--small">Required <span class="required">*</span></span>
                            <button type="submit" class="btn btn--blue btn--lg">send</button>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                          </div>
                        </form>
                      
                             </div>
                             </div>
                          
                         
                    
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="row">
                      <div class="contact-form-content-container">
                        <div class="contact-us-list">
                          <h3 class="heaing-bold heaing-bold--initial"><?php echo get_field('hello_heading');?></h3>
                          <p class="info"><?php echo get_field('hello_subtext');?></p>
                        </div>
                        <div class="contact-us-list">
                          <div class="input-label"><?php echo get_field('sales_heading');?></div><a href="<?php echo get_field('contact_number_link');?>" class="contact-us-list__link"><?php echo get_field('sales_number');?></a>
                        </div>
                        <div class="contact-us-list">
                          <div class="input-label"><?php echo get_field('email_heading');?></div><a href="<?php echo get_field('email_link');?>" class="contact-us-list__link"><?php echo get_field('email');?></a>
                        </div>
                        <div class="contact-us-list">
                          <div class="input-label"><?php echo get_field('follow_heading');?></div>
                          <ul class="social-menu">
                            <li class="social-menu__list"><a href="<?php echo get_field('follow_twitter');?>" target="_blank" class="social-menu__link social-menu__link--tw"><i class="icon-tw icon"></i></a></li>
                            <li class="social-menu__list"><a href="<?php echo get_field('follow_facebook');?>" target="_blank" class="social-menu__link social-menu__link--fb"><i class="icon-fb icon"></i></a></li>
                            <li class="social-menu__list"><a href="<?php echo get_field('follow_link_in');?>" target="_blank" class="social-menu__link social-menu__link--ln"><i class="icon-ln icon"></i></a></li>
                            <li class="social-menu__list"><a href="<?php echo get_field('follow_github');?>" target="_blank" class="social-menu__link social-menu__link--slack"><i class="icon-slack icon"></i></a></li>
                          </ul>
                        </div>
                        <div class="contact-us-list">
                          <h3 class="heaing-bold heaing-bold--initial"><?php echo get_field('product_demo_heading');?></h3>
                          <p class="info"><?php echo get_field('product_subtext');?></p>
                        </div><a href="<?php echo get_option( 'siteurl' );?>/requestdemo" class="btn btn--lg btn--blue"><?php echo get_field('product_link_text');?></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: FAQ-->
      <section class="section section--faq section-faq">
        <div class="container">
          <div class="row">
            <div class="text-center">
              <h3 class="section-heading"><?php echo get_field('question_heading');?></h3>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
              <div class="col-sm-4">
                <div class="row">
                  <div class="faq-wrapper">
                    <div class="circle circle--lg circle--ring circle--ringGreen"></div>
                    <div class="circle circle--sm circle--filled"></div>
                    <div class="circle circle--md circle--circleOrange"></div>
                    <div class="bar">
                      <div class="bar__line"></div>
                      <div class="bar__line"></div>
                      <div class="bar__line"></div>
                    </div>
                    <ul class="faq-menu">
                      <li class="faq-menu__list">GENERAL</li>
                      <li class="faq-menu__list">ON BOARDING</li>
                      <li class="faq-menu__list">COST/BILLING</li>
                      <li class="faq-menu__list">DATA AND UPDATES</li>
                      <li class="faq-menu__list">SUBSCRIBTION</li>
                      <li class="faq-menu__list">SECTORS</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-7 col-md-offset-1">
                <div class="row">
                  <div class="qa-wrapper">
                    <ul class="qa-menu">
                      <li class="qa-menu__list">
                        <h4 class="qa-menu__heading"><?php echo get_field('first_question');?></h4>
                        <p class="info"><?php echo get_field('first_answer');?></p>
                      </li>
                      <li class="qa-menu__list">
                        <h4 class="qa-menu__heading"><?php echo get_field('second_question');?></h4>
                        <p class="info"><?php echo get_field('second_answer');?></p>
                      </li>
                      <li class="qa-menu__list">
                        <h4 class="qa-menu__heading"><?php echo get_field('third_question');?></h4>
                        <p class="info"><?php echo get_field('third_answer');?></p>
                      </li>
                    </ul><a href="<?php echo get_option( 'siteurl' );?>/faq" class="link">all questions</a>
                  </div>
                  <div class="logo-footer"><img src="<?php echo get_field('footer_image');?>" alt="Draup" class="logo-footer__img"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer('contact'); ?>