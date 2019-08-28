<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
            <?php wp_head(); ?>
        </head>
        <body>
         <div class='main_navigation'>
             <div class='logo_wraper'>
                <div class=logo>
                    <a href='<?php echo home_url();?>'><img src="<?php echo get_template_directory_uri().'/logo.png';?>" alt="Logo"></a>
                </div>
                    <div class="menu_hamburger" id='menu_open'>
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
             </div>
            <div class='nav_wraper'>
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'header-menu', 
                        'container_class' => 'nav_menu' ) ); 
                ?>
            </div>
           
         </div> 
       
