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
		        </div>
		         <div class="flex flex--noMobile flex--justifySpaceBetween select-dropdown-menu">
		          <h3 class="heading heading--black text-capitalize heading--lg">White papers</h3>
		          <select class="select-category" onchange="loadPost(this.value)">
		          <?php if(isset($_GET["sort"])){?>
                  
                    <option value="<?php echo $_GET["sort"]?>"><?php echo $_GET["sort"]?></option>
                  <?php }?>
                  
		            <option>Sort</option>
		            
                    <?php
        $terms = get_terms("list_whitepapers",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        ?>
        <?php //echo do_shortcode('[searchandfilter taxonomies="category,post_tag"]');?>
                    
		            <option id="<?php echo $termname; ?>"><?php echo $term->name; ?></option>
		           <!--  <option>Fin Tech</option>
		            <option>Food Tech</option> -->
		             <?php $i++; } ?>
		          </select>
		        </div>
		        
		        <ul class="whitepapers">
		         <?php 
                 $i=1;
            
                  $the_query=new WP_Query(array('post_type'=>'whitepapers'));
                  
                  while($the_query->have_posts() ) : $the_query->the_post();
                  {
                  	
                  	$whitepapers_date = get_the_date( 'd M Y', get_the_ID() );
                  		$trimtitle = get_the_content();
                  	$shorttitle = wp_trim_words( $trimtitle, $num_words = 15, $more = '… ' );
                  	
                  	
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
<?php 

$user=get_field('select_author');
$auth = get_post($user); // gets author from post
$author_name = $auth->user_name;



?> 
		          <li class="whitepapers__list clearfix"><a href="<?php echo get_permalink(); ?>">
		              <div class="col-sm-7">
		                <div class="row">
		                  <div class="paper-img"><?php echo get_the_post_thumbnail( get_the_ID(), 'whitepapers-thumbnail',array('alt' => 'whitepapers image','class' => 'img-responsive')); ?></div>
		                </div>
		              </div>
		              <div class="col-sm-5">
		                <div class="row">
		                  <div class="paper-content">
		                    <h3 class="heading"><?php  the_title(); ?></h3>
		                    <div class="blog-posted">By   <span><?php echo $author_name;?></span><?php echo $whitepapers_date;?></div>
		                    <h5 class="category text-capitalize">Category: <?php echo $term->name; ?></h5>
		                    <p class="info"><?php echo $shorttitle;?></p>
		                    <div class="link"><i class="icon-down-arrow"></i>download</div>
		                    
		                    <?php if($i==1){?>
		                    <div class="bar">
		                      <div class="bar__line"></div>
		                      <div class="bar__line"></div>
		                      <div class="bar__line"></div>
		                    </div>
		                    <?php }else if($i==2){?>
		                    <div class="circle circle--lg circle--ringOrange circle--ring"></div>
		                    <?php }?>
		                   
		                  </div>
		                </div>
		              </div></a></li>
		              
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
		               <?php
                    $i++;       
                     }}  endwhile;?>  
         
		               
		        </ul>
		        <!--start: Pagination-->
		      <!--   <div class="pagination-wrapper text-right">
		          <ul class="pagination pagination-menu">
		            <li class="active"><a href="javascript:void(0)">1</a></li>
		            <li><a href="javascript:void(0)">2</a></li>
		            <li><a href="javascript:void(0)">3</a></li>
		            <li><a href="javascript:void(0)">4</a></li>
		            <li><a href="javascript:void(0)">next</a></li>
		          </ul>
		        </div> -->
		         <div class="text-center logo-footer"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer-logo.svg" alt="Draup" class="logo-footer__img"></div>
		      </div>
		    </div>
		  </div>
		</div>
	      </section>
	    </main>
	    <?php get_footer('whitepapers'); ?>
