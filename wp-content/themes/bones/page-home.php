<?php
/*
 Template Name: Home
*/
 ?>
 
 <?php get_header(); ?>

	<main class="c-main">

		<?php if( have_rows('slider') ): ?>
			<div class="swiper-container js-home-slider js-animated-start">
				<div class="swiper-wrapper">
					<?php while( have_rows('slider') ): the_row(); ?>

						<div class="swiper-slide c-banner c-banner--slider" style="background-image: url('<?php echo get_sub_field('image'); ?>');">
							<div class="c-banner__item">
								<div class="c-banner__content">
									<div class="o-wrapper o-wrapper--1400">
										<div class="c-banner__text">
											<h2 class="o-ttl o-ttl--secondary o-ttl--40 o-ttl--white o-ttl--extrabold appear-in appear-in-top"><?php echo get_sub_field('title'); ?></h2>
											<p class="o-ttl--white o-ttl--23 appear-in appear-in-top appear-in-time-2"><?php echo get_sub_field('description'); ?></p>
	
											<?php $button = get_sub_field('button'); ?>
											<?php if($button['title']): ?>
												<div class="appear-in appear-in-top appear-in-time-3">
													<a href="<?php echo $button['link'] ?>" class="o-btn o-btn--primary"><?php echo $button['title'] ?></a>
												</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; wp_reset_postdata(); ?>
				</div>
				<div class="swiper-pagination"></div>
			</div> 
		<?php endif; ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
			<section class="c-bg c-bg--gradient js-animated">
				<div class="o-wrapper o-wrapper--1400">
					<div class="o-grid o-grid__col-2 o-grid__gap-80 o-grid__center">
						<div class="c-slider js-slider-product appear-in appear-in-top">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									
									<?php $gallery = get_field('gallery'); ?>

									<?php foreach($gallery as $image): ?>
									
										<div class="swiper-slide">
											<img src="<?php echo $image['url']; ?>">
										</div>
										
									<?php endforeach; wp_reset_postdata(); ?>
								</div>
								<div class="swiper-pagination swiper-pagination-orange"></div>
							</div>
							
							<div class="swiper-button swiper-button-prev">
								<svg width="18" height="34">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-prev" />
								</svg>
							</div>
							<div class="swiper-button swiper-button-next">
								<svg width="18" height="34">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-next" />
								</svg>
							</div>
						</div>
						
						<div class="appear-in appear-in-top appear-in-time-2">
							<h2 class="o-ttl o-ttl--40 o-ttl--extrabold"><?php echo get_field('title'); ?></h2>
							<p class="o-ttl--23"><?php echo get_field('description'); ?></p>
							<a href="<?php echo get_permalink(); ?>" class="o-btn o-btn--primary o-btn--mt-40">Conheça nossos produtos</a>
						</div>
					</div>
				</div>												
			</section>

			<section class="c-bg js-animated">
				<div class="o-wrapper o-wrapper--1400">
					<div class="o-grid o-grid__col-2 o-grid__gap-80 o-grid__center">
						<div class="appear-in appear-in-top">
							<h2 class="o-ttl o-ttl--40 o-ttl--extrabold"><?php echo get_field('title_2'); ?></h2>
							<img src="<?php echo get_field('image'); ?>" alt="<?php echo get_field('title_2'); ?>">
							<p class="o-ttl--23"><?php echo get_field('description_2'); ?></p>
							<a href="<?php echo get_permalink(); ?>" class="o-btn o-btn--primary o-btn--mt-40">Saiba mais Sobre Nós</a>
						</div>

						<div class="c-slider js-slider-images appear-in appear-in-top appear-in-time-2">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									
									<?php $gallery = get_field('gallery_2'); ?>

									<?php foreach($gallery as $image): ?>
									
										<div class="swiper-slide">
											<img src="<?php echo $image['url']; ?>">
										</div>
										
									<?php endforeach; wp_reset_postdata(); ?>
								</div>
								<div class="swiper-pagination swiper-pagination-orange"></div>
							</div>
							
							<div class="swiper-button swiper-button-prev">
								<svg width="18" height="34">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-prev" />
								</svg>
							</div>
							<div class="swiper-button swiper-button-next">
								<svg width="18" height="34">
									<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-next" />
								</svg>
							</div>
						</div>
					</div>
				</div>												
			</section>

			<section class="c-bg c-bg--gradient js-animated">
                <div class="o-wrapper o-wrapper--1400">
                    <h2 class="o-ttl o-ttl--40 o-ttl--secondary o-ttl--extrabold o-ttl--center appear-in appear-in-top">Nosso processo</h2>

                    <div class="c-about-process">
                        <?php $counter = 1; while( have_rows('process', 50) ): the_row(); ?>
                        
                            <div class="c-about-process__item appear-in appear-in-top appear-in-time-<?php echo $counter; ?>">
                                <div class="c-about-process__image">
                                    <img src="<?php echo get_sub_field('image'); ?>">
                                </div>

                                <h3 class="o-ttl--23 o-ttl--regular o-ttl--center"><?php echo get_sub_field('title'); ?></h3>
                            </div>

                        <?php $counter++; endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>

			<section class="c-bg c-bg--contact js-animated">
				<div class="o-wrapper o-wrapper--1230">
					<h2 class="o-ttl o-ttl--40 o-ttl--secondary o-ttl--extrabold o-ttl--center o-ttl--white o-ttl--position appear-in appear-in-top">Fale Conosco</h2>

                    <div class="c-form c-form--secondary appear-in appear-in-top appear-in-time-2">
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>
                    </div>
                </div>
			</section>

		<?php endwhile; endif; ?>

	</main>

 <?php get_footer(); ?>
