<div class="quem-somos-colaboradores">
	<div class="tooltips top white"></div>
	<div class="row">
		<div class="container">
			<div class="dados-wrapper col-xs-12 col-md-10 col-md-offset-1 col-md-10 col-md-offset-1">
				<div class="colaboradores dados" data-aos="fade-down" data-aos-easing="linear" data-aos-delay="600">
					<span class="block plus"><?php echo _e('+ de', 'servix'); ?></span>
					<span class="block number orange"><?php echo get_field('colaboradores'); ?></span>
					<span class="block text"><?php echo _e('colaboradores', 'servix'); ?></span>
				</div>

				<div class="line orange" data-aos="fade-left" data-aos-easing="ease-in" data-aos-duration="200" data-aos-delay="550">
					<svg height="42" width="300" class="hidden-sm hidden-md hidden-lg">
						<path d="M0 40 L120 40  L150 0 L265 0" fill="none" stroke="orange" stroke-width="2" />
						Desculpe, seu navegador não suporta svg
					</svg>
					<svg height="42" width="400" class="hidden-xs hidden-md hidden-lg">
						<path d="M0 40 L120 40  L150 0 L400 0" fill="none" stroke="orange" stroke-width="2" />
						Desculpe, seu navegador não suporta svg
					</svg>
					<svg height="42" width="400" class="hidden-xs hidden-sm hidden-lg">
						<path d="M0 40 L250 40  L280 0 L400 0" fill="none" stroke="orange" stroke-width="2" />
						Desculpe, seu navegador não suporta svg
					</svg>
					<svg height="42" width="500" class="hidden-xs hidden-sm hidden-md">
						<path d="M0 40 L250 40  L280 0 L500 0" fill="none" stroke="orange" stroke-width="2" />
						Desculpe, seu navegador não suporta svg
					</svg>


				</div>

				<div class="line blue" data-aos="fade-right" data-aos-easing="ease-in" data-aos-duration="200" data-aos-delay="550">
					<svg height="60" width="310" class="hidden-sm hidden-md hidden-lg">
						<path d="M0 0 L150 0  L180 55 L320 55" fill="none" stroke="blue" stroke-width="2" />
						Desculpe, seu navegador não suporta svg
					</svg>
					<svg height="60" width="420" class="hidden-xs hidden-md hidden-lg">
						<path d="M0 0 L250 0  L280 55 L420 55" fill="none" stroke="blue" stroke-width="2" />
						Desculpe, seu navegador não suporta svg
					</svg>
					<svg height="60" width="400" class="hidden-xs hidden-sm hidden-lg">
						<path d="M0 0 L120 0  L150 55 L400 55" fill="none" stroke="blue" stroke-width="2" />
						Desculpe, seu navegador não suporta svg
					</svg>
					<svg height="60" width="500" class="hidden-xs hidden-sm hidden-md">
						<path d="M0 0 L210 0  L240 55 L500 55" fill="none" stroke="blue" stroke-width="2" />
						Desculpe, seu navegador não suporta svg
					</svg>
				</div>

				<div class="image">
					<div class="main-image">
						<img src="<?php echo get_template_directory_uri().'/img/colaboradores.png' ?>" alt="Imagem" class="img-responsive img-people">
					</div>
					<div class="circle orange" data-aos="fade-up-right" data-aos-easing="linear" data-aos-duration="500"></div>
					<div class="circle blue" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="500"></div>
				</div>

				<div class="clientes dados"  data-aos="fade-down" data-aos-easing="linear" data-aos-delay="600">
					<span class="block plus"><?php echo _e('+ de', 'servix'); ?></span>
					<span class="block number blue"><?php echo get_field('colaboradores_em_todo_pais');?></span>
					<span class="block text"><?php echo _e('clientes em<br> todo país', 'servix'); ?></span>
				</div>

			</div>
		</div>
	</div>
</div>