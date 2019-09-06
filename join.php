<?php
/**
 * Template Name: Join Us
 */
 get_header() ?>
 <div class='jn_main'>
     <section id='top_sec' style="background-image:url('<?php echo  the_field('jn_top_section_background_image');?>')">
        <div class='jn_top_title'><?php the_field('jn_top_title'); ?></div>
     </section>

   <section id='jn_sec2'>
       <div class='jn_sec2_title'><?php the_field('jn_section_2_titlr'); ?></div>
       <div class='jn_sec2_Slide'>
                <div class='jn_sec2'>
                    
                    <div class='jn_sec2_content'>
                        <?php if( have_rows('jn_section_21_slider') ): 
                            while ( have_rows('jn_section_21_slider') ) : the_row();
                            ?>
                        <div class='jn_sec2_item'>
                            <div class='jn_sec2_item_title'><?php the_sub_field('jn_benefit_title');?> </div>
                            <div class='jn_sec2_item_text'> <?php the_sub_field('jn_benefit_desc');?>  </div>
                            <div class='jn_sec2_item_image'><img src="<?php echo  get_sub_field('jn_benefit_img');?>" style='display:none' /> </div>
                        </div> 
                        <?php  endwhile;
                        endif; ?>
                    </div>
                    <div class='jn_sec2_imageholder'></div>
                </div>
       </div>
   </section>
    <section id='jn_sec3'>
                 <div class='jn_sec3_title'><?php the_field('jn_job_section_top_title'); ?></div>  
                 <div class='jn_sec3_jobSec'>
                        <div class='jn_sec3_jobSec_nav'>
                            <div id='job_all'>All</div>
                            <div id='job_dev'>Development</div>
                            <div id='job_marketing'>Marketing</div>
                            <div id='job_manager'>Managment</div>
                            <div id='job_design'>Design</div>
                        </div>
                        <div class='jn_sec3_jobContainer'>
                            <?php if( have_rows('jn_job_card') ): 
                                while ( have_rows('jn_job_card') ) : the_row();
                                ?>
                                <div class='jobCard_item' data-type='<?php the_sub_field('jn_select_cat');?>'>
                                    <div class='jobCard_rigt'>
                                        <div class='jobCard_Title'><?php the_sub_field('job_title');?></div>
                                    </div>
                                    <div class='jobCard_left'>
                                        <div class='jobCard_button' >View more</div>
                                    </div>
                                    <div class='jobCard_description' style='display:none'>
                                        <div class='job_title'><?php the_sub_field('job_title');?></div>
                                        <div class='job_description'><?php the_sub_field('jn_job_description');?></div>
                                    </div>
                                </div>
                                <?php  endwhile;
                                endif; ?>
                        </div>
                 </div>     
    </section>
    <section id='jn_sec4'>
                        <div class='jn_sec4Wraper'>
                            <div class='jn_sec4_title'></div>
                            <div class='jn_sec4_form'></div>
                        </div>
    </section>                    
 </div>

<?php get_footer() ?>