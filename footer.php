
            <div class='footer' id='footer'>
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'footer-menu', 
                                'container_class' => 'footer_menu') ); 
                        ?>
            
            <?php wp_footer(); ?>
        </div>
    </body>
</html>