<!DOCTYPE html>
<html lang="sv">
    <head>
        <title>MaskinDistans</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
        <script src="https://kit.fontawesome.com/3ee3b14710.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
        <?php wp_head(); ?>
       
    </head>
    <body>
        <header>
            <div class="top-nav">
                <div id="weglot_here"></div>
            </div>
          <div class="header-image">
         
          <?php /* Hämtar loggan som läggs till i admin desktop */
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>
            <div class="logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo $image[0];?>"></a>
            </div>
        
                <label for="show-menu" class="show-menu"><i class="fa fa-bars"></i></label>
            
                <input type="checkbox" id="show-menu" role="button">
                <nav id="main-menu">
                    <?php /* Hämtar in meny som läggs till i admin desktop */
                    wp_nav_menu(array('theme_location' => 'main-nav'));
                
                    ?>  
                </nav>
                <div class="shopping-cart">
                    <a href="cart"  id="shopcart" ><i class="fa fa-shopping-cart"></i></a> 
                </div>
          
  
            
            
        </div>
         </header>
         
