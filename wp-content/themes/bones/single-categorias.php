<?php get_header(); ?>

	<main class="c-main">

        <?php $banner = get_field('banner', 137); ?>
		<section class="c-banner c-banner--page js-animated-start" style="background-image: url('<?php echo $banner['image'] ?>');">
			<div class="c-banner__item">
			    <div class="c-banner__content">
                    <div class="o-wrapper o-wrapper--1400">
                        <div class="c-banner__txt appear-in appear-in-top">
                            <h2 class="o-ttl--secondary o-ttl--40 o-ttl--extrabold o-ttl--white"><?php the_title(); ?></h2>
                        </div>
                    </div>
			    </div>
			</div>
		</section>

		<?php if (have_posts()): ?> 
			<div class="c-bg js-animated-start">
                <div class="o-wrapper o-wrapper--1400">
                    <div class="o-grid o-grid__col-3 o-grid__gap-40">

                        <?php while( have_posts() ): the_post(); ?>
        
                            <?php $terms = get_field('categories'); ?>

                            <?php $counter = 1; foreach($terms as $term): ?>

                                <div class="c-card appear-in appear-in-top appear-in-time-<?php echo $counter; ?>">
                                    <div class="c-card__image">
                                        <img src="<?php echo get_field('image', $term->taxonomy . '_' . $term->term_id); ?>" alt="<?php echo $term->name; ?>">
                                    </div>

                                    <h3 class="o-ttl o-ttl--40 o-ttl--center o-ttl--secondary"><?php echo $term->name; ?></h3>

                                    <?php $description = $term->description; ?>
                                    <?php if(!empty($description)): ?>
                                        <p class="o-ttl o-ttl--18 o-ttl--medium"><?php echo wp_trim_words( $description, 16, '...' ); ?></p>
                                    <?php endif; ?>

                                    <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="o-btn o-btn--primary o-btn--center">Ver Produtos</a>
                                </div>

                            <?php $counter++; endforeach ?>
        
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

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
