<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CryptoKeeper-fresca
 */

?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="page" class="min-h-screen flex flex-col">
		<a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'cryptokeeper-fresca'); ?></a>

		<header id="masthead" class="site-header bg-gray-800 text-white p-5 shadow-lg">
			<div class="container mx-auto flex justify-between items-center">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()):
					?>
					<h1 class="text-3xl font-bold">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="text-white hover:text-gray-300">
							<?php bloginfo('name'); ?>
						</a>
					</h1>
					<?php
				else:
					?>
					<p class="text-lg">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="text-white hover:text-gray-300">
							<?php bloginfo('name'); ?>
						</a>
					</p>
					<?php
				endif;
				?>
				<nav id="site-navigation" class="main-navigation">
					<button
						class="menu-toggle md:hidden text-white focus:outline-none focus:text-gray-300 hover:text-gray-300"
						aria-controls="primary-menu" aria-expanded="false">
						&#9776; Menu
					</button>
					<div class="hidden md:block">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_class' => 'menu flex space-x-4',
								'container_class' => 'text-sm font-medium',
								'add_li_class' => 'hover:bg-gray-700 p-2 rounded'
							)
						);
						?>
					</div>
				</nav>
			</div>
		</header>

		<div id="content" class="flex-grow">