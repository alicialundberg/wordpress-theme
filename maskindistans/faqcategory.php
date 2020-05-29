<?php
/*
Template Name: FAQ-category
*/

get_header();

// Not in use for the moment
// global $wpdb;

// $categoryname = $_GET['category_name'];

// $get_faqInfo = $wpdb->get_results("SELECT * FROM faq WHERE category = $categoryname");
// ?>
 <div class="faq-container">
            <button class="backButton" onclick="goBack()">Tillbaka</button> 
            <div class="category-section">
            
                <h1>FAQ Kategori</h1>
                <div class="question-box">
                <!-- Not in use for the moment
                     <?php
                //foreach ($get_faqInfo as $row){
                ?> -->
                    <h2> Frågor och svar kommer snart!</h2>
                    <!-- <h3><?php //echo $row->question ?></h3>
                    <p> <?php // echo $row->answer ?></p> -->
                                    </div> 
               <img src="<?php echo get_stylesheet_directory_uri() ?>/images/forestexcavator.jpg" alt="Yellow  excavator in the forest">
           </div>
         </div>
<?php
// }
get_footer();
?>
