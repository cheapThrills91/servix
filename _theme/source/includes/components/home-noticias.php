<?php
	$noticiashome = array(
		'post_type'=> 'post',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => 3,
		'suppress_filters' => false,
	);

	$arr = get_posts( $noticiashome );
?>

<div class="home-noticias" data-script="HomeNoticiasCarousel">
	<p class="nome-section text-uppercase"><?php echo _e('Notícias', 'servix'); ?></p>

	<div class="swiper-container noticias-carrossel ">

		<div class="swiper-wrapper">

		<?php foreach ( $arr as $post) :  ?>
			<!-- Noticia : BEGIN -->
			<div class="noticias-container swiper-slide">
				<div class="noticia">
					<div class="categoria-container">
						<p class="categoria">
							<?php
								$category = get_the_category();
								if ( $category[0] ) {
									// echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
									echo $category[0]->cat_name;
								}
							?>
						</p>
						<hr>
					</div>
					<div class="noticia-titulo">
						<p class="titulo"><?php echo $post->post_title; ?></p>
					</div>
					<div class="conteudo">
						<p class="chamada">
							<?php
								$content = $post->post_content;
								echo strip_tags(mb_strimwidth( $content, 0, 125, '...' ));
							?>
						</p>
						<a href="<?php echo get_permalink( $post->ID ); ?>" class="leia-mais"> <span class="text">Leia mais</span> <span class="icon icon-arrow-right"></span> </a>
						<ul class="social-list">
							<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php get_the_title(); ?>&summary=<?php the_excerpt(); ?>&source=<?php echo get_home_url(); ?>" target="_blank" class="link">
								<li class="social-icon"><span class="icon icon-linkedin"></span></li>
							</a>
							<a href="https://twitter.com/home?status=<?php the_permalink(); ?>" class="link">
								<li class="social-icon"><span class="icon icon-twitter"></span></li>
							</a>
						</ul>
					</div>
				</div>
				<div class="noticia-imagem">
					<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?php echo $post->post_title; ?>" class="" >
				</div>
			</div>
			<!-- Noticia : END -->
		<?php endforeach; ?>

		</div>
	</div>
	<!-- Pagination -->
	<div class="swiper-pagination orange noticias-swiper-pagination hidden-md hidden-lg"></div>
</div>