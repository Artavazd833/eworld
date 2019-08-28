<?php get_header() ?>

<div class='main_content' id="fullpage">

<section id="home_sec1">

      <div class="home_topContent">

         <div class="top_subtitl home_subtitle">

            <span><?php the_field('top_sec_subtitle'); ?></span>

         </div>

         <div class="top_title home_title title">

            <h1><?php the_field('top_title'); ?></h1>

         </div>

         <div class="home_toptext">

            <?php the_field('top_sec_text'); ?> 

         </div>

      </div>

   </section>



   <section id="home_sec2">

      <div class='sec2_title title'>

        <h2><?php the_field('sec2_title'); ?></h2>

      </div>

      <div class='sec2_text'>

         <?php the_field('sec2_text'); ?> 

      </div>



      <div class='sec2_imgSec'>

         <div class='sec2_left'>

            

            <?php

             if( have_rows('sec2_left_item') ):

               while( have_rows('sec2_left_item') ) : the_row(); 

            ?>

               <div class='sec2Left1'>

                  <div class='sec2LeftImg'>

                     <img src="<?php echo  get_sub_field('sec2_left_image_1');?>" /> 

                  </div>

                  <div class='sec2LeftText'>

                     <?php the_sub_field('sec2_left_text1'); ?>

                  </div>

               </div>

               <div class='sec2Left2'>

                  <div class='sec2LeftImg'>

                     <img src="<?php echo  get_sub_field('sec2_left_image_2');?>" />

                  </div>

                  <div class='sec2LeftText'>

                     <?php the_sub_field('sec2_left_text2'); ?>

                  </div>

               </div>

            <?php endwhile; endif;?>

         </div>



         <div class='sec2Img'>

            <?php $image1 = get_field('section_2_image');

               $size = 'full'; 

               if( $image1 ) {echo wp_get_attachment_image( $image1, $size );}

            ?>

         </div>

         <div class='sec2_right'>

            <?php

             if( have_rows('sec2_right_items') ):

               while( have_rows('sec2_right_items') ) : the_row(); 

            ?>

               <div class='sec2Right1'>

                  <div class='sec2RightImg'>

                     <img src="<?php echo  get_sub_field('sec2_right_image_1');?>" /> 

                  </div>

                  <div class='sec2RightText'>

                     <?php the_sub_field('sec2_right_text1'); ?>

                  </div>

               </div>

               <div class='sec2Right2'>

                  <div class='sec2RightImg'>

                     <img src="<?php echo  get_sub_field('sec2_right_image_2');?>" />

                  </div>

                  <div class='sec2RightText'>

                     <?php the_sub_field('sec2_right_text2'); ?>

                  </div>

               </div>

            <?php endwhile; endif;?>

         </div>

      </div>

   </section>



   <section id="home_sec3">

      <div class='sec3_container'>

         <div class='sec3_left'>

               <div class='sec3_left_title title'><h2> <?php the_field('section_3_title'); ?> </h2></div>

               <div class='sec3_lrft_text'> <?php the_field('section_3_text'); ?> </div>

               <div class='sec3_left_cta'><a href='<?php the_field('sec3_button_link'); ?> '> <?php the_field('sec3_button_label'); ?> </a> </div>

         </div>      

         <div class='sec3_right'>

               <div class='sec3_slider'>

                  <div class='sec3_slide_imageholder'></div>



                  <div class='sec3_slide_content'>

                     <?php if( have_rows('sec3_slider') ): 

                         while ( have_rows('sec3_slider') ) : the_row();

                        ?>

                     <div class='sec3_slide_item'>

                        <div class='sec3_slide_item_title'><?php the_sub_field('sec3_slide_title');?> </div>

                        <div class='sec3_slide_item_text'> <?php the_sub_field('sec3_slide_text');?>  </div>

                        <div class='sec3_slide_item_image'><img src="<?php echo  get_sub_field('sec3_slide_image');?>" /> </div>

                     </div> 



                 <?php  endwhile;

                  endif; ?>



                  </div>

               </div>



         </div>

      </div>

   </section>



   <section id="home_sec4">

            <div class='sec4_container'>

                  <div class='sec4_top'>

                     <div class='sec4_top_left'>

                        <div class='sec4_top_left_title title'><h2> <?php the_field('section_4_title'); ?> </h2></div>

                        <div class='sec4_top_left_text'> <?php the_field('section_4_text'); ?> </div>

                     </div>

                     <div class='sec4_top_right'>

                           <?php if( have_rows('sec4_slidr') ): 

                           while ( have_rows('sec4_slidr') ) : the_row();

                           ?>

                              <div class='hsec4_slidr_item'>

                                 <div class='hsec4_slidr_image'><img src="<?php echo  get_sub_field('sec4_slider_image');?>"/></div>

                                 <div class='hsec4_slidr_logo'><img src="<?php echo  get_sub_field('sec4_slider_logo');?>"/></div>

                              </div>

                           

                           <?php  endwhile;

                           endif; ?>

                     </div>

                  </div>
            </div>

            <div class='sec4_bottom'>

                     <div class='hsec4_slidr_logo_holder'></div>

            </div>

   </section>

   <section id="home_sec5">

      <div class='hsec5_container'>

      <div class='hsec5_right'>

               <div class='sec3_left_title title'><h2> <?php the_field('section_5_title'); ?> </h2></div>

               <div class='sec3_lrft_text'> <?php the_field('section_5_text'); ?> </div>

               <div class='sec3_left_cta'><a href='<?php the_field('sec5_button_link'); ?> '> <?php the_field('sec5_button_label'); ?> </a> </div>

            </div>

            <div class='hsec5_left'>

               <div class='hvideo_container'>

                  <div class='iframe_wraper'>

                     <?php the_field('sec5_video_iframe_field'); ?>

                  </div>

               </div>

               

               <div class='hvide_ovly_img'>

                  <?php if( get_field('video_overlay_image') ): ?>

                     <img src="<?php the_field('video_overlay_image'); ?>" />

                  <?php endif; ?>

                  <div id='hvideo_play' style='background-image:url(<?php echo get_template_directory_uri().'/assets/images/video-play.png'?>)'></div>

               </div>

            </div>

      </div>

            

   </section>

</div>

<div id='scroll_bar'><div>scroll<span></span></div></div>

<div id='social_icons'>
   <div id='soc_tw'></div>
   <div id='soc_fb'></div>
   <div id='soc_ig'></div>
</div>

<?php get_footer() ?>

