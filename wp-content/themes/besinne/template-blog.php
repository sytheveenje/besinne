<?php

// Template name: Blog

?>

<?php TemplateParts::get_template_parts( array( 'template-parts/shared/html-header', 'template-parts/shared/header' ) ); ?>

<section class="hero-text">
    <div class="l-container">
        <h1><?php the_field('tagline'); ?></h1>

        <p>
            <?php the_field('intro'); ?>
        </p>
    </div>
</section>

<section class="blogs">

<?php 

  $posts = get_posts(array(
  'posts_per_page'  => -1,
  'post_type'     => 'post'
  ));

  if( $posts ):
    foreach( $posts as $post ):
    setup_postdata( $post );
    ?>
    <article class="blog-item">
        <div class="l-container">
           <div class="date"><?php the_date(); ?></div>
       
           <div class="blog-item--content">
               <h2><?php the_title(); ?></h2>
               <p>
                   <?php the_field('summary'); ?>
               </p>
               <a href="<?php the_permalink(); ?>">Lees deze blog</a>
           </div>
        </div>
   </article>

  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

</section>

<?php TemplateParts::get_template_parts( array( 'template-parts/shared/footer','template-parts/shared/html-footer' ) ); ?>