<?php
/*
Template Name: Productpage
*/
get_header();
global $wpdb;

$id = $_GET['course_id'];

$get_courseInfo = $wpdb->get_results("SELECT * FROM courses WHERE course_id = $id");

?>
 <div class="container">
 <?php
foreach ($get_courseInfo as $row){
?>
    <button class="backButton" onclick="goBack()">Tillbaka</button> 
     <div class="product-section">
                
                <div class="image-box">
                <img class="course-image" src="<?php echo get_stylesheet_directory_uri() ?><?php echo $row->workImg ?>" alt="<?php echo $row->imgAlt2 ?>">
                </div>
                <div class="info-box">
                    <h1 class="course-name"><?php echo $row->courseName ?></h1>
                    <p><?php echo $row->courseInfo ?></p>
                    <p>Kursen består av <?php echo $row->lessions ?> lektioner som innehåller både teori dagligen på distans och praktisk undervisning! </p>
                    <div class="price">
                        <h2 class="course-price"><?php echo $row->coursePrice ?> kr</h2>
                        <p>Eller delbetala <?php echo round($row->coursePrice / 3) ?> kr/månaden</p>
                    </div>
                </div>
          
                <a href="booking" class="bigButton booking-button">Boka kurs</a>
            </div>
        </div>
<?php
}
get_footer();
?>
