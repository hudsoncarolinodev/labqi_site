<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Labqi
 */

global $configuracao;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<!-- TOPO -->
	<header class="menuTop">
		<div class="lab-container">
			<div class="lab-col">
				<figure>
					<img src="<?php  echo $configuracao['ncob_header_logo']['url'] ?>" alt="<?php bloginfo( 'name' ); ?>">
				</figure>
			</div>
			<div class="lab-col">
				<nav class="lab-nav">
					<span class="open-menu mobile-element"><img src="<?php echo get_template_directory_uri() ?>/img/menu.svg" alt="Botão menu"></span>
					<span class="close-menu mobile-element"><img src="<?php echo get_template_directory_uri() ?>/img/x.svg" alt="Botão menu"></span>
					<?php 
						wp_nav_menu(
							array(
								'menu_id' => 'primary-menu',
							)
						);
					?>
				</nav>
			</div>
		</div>
	</header>