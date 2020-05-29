<?php
/*
Template Name: Booking
*/
get_header();

?>
 <div class="container">

    <button class="backButton" onclick="goBack()">Tillbaka</button> 
   
      <div class="main">


            <?php $content = get_post()->post_content;
            if(empty($content)):?>
                        
   
            <?php else:?>
 
 
             <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
             <?php the_content(); ?>
 
            <?php endwhile; else: endif; ?>
 
 
            <?php endif;?>
            
                <a href="cart" class="bigButton">Till varukorg</a>
    
        </div>
</div>
        
<?php

get_footer();
?>
