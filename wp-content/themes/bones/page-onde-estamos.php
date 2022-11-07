<?php
/*
 Template Name: Onde estamos
*/
 ?>
 
 <?php get_header(); ?>

	<main class="c-main js-animated-start">

		<?php $banner = get_field('banner'); ?>
		<section class="c-banner c-banner--page" style="background-image: url('<?php echo $banner['image'] ?>');">
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

			<div class="c-map appear-in appear-in-top appear-in-time-2">
                <?php echo get_field('map'); ?>

                <div class="c-map__content o-ttl--23 o-ttl--white">
                    <h3 class="o-ttl o-ttl--23 o-ttl--black o-ttl--white">Matriz</h3>
                    <?php echo get_field('text'); ?>
                </div>
            </div>

		<?php endwhile; endif; ?>

	</main>

 <?php get_footer(); ?>
