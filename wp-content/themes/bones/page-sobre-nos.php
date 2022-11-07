<?php
/*
 Template Name: Sobre nos
*/
 ?>
 
 <?php get_header(); ?>

	<main class="c-main">

		<?php $banner = get_field('banner'); ?>
		<section class="c-banner c-banner--page js-animated-start" style="background-image: url('<?php echo $banner['image'] ?>');">
			<div class="c-banner__item">
			    <div class="c-banner__content">
                    <div class="o-wrapper o-wrapper--1400">
                        <div class="c-banner__txt appear-in appear-in-top">
                            <h2 class="o-ttl--secondary o-ttl--40 o-ttl--extrabold o-ttl--white"><?php echo $banner['title'] ?></h2>
                        </div>
                    </div>
			    </div>
			</div>
		</section>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<section class="c-bg c-bg--gradient">
                <div class="o-wrapper o-wrapper--1400 js-animated-start">
					<div class="o-grid o-grid__col-2 o-grid__gap-80 o-grid__center">
						<div class="c-slider js-slider-images appear-in appear-in-top">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									
									<?php $gallery = get_field('slider'); ?>

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
						
						<div class="o-ttl--23 appear-in appear-in-top appear-in-time-2">
                            <?php echo get_field('text_right'); ?>
                        </div>
					</div>
				</div>

                <div class="o-wrapper o-wrapper--1400 js-animated">
                    <?php $textImage = get_field('text_image'); ?>

                    <div class="c-about-text-image">
                        <div class="c-about-text-image__text o-ttl--23 appear-in appear-in-top">
                            <?php echo $textImage['text']; ?>
                        </div>

                        <div class="c-about-text-image__image appear-in appear-in-top appear-in-time-2">
                            <img src="<?php echo $textImage['image']; ?>">
                        </div>
                    </div>
                </div>
            </section>

            <section class="c-bg js-animated">
                <div class="o-wrapper o-wrapper--1400">
                    <h2 class="o-ttl o-ttl--40 o-ttl--secondary o-ttl--extrabold o-ttl--center appear-in appear-in-top">Nosso processo</h2>

                    <div class="c-about-process">
                        <?php $counter = 1; while( have_rows('process') ): the_row(); ?>
                        
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

            <section class="c-bg c-bg--secondary c-bg--gradient c-bg--mid-white js-animated">
                <div class="o-wrapper o-wrapper--1400">
                    <div class="o-grid o-grid__col-3 o-grid__gap-70">
                        <?php $counter = 1; while( have_rows('company') ): the_row(); ?>

                            <div class="c-about-company appear-in appear-in-top appear-in-time-<?php echo $counter; ?>">
                                <div class="c-about-company__title">
                                    <img src="<?php echo get_sub_field('ico'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                                    <h3 class="o-ttl--secondary o-ttl--40 o-ttl--extrabold"><?php echo get_sub_field('title'); ?></h3>
                                </div>
                                <p class="o-ttl--23"><?php echo get_sub_field('description'); ?></p>
                            </div>

                        <?php $counter++; endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>

            <section class="c-bg js-animated">
                <div class="o-wrapper o-wrapper--1200">
                    <h2 class="o-ttl o-ttl--40 o-ttl--secondary o-ttl--extrabold o-ttl--center appear-in appear-in-top"><?php echo get_field('title_policy') ?></h2>
                    
                    <div class="o-ttl--23 appear-in appear-in-top appear-in-time-2">
                        <?php echo get_field('text_policy') ?>
                    </div>
                </div>
            </section>

		<?php endwhile; endif; ?>

	</main>

 <?php get_footer(); ?>
