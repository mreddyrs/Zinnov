<?php /* Template Name: Request Demo */?>
<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('requestdemo'); ?>

 <main>
      <!--Start: Banner-->
      <section class="section section--requestDemo">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container">
              <div class="col-sm-12">
                <ul class="breadcrumb breadcrumb-menu">
                  <li class="breadcrumb__list"><a href="<?php echo site_url();?>" class="breadcrumb__link">home</a></li>
                  <li class="breadcrumb__list active">request demo</li>
                </ul>
                <h3 class="heading heading--main heading--lg"><?php echo get_field('request_demo_heading');?></h3>
                <div class="request-demo-wrapper clearfix">
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="demo-content-wrapper">
                        <h2 class="heading heading--orange"><?php echo get_field('opportunities_heading');?></h2>
                        <p class="info"><?php echo get_field('opportunities_subtext');?></p>
                        <div class="demo-options-menu-wrapper">
                          <h4 class="heading-md"><?php echo get_field('join_heading');?></h4>
                          <ul class="demo-options">
                            <li class="demo-options__list"><i class="icon-check-mark-circle"></i>
                              <p class="info"><?php echo get_field('join_subtext_1');?></p>
                            </li>
                            <li class="demo-options__list"><i class="icon-check-mark-circle"></i>
                              <p class="info"><?php echo get_field('join_subtext_2');?></p>
                            </li>
                            <li class="demo-options__list"><i class="icon-check-mark-circle"></i>
                              <p class="info"><?php echo get_field('join_subtext_3');?></p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="demo-form-wrapper">
                        <h3 class="section-heading section-heading--initial"><?php echo get_field('fill_heading');?></h3>
                        <p class="info"><?php echo get_field('heading_subtext');?></p>
                        <?php //echo do_shortcode('[contact-form-7 id="248" title="Contact form 1"]');?>
                        <div role="form" class="wpcf7" id="wpcf7-f248-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form data-parsley-validate="" class="demo-form clearfix wpcf7-form" action="/training/zinnov/requestdemo/#wpcf7-f248-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
<input type="hidden" name="_wpcf7" value="248">
<input type="hidden" name="_wpcf7_version" value="4.9">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f248-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
</div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="name" class="input-label">name</label>
                              <input id="name" name="name" type="text" required placeholder="Enter your full name" class="form-control input-field">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="email" class="input-label">email address</label>
                              <input id="email" name="email" type="email" required placeholder="sam@compayname.com" class="form-control input-field">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="phone-number" class="input-label">phone number</label>
                              <input id="phone-number" name="phone-number" type="text" required placeholder="Mobile" class="form-control input-field">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="company" class="input-label">company</label>
                              <input id="company" type="text" name="company" required placeholder="Company" class="form-control input-field">
                            </div>
                          </div>
                          <div class="col-sm-6">           
                            <div class="form-group">
                              <label for="designation" class="input-label">designation</label>
                              <input id="designation" type="text" name="designation" required placeholder="Designation" class="form-control input-field">
                            </div>
                          </div>
                          <div class="col-sm-12">          
                            <div class="form-group">
                              <label for="region" class="input-label">region</label>
                              <select class="select-time select-time--date" id="region" name="region">
                                <option>India</option>
                                <option>USA</option>
                                <option>UK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="col-sm-6">           
                                <div class="form-group">
                                  <label for="date" class="input-label">date</label>
                                  <input id="date" name="date" type="text"  placeholder="Date" data-format="dd/MM/yyyy" class="date form-control input-field">
                                </div>
                              </div>
                              <div class="col-sm-6">           
                                <div class="form-group">
                                  <label for="time" class="input-label">time</label>
                                  <select class="select-time" id="time" name="time">
                                    <option>Time</option>
                                    <option>10:00 - 11.00</option>
                                    <option>11:00 - 12.00</option>
                                    <option>01:00 - 02.00</option>
                                    <option>03:00 - 04.00</option>
                                    <option>05:00 - 06.00</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 time-date">
                            <div class="row">
                              <div class="col-sm-6">           
                                <div class="form-group">
                                  <label for="date" class="input-label">date</label>
                                  <input id="date" name="date" type="text"  placeholder="Date" data-format="dd/MM/yyyy" class="date form-control input-field">
                                </div>
                              </div>
                              <div class="col-sm-6">           
                                <div class="form-group">
                                  <label for="time" class="input-label">time</label>
                                  <select class="select-time" id="time" name="time">
                                    <option>Time</option>
                                    <option>10:00 - 11.00</option>
                                    <option>11:00 - 12.00</option>
                                    <option>01:00 - 02.00</option>
                                    <option>03:00 - 04.00</option>
                                    <option>05:00 - 06.00</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <button type="button" id="add-time" class="link link--transparent add-time">+ add more time</button>
                          </div>
                          <div class="col-sm-12 message">
                            <div class="form-group">
                              <label for="message" class="input-label">message</label>
                              <textarea id="message" name="message" type="text"  placeholder="Message" class="form-control input-field"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <button type="button" id="add-message" class="link link--transparent">+ add message</button>
                          </div>
                          <div class="col-sm-12 request-demo-btn">
                            <button type="submit" class="btn btn--blue btn--lg">request demo</button>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                          </div>
                        </form>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: Features-->
      <section class="section section--demoFeatures">
        <div class="container">
          <div class="row">
            <div class="features-block-wrapper clearfix">
              <div class="text-center">
                <h3 class="section-heading"><?php echo get_field('feature_heading');?></h3>
              </div>
              <ul class="features-menu clearfix">
                <li class="col-sm-3">
                  <div class="features-menu__list">
                    <object type="image/svg+xml" data="<?php echo esc_url( get_template_directory_uri() ); ?>/img/real-time-orange.svg" class="orange-svg-icon"></object>
                    <h3 class="section-heading section-heading--sm"><?php echo get_field('feature_section_heading1');?></h3>
                    <p class="info"><?php echo get_field('feature_heading_subtext_1');?></p>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="features-menu__list">
                    <object type="image/svg+xml" data="<?php echo esc_url( get_template_directory_uri() ); ?>/img/machine-orange.svg" class="orange-svg-icon"></object>
                    <h3 class="section-heading section-heading--sm"><?php echo get_field('feature_section_heading2');?></h3>
                    <p class="info"><?php echo get_field('feature_heading_subtext_2');?></p>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="features-menu__list">
                    <object type="image/svg+xml" data="<?php echo esc_url( get_template_directory_uri() ); ?>/img/subject-matters-orange.svg" class="orange-svg-icon"></object>
                    <h3 class="section-heading section-heading--sm"><?php echo get_field('feature_section_heading_3');?></h3>
                    <p class="info"><?php echo get_field('feature_heading_subtext_3');?></p>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="features-menu__list">
                    <object type="image/svg+xml" data="<?php echo esc_url( get_template_directory_uri() ); ?>/img/human-curation-orange.svg" class="orange-svg-icon"></object>
                    <h3 class="section-heading section-heading--sm"><?php echo get_field('feature_section_heading_4');?></h3>
                    <p class="info"><?php echo get_field('feature_heading_subtext_4');?></p>
                  </div>
                </li>
              </ul>
              <div class="logo-footer text-center"><img src="<?php echo get_field('footer_image');?>" alt="Draup" class="logo-footer__img"></div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer('requestdemo'); ?>