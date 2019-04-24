<?php if( have_rows('content_blocks') ): while ( have_rows('content_blocks') ) : the_row(); ?>

       <?php if( get_row_layout() == 'text' ): ?>
        
        <div class="text">
            <?php if(get_sub_field('heading')) : ?>
                <h2><?php the_sub_field('heading'); ?></h2>
            <?php endif; ?>
            <p>
                <?php the_sub_field('text'); ?>
            </p>
        </div>

        <?php elseif( get_row_layout() == 'image' ): ?>
        <?php

            $image = get_sub_field('image'); 
            $image = $image['sizes']['content-image']; 

        ?>
        <img src="<?php echo $image; ?>" alt="">

<?php endif; endwhile; endif; ?>