<?php
/*
 Template Name: Contato
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
                <div class="o-wrapper o-wrapper--1230 js-animated-start">
                    <div class="o-ttl--18 o-ttl--medium appear-in appear-in-top appear-in-time-2">
                        <?php echo get_field('text'); ?>
                    </div>
                </div>

                <div class="o-wrapper o-wrapper--1230 js-animated">
                    <div class="c-form appear-in appear-in-top">
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>
                    </div>
                </div>

                <div class="o-wrapper o-wrapper--1230 js-animated">
                    <div class="c-contact">
                        <div class="c-contact__item appear-in appear-in-top">
                            <h3 class="o-ttl o-ttl--18 o-ttl--black">Matriz</h3>
                            
                            <div class="o-ttl--18 o-ttl--medium">
                                <?php echo get_field('text_2'); ?>
                            </div>
                        </div>

                        <div class="c-contact__item appear-in appear-in-top appear-in-time-2">
                            <h3 class="o-ttl o-ttl--18 o-ttl--black">Departamentos</h3>
                            
                            <div class="o-ttl--18 o-ttl--medium">
                                <?php echo get_field('text_3'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

		<?php endwhile; endif; ?>

	</main>

 <?php get_footer(); ?>
