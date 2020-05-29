<?php
/*
Template Name: Courses
*/

get_header();

global $wpdb;

$get_courses = $wpdb->get_results("SELECT * FROM courses");

?>
<div class="container">
<?php
foreach ($get_courses as $row){
?>

    <div class="course-box">
        <img src="<?php echo get_stylesheet_directory_uri() ?><?php echo $row->courseImg ?>" alt="<?php echo $row->imgAlt ?>">
        <p><?php echo $row->courseName ?></p>
        <p><?php echo $row->coursePrice ?> kr</p>
        <a href="http://localhost/wordpress/productpage?course_id=<?php echo $row->course_id ?>" class="bigButton">Välj</a>
    </div>

            
<?php
};
get_footer();
?>
