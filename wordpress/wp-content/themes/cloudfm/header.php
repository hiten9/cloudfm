<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		

<div id="wrapper">
      <header id="header">
         <div class="header-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">

                        <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
                     
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                     <a href="javascript:void(0);" onclick="popNavigation()" class="burger-menu">
                         <span></span>
                         <span></span>
                         <span></span>
                     </a>
                        
                  </div>
               </div>
            </div>
         </div>
         <div class="header-navigation">
            <div class="header-top">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-6">
                            <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
                       </div>
                       <div class="col-6">
                           <div class="header-right pull-right">
                               <a href="javascript:void(0);" onclick="closeNavigation()" class="burger-menu menu-close">
                                   <span></span>
                                   <span></span>
                                   <span></span>
                               </a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="container-fluid">
               <div class="row">
                   <div class="col-lg-6 col-5">
                        <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_class'     => 'main-menu',
										'items_wrap'     => '<ul id="%1$s" class="navigation-menu">%3$s</ul>',
									)
								);
								?>
							</nav><!-- #site-navigation -->
						<?php endif; ?>
                     </div>
                     <div class="col-lg-6 col-7">
                        <div class="navigation-right">
                        	 <?php
								if ( is_active_sidebar( 'header-nav-right' ) ) {
									dynamic_sidebar( 'header-nav-right' ); 	
								}
							?>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
      </header>