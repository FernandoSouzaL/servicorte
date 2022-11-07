<?php
/*
 Template Name: Produtos
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

        <div class="c-bg js-animated-start">
            <div class="o-wrapper o-wrapper--1400">
                <div class="o-grid o-grid__col-3 o-grid__gap-40">
                    <?php 
                        $args = array(
                            'post_type' => 'categorias',
                            'order'     => 'ASC',
                            'orderby'   => 'title',
                        );
            
                        $query = new WP_Query( $args );
                        
                        $counter = 1; 
                        
                        while( $query->have_posts() ): $query->the_post();
                    ?>
                        
                        <div class="c-card appear-in appear-in-top appear-in-time-<?php echo $counter; ?>">
                            <div class="c-card__image">
                                <img src="<?php echo get_field('image'); ?>" alt="<?php the_title(); ?>">
                            </div>

                            <h3 class="o-ttl o-ttl--40 o-ttl--center o-ttl--secondary"><?php the_title(); ?></h3>

                            <?php $description = get_field('description'); ?>
                            <p class="o-ttl o-ttl--18 o-ttl--medium"><?php echo wp_trim_words( $description, 16, '...' ); ?></p>

                            <a href="<?php echo get_permalink(); ?>" class="o-btn o-btn--primary o-btn--center">Saiba mais</a>
                        </div>
            
                    <?php $counter++; endwhile; ?>
                </div>
            </div>
        </div>

	</main>

 <?php get_footer(); ?>
