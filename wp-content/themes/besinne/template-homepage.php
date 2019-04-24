<?php

// Template name: Homepage

?>

<?php TemplateParts::get_template_parts( array( 'template-parts/shared/html-header', 'template-parts/shared/header' ) ); ?>

<section class="hero-text">
	<div class="l-container">
		<h1><?php the_field('tagline'); ?></h1>

		<p>
			<?php the_field('intro_text'); ?>
		</p>
		<a href="#action" class="btn"><?php the_field('button_text'); ?></a>
	</div>
</section>

<section class="process">

	<div class="step">
		
		<div class="image-left">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/doen.jpg" alt="" />
		</div>

		<div class="right step-text">
			<div class="l-container">
				<h1>Eerst doen</h1>
				<p>
					<?php the_field('step1'); ?>
				</p>
			</div>
		</div>
	</div>

	<div class="step">
		
		<div class="image-right">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/voelen.jpg" alt="" />
		</div>

		<div class="left step-text">
			<div class="l-container">
				<h1>Dan voelen</h1>
				<p>
					<?php the_field('step2'); ?>
				</p>
			</div>
		</div>

	</div>

	<div class="step">
		
		<div class="image-left">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/bezinnen.jpg" alt="" />
		</div>

		<div class="right step-text">
			<div class="l-container">
				<h1>Tijd om te bezinnen</h1>
				<p>
					<?php the_field('step3'); ?>
				</p>
			</div>
		</div>
	</div>

	<div class="step">
		
		<div class="image-right">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/plan.jpg" alt="" />
		</div>

		<div class="left step-text">
			<div class="l-container">
				<h1>Veranderen begint met een plan</h1>
				<p>
					<?php the_field('step4'); ?>
				</p>
			</div>
		</div>

	</div>


</section>

<section class="about">
	<div class="l-container">
		<div class="profile-image">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/folly.jpg" alt="">
		</div>
		<h1><?php the_field('about_heading'); ?></h1>

<p><?php the_field('about_text'); ?></p>
	</div>
</section>

<?php TemplateParts::get_template_parts( array( 'template-parts/shared/footer','template-parts/shared/html-footer' ) ); ?>
