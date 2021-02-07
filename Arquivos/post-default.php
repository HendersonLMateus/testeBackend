<h3><a href="<?php the_permalink()?>"> <?php the_title()?> </a> </h3>

<div>
    <?php the_excerpt() ?>      
</div>

<?php 
if(has_post_thumbnail()) :
    the_post_thumbnail('medium', array('class' =>'img-fluid'));

endif; ?>

<p><a href=" <?php the_permalink(); ?>"> VER MAIS </a></p>