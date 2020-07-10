<div class="share">
	<p class="share-title"><?php echo _e('Compartilhe', 'servix') ?>:</p>
	<ul class="social-list">
		<li class="social-item">
			<a href="https://twitter.com/home?status=<?php echo the_permalink(); ?>" target="_blank" rel="noopener">
				<img src="<?php echo get_template_directory_uri().'/img/icone-twitter.png' ?>" alt="Icone twitter">
			</a>
		</li>
		<li class="social-item">
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank" rel="noopener">
				<img src="<?php echo get_template_directory_uri().'/img/icone-facebook.png' ?>" alt="Icone facebook">
			</a>
		</li>
		<li class="social-item">
			<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_permalink(); ?>&title=<?php echo get_the_title(); ?>&summary=<?php echo the_excerpt(); ?>&source=<?php echo get_home_url(); ?>" target="_blank" rel="noopener">
				<img src="<?php echo get_template_directory_uri().'/img/icone-linkedin.png' ?>" alt="Icone linkedin">
			</a>
		</li>
		<li class="social-item">
			<a href="whatsapp://send?text=<?php echo the_permalink(); ?>" target="_blank" rel="noopener">
				<img src="<?php echo get_template_directory_uri().'/img/icone-whatsapp.png' ?>" alt="Icone whatsapp">
			</a>
		</li>
	</ul>
</div>