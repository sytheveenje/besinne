<section class="call-to-action" id="action">
	<div class="l-container">
		<h1><?php the_field('newsletter_heading', options); ?></h1>
		<p>
			<?php the_field('newsletter_text', options); ?>
		</p>

		<?php echo do_shortcode('[sibwp_form id=1]'); ?>
	</div>
</section>

<section class="footer">
	<div class="l-container">
		<div class="l-half">
			<a href="mailto:hallo@besinne.nl">hallo@besinne.nl</a> / <a href="tel:+31624116985">06 24 11 69 85</a>
		</div>

		<div class="l-half">
			<li><a href="<?php echo home_url(); ?>/over-besinne/">Over besinne</a></li>
		</div>
	</div>
</section>
