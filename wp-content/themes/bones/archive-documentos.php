<?php get_header(); ?>

	<main class="c-main">

        <?php $banner = get_field('banner', 91); ?>
		<section class="c-banner c-banner--page js-animated-start" style="background: url('<?php echo $banner['image'] ?>');">
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

		<?php if( have_posts() ): ?> 
			<div class="c-bg">
				<div class="o-wrapper o-wrapper--1050 js-animated-start">

                    <p class="o-ttl--18 o-ttl--center appear-in appear-in-top appear-in-time-2">Encontre aqui nosso cadastro, licenças, certificados e demais documentos de nosso portifólio de produtos e soluções.</p>
                    
                    <div class="c-documents">
                        <?php $counter = 1; while( have_posts() ): the_post(); ?>
    
                            <div class="c-documents__item appear-in appear-in-top appear-in-time-<?php echo $counter; ?>">
                                <p class="o-ttl--18 o-ttl--medium"><?php the_title(); ?></p>
                                
                                <?php $file = get_field('file'); ?>
    
                                <?php if(empty($file)): ?>
                                    <span class="o-btn o-btn--primary o-btn--look">Arquivo Indisponível</span>
                                <?php else: ?>
                                    <a href="<?php echo $file; ?>" class="o-btn o-btn--primary" download>Download</a>
                                <?php endif; ?>
                            </div>
                                        
                        <?php $counter++; endwhile; ?>
                    </div>
	
					<?php bones_page_navi(); ?>
		
				</div>
			</div>
		<?php else : ?>

			<div class="c-not-found">
				<div class="o-wrapper o-wrapper--1280">
					<h2 class="o-ttl o-ttl--40 o-ttl--extrabold o-ttl--center">Nenhum post encontrado.</h2>

					<div class="o-btn__center">
						<a href="<?php echo home_url(); ?>" class="o-btn o-btn--primary">Voltar para home</a>
					</div>
				</div>
			</div>							

		<?php endif; ?>

	</main>

<?php get_footer(); ?>
