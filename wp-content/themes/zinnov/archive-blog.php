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

get_header('blog'); ?>

	 <!--START: Main-->
    <main>
      <!--START:  Banner-->
      <section class="section section--BlogBanner">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container clearfix">
              <div class="col-sm-12">
                <ul class="breadcrumb breadcrumb-menu breadcrumb-menu--gray">
                  <li class="breadcrumb__list"><a href="<?php echo site_url();?>" class="breadcrumb__link">home</a></li>
                  <li class="breadcrumb__list active">blog</li>
                </ul>
                <h3 class="heading heading--black text-capitalize heading--lg">blog &amp; updates</h3>
                <div class="blog-updates clearfix">
                  <div class="col-sm-8">
                    <div class="row">
                      <div class="blog-left-content">
                        <!--START: Thumbnail Card : Main Card-->
                        <div class="thumbnail card-thumbnail card-thumbnail-updates">
                        <?php 
                       if(!isset($_GET["cat"])){
		
	if(!isset($_GET["tag"])){
	  if($_GET["cat"]!=""){
	  	$cat=$_GET["cat"];	  	
	  	echo $cat;
	  	
	  	
	  	  $the_query=new WP_Query(array('post_type'=>'blog','cat' => $cat,'posts_per_page'   => '1'));
	  }else{
      $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'   => '1'));
	  }
      while($the_query->have_posts() ) : $the_query->the_post(); 
            {  
            	
              
              ?>
                        
                          <div class="card-thumbnail__link">
                            <div class="card-thumbnail-img card-thumbnail-img--overlay"><img src="<?php echo get_field('blog_image');?> " alt="" class="card-thumbnail img-responsive">
                              <h3 class="card-thumbnail-heading"><?php echo get_field('blog_heading');?></h3>
                              <div class="label label--rect label--blue">by <span class="user-name"><?php echo get_field('blog_user_name');?> </span><?php echo get_field('blog_date');?></div>
                            </div>
                            <div class="caption card-caption">
                              <div class="circle circle--ring circle--sm circle--ringBlue"></div>
                              <?php 
                              
                             /* $menu_id = get_the_id();
                              $terms = wp_get_post_terms( $menu_id ,"list_blog");
                            
                             	foreach ( $terms as $term ) { 
								echo $term -> name;
            					}*/
            ?>
                              <p class="info"><?php echo get_field('blog_info');?></p><a href="<?php echo get_permalink();?>" class="link"><?php echo get_field('link_text');?></a>
                            </div>
                          </div>
                            <?php
                }  endwhile;}}?>
                        </div>
                       
                        <!--START: Thumbnail Card : Updates-->
                        <div class="thumbnail card-thumbnail card-thumbnail-updates clearfix">
                          <div class="card-circle">
                            <div class="circle circle--sm circle--filled circle--circleBlue"></div>
                            <div class="circle circle--md circle--filled circle--circleOrange"></div>
                          </div>
                          <ul class="blog-post">
                          
                          <?php 
	  
      $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'   => '3'));
      
      while($the_query->have_posts() ) : $the_query->the_post(); 
            {  
                
                 
            	$menu_id = get_the_id();
            	
            	
            	
            	if(isset($_GET["cat"])){
$terms = wp_get_post_terms( $menu_id ,"list_blog");
	            	foreach ( $terms as $term ) {
	
	            		if($term -> name==$_GET["cat"]){
						$exist="exist";
						}
	            		
	            	}
				}else if(isset($_GET["tag"])){
$terms = wp_get_post_tags( $menu_id ,"tag");
					foreach ( $terms as $term ) {
				
						if($term -> name==$_GET["tag"]){
							$exist="exist";
							
						}
						 
					}
				}else{
				$exist="exist";
				}	
            	
            	//if(!isset($_GET["cat"]) || !isset($_GET["tag"])){}
            	if($exist=="exist"){
              ?>
                            <!--Start: Post 1-->
                            <li class="blog-post__list"><a href="<?php echo get_permalink();?>" class="media blog-media">
                            <div class="blog-media__img blog-media__img--md"><img src="<?php echo get_field('blog_detail_image');?>" class="media-object img-responsive"></div>
                                <div class="blog-media__body">
                                  <h4 class="media-heading"><?php echo get_field('blog_detail_heading');?></h4>
                                  <p class="info"><?php echo get_field('media_info');?></p>
                                  <div class="blog-posted">
                                    <div class="blog-posted__user"><img src="<?php echo get_field('blog_detail_author_image');?>" alt="Eddie Singh"></div>
                                    <div class="blog-posted__date">
                                      <div><?php echo get_field('blog_detail_date');?></div>by <span><?php echo get_field('blog_detail_author_name');?></span><span class="user-designation"><?php echo get_field('blog_detail_author_info');?></span>
                                    </div>
                                  </div>
                                </div></a></li>
                                <?php
                }}  endwhile;?>
                
                
                           
                          </ul>
                          <!--start: Pagination-->
                     <!--      <ul class="pagination pagination-menu">
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li class="active"><a href="#"><?php previous_post_link(  ); ?></a></li>
                            <li><a href="javascript:void(0)"><?php next_post_link( '%link', 'Next Post »' ); ?></a></li>
                         
                            <?php endwhile; ?>
                             <?php endif; ?>
                          </ul>
                          -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="blog-right-content">
                        <div class="category-menu-wrapper id="blog-post__list" onclick="getBlog">
                          <h3 class="heading-md text-capitalize">categories</h3>
                          <ul class="category-menu">
                          <?php
        $terms = get_terms("list_blog",array( 'parent' => 0 ));
        $k=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        ?>
                          
                            <li class="category-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/blog?cat=<?php echo $term->name; ?>" class="category-menu__link" id="<?php echo $termname; ?>" ><?php echo $term->name; ?></a></li>
       <?php $k++; } ?>
                          </ul>
                        </div>
                        <div class="more-read-menu-wrapper">
                          <h3 class="heading-md text-capitalize">most read</h3>
                          <div class="bar">
                            <div class="bar__line"></div>
                            <div class="bar__line"></div>
                            <div class="bar__line"></div>
                          </div>
                          <ul class="more-read-menu">
                           <?php 
	  
                           
      $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'   => '3','meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'ASC'));
      
      while($the_query->have_posts() ) : $the_query->the_post(); 
            {  
                
                 
              
              ?>
                            <li class="more-read-menu__list"><a href="<?php echo get_permalink();?>" class="more-read-menu__link"><?php echo get_field('blog_detail_heading');?></a></li>
                          <!--   <li class="more-read-menu__list"><a href="blog-details-1.html" class="more-read-menu__link">Resilience & NFV is a solution and a problem!</a></li>
                            <li class="more-read-menu__list"><a href="blog-details-2.html" class="more-read-menu__link">Resilience & IoT – Intelligent Operations Technology </a></li> -->
                          <?php
                }  endwhile;?>
                
                          </ul>
                        </div>
                        <div class="subscription-wrapper">
                           <h3 class="section-title"><?php echo get_field('subscribe_heading');?></h3>
                      <p class="info"><?php echo get_field('subscribe_desc');?></p>
                      <?php //echo do_shortcode('[contact-form-7 id="280" title="subscribe"]')?>
                       <div role="form" class="wpcf7" id="wpcf7-f280-o1" lang="en-US" dir="ltr">
					   <div class="screen-reader-response"></div>
                      
                      <form data-parsley-validate="" class="updates-form wpcf7-form" action="/training/zinnov/blog/#wpcf7-f280-o1" method="post"  novalidate="novalidate">
                      <div style="display: none;">
<input type="hidden" name="_wpcf7" value="280">
<input type="hidden" name="_wpcf7_version" value="4.9">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f280-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
</div>
                        <div class="form-group">
                          <label for="email" class="input-label"><?php echo get_field('subscribe_email');?></label>
                          <input id="email" name="email" type="email" required placeholder="Steve@company.com" class="input-field form-control">
                                <button type="submit" class="btn btn--blue btn--lg">SUBSCRIBE</button>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                              </div>
                            </form>
                          </div>
                        </div>
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
<?php get_footer('blog'); ?>

<script type="text/javascript">
/*
function getBlog() {
	//alert(1);
	var blog=document.getElementById('blog-post__list').value;
		
	
	 
		var data = {
			'action': 'getBlog',
			'blog': blog
			
		};
		
			jQuery.post(ajaxurl, data, function(response) {
				
			var temp=response.split('$');
			$("#blog_detail_image").html(temp[0]);
			$("#blog_detail_heading").html(temp[1]);
			$("#media_info").html(temp[2]);
			$("#blog_detail_author_image").html(temp[3]);
			$("#blog_detail_date").html(temp[4]);
			$("#blog_detail_author_name").html(temp[5]);
			$("#blog_detail_author_info").html(temp[6]);
		 
			


			
		});
	}*/
</script>
