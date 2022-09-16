<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tv-app
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			?>
			<div class="site-logo">
				<?php
				the_custom_logo();
				?>
			</div>
			<?php
			if (is_front_page() && is_home()) :
			?><div class="site-head">
					<h3 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h3>
				<?php
			else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
			endif;
			$tv_app_description = get_bloginfo('description', 'display');
			if ($tv_app_description || is_customize_preview()) :
				?>
					<h2 class="site-description"><?php echo $tv_app_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></h2>
				<?php endif; ?>

				<div class="site-subject">
					" विधुतिय सूचना पाटिमा हार्दिक स्वागत छ | "
				</div>

				</div>
				<div class="nep-logo"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag.gif" alt=""> </div>
	</header>