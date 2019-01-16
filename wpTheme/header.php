<?php
/*

@package WordPress
@subpackage wpTheme
@since wpTheme

=========================
	HEADER
=========================
* This page contains the header part ot the template.
* Must be referenced with the get_header (); command.
*/
?>
<!DOCTYPE html>
<?php tha_html_before (); ?>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <?php tha_head_top (); ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <?php $options = get_option( 'ap_core_theme_options' ); ?>
  <?php
  //we prepare the header,
  //if the header title is not being displayed we prepare a funciotn so the heather will have a link for the homepage
  $ap_core_headerimg = null;
  if ( !isset( $options['site-title'] ) || $options['site-title'] == false ) {
    $ap_core_headerimg_before = '<a href="' . esc_url( home_url() ) . '" title="' . get_bloginfo('title') . '">';
    $ap_core_headerimg_after = '</a>';
  } else {
    $ap_core_headerimg_before = null;
    $ap_core_headerimg_after = null;
  }









   ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
		<div id="sidebar" class="sidebar">
			<header id="masthead" class="site-header" role="banner">
    <?php if ( get_header_image() ) : ?>
      <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                    echo '<img src="'. esc_url( $logo[0] ) .'">';
            } else {
                    echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
            }
          ?>
          <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
      </div>
    <?php endif; ?>
				<div class="site-branding">
      	<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
       	<?php else : ?>
				 		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      	<?php endif; $description = get_bloginfo( 'description', 'display' ); if ( $description || is_customize_preview() ) : ?>
					<?php echo $description; ?>
					<?php endif; ?>
        <button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
      </div><!-- .site-branding -->
    </header><!-- .site-header -->
    <?php get_sidebar( 'sidebar_2' ); ?>
  </div>
  <?php wp_nav_menu( array( 'theme_location' => 'primary_menu' ) ); ?>
  <!-- .sidebar -->
  <?php echo ('-----------------------end of header------------------------------<br>'); ?>
<div id="content" class="site-content">
