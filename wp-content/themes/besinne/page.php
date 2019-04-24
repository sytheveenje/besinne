<?php TemplateParts::get_template_parts( array( 'template-parts/shared/html-header', 'template-parts/shared/header' ) ); ?>

<section class="hero-text">
    <div class="l-container">
        <h1><?php the_field('tagline'); ?></h1>

        <p>
            <?php the_field('intro_text'); ?> 
        </p>
    </div>
</section>

<section class="text-blocks text-blocks--no-line">
    <div class="l-container">
        <?php if( have_rows('general_info') ): ?>
            <?php $i = 0; ?>
            <?php while ( have_rows('general_info') ) : the_row(); ?>
                
            <?php if ($i % 2 == 0): ?>
            <div class="c-text-block l-first">
            <?php else : ?>
            <div class="c-text-block">
            <?php endif; ?>
                <h3><?php the_sub_field('heading'); ?></h3>
                <p>
                    <?php the_sub_field('tekst'); ?>
                </p>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
        <?php endif; ?>
       

    </div>  
</section>

<section class="text-blocks">
    <div class="l-container">
        <h2>Tarieven</h2>
        <?php if( have_rows('rates') ): ?>
            <?php $i = 0; ?>
            <?php while ( have_rows('rates') ) : the_row(); ?>
                
            <?php if ($i % 2 == 0): ?>
            <div class="c-text-block l-first">
            <?php else : ?>
            <div class="c-text-block">
            <?php endif; ?>
                <h3><?php the_sub_field('heading'); ?></h3>
                <p>
                    <?php the_sub_field('tekst'); ?>
                </p>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>  
</section>

<section class="text-blocks">
    <div class="l-container">
        <h2>Algemene voorwaarden</h2>
        <?php if( have_rows('terms') ): ?>
            <?php $i = 0; ?>
            <?php while ( have_rows('terms') ) : the_row(); ?>
                
            <?php if ($i % 2 == 0): ?>
            <div class="c-text-block l-first">
            <?php else : ?>
            <div class="c-text-block">
            <?php endif; ?>
                <h3><?php the_sub_field('heading'); ?></h3>
                <p>
                    <?php the_sub_field('tekst'); ?>
                </p>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>  
</section>

<?php TemplateParts::get_template_parts( array( 'template-parts/shared/footer','template-parts/shared/html-footer' ) ); ?>