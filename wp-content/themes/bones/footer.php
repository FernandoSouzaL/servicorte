		<footer class="c-footer">

			<div class="c-footer__arrow">
				<a href="#go-top" class="js-goto">
					<svg width="80" height="80">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-top" />
					</svg>
				</a>
			</div>

			<div class="o-wrapper o-wrapper--1400">

				<div class="c-footer__container">
					<div class="c-footer__left">
						<svg width="241" height="103.503">
							<title><?php bloginfo( 'name' ); ?></title>
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logotipo" />
						</svg>

						<h3 class="o-ttl--23 o-ttl--medium"><?php echo get_field('title', 29); ?></h3>
					</div>

					<div class="c-footer__right">
						<p class="c-footer__sales o-ttl--23 o-ttl--right"><?php echo get_field('sales', 29); ?></p>

						<ul class="c-menu-redes">
							<?php get_template_part('partials/main-redes-menu'); ?>
						</ul>
					</div>
				</div>

				<div class="c-footer__container">
					<div class="c-footer__left c-footer__left--secondary">
						<p class="c-footer__copyright o-ttl--18">
							&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
							<a href="https://ondaweb.com.br" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/ondaweb-ico-white.png" />
							</a>
						</p>
					</div>

					<div class="c-footer__right">
						<p class="c-footer__contact o-ttl--23 o-ttl--right"><?php echo get_field('contact_footer', 29); ?></p>
					</div>
				</div>


			</div>

		</footer>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php include get_template_directory() . '/partials/svgs.php' ?>

		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
