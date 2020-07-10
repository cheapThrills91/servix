<?php
		$post = get_queried_object();
		$logos = get_field('logo_fabricantes' , $post);
		// var_dump($logos);
		// die();
?>

<div class="quem-somos-integrador">
	<div class="tooltips top gray"></div>
	<div class="row">
		<div class="container">

		<div class="col-xs-6 text-center col-md-6 globo-container" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
			<!-- <img src="<?php echo get_template_directory_uri().'/img/globe-gray.png' ?>" alt="Globo com a america latina em destaque" class="img-responsive" /> -->
			<img src="<?php echo get_template_directory_uri().'/img/globe-orange.png' ?>" alt="Globo com a america latina em destaque" class="img-responsive color" />
		</div>
		<div class="col-xs-6 text-center col-md-6 ">
			<p class="description">
				<?php echo _e('Maior Integrador na', 'servix') ; ?>
				<span class="america"> <?php echo _e('América Latina', 'servix');?> </span>
				<span class="fabricantes"> <?php echo _e('dos fabricantes', 'servix'); ?> </span>
			</p>
			<?php $i = 500; foreach ($logos as $logo ) : ?>
				<img src="<?php echo $logo['logo']['url'];?>" alt="<?php echo $logo['logo']['alt']; ?>" class="img-responsive logo" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="<?php echo $i ?>">
			<?php $i = $i + 200; endforeach; ?>
		</div>

		</div>
	</div>
</div>