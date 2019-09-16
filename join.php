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
       <div class='jn_sec2_title'><?php the_field('jn_section_2_title'); ?></div>
       <div class='jn_sec2_Slide'>   
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
   </section>
    <section id='jn_sec3'>
                 <div class='jn_sec3_title'><?php the_field('jn_job_section_top_title'); ?></div>  
                 <div class='jn_sec3_jobSec'>
                        <div class='jn_sec3_jobSec_nav'>
                            <div id='job_all' class='job_type'>All</div>
                            <div id='job_dev' class='job_type'>Development</div>
                            <div id='job_marketing' class='job_type'>Marketing</div>
                            <div id='job_manager' class='job_type'>Managment</div>
                            <div id='job_design'class='job_type' >Design</div>
                        </div>
                        <div class='jn_sec3_jobContainer'>
                            <?php if( have_rows('jn_job_card') ): 
                                while ( have_rows('jn_job_card') ) : the_row();
                                ?>
                                <div class='jobCard_item <?php the_sub_field('jn_select_cat');?>'>
                                    <div class='jobCard_rigt'>
                                        <div class='jobCard_Title'><?php the_sub_field('job_title');?></div>
                                        <div class='jobCard_department'><?php the_sub_field('jn_select_cat');?></div>
                                    </div>
                                    <div class='jobCard_left'>
                                        <div class='jobCard_button' > <a target='_blank' href='<?php the_sub_field('jn_job_link');?>'>View more</a></div>
                                    </div>
                                </div>
                                <?php  endwhile;
                                endif; ?>
                        </div>
                 </div>     
    </section>
    <section id='jn_sec4' style="background-image:url('<?php echo  the_field('jn_form_bg');?>')" >
                        <div class='jn_sec4Wraper'>
                            <div class='jn_sec4_title'>
                                <div><?php the_field('jn_section_4_title1'); ?></div>
                                <div><?php the_field('jn_section_4_title2'); ?></div>
                            </div>
                            <div class='jn_sec4_form'><?php the_field('jn_section_4_form'); ?><?php echo do_shortcode('[contact-form-7 id="354" title="Job Form"]'); ?></div>
                        </div>
    </section>                    
 </div>

<?php get_footer() ?>