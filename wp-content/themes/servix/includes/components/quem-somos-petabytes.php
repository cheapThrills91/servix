<div class="quem-somos-petabytes" data-script="QuemSomosPeta">
	<div class="tooltips top white"></div>
	<div class="row">
		<div class="container">

			<div class="col-xs-6 quantidade">
				<div class="quantidade-container">


					<div class="quantidade-wrapper">
						<div id="semiCircle" class="semi-circle"></div>
						<div class="quantidade-dados">
							<span class="block plus"><?php echo _e('+ de', 'servix'); ?></span>
							<span class="block number"><?php echo get_field('petabytes_vendidos'); ?></span>
							<span class="block text"><?php echo _e('Petabytes <br>vendidos', 'servix'); ?></span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-6 tempo">
				<div class="arrow-container">
					<img src="<?php echo get_template_directory_uri().'/img/big-arrow-right.png' ?>" alt="Seta indicativa para a direita" class="img-responsive">
				</div>
				<div class="tempo-container">
					<div class="tempo-wrapper">
						<div class="tempo-dados">
							<div class="header">
								<span class="ultimos"><?php echo _e('nos últimos', 'servix'); ?></span>
							</div>
							<div class="conteudo">
								<span class="numero"><?php echo get_field('petabytes_anos'); ?></span>
								<span class="duracao"><?php echo _e('anos', 'servix'); ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>