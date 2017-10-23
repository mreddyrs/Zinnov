<?php /* Template Name: FAQ */?>
<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('faq');

$blog_main_heading=get_field('blog_main_heading');
$footer_image=get_field('footer_image');
?>


  <main>
      <!--START: FAQ Main Content-->
      <section class="section-FAQBanner">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container clearfix">
              <div class="col-sm-12">
                <ul class="breadcrumb breadcrumb-menu breadcrumb-menu--gray">
                  <li class="breadcrumb__list"><a href="<?php echo site_url(); ?>" class="breadcrumb__link">home</a>
                    <li class="breadcrumb__list active"><?php echo get_field('question_n_answer_heading');?></li>
                  </li>
                </ul>
                <h3 class="heading heading--black text-capitalize heading--lg"><?php echo get_field('general_heading2');?></h3>
                <div class="row">
                  <div class="col-sm-9">
                    <div class="faq-qa-wrapper">
                      <ul class="faq-qa-menu">
                        <!--START: General-->
                        <li class="faq-qa-menu__list">
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"><?php echo get_field('genreal_heading');?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                                <li class="faq-qa-list__item"><a href="#general" class="faq-qa-list__link"><?php echo get_field('general_question');?></a></li>
                              </ol>
                            </div>
                          </div>
                        </li>
                        <!--START: Cost/Billing-->
                        <li class="faq-qa-menu__list">
                          <div class="circle-wrapper">
                            <div class="circle circle--sm circle--circleBlue"></div>
                            <div class="circle circle--md circle--circleOrange"></div>
                          </div>
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"><?php echo get_field('cost_heading');?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                                <li class="faq-qa-list__item"><a href="#cost-billing " class="faq-qa-list__link"><?php echo get_field('cost_question');?></a></li>
                              </ol>
                            </div>
                          </div>
                        </li>
                        <!--START: Data and Updates-->
                        <li class="faq-qa-menu__list">
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"><?php echo get_field('data_heading');?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                                <li class="faq-qa-list__item"><a href="#data-updates" class="faq-qa-list__link"><?php echo get_field('data_question');?></a></li>
                              </ol>
                            </div>
                          </div>
                        </li>
                        <!--START: SUBSCRIBTION-->
                        <li class="faq-qa-menu__list">
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"> <?php echo get_field('subscribtion_heading');?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                                <li class="faq-qa-list__item"><a href="#subscription" class="faq-qa-list__link"><?php echo get_field('subscribtion_question');?></a></li>
                              </ol>
                            </div>
                          </div>
                        </li>
                        <!--START: SECTORS-->
                        <li class="faq-qa-menu__list">
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"><?php echo get_field('sectors_heading');?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list faq-qa-list--last">
                                <li class="faq-qa-list__item"><a href="#sector" class="faq-qa-list__link"><?php echo get_field('sector_question');?></a></li>
                              </ol>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <!--START Content-->
                      <ul class="faq-qa-menu faq-qa-menu--margin">
                        <!--START: General-->
                        <li id="general" class="faq-qa-menu__list">
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"><?php echo get_field('general_heading1');?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                                <li class="faq-qa-list__item">
                                  <h4 class="qa-menu__heading"><?php echo get_field('general_question1');?></h4>
                                  <p class="info"><?php echo get_field('general_answer1');?></p>
                                </li>
                              </ol>
                            </div>
                          </div>
                        </li>
                        <!--START: On Boarding-->
                        <li id="cost-billing" class="faq-qa-menu__list"> 
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"><?php echo get_field('cost_heading_1');?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                                <li class="faq-qa-list__item">
                                  <h4 class="qa-menu__heading"><?php echo get_field('cost_question1');?></h4>
                                  <p class="info"><?php echo get_field('cost_answer2');?></p>
                                </li>
                              </ol>
                            </div>
                          </div>
                        </li>
                        <!--START: Data Updates-->
                        <li id="data-updates" class="faq-qa-menu__list"> 
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"><?php echo get_field('data_heading_1');?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                                <li class="faq-qa-list__item">
                                  <h4 class="qa-menu__heading"> <?php echo get_field('data_question1');?></h4>
                                  <p class="info"><?php echo get_field('data_answer_1');?></p>
                                </li>
                              </ol>
                            </div>
                          </div>
                        </li>
                        <!--START: subscription-->
                        <li id="subscription" class="faq-qa-menu__list">
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"><?php echo get_field('subscribtion_heading1');?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                                <li class="faq-qa-list__item">
                                  <h4 class="qa-menu__heading"><?php echo get_field('subscribtion_question1');?></h4>
                                  <p class="info"><?php echo get_field('subscribtion_answer1');?></p>
                                </li>
                              </ol>
                            </div>
                          </div>
                        </li>
                        <!--START: Sector-->
                        <li id="sector" class="faq-qa-menu__list">
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"><?php echo get_field('sector_heading1');?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                                <li class="faq-qa-list__item">
                                  <h4 class="qa-menu__heading"><?php echo get_field('sector_question1');?></h4>
                                  <p class="info"><?php echo get_field('sector_answer1');?></p>
                                  <ol class="faq-qa-list-menu">
                                    <li class="faq-qa-list-menu__item info"><?php echo get_field('sector_point1');?></li>
                                    <li class="faq-qa-list-menu__item info"><?php echo get_field('sector_point2');?></li>
                                  </ol>
                                </li>
                              </ol>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--START: Right Content                    -->
                  <div class="col-sm-3">
                    <div class="card-wrapper">
                      <h3 class="section-title"><?php echo get_field('question_not_here_heading');?></h3>
                      <p class="info"><?php echo get_field('question_not_subtext');?></p><a href="<?php echo get_option( 'siteurl' );?>/contact" class="btn btn--blue btn--lg">contact us</a>
                    </div>
                    <div class="card-wrapper">
                      <h3 class="section-title"><?php echo $blog_main_heading; ?></h3>
                      <ul class="articles-menu">
                      <?php 
	  
      $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'   => '3'));
      
      while($the_query->have_posts() ) : $the_query->the_post(); 
            {  
                
                 
              
              ?>
                        <li class="articles-menu__list"><a href="<?php echo get_permalink();?>" class="articles-menu__link"><?php echo get_field('blog_heading');?></a></li>
                       <!--  <li class="articles-menu__list"><a href="blog-details-1.html" class="articles-menu__link">Resilience &amp; NFV is a solution and a problem!</a></li>
                        <li class="articles-menu__list"><a href="blog-details-2.html" class="articles-menu__link">Resilience &amp; IoT � Intelligent Operations Technology ?</a></li> -->
                        <?php
                }  endwhile;?>
                
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="text-center logo-footer"><img src="<?php echo $footer_image;?>" alt="Draup" class="logo-footer__img"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer('faq'); ?>