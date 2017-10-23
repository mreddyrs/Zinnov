<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('whitepapers'); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<main>
      <!--START:  Banner-->
      <section class="section section--BlogDetailsBanner">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container clearfix">
              <div class="col-sm-12">
                <ul class="breadcrumb breadcrumb-menu breadcrumb-menu--gray">
                  <li class="breadcrumb__list"><a href="<?php echo site_url(); ?>" class="breadcrumb__link">home</a></li>
                  <li class="breadcrumb__list"><a href="<?php echo get_option( 'siteurl' );?>/whitepapers" class="breadcrumb__link">white papers</a></li>
                  <li class="breadcrumb__list active"><?php echo get_field('white_single_page_name');?></li>
                </ul>
                <div class="row">
                  <div class="col-sm-9 blog-details-wrapper">
                    <h3 class="heading heading--black"><?php echo get_field('white_paper_heading');?></h3>
                    <div class="blog-posted"><?php echo get_field('whitepaper_date');?></div>
                    <div class="blog-details-img"><img src="<?php echo get_field('white_paper_detail_image');?>" alt="Interpreting Signals" class="img-responsive"></div>
                    <div class="col-sm-4 col-md-3">
                      <div class="row">
                        <div class="download-section"><a href="<?php echo get_field('upload_pdf');?>" download class="btn btn--blue btn--sm"><i class="icon-pdf"> </i>download</a>
                          <div class="download-stats">223 KB<strong>350 Downloads</strong></div>
                        </div>
                        <div class="social-menu-wrapper">
                          <h4 class="heading-small"><?php echo get_field('share_heading');?></h4>
                          <ul class="social-menu">
                            <li class="social-menu__list"><a href="<?php echo get_field('facebook_link');?>"><span class="social-menu__link social-menu__link--fb"><i class="icon-fb icon"></i></span>facebook</a></li>
                            <li class="social-menu__list"><a href="<?php echo get_field('twiiter_link');?>"><span class="social-menu__link social-menu__link--tw"><i class="icon-tw icon"></i></span>twitter</a></li>
                            <li class="social-menu__list"><a href="<?php echo get_field('linkin_link');?>"><span class="social-menu__link social-menu__link--ln"><i class="icon-ln icon"></i></span>linkedin</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-8 col-md-9">
                      <div class="row">
                        <div class="blog-details-content">
                          <p class="info info--hasMargin"><?php the_content(); ?></p>
                          
                        </div>
                       <?php $tags = get_tags(); ?>
                        <div class="rate-article-wrapper">
                          <h3 class="section-title">tags</h3>
                          <ul class="tags-menu">
                        <?php foreach ( $tags as $tag ) { ?>
                        
                            <li class="tags-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/whitepapers?tag=<?php echo $tag->name; ?>" class="tags-menu__link"><?php echo $tag->name; ?></a></li>
                           <!--  <li class="tags-menu__list"><a href="javascript:void(0)" class="tags-menu__link">automotive</a></li>
                            <li class="tags-menu__list"><a href="javascript:void(0)" class="tags-menu__link">autonomous</a></li>
                            <li class="tags-menu__list"><a href="javascript:void(0)" class="tags-menu__link">cars</a></li>-->
                          <?php } ?>
                           </ul>
                        </div>
                      </div>
                    </div>
                  </div> 
                         
                  <div class="col-sm-3">
                    <div class="card-wrapper">
                      <h3 class="section-title"><?php echo get_field('request_heading');?></h3>
                      <p class="info"><?php echo get_field('request_subheading');?></p>
                      <?php //echo do_shortcode('[contact-form-7 id="284" title="Request"]');?>
                      <div role="form" class="wpcf7" id="wpcf7-f284-p163-o1" lang="en-US" dir="ltr">
					<div class="screen-reader-response"></div>
                      
                      <form data-parsley-validate="" class="updates-form wpcf7-form" action="/training/zinnov/whitepapers/combining-big-data-right-judgement-relevant-content/#wpcf7-f284-p163-o1" method="post" novalidate="novalidate">
                      <div style="display: none;">
<input type="hidden" name="_wpcf7" value="284">
<input type="hidden" name="_wpcf7_version" value="4.9">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f284-p163-o1">
<input type="hidden" name="_wpcf7_container_post" value="163">
</div>
                        <div class="form-group">
                          <label for="topic" class="input-label">enter topic</label>
                          <input id="topic" name="topic" type="text" required placeholder="Type" class="form-control input-field">
                        </div>
                        <div class="form-group">
                          <label for="email" class="input-label">Email address</label>
                          <input id="email" name="email" type="email" required placeholder="sam@compayname.com" class="form-control input-field">
                          <button type="submit" class="btn btn--oval btn--lg">request</button>
                         <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </div>
                      </form>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <div class="text-center logo-footer"><img src="<?php echo get_field('footer_image');?>" alt="Draup" class="logo-footer__img"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php endwhile; ?>
<?php get_footer('whitepapers'); ?>
