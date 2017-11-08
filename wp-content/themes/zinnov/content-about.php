<?php /* Template Name: About */?>
<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('about'); ?>
 <main>
      <!--Start: Banner-->
      <section class="section-banner-about-us">
        <div class="container">
          <div class="row"><img src="<?php echo get_field('banner_image');?>" alt="About Banner" class="img-responsive about-image">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="about-banner-wrapper">
                <div class="about-banner-wrapper__heading">
                  <h1 class="heading"><?php echo get_field('banner_heading');?></h1>
                  <p class="info info--white text-capitalize"><?php echo get_field('banner_subtext');?></p>
                </div>
              </div>
              <div class="about-draup-wrapper text-center">
                <h3 class="heaing-bold"><?php echo get_field('about_heading');?><span class="text-uppercase"></span></h3>
                <p class="info"><?php echo get_field('about_subtext');?></p>
                <p class="info info-hasMargin"><?php echo get_field('about_short_desc');?></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: Features-->
      <section class="section-about-features">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="about-features-wrapper">
                <div class="text-center">
                  <h3 class="section-title"><?php echo get_field('feature_main_heading');?></h3>
                </div>
                <ul class="features-menu-item clearfix">
                  <li class="features-menu-item__list features-menu-item__list--machine col-sm-6">
                    <h4 class="features-menu-item__heading"><?php echo get_field('feature_heading1');?></h4>
                    <p class="info"><?php echo get_field('feature_text1');?></p>
                    <p class="info info--hasMargin"><?php echo get_field('feature_subtext1');?></p>
                  </li>
                  <li class="features-menu-item__list features-menu-item__list--haman-curation col-sm-6">
                    <h4 class="features-menu-item__heading"><?php echo get_field('feature_heading2');?></h4>
                    <p class="info"><?php echo get_field('feature_text2');?> </p>
                    <p class="info info--hasMargin"><?php echo get_field('feature_subtext2');?></p>
                  </li>
                  <li class="features-menu-item__list features-menu-item__list--subject-matters col-sm-6">
                    <h4 class="features-menu-item__heading"><?php echo get_field('feature_heading3');?></h4>
                    <p class="info"><?php echo get_field('feature_text3');?></p>
                    <p class="info info--hasMargin"><?php echo get_field('feature_subtext3');?></p>
                  </li>
                  <li class="features-menu-item__list features-menu-item__list--real-time col-sm-6">
                    <h4 class="features-menu-item__heading"><?php echo get_field('feature_heading4');?></h4>
                    <p class="info"><?php echo get_field('feature_text4');?></p>
                    <p class="info info--hasMargin"><?php echo get_field('feature_subtext4');?></p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Start: 360 View-->
      <section class="section-360-view">
        <div class="container">
          <div class="row">
            <div class="text-center section-360-content">
              <h1 class="heading"><?php echo get_field('degree_view_heading');?></h1>
              <p class="info info--white"><?php echo get_field('degree_subtext');?></p>
            </div>
            <div class="clearfix features">
              <div class="col-sm-4 features__list">
                <div class="card-wrapper">
                <h3 class="card-title"><?php echo get_field('customer_heading');?></h3>
                  <p class="info"><?php echo get_field('customer_subtext');?></p>
                  <ul class="features-list-menu">
                    <li class="features-list-menu__item"><span><?php echo get_field('customer_point1');?></span></li>
                    <li class="features-list-menu__item"><span><?php echo get_field('customer_point2');?></span></li>
                    <li class="features-list-menu__item"><span><?php echo get_field('customer_point3');?></span></li>
                    <li class="features-list-menu__item"><span><?php echo get_field('customer_point4');?></span></li>
                  </ul><a href="<?php echo get_option( 'siteurl' );?>/requestdemo" class="link">request demo</a>
                </div>
              </div>
              <div class="col-sm-4 features__list">
                <div class="card-wrapper">
                  <h3 class="card-title"><?php echo get_field('stakeholder_heading');?></h3>
                  <p class="info"><?php echo get_field('stakeholder_subtext');?></p>
                  <ul class="features-list-menu">
                    <li class="features-list-menu__item"><span><?php echo get_field('stakeholder_point1');?></span></li>
                    <li class="features-list-menu__item"><span><?php echo get_field('stakeholder_point2');?></span></li>
                    <li class="features-list-menu__item"><span><?php echo get_field('stakeholder_point3');?></span></li>
                    <li class="features-list-menu__item"><span><?php echo get_field('stakeholder_point4');?></span></li>
                  </ul><a href="<?php echo get_option( 'siteurl' );?>/requestdemo" class="link">request demo</a>
                </div>
              </div>
              <div class="col-sm-4 features__list">
                <div class="card-wrapper">
                  <h3 class="card-title"><?php echo get_field('ecosystem_heading');?></h3>
                  <p class="info"><?php echo get_field('ecosystem_subtext');?> </p>
                  <ul class="features-list-menu">
                    <li class="features-list-menu__item"><span><?php echo get_field('ecosystem_point1');?></span></li>
                    <li class="features-list-menu__item"><span><?php echo get_field('ecosystem_point2');?> </span></li>
                    <li class="features-list-menu__item"><span><?php echo get_field('ecosystem_point3');?></span></li>
                    <li class="features-list-menu__item"><span><?php echo get_field('ecosystem_point4');?></span></li>
                  </ul><a href="<?php echo get_option( 'siteurl' );?>/requestdemo" class="link">request demo</a>
               </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: How it works-->
      <section class="section-how-it-works">
        <div class="container">
          <div class="row">
            <div class="text-center relative">
              <h2 class="section-title"><?php echo get_field('how_it_works_heading');?></h2>
              <p class="info info-section"><?php echo get_field('how_it_works_subtext');?></p>
            </div>
           <div class="col-sm-10 col-sm-offset-1">
              <div class="row">
                <div class="how-it-works-wrapper">
                  <ul class="how-it-works">
                    <li class="how-it-works__list how-it-works__list--1 clearfix">
                      <div class="col-sm-5">
                        <h3 class="section-title"><?php echo get_field('consulting_heading');?></h3>
                      </div>
                      <div class="col-sm-1">
                        <ul class="progress-menu hidden-xs">
                          <li class="progress-menu__list">
                            <div class="circle circle--sm circle--circleGreen"></div>1
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-6">
                        <p class="info"><?php echo get_field('consulting_text');?></p>
                        <p class="info info--hasMargin"><?php echo get_field('consulting_subtext');?></p>
                      </div>
                    </li>
                    <li class="how-it-works__list how-it-works__list--2 clearfix">
                      <div class="col-sm-5">
                        <h3 class="section-title"><?php echo get_field('machine_heading');?></h3>
                      </div>
                      <div class="col-sm-1">
                        <ul class="progress-menu hidden-xs">
                          <li class="progress-menu__list">
                            <div class="circle circle--sm circle--circleOrange"></div>2
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-6">
                        <p class="info"><?php echo get_field('machine_text');?></p>
                      </div>
                    </li>
                    <li class="how-it-works__list how-it-works__list--3 clearfix">
                      <div class="col-sm-5">
                        <h3 class="section-title"><?php echo get_field('human_heading');?></h3>
                      </div>
                      <div class="col-sm-1">
                        <ul class="progress-menu hidden-xs">
                          <li class="progress-menu__list">
                            <div class="circle circle--sm circle--circleBlue"></div>3
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-6">
                        <p class="info"><?php echo get_field('human_text');?></p>
                        <p class="info info--hasMargin"><?php echo get_field('human_subtext');?></p>
                      </div>
                    </li>
                    <li class="how-it-works__list how-it-works__list--4 last clearfix">
                      <div class="col-sm-5">
                        <h3 class="section-title"><?php echo get_field('big_data_heading');?></h3>
                      </div>
                      <div class="col-sm-1">
                        <ul class="progress-menu hidden-xs progress-menu--last">
                          <li class="progress-menu__list">
                            <div class="circle circle--sm circle--circleYellow"></div>4
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-6">
                        <p class="info"><?php echo get_field('big_data_text');?></p>
                        <p class="info info--hasMargin"><?php echo get_field('big_data_subtext');?></p>
                        <p class="info info--hasMargin"><?php echo get_field('big_data_subtext2');?></p>
                         <p class="info info--hasMargin"><?php echo get_field('big_data_subtext3');?></p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="text-center logo-footer"><img src="<?php echo get_field('footer_image');?>" alt="Draup" class="logo-footer__img"></div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer('about'); ?>
    
    