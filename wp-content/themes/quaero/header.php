<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/text.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/982_12_10.css" rel="stylesheet" type="text/css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php 

wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.3.1-min.js"></script>
<!-- bxSlider Javascript file -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js" type="text/javascript"></script>
<!-- bxSlider CSS file -->
<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
  auto: true,
  autoControls: true
});
});
</script> 
</head>

<body <?php body_class(); ?>>
<div class="header">
	<div class="main">
      <div class="g324 inside">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" id="logo">
                <span><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></span>
            </a>
        </div>
        <div class="g648 menu_share">
        	<div class="g405 inside">
            	<ul class="share_link">
                    <li><a href="#"><?php _e( 'Contact us', 'twentytwelve' ); ?></a></li>
                    <li><a href="#" class="facebook"><span>&nbsp;</span></a> <a href="#" class="twitter"><span>&nbsp;</span></a></li>
                    <li><a href="#" class="langue four-corner-all"><?php _e( 'French', 'twentytwelve' ); ?></a> <a href="#" class="last"><?php _e( 'Translate', 'twentytwelve' ); ?></a></li>
                </ul>
            </div>
            <div class="g243">
					<?php get_search_form(); ?>
   			</div>
            <div class="clear">&nbsp;</div>
			<div class="blog">
       		  <a href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=20">Blog</a> - <a href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=22">Evenementiel</a>
            </div>
        </div>
        <div class="clear">&nbsp;</div>
			<?php wp_nav_menu( array( 'container_class' => 'menu','theme_location' => 'primary','menu' =>'menutop', 'menu_class' => 'menutop' ) ); ?>
		<div class="clear">&nbsp;</div>
  </div>
  <?php
if ( is_home() ) {?>
  <div class="central">
  	<div class="main">
    	<img src="<?php echo get_template_directory_uri(); ?>/images/imgcentral.png" width="982" height="295" alt="central" />
    </div>
  </div><!--fin central-->
  <?php }?>
</div> <!--fin header-->
<div id="page" class="main">
	<div id="main" class="wrapper">