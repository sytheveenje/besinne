<?php TemplateParts::get_template_parts( array( 'template-parts/shared/html-header', 'template-parts/shared/header' ) ); ?>

<section class="blog-content">
    
        <div class="l-container">
          <div class="text">
            <div class="date">
              6 september 2016
            </div>
          </div>

          <?php get_template_part('template-parts/shared/load-flexible-content'); ?>
        
        </div>

</section>

<?php TemplateParts::get_template_parts( array( 'template-parts/shared/footer','template-parts/shared/html-footer' ) ); ?>