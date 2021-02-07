<!doctype html>
<html>
    <header></header>
    <body>
        <h1><?php bloginfo('name');?></h1>
        <h2><?php bloginfo('description');?></h2>
    
        <?php
            if(have_posts()):
                while(have_posts()):
                    the_post();

                    get_template_part('post-default');
        ?>

        <?php
                endwhile;
            endif;
        ?>   
        
    </body>
</html>
