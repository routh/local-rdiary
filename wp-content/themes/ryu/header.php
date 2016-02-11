<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ryu
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="stylesheet" href="../wp-content/themes/ryu/css/simplemenu.css">
<link rel="stylesheet" href="../wp-content/themes/ryu/css/font-awesome.css">
<link href='http://fonts.googleapis.com/css?family=Marmelad|Roboto+Condensed:300italic,400italic,700italic,400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script src="../wp-content/themes/ryu/js/simplemenu.js"></script>
<script src="../wp-content/themes/ryu/js/textures.js"></script> 
</head>

<body <?php body_class(); ?>>

<?php
	$email_link = get_theme_mod( 'email_link' );
	$twitter_link = get_theme_mod( 'twitter_link' );
	$facebook_link = get_theme_mod( 'facebook_link' );
	$pinterest_link = get_theme_mod( 'pinterest_link' );
	$google_plus_link = get_theme_mod( 'google_plus_link' );
	$linkedin_link = get_theme_mod( 'linkedin_link' );
	$flickr_link = get_theme_mod( 'flickr_link' );
	$github_link = get_theme_mod( 'github_link' );
	$dribbble_link = get_theme_mod( 'dribbble_link' );
	$vimeo_link = get_theme_mod( 'vimeo_link' );
	$youtube_link = get_theme_mod( 'youtube_link' );
	$tumblr_link = get_theme_mod( 'tumblr_link' );
	$social_links = ( '' != $email_link
		|| '' != $twitter_link
		|| '' != $facebook_link
		|| '' != $pinterest_link
		|| '' != $google_plus_link
		|| '' != $flickr_link
		|| '' != $github_link
		|| '' != $dribbble_link
		|| '' != $vimeo_link
		|| '' != $youtube_link
		|| '' != $tumblr_link
	) ? true : false;
?>




	<?php if ( $social_links ) : ?>
	<div id="social-links-wrapper" class="toppanel hide">
		<ul class="social-links clear">
			<?php if ( is_email( $email_link ) ) : ?>
			<li class="email-link">
				<a href="mailto:<?php echo antispambot( sanitize_email( $email_link ) ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'Email', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'Email', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $twitter_link ) : ?>
			<li class="twitter-link">
				<a href="<?php echo esc_url( $twitter_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'Twitter', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'Twitter', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $facebook_link ) : ?>
			<li class="facebook-link">
				<a href="<?php echo esc_url( $facebook_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'Facebook', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'Facebook', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $pinterest_link ) : ?>
			<li class="pinterest-link">
				<a href="<?php echo esc_url( $pinterest_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'Pinterest', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'Pinterest', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $google_plus_link ) : ?>
			<li class="google-link">
				<a href="<?php echo esc_url( $google_plus_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'Google Plus', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'Google Plus', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $linkedin_link ) : ?>
			<li class="linkedin-link">
				<a href="<?php echo esc_url( $linkedin_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'LinkedIn', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'LinkedIn', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $flickr_link ) : ?>
			<li class="flickr-link">
				<a href="<?php echo esc_url( $flickr_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'Flickr', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'Flickr', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $github_link ) : ?>
			<li class="github-link">
				<a href="<?php echo esc_url( $github_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'Github', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'Github', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $dribbble_link ) : ?>
			<li class="dribbble-link">
				<a href="<?php echo esc_url( $dribbble_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'Dribbble', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'Dribbble', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $vimeo_link ) : ?>
			<li class="vimeo-link">
				<a href="<?php echo esc_url( $vimeo_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'Vimeo', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'Vimeo', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $youtube_link ) : ?>
			<li class="youtube-link">
				<a href="<?php echo esc_url( $youtube_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'YouTube', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'YouTube', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>

			<?php if ( '' != $tumblr_link ) : ?>
			<li class="tumblr-link">
				<a href="<?php echo esc_url( $tumblr_link ); ?>" class="theme-genericon" title="<?php esc_attr_e( 'Tumblr', 'ryu' ); ?>" target="_blank">
					<span class="screen-reader-text"><?php _e( 'Tumblr', 'ryu' ); ?></span>
				</a>
			</li>
			<?php endif; ?>
		</ul>
	</div>
	<?php endif; ?>

	<div id="search-wrapper" class="toppanel hide">
		<?php get_search_form(); ?>
	</div>

	
	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">









			<?php do_action( 'before' ); ?>

			<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) { ?>
				<a class="site-logo"  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" class="no-grav header-image" />
				</a>
			<?php } // if ( ! empty( $header_image ) ) ?>

			<hgroup>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
		</div><!-- .wrap -->



		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="navigation-main clear" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'ryu' ); ?></h1>
				<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'ryu' ); ?>"><?php _e( 'Skip to content', 'ryu' ); ?></a></div>




<!--<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">-->

        <!-- THIS IS THE MENU --> 

        <div class="mobilenav"> 




<div class="entry-wrap wrap clear" style="margin-top:130px !important; border-top:solid 1px #ffffff; text-align:left
!important;">


<?php get_search_form(); ?>


<div id="secondary" role="complementary"<?php ( function_exists( 'ryu_top_sidebar_class' ) ) ? ryu_top_sidebar_class() : ''; ?>>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="top-sidebar-one" class="widget-area" role="complementary">

		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="top-sidebar-two" class="widget-area" role="complementary">

		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #second .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="top-sidebar-three" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #third .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div id="top-sidebar-four" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- #four .widget-area -->
	<?php endif; ?>
</div><!-- #secondary -->



<div style="width:30% !important; height: 200px; display:inline-block !important;position:relative !important;">444444</div>
<div style="width:70% !important; border-left:solid 2px #ffffff; float:right !important; height: 200px;display:inline-block !important;position:relative !important;">3333333</div>



</div>
</div> 
<!-- THIS IS THE ICON --> 


	
	







<div class="wrap">


        	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'wrap' ) ); ?>








         <div class="hamburger"><a href="javascript:void(0)" class="icon"> 
           <div>
             <div class="menui top-menu"></div> 
             <div class="menui mid-menu"></div> 
             <div class="menui bottom-menu"></div> 
           </div> 
         </a></div>



         <div class="hamburger">
         <a href="javascript:void(0)" class="icon-login"> 

         <div>
         <span style="font-size:14px;"><i class="fa fa-user fa-2x"></i></span>
         </div> 

         </a></div>



         <div class="hamburger">
         <a href="javascript:void(0)" class="icon-search"> 

         <div>
         <span style="font-size:13px;"><i class="fa fa-search fa-2x"></i></span>
         </div> 

         </a></div>




			</nav><!-- #site-navigation -->
		<?php endif; ?>





</div>










	</header><!-- #masthead -->
    


	<div id="main" class="site-main">
	