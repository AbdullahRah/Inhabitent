<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
$override='over-content';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			
			<?php if ( is_front_page() || is_page('about') ) : ?>
				<!-- LOGO SHOULD BE GREEEEN -->
				<img class="tent-logo" src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-tent.svg">
			<?php else : ?>
				<a href="<?=home_url( )?>">
				<img class="tent-logo" src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-tent-white.svg">
			</a>
				
			<?php endif; ?>


<!-- 
	
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div>.site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				</nav><!-- #site-navigation -->
				<?php get_search_form(); ?>

			</header><!-- #masthead -->

			<div id="content" class="site-content <?=$override?>">

<?php
if(is_front_page()){
    if ( has_post_thumbnail() ) { ?>
        <div class="inhabitent-banner">
            <?php the_post_thumbnail(); ?>
            <img class="inhabitent-logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg"/>
        </div>
    <?php
    }
}