<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                  <?php
						if ( is_active_sidebar( 'footer-1' ) ) {
							dynamic_sidebar( 'footer-1' ); 	
						}
					?>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                  <?php
						if ( is_active_sidebar( 'footer-2' ) ) {
							dynamic_sidebar( 'footer-2' ); 	
						}
					?>
                        
               </div>
               <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                  <?php
						if ( is_active_sidebar( 'footer-3' ) ) {
							dynamic_sidebar( 'footer-3' ); 	
						}
					?>
					<?php
						if ( is_active_sidebar( 'footer-4' ) ) {
							dynamic_sidebar( 'footer-4' ); 	
						}
					?>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                  
                  <?php
						if ( is_active_sidebar( 'footer-5' ) ) {
							dynamic_sidebar( 'footer-5' ); 	
						}
					?>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                    <?php
						if ( is_active_sidebar( 'footer-6' ) ) {
							dynamic_sidebar( 'footer-6' ); 	
						}
					?>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                  <?php
						if ( is_active_sidebar( 'footer-7' ) ) {
							dynamic_sidebar( 'footer-7' ); 	
						}
					?>
               </div>
            </div>
         </div>
      </footer>

</div><!-- #wape -->
<script>
      function popNavigation() {
        var winHeight = jQuery(window).height();
        jQuery('.header-navigation').fadeIn('slow');
        jQuery('.header-navigation').height(winHeight);
        jQuery('.menu-close').addClass('menuactive');
        jQuery('body').attr('style', 'overflow: hidden !important');
      }
      function closeNavigation() {
        jQuery('.header-navigation').fadeOut('slow');
        jQuery('.menu-close').removeClass('menuactive');
        jQuery('body').attr('style', 'overflow: auto !important');
      }
   </script>
<?php wp_footer(); ?>


</body>
</html>
