<?php

while(have_posts()){
    the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php
}

?>


<p>Hi, my name is <?php echo $name[2]?></p>
