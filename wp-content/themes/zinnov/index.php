<?php  /*Template Name: Home page*/ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


$article_link_text=get_field('article_link_text');
$white_paperslink_text=get_field('white_paperslink_text');
$heading_request=get_field('heading_request');
$request_info=get_field('request_info');
$faq_heading=get_field('faq_heading');
$qus_1=get_field('qus_1');
$ans_1=get_field('ans_1');
$qus_2=get_field('qus_2');
$ans_2=get_field('ans_2');
$qus_3=get_field('qus_3');
$ans_3=get_field('ans_3');
$faq_link=get_field('faq_link');
$email_text=get_field('email_text');
$email_sub_text=get_field('email_sub_text');
$email_address=get_field('email_address');
$card_title1=get_field('card_title1');
$footer_image=get_field('footer_image');

?>

<?php 
get_header();?>

	 <!--START: Main-->
    <main>
      <!--Start: Banner-->
      <section class="section section--homeBanner">
        <div class="container">
          <div class="row">
            <div class="banner-slider-container clearfix">
              <div class="col-sm-10 col-sm-offset-1 clearfix banner-content-slider-wrapper">
                <div class="col-sm-6 hidden-xs">
                  <div class="row row-left">
                    <ul class="banner-slider">
                    
                    <?php $i=1;
                                while ( have_rows('banner_slider') ) 
                                {   
                                    the_row();
                                    ?>
                      <li style="background-image:url(<?php echo get_sub_field('background_image');?>)" class="banner-slider__list">
                        <h3 class="heading"><?php echo get_sub_field('slider_heading');?></h3><a href="<?php echo get_option( 'siteurl' );?><?php echo get_sub_field('slider_link');?>" class="link"><?php echo get_sub_field('button_text');?></a>
                      </li>
                      <?php  $i++;} ?>
                     <!--  <li style="background-image:url(&quot;img/home-slider-3.jpg&quot;)" class="banner-slider__list">
                        <h3 class="heading text-capitalize">Combining Big Data, Right Judgement &amp; Relevant Context </h3><a href="white-papers.html" class="link">read whitepaper</a>
                      </li>
                      <li style="background-image:url(&quot;img/home-slider-2.jpg&quot;)" class="banner-slider__list">
                        <h3 class="heading">Resilience &amp; Security - A Growing Priority in Design Thinking</h3><a href="blog.html" class="link">read blog</a>
                      </li>-->
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="row">
                    <div class="banner-form-wrapper">
                      <div id="login-form" class="banner-form">
                      
                        <h3 class="heading-light"><?php echo get_field('login_heading');?></h3>
                        <?php //echo do_shortcode('[contact-form-7 id="258" title="login form"]');?>
                        
                        <div role="form" class="wpcf7" id="wpcf7-f258-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
                        
                        <form data-parsley-validate="" class="login-form wpcf7-form" action="/training/zinnov/#wpcf7-f258-o1" method="post" novalidate="novalidate" >
                        <div style="display: none;">
<input type="hidden" name="_wpcf7" value="258">
<input type="hidden" name="_wpcf7_version" value="4.9">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f258-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
</div>
                          <div class="form-group">
                           <label for="email" class="input-label">Email address</label>
                            <input id="email" name="email" type="email" required placeholder="sam@compayname.com" class="form-control input-field">
                          </div>
                          <div class="form-group last-child"> 
                            <label for="pwd" class="input-label">Password</label>
                            <input id="pwd" name="pwd" type="password" required placeholder="Enter your password" class="form-control input-field">
                          </div>
                          <div class="forgot-link text-right"><a href="javascript:void(0)" id="forgot-password" class="forgot-link__text">Forgot password?</a></div>
                          <button type="submit" class="btn btn--orange">login</button>
                          <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                      </div>
                      <!--START: forgot-password-->
                      <div id="forgot-password-form" class="banner-form banner-form--transform">
                        <h3 class="heading-light">Forgot password?</h3>
                        <p class="info">Enter your email below, and we’ll send you the reset link</p>
                        <form data-parsley-validate="" class="login-form">
                          <div class="form-group last-child">
                            <label for="email" class="input-label">Email address</label>
                            <input id="email" type="email" required placeholder="sam@compayname.com" class="form-control input-field">
                          </div>
                          <div class="forgot-link text-right"><a href="javascript:void(0)" id="back-to-login" class="forgot-link__text">Back to Login</a></div>
                          <button type="submit" id="send-link" class="btn btn--orange btn--sm">SEND RESET LINK</button>
                        </form>
                        </div>
                      </div>
                      <!--START: Success message-->
                      <div id="success-msg" class="banner-form banner-form--transform">
                        <h3 class="heading-light">We have successfully sent the password reset link to yor email address!</h3>
                        <button type="submit" id="continue-login" class="btn btn--sm btn--orange">CONTINUE TO LOGIN</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: Updates-->
      <section class="section section--updates">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <!--start: Updates-->
              <div class="col-sm-6">
                <div class="row">
                  <h3 class="text-center heaing-bold card-title-bold card-title-bold--margin"><?php echo get_field('card_title');?></h3>
                  <div class="thumbnail card-thumbnail card-thumbnail--left">
                    <div class="card-thumbnail__link">
                    <?php 
	  
      $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'   => '1'));
      
      while($the_query->have_posts() ) : $the_query->the_post(); 
            {  
                
                 
              
              ?>
                      <div class="card-thumbnail-img"><img src="<?php echo get_field('blog_image');?>" alt="" class="card-thumbnail img-responsive">
                        <div class="label label--rect label--blue">by <span class="user-name"><?php echo get_field('blog_user_name');?> </span><?php echo get_field('blog_date');?></div>
                      </div>
                      
                      <div class="caption card-caption">
                        <div class="circle circle--ring circle--sm circle--ringBlue"></div>
                        <h3 class="heading-md"><?php echo get_field('blog_heading');?></h3>
                        <p class="info"><?php echo get_field('blog_info');?></p><a href="<?php echo get_permalink();?>" class="link"><?php echo get_field('link_text');?></a>
                      </div>
                       <?php
                }  endwhile;?>
                
                    </div>
                    <div class="card-circle">
                      <div class="circle circle--md circle--filled circle--circleOrange">   </div>
                      <div class="circle circle--sm circle--filled circle--circleBlue">   </div>
                    </div>
                    <ul class="blog-post">
                     <?php 
	  
      $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'   => '3'));
      
      while($the_query->have_posts() ) : $the_query->the_post(); 
            {  
                
                 
              
              ?>
                    
                      <!--Start: Post 1-->
                      <li class="blog-post__list"><a href="<?php echo get_permalink(); ?>" class="media blog-media">
                          <div class="blog-media__img"><img src="<?php echo get_field('blog_image');?>" class="media-object img-responsive"></div>
                          <div class="blog-media__body">
                            <h4 class="media-heading"><?php echo get_field('blog_heading');?></h4>
                            <div class="blog-posted">by <span><?php echo get_field('blog_user_name');?></span><?php echo get_field('blog_date');?></div>
                          </div></a></li>
                          <?php
                }  endwhile;?>
                      
                     <!--  <li class="blog-post__list"><a href="blog-details-1.html" class="media blog-media">
                          <div class="blog-media__img"><img src="img/blog-detail/NVF.jpg" class="media-object img-responsive"></div>
                          <div class="blog-media__body">
                            <h4 class="media-heading">NFV is a solution and a problem</h4>
                            <div class="blog-posted">by <span>EDDIE SINGH </span>O6 OCT 2017</div>
                          </div></a></li>
                      
                      <li class="blog-post__list"><a href="blog-details-2.html" class="media blog-media">
                          <div class="blog-media__img"><img src="img/blog-detail/Resiliance-and-Security.jpg" class="media-object img-responsive"></div>
                          <div class="blog-media__body">
                            <h4 class="media-heading">Building Secure Systems</h4>
                            <div class="blog-posted">by <span>RAJ SAKSENA </span>06 OCT 2017</div>
                          </div></a></li>-->
                    </ul>
                    <div class="text-right all-artciles"><a href="<?php echo get_option( 'siteurl' );?>/blog" class="link"><?php echo $article_link_text;?></a></div>
                  </div>
                </div>
              </div>
              <!--start: White papers-->
              <div class="col-sm-6">
                <div class="row">
                  <h3 class="text-center heaing-bold card-title-bold"><?php echo $card_title1;?></h3>
                  <div class="thumbnail card-thumbnail card-thumbnail--right">
                    <div class="card-thumbnail__link">
                    
                     <?php 
	  
      $the_query=new WP_Query(array('post_type'=>'whitepapers','posts_per_page'   => '1'));
      
      while($the_query->have_posts() ) : $the_query->the_post(); 
            {  
                
                 
              
              ?>
                      <div class="card-title-content"><a href="<?php echo get_permalink();?>" class="card-thumbnail-heading card-thumbnail-heading--white"><?php echo get_field('white_heading');?></a>
                        <p class="info info--blue"><?php echo get_field('white_info');?></p><a href="<?php echo get_field('upload_pdf');?>" download class="link link--white"><i class="icon-down-arrow"></i>download</a>
                      </div>
                       <?php
                }  endwhile;?>
                
                
                
                      <div class="card-posted-content">
                      <?php 
	  
      $the_query=new WP_Query(array('post_type'=>'whitepapers','posts_per_page'   => '3'));
      
      while($the_query->have_posts() ) : $the_query->the_post(); 
            {  
                
                 
              
              ?>
                        <div class="bar"><span class="bar__line"></span><span class="bar__line"></span><span class="bar__line"></span></div>
                        <div class="card-posted-content__list">
                        
                        
                          <div class="blog-posted"><?php echo get_field('posted_date');?>
                          </div><a href="<?php echo get_permalink();?>" class="card-thumbnail-heading card-thumbnail-heading--black"><?php echo get_field('white_heading');?></a>
                          <p class="info"><?php echo get_field('white_info');?></p>
                          
                        </div>
                        <?php
                }  endwhile;?>
                        <!-- <div class="card-posted-content__list">
                          <div class="blog-posted">06 oct 2017
                          </div><a href="white-paper-details-2.html" class="card-thumbnail-heading card-thumbnail-heading--black">The power of Personality over Business Value</a>
                          <p class="info">DRAUP empowers the technology companies with real-time, in-depth and actionable...</p>
                        </div>
                        <div class="card-posted-content__list">
                          <div class="blog-posted">06 oct 2017
                          </div><a href="white-paper-details-1.html" class="card-thumbnail-heading card-thumbnail-heading--black">Combining big data, right judgement & relevant content</a>
                          <p class="info">DRAUP empowers the technology companies with real-time, in-depth and actionable...</p>
                        </div>-->
                      </div>
                    </div>
                   
                    <div class="text-right all-artciles">
                      <div class="circle circle--ring circle--lg circle--ringBlue"></div><a href="<?php echo get_option( 'siteurl' );?>/whitepapers" class="link"><?php echo $white_paperslink_text;?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: Request Demo -->
      <section class="section section--request-demo">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="col-sm-5">
                <div class="row">
                  <div class="request-demo-content">
                    <h2 class="heading"><?php echo $heading_request;?></h2>
                    <p class="info info--white"><?php echo $request_info;?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="row">
                  <div class="request-demo-form">
                    <div class="bar">
                      <div class="bar__line"></div>
                      <div class="bar__line"></div>
                      <div class="bar__line"></div>
                    </div>
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
                                  <input id="date" name="date" type="text" required placeholder="Date" data-format="dd/MM/yyyy" class="date form-control input-field">
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
                                  <input id="date" name="date" type="text" required placeholder="Date" data-format="dd/MM/yyyy" class="date form-control input-field">
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
                              <textarea id="message" name="message" type="text" required placeholder="Message" class="form-control input-field"></textarea>
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
                    <div class="circle circle--ring circle--ringOrange circle--lg"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: Why Draup-->
      <section class="section section--why-draup">
        <div class="container">
          <div class="row">
            <div class="text-center">
              <h4 class="section-heading">why <span class="text-uppercase">draup?</span></h4>
            </div>
            <div class="col-sm-10 col-sm-offset-1 flex-slider">
              <div class="col-sm-5 hidden-xs">
                <div class="row row--height">
                  <ul class="draup-indicator-slider">
                    <li class="draup-indicator-slider__list active">
                      <div class="indicator-wrapper"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/real-time.svg" alt="Real Time Data" class="indicator-wrapper__img">
                        <h4 class="slider-heading">real time data</h4>
                      </div>
                    </li>
                    <li class="draup-indicator-slider__list">
                      <div class="indicator-wrapper"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/machine.svg" alt="machine" class="indicator-wrapper__img">
                        <h4 class="slider-heading">Machine</h4>
                      </div>
                    </li>
                    <li class="draup-indicator-slider__list">
                      <div class="indicator-wrapper"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/subject-matters.svg" alt="Subject" class="indicator-wrapper__img">
                        <h4 class="slider-heading">Subject Matters</h4>
                      </div>
                    </li>
                    <li class="draup-indicator-slider__list">
                      <div class="indicator-wrapper"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/human-curation.svg" alt="In Depth Analysis" class="indicator-wrapper__img">
                        <h4 class="slider-heading">human curation</h4>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="row">
                  <div class="circle circle--lg circle--ring circle--ringOrange"></div>
                  <div class="bar">
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                  </div>
                  <ul class="draup-content-slider">
                    <li class="draup-content-slider__list">
                      <div class="content-wrapper">
                        <h3 class="slider-content-heading">Real Time Data</h3>
                        <p class="info">DRAUP empowers the technology companies with real-time, in-depth and actionable insights about peers and lets them keep track of the fast changing global innovation landscape.</p><a href="javascript:void(0)" class="link">learn more</a>
                      </div>
                    </li>
                    <li class="draup-content-slider__list">
                      <div class="content-wrapper">
                        <h3 class="slider-content-heading">In Depth Analysis</h3>
                        <p class="info">DRAUP empowers the technology companies with real-time, in-depth and actionable insights about peers and lets them keep track of the fast changing global innovation landscape.</p><a href="javascript:void(0)" class="link">learn more</a>
                      </div>
                    </li>
                    <li class="draup-content-slider__list">
                      <div class="content-wrapper">
                        <h3 class="slider-content-heading">In Depth Analysis</h3>
                        <p class="info">DRAUP empowers the technology companies with real-time, in-depth and actionable insights about peers and lets them keep track of the fast changing global innovation landscape.</p><a href="javascript:void(0)" class="link">learn more</a>
                      </div>
                    </li>
                    <li class="draup-content-slider__list">
                      <div class="content-wrapper">
                        <h3 class="slider-content-heading">Human Curation</h3>
                        <p class="info">DRAUP empowers the technology companies with real-time, in-depth and actionable insights about peers and lets them keep track of the fast changing global innovation landscape.</p><a href="javascript:void(0)" class="link">learn more</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: FAQ-->
      <section class="section section--faq">
        <div class="container">
          <div class="row">
            <div class="text-center">
              <h3 class="section-heading"><?php echo $faq_heading;?></h3>
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
              <div class="col-sm-7">
                <div class="row">
                  <div class="qa-wrapper">
                    <ul class="qa-menu">
                      <li class="qa-menu__list">
                        <h4 class="qa-menu__heading"><?php echo $qus_1;?></h4>
                        <p class="info"><?php echo $ans_1; ?></p>
                      </li>
                      <li class="qa-menu__list">
                        <h4 class="qa-menu__heading"><?php echo $qus_2; ?></h4>
                        <p class="info"><?php echo  $ans_2;?></p>
                      </li>
                      <li class="qa-menu__list">
                        <h4 class="qa-menu__heading"><?php echo  $qus_3;?></h4>
                        <p class="info"><?php echo $ans_3; ?></p>
                      </li>
                    </ul><a href="<?php echo get_option( 'siteurl' );?>/faq" class="link"><?php echo $faq_link;?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: subscribe-->
   
      
      <section class="section section--subscribe">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
              <div class="subscribe-wrapper">
                <div class="bar">
                  <div class="bar__line bar__line--white"></div>
                  <div class="bar__line bar__line--white"></div>
                  <div class="bar__line bar__line--white"></div>
                </div>
                <div class="circle circle--sm circle--circlePink circle--circlePink--top"></div>
                <div class="circle circle--sm circle--circlePink circle--circlePink--bottom"></div>
                <div class="circle circle--lg circle--ring"></div>
                <h3 class="section-heading section-heading--white"><?php echo $email_text;?></h3>
                <p class="info info--white"><?php echo $email_sub_text;?></p>
                <div class="subscribe-form-wrapper">
                  <?php //echo do_shortcode('[contact-form-7 id="268" title="Email address"]');?>
                  <div role="form" class="wpcf7" id="wpcf7-f268-o1" lang="en-US" dir="ltr">
				<div class="screen-reader-response"></div>
                  <form data-parsley-validate="" class="subscribe-form wpcf7-form" action="/training/zinnov/#wpcf7-f268-o1" method="post"  novalidate="novalidate">
                  <div style="display: none;">
					<input type="hidden" name="_wpcf7" value="268">
					<input type="hidden" name="_wpcf7_version" value="4.9">
					<input type="hidden" name="_wpcf7_locale" value="en_US">
					<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f268-o1">
					<input type="hidden" name="_wpcf7_container_post" value="0">
					</div>
					
					
                     <div class="form-group subscribe-form__group">
                      <label for="email" class="input-label"><?php echo $email_text;?></label>
                      <input id="email" name="email" type="email" placeholder="sam@compayname.com" class="form-control input-field">
                      <button type="submit" class="submit-btn">submit</button>
                    </div>
                     <div class="wpcf7-response-output wpcf7-display-none"></div>
                  </form>
                  </div>
                  <div class="circle circle--lg circle--ring">   </div>
                </div>
              </div>
              <div class="text-center logo-footer"><img src="<?php echo get_field('footer_image');?>" alt="Draup" class="logo-footer__img"></div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>
