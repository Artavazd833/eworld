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
 <span class='spitak'></span>
   </section>



   <section id="home_sec2" >

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
            <img src="<?php echo the_field('section_2_image');?>" >
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
      <span class='sev'></span>
   </section>



   <section id="home_sec3" class='spitak'>

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
      <span class='spitak'></span>
   </section>



   <section id="home_sec4" >
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
                              </div>
                           <?php  endwhile;
                           endif; ?>
                     </div>
                  </div>
            </div>
            <div class='sec4_bottom'>
                     <div class='hsec4_slidr_logo_holder'>
                     <?php if( have_rows('sec4_slidr') ): 
                        while ( have_rows('sec4_slidr') ) : the_row();
                        ?>
                        <div class='s4Slide_log'>
                           <img src="<?php echo  get_sub_field('sec4_slider_logo');?>"/>
                        </div>
                     <?php  endwhile; 
                     endif; ?>
                     </div>
            </div>
            <span class='sev'></span>
   </section>

   <section id="home_sec5" >

      <div class='hsec5_container'>

      <div class='hsec5_right'>

               <div class='sec3_left_title title'><h2> <?php the_field('section_5_title'); ?> </h2></div>

               <div class='sec3_lrft_text'> <?php the_field('section_5_text'); ?> </div>

               <div class='sec3_left_cta'><a href='<?php the_field('sec5_button_link'); ?> '> <?php the_field('sec5_button_label'); ?> </a> </div>

            </div>

            <div class='hsec5_left'>

               <div class='hvideo_container'>
                  <div id='hvide_close'>&times;</div>
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

      <span class='sev'></span>        
   
   </section>

</div>

<div id='scroll_bar'><div>scroll<span></span></div></div>

<div id='social_icons'>
   <div id='soc_tw'>
   <svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width='20px' class="twitter">
   <path fill="#fff" d="M459.37 151.716c.325 4.548.325 9.097.325 
   13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 
   16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772
   6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969
   7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 
   51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934
   104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32
   66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122
    60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" class=""></path></svg>
   </div>
   <div id='soc_fb'>
   <svg  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width='14px'>
<path fill="#fff" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 
12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08
124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
 </svg>
   </div>
   <div id='soc_ig'>
   <svg   role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width='20px'>
    <path fill="#fff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 
    114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 
    0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7
    74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8
    26.8-26.8 26.8 12 26.8 26.8zm76.1
    27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9
    0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9
    67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2
    26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6
    42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 
    9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 
    29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
</svg>
   </div>
</div>

<?php get_footer() ?>

