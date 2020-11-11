<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Labqi
 */
global $configuracao;
?>
	<footer class="menuTop">

		<div class="lab-container">
			<div class="lab-col">
				<figure>
					<img src="<?php  echo $configuracao['ncob_header_logo']['url'] ?>" alt="<?php bloginfo( 'name' ); ?>">
				</figure>
			</div>
			<div class="lab-col">
				<nav class="lab-nav">
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

		<div class="lab-container">
			
			<div class="lab-col-3 text-left">
				<div class="copyright">
					<span>© 2020 LabQi</span>
				</div>
			</div>
			<div class="lab-col-3 text-center">
				<div class="contact">
					<strong><?php echo $configuracao['section_quimico_onde_estamo_telefone']?></strong>
				</div>
			</div>
			<div class="lab-col-3 text-right">
				<div class="social">
					<ul>
						<li>
							<?php if($configuracao['footer_facebook'] != ""): ?>
							<a href="<?php echo $configuracao['footer_facebook'] ?> " target="_blank">
								<img src="<?php bloginfo('template_url'); ?>/img/facebook.svg" alt="facebook">
							</a>
						<?php endif; ?>
						</li>
						<li>
							<?php if($configuracao['footer_instagram'] != ""): ?>
							<a href="<?php echo $configuracao['footer_instagram'] ?> " target="_blank">
								<img src="<?php bloginfo('template_url'); ?>/img/instagram.svg" alt="instagram">
							</a>
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>

		</div>

	</footer>

	<?php include(TEMPLATEPATH . '/inc/form-contact.php'); ?>

	<!-- JS -->
	<script src='<?php bloginfo('template_url'); ?>/js/jquery.js' id='jquery-core-js'></script>
	<script src='<?php bloginfo('template_url'); ?>/js/jquery.min.js' id='ncob-jquery-js'></script>
	<script src='//code.jquery.com/jquery-migrate-1.2.1.min.js?ver=14092020' id='ncob-jquery-migrate-js'></script>
	<script src="<?php bloginfo('template_url'); ?>/js/geral.js"></script>
<?php wp_footer(); ?>

</body>
</html>
