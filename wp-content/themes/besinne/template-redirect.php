<?php

//Template name: Doorverwijzpagina

?>

<?php TemplateParts::get_template_parts( array( 'template-parts/shared/html-header', 'template-parts/shared/header' ) ); ?>

<meta http-equiv="refresh" content="0; url=<?php the_field('url'); ?>" />

<?php TemplateParts::get_template_parts( array( 'template-parts/shared/footer','template-parts/shared/html-footer' ) ); ?>