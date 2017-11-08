<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
 <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <ul class="footer-menu">
              <li class="footer-menu__list"><a href="<?php echo site_url();?>" class="footer-menu__link">home</a></li>
              <li class="footer-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/about" class="footer-menu__link">About</a></li>
              <li class="footer-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/blog" class="footer-menu__link">Blog</a></li>
              <li class="footer-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/whitepapers" class="footer-menu__link">white Papers</a></li>
              <li class="footer-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/faq" class="footer-menu__link">FAQ</a></li>
              <li class="footer-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/contact" class="footer-menu__link">Contact</a></li>
              <li class="footer-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/disclaimer" class="footer-menu__link">legal disclaimer</a></li>
              <li class="footer-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/privacy" class="footer-menu__link">privacy</a></li>
            </ul>
            <div class="copy-right text-center">
              <p class="copy-right__content">&#9400;2017 Zinnov. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
	
<?php wp_footer(); ?>


<!--START: Scripts- Plugins-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/jquery.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/bootstrap.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/select.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/parsley.js"></script>
    <!--START: Scripts- Custom-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/select-init.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/blog-header-animation.js"></script>
   </body>
</html>


 