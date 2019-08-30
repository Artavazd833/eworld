<?php

/**

 * Template Name: Tour

 */
 get_header() ?>
<div class='main_wraper'> 
    <section id='tr_tppSec'>
        <div class='tr_topBG_imgWraper'>
                <div class='tr_top_img img1'>
                    <div class='tr_top_etext'><?php the_field('top_sec_left_text');?></div>
                    <img src='<?php echo get_template_directory_uri().'/assets/images/e.png'?>'>
                </div>
                <div class='tr_top_img img2'><img src='<?php echo get_template_directory_uri().'/assets/images/h.png'?>'></div>
                <div class='tr_top_img img3'><img src='<?php echo get_template_directory_uri().'/assets/images/o.png'?>'></div>
                <div class='tr_top_img img4'>
                    <img src='<?php echo get_template_directory_uri().'/assets/images/m.png'?>'>
                    <div class='tr_top_right_mtext'><?php the_field('top_sec_right_text');?></div>
                </div>
                <div class='tr_top_img img5'><img src='<?php echo get_template_directory_uri().'/assets/images/e2.png'?>'></div>
        </div>
        <div class='tr_homrImgWraper'><img src='<?php echo get_template_directory_uri().'/assets/images/home.png'?>'></div>
        <div class='tr_top_content'>
                <div class='tr_top_right_cont'>
                   <div class='tr_top_right_vertical'>
                        <span id='tr_topScrolDown'></span>
                       <span>here we go</span>
                    </div>  
                </div>
        </div>
        
    </section>
    <section id='tr_sec2'>
        <div class='tr_sec2_title'>
            <h1>
                <span><?php the_field('section_2_title1');?></span>
                <span><?php the_field('section_2_title2');?></span>
            </h1>
        </div>
        <div class='tr_sec2_Slider'>
            <div class='tr_tr_sec2_SlideItem'>
                <div class='sec2SlideItemWraper'>
                    <div class='trS2Sld_top'>
                        <div class='trS2Sld_top_left' style='background-image:url()'></div>
                        <div class='trS2Sld_top_right'>
                            <div clas='trS2Sld_top_right_text'></div>
                        </div>
                    </div>
                    <div class='trS2Sld_bottom'>
                        <div class='trS2Sld_top_left'>
                            <div class='trS2Sld_bottom_left_text'></div>
                         </div>
                        <div class='trS2Sld_bottom_right'>
                            <div class='trS2Sld_bottom_right_img'></div>
                            <div class='trS2Sld_bottom_right_text'></div>
                         </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<?php get_footer() ?>






