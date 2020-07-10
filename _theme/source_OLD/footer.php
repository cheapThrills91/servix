<?php
		$footer = get_posts(
			array(
			'post_type'=> 'page',
			'meta_key' => '_wp_page_template',
			'meta_value' => 'page-home.php')
		);

		$enderecos = get_field('enderecos' , $footer[0]);
?>

<footer id="footer" class="footer footer-general">
    <div class="footer-container">
			<div class="enderecos">
				<div class="enderecos-container">
					<p class="text-bold footer-title"> <span class="icon icon-pin"></span> <?php echo _e('Endereços', 'servix');?></p>
					<div class="lista-enderecos row">
						<?php
							$count = 1;
							foreach ( $enderecos as $endereco):?>
								<div class="endereco col-xs-12 col-md-3">
									<p class="text-uppercase text-bold cidade">
										<?php echo $endereco['nome_da_unidade']; ?>
									</p>
									<p class="text-semibold">
										<?php	echo nl2br($endereco['endereco']); ?>
										<?php if($endereco['telefone']): ?>
											T <a href="<?php echo 'tel:'.$endereco['telefone']; ?>" class="click-to-call"><?php echo $endereco['telefone']; ?></a> <br>
										<?php endif; ?>
									</p>
									<hr>
								</div>
								<?php
									if( $count == 4 ) {
										echo '<hr class="hidde-xs hidden-sm hr-large">';
										$count = 5;
									}
								?>
						<?php
							$count++;
							endforeach;
						?>
					</div>
				</div>
			</div>
			<div class="social-media">
				<div class="social-container">
					<ul class="social-list">
						<div class="social-item">
							<a href="https://www.linkedin.com/company/servix-inform-tica-ltda./" target="_blank" rel="noopener" title="Acesse nosso Linkedin"> <span class="icon icon-linkedin"></span> </a>
						</div>
						<div class="social-item">
							<a href="https://twitter.com/Servix1" target="_blank" rel="noopener" title="Acesse nosso Twitter"> <span class="icon icon-twitter"></span> </a>
						</div>
					</ul>
				</div>
			</div>
		</div>
</footer>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
<!-- LIBS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/progressbar.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/numscroller-1.0.js"></script>

<!-- Custom JS -->
<script rel="text/javascript" src="<?php echo get_template_directory_uri() . '/js/main.min.js' ?>"></script>

<script>
	$(function(){
		$('.selectpicker').selectpicker();
	});
</script>

</body>

</html>