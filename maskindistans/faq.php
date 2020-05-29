<?php
/*
Template Name: FAQ
*/
get_header();

// Not in use for the moment
// global $wpdb;

// $get_courses = $wpdb->get_results("SELECT * FROM faq");

?>
   <div class="container">
             <div class="left-section">
                 <div class="image-section">
                     <img src="<?php echo get_stylesheet_directory_uri() ?>/images/forklift.jpg" alt="Yellow forklift in warehouse">
                 </div>   
             </div>

             <div class="right-section">
            <!-- Not in use for the moment -->
            <!-- <?php
             // foreach ($get_courses as $row){
            ?> -->

                 <div class="faq-categories">
                     <ul>
                        <!-- Not in use for the moment
                            <li><a href="http://localhost/wordpress/productpage?category_name=<?php echo $row->category ?>"><?php echo $row->category ?></a></li> -->
                        <li><a href="FAQ-category">Betalning</a></li>
                        <li><a href="FAQ-category">Kursinformation</a></li>
                        <li><a href="FAQ-category">Jobbgaranti</a></li>
                        <li><a href="FAQ-category">Bemanning</a></li>
                        <li><a href="FAQ-category">Lagar och regler</a></li>
                        <li><a href="FAQ-category">Betalningar</a></li>
                        <li><a href="FAQ-category">Övrigt</a></li>
                        
                     </ul>
                 </div>
             </div>
         </div>
<?php
get_footer();
?>
