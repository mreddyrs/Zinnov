<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('whitepapers'); ?>
<script>
function loadPost(val){

window.location="<?php echo get_option( 'siteurl' );?>/whitepapers?sort="+val;
	
}
</script>
	<main>
      <!--Start: Banner-->
      <section class="section section--whitePaperBanner">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container clearfix">
              <div class="col-sm-12">
                <div class="flex select-dropdown-menu">
                  <ul class="breadcrumb breadcrumb-menu breadcrumb-menu--gray">
                    <li class="breadcrumb__list"><a href="<?php echo site_url(); ?>" class="breadcrumb__link">home</a></li>
                    <li class="breadcrumb__list active">white papers</li>
                  </ul>
                  <select class="select-category" onchange="loadPost(this.value)">
                  <?php if(isset($_GET["sort"])){?>
                  
                    <option value="<?php echo $_GET["sort"]?>"><?php echo $_GET["sort"]?></option>
                  <?php }?>
                    <option >Sort</option>
                  
                    <?php
        $terms = get_terms("list_whitepapers",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        ?>
        <?php //echo do_shortcode('[searchandfilter taxonomies="category,post_tag"]');?>
                    <option id="<?php echo $termname; ?>"><?php echo $term->name; ?></option> 
                 <!--  
                    <option>Fin Tech</option>
                    <option>Food Tech</option> -->
                    <?php $i++; } ?>
                  </select>
                </div>
                <div class="flex flex--noMobile flex--justifySpaceBetween">
                  <h3 class="heading heading--black text-capitalize heading--lg"><?php echo get_field('white_paper_main_heading');?></h3>
                  <div class="flex">
                    <h6 class="text-uppercase info-content"><?php echo get_field('request_demo_heading');?></h6><a href="javascript:void(0)" data-toggle="modal" data-target="#requestModal" class="btn btn--oval btn--md">request</a>
                  </div>
                </div>
                <ul class="whitepapers">
                <?php 
               	
            
                	$the_query=new WP_Query(array('post_type'=>'whitepapers'));
                	
                	while($the_query->have_posts() ) : $the_query->the_post();
                	{
                		$menu_id = get_the_id();
                		
                		
                		if(isset($_GET["sort"])){
                		$terms = wp_get_post_terms( $menu_id ,"list_whitepapers");
                		foreach ( $terms as $term ) {
								if($term -> name==$_GET["sort"]){
                				$exist="exist";
                			}
                		}			
                		}else if(isset($_GET["tag"])){
                		$terms = wp_get_post_tags( $menu_id ,"list_whitepapers");
                		foreach ( $terms as $term ) {
								if($term -> name==$_GET["tag"]){
                				$exist="exist";
                			}
                		}			
                		}else{
							$exist="exist";
					}
					if($_GET["sort"]=="Sort"){$exist="exist";}
					if($exist=="exist"){



                		?>
                
                  <li class="whitepapers__list clearfix"><a href="<?php echo get_permalink(); ?>">
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="paper-img"><img src="<?php echo get_field('white_paper_detail_image');?>" alt="Interpreting Signals" class="img-responsive"></div>
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="row">
                          <div class="paper-content">
                            <h3 class="heading"><?php echo get_field('white_paper_heading');?></h3>
                            <div class="blog-posted">By   <span><?php echo get_field('author_name');?></span><?php echo get_field('whitepaper_date');?></div>
                            <h5 class="category text-capitalize" >Category: <?php echo $term->name; ?></h5>
                            <p class="info"><?php echo get_field('white_paper_info');?>	</p>
                            <div class="link"><i class="icon-down-arrow"></i>download</div>
                            <div class="bar">
                              <div class="bar__line"></div>
                              <div class="bar__line"></div>
                              <div class="bar__line"></div>
                            </div>
                          </div>
                        </div>
                      </div></a></li>
                        <?php
                }}  endwhile; ?>  
         
                 <!--  <li class="whitepapers__list clearfix"><a href="white-paper-details-2.html">
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="paper-img"><img src="img/whitepaper/Psychology-of-Sales.jpg" alt="Psychology Sales" class="img-responsive"></div>
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="row">
                          <div class="paper-content">
                            <h3 class="heading">The power of Personality over Business Value</h3>
                            <div class="blog-posted">By   <span>RAHUL </span>23 JUN 2017</div>
                            <h5 class="category text-capitalize">Category: Cloud Technology</h5>
                            <p class="info">Did you know that personality traits and psychological characteristics of a buyer play a role...</p><a href="javascript:void(0)" class="link"><i class="icon-down-arrow"></i>download</a>
                            <div class="circle circle--lg circle--ringOrange circle--ring"></div>
                          </div>
                        </div>
                      </div></a></li>
                  <li class="whitepapers__list clearfix"><a href="white-paper-details-1.html">
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="paper-img"><img src="img/whitepaper/Psychology-of-Sales.jpg" alt="Combining Data" class="img-responsive"></div>
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="row">
                          <div class="paper-content">
                            <h3 class="heading">Combining big data, right judgement &amp; relevant content</h3>
                            <div class="blog-posted">By   <span>RAHUL </span>23 JUN 2017</div>
                            <h5 class="category text-capitalize">Category: Cloud Technology</h5>
                            <p class="info">To address the numerous sales challenges, a combination of science and human intuition is needed, which is rarely the case...</p><a href="javascript:void(0)" class="link"><i class="icon-down-arrow"></i>download</a>
                          </div>
                        </div>
                      </div></a></li> -->
                </ul>
                <!--start: Pagination-->
                
                 <div class="pagination-wrapper text-right">
       		     <ul class="pagination pagination-menu">
                  <!--  <li class="active"><a href="">1</a></li>
                   <li><a href="javascript:void(0)">2</a></li>
                   <li><a href="javascript:void(0)">3</a></li>
                   <li><a href="javascript:void(0)">4</a></li>
                   <li><a href="javascript:void(0)">next</a></li>--> 
                   </ul> 
                </div>
                <div class="text-center logo-footer"><img src="<?php echo get_field('footer_image');?>" alt="Draup" class="logo-footer__img"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer('whitepapers'); ?>

 <div id="requestModal" role="dialog" class="modal fade requestModal">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <div class="bar">
              <div class="bar__line"></div>
              <div class="bar__line"></div>
              <div class="bar__line"></div>
            </div>
            <h4 class="modal-title heading-md"><?php echo get_field('request_heading');?></h4>
            <p class="info info--gray"><?php echo get_field('request_subheading');?></p>
          </div>
          <div class="modal-body">
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
                    
            <form data-parsley-validate="" class="login-form">
              <div class="form-group">
                <label for="topic" class="input-label">enter topic</label>
                <input id="topic" name="topic" type="text" required placeholder="Type" class="form-control input-field">
              </div>
              <div class="form-group">
                <label for="email" class="input-label">Email address</label>
                <input id="email" name="email" type="email" required placeholder="sam@compayname.com" class="form-control input-field">
              </div>
              <button type="submit" class="btn btn--blue">request</button>
                 <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
