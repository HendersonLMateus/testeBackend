
<?php 
if(has_post_thumbnail()) :
    the_post_thumbnail('large', array('class' =>'img-fluid'));

endif; ?>

<h1><?php the_title()?></h1>

<p>Autor: <?php the_author(); ?> | Data: <?php the_time('d/m/y'); ?></p>


<div>
    <?php the_content() ?>      
</div>

<?php

    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

?>
