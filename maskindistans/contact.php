<?php
/*
Template Name: Contact
*/

get_header();
?>
  <div class="contact-container">
            <div class="left-section">
                <div class="adress-container">
                    <h3>Adress</h3>
                    <p>Västerhaninge/Stockholm</p>
    
                    <!-- <h3>Telefon</h3>
                    <p>123 456 789</p> -->
    
                    <h3>E-post</h3>
                    <a href= "mailto: info@maskindistans.se">info@maskindistans.se</a>
                </div>
    
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/loader.jpg" alt="yellow wheel loader">
             </div>
    
             <div class="right-section">
                 <h1>Kontakta oss</h1>
                 <?php
                // Hämtar in kontaktformulär 
                    if (have_posts() ) {
                    while (have_posts() ) {
                        the_post();
                        the_content();
                    }
                    }
                ?>
             </div>
         </div>
<?php
get_footer();
?>
