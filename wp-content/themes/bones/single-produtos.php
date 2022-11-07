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

		<?php if (have_posts()): ?> 
            
            <?php while( have_posts() ): the_post(); ?>

                <?php $related = get_field('related'); ?>
                <?php if($related): ?>
                    <div class="c-bg c-bg--secondary js-animated-start">
                        <div class="o-wrapper o-wrapper--1400">
                            <ul class="c-menu-page">
                                <li class="c-menu-page__item c-menu-page__item--current appear-in appear-in-top appear-in-time-1"><?php the_title(); ?></li>
                               
                                <?php $counter = 2; foreach($related as $post): ?>
                                    <?php setup_postdata($post); ?>

                                    <li class="c-menu-page__item appear-in appear-in-top appear-in-time-<?php echo $counter; ?>">
                                        <a href="<?php echo get_permalink(); ?>" class="c-menu-page__link"><?php the_title(); ?></a>
                                    </li>

                                <?php $counter++; endforeach; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="c-bg c-bg--secondary c-bg--gradient c-bg--top-white js-animated-start">
                    <div class="o-wrapper o-wrapper--1050">
        
                        <div class="c-slider js-slider-images appear-in appear-in-top">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									
									<?php $gallery = get_field('gallery'); ?>

									<?php foreach($gallery as $image): ?>
									
										<div class="swiper-slide c-slider__product">
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

                <div class="c-bg c-bg--gradient js-animated">
                    <div class="o-wrapper o-wrapper--1050">
                        <div class="c-product appear-in appear-in-top">
                            <?php echo get_field('text'); ?>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>

		<?php else : ?>

			<div class="c-not-found">
				<div class="o-wrapper o-wrapper--1280">
					<h2 class="o-ttl o-ttl--30 o-ttl--center">Post não encontrado.</h2>

					<div class="o-btn__center">
						<a href="<?php echo home_url(); ?>" class="o-btn o-btn--primary">Voltar para home</a>
					</div>
				</div>
			</div>

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
