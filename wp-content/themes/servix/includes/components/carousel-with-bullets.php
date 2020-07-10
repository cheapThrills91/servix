<?php
	$post = get_queried_object();
	$banners = get_field('banners' , $post);
?>

<div class="carousel-with-bullets" data-script="CarouselBullets">
	<!-- Slider main container -->
	<div class="swiper-container home-carousel-banner">
			<!-- Additional required wrapper -->
			<div class="mouse-icon">
				<a href="javascript:;" id="forHomeSolucoes">
					<img class="img-responsive mouse" src="<?php echo get_template_directory_uri().'/img/mouse-icon.png';?>" alt="Icone Mouse">
					<img class="img-responsive arrow-down" src="<?php echo get_template_directory_uri().'/img/home-icon-down.png';?>" alt="Icone Seta para baixo">
				</a>
			</div>
			<div class="swiper-wrapper">

				<!-- Slides -->
				<?php
					foreach ($banners as $banner) : ?>
						<!-- Slider : BEGIN -->
						<div class="swiper-slide item" style="background-image: url(<?php echo $banner['imagem']['url']; ?>); background-position: top center; background-size: cover;" >
							<div class="item-container">
								<p class="text-light first-line"><?php echo $banner['titulo']; ?></p>
								<p class="text-bold second-line"><?php echo $banner['sub-titulo']; ?></p>
								<a href="<?php echo $banner['url']; ?>" class="btn button white">
									<span class="text"><?php echo _e('Saiba mais', 'servix') ?> </span>
									<span class="icon icon-arrow-right"></span>
									<span class="orange-bar"></span>
								</a>
							</div>
						</div>
						<!-- Slider : END -->
				<?php
					endforeach;
				?>

			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination orange banner-pagination"></div>
	</div>
</div>