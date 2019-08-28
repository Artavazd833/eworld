<?php
/**
 * Template Name: Contac Us
 */
 get_header() ?>

 <div class='cu_main'>
    <div class='cu_left'>
        <div class='cu_title'><?php the_field('contact_us_title'); ?> </div>
        <div class='cu_form'><?php the_field('contact_us__form'); ?> </div>
    </div>
    <div class='cu_right'>
        <div class='cu_add_item'>
            <div class='cu_add_icon1'>
                <svg xmlns="http://www.w3.org/2000/svg" id="Group_23" width="56.052" height="82.939" data-name="Group 23" viewBox="0 0 56.052 82.939">
                    <g id="noun_Location_158233">
                        <path id="Path_46" d="M51.623 80.794a2.074 2.074 0 0 1-1.3-.457C35.8 68.671 29.169 57.776 26.162 50.681a27.942 27.942 0 0 1-1.875-5.52c-.121-.51-.176-.826-.193-.932a28.025 28.025 0 1 1 55.058-.006c-.016.1-.071.417-.194.938a27.94 27.94 0 0 1-1.873 5.52c-3.007 7.1-9.639 17.991-24.162 29.655a2.072 2.072 0 0 1-1.3.458zM28.194 43.588a11.402 11.402 0 0 0 .138.648 23.681 23.681 0 0 0 1.609 4.733 1.2 1.2 0 0 1 .028.063c2.726 6.443 8.688 16.279 21.653 27.009 12.965-10.73 18.928-20.564 21.653-27.009a.867.867 0 0 1 .028-.063 23.691 23.691 0 0 0 1.609-4.734c0-.007 0-.016.005-.023.08-.333.119-.547.133-.621l.017-.1a23.876 23.876 0 1 0-46.888 0zm23.762 12.028a17.076 17.076 0 1 1 9.549-31.234 2.075 2.075 0 1 1-2.324 3.438 12.9 12.9 0 1 0 4.672 5.654 2.075 2.075 0 0 1 3.817-1.627 17.084 17.084 0 0 1-15.714 23.769zm24.725 28.062c0-2.291-1.51-5.521-8.707-7.9a2.074 2.074 0 0 0-1.3 3.939c4.026 1.331 5.86 2.986 5.86 3.959 0 2.052-7.38 6.044-20.909 6.044s-20.909-3.993-20.909-6.044c0-.947 1.762-2.566 5.631-3.883a2.074 2.074 0 0 0-1.337-3.927c-6.978 2.376-8.443 5.559-8.443 7.811 0 6.693 12.606 10.193 25.058 10.193s25.056-3.5 25.056-10.192z" class="cls-1" data-name="Path 46" transform="translate(-23.596 -10.932)"/>
                    </g>
                    <path id="Path_50" d="M24.9 5.772l7.89 10.492s1.555 11.542 1.425 13.272-2.073 7.884-2.2 9.039-11.274 20.968-11.4 21.739-3.254 13.319-8.4 4.622S-.4 41.764.017 25.529s12-23.51 12-23.51z" class="cls-2" data-name="Path 50" transform="rotate(5.13 21.967 240.772)"/>
                </svg>
            </div>

            <div class='cu_add_texts'>
                <div class='cu_address_title'><?php the_field('cu_address'); ?> </div>
                <div class='cu_address_text'><?php the_field('cu_address_box'); ?></div>

                <div class='cu_add_map'>
                    <?php 
                        $link = get_field('google_maps_link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';?>
                            <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
           
        </div>
        <div class='cu_add_item'>
            <div class='cu_add_icon1'>
                <svg xmlns="http://www.w3.org/2000/svg" id="Group_22" width="43.037" height="83" data-name="Group 22" viewBox="0 0 43.037 83">
                    <path id="Path_49" d="M1207.431 16571.516s-4.61-2.375-5.169-2.1-22.493 0-22.493 0v79.916h26.545l3.213-3.492v-73.068z" class="cls-1" data-name="Path 49" transform="translate(-1168.027 -16568.051)"/>
                    <g id="noun_Cell_Phone_2812249" data-name="noun_Cell Phone_2812249">
                        <g id="Layer_2" data-name="Layer 2">
                            <path id="Path_47" d="M53.352 5H25.685A7.685 7.685 0 0 0 18 12.685v67.63A7.685 7.685 0 0 0 25.685 88h27.667a7.685 7.685 0 0 0 7.685-7.685v-67.63A7.685 7.685 0 0 0 53.352 5zm-32.278 9.222h12.635l1.2 4.98a1.537 1.537 0 0 0 1.537 1.168h6.148a1.537 1.537 0 0 0 1.536-1.17l1.2-4.98h12.633v55.336H21.074zm4.611-6.148h27.667a4.611 4.611 0 0 1 4.334 3.074H43.715l-.277.108-.231.154a1.184 1.184 0 0 0-.384.43 1.536 1.536 0 0 0-.138.292v.108l-1.291 5.06h-3.75l-1.2-4.98v-.108a2.013 2.013 0 0 0-.292-.523 1.537 1.537 0 0 0-.215-.2l-.231-.154-.277-.092h-.307l-.215-.092H21.351a4.611 4.611 0 0 1 4.334-3.074zm27.667 76.852H25.685a4.611 4.611 0 0 1-4.611-4.611V72.63h36.889v7.685a4.611 4.611 0 0 1-4.611 4.611z" class="cls-2" data-name="Path 47" transform="translate(-18 -5)"/>
                            <path id="Path_48" d="M33.611 50a4.611 4.611 0 1 0 4.611 4.611A4.611 4.611 0 0 0 33.611 50zm0 6.148a1.537 1.537 0 1 1 1.537-1.537 1.537 1.537 0 0 1-1.537 1.537z" class="cls-2" data-name="Path 48" transform="translate(-12.093 19.167)"/>
                        </g>
                    </g>
                </svg>
            </div>

            <div class='cu_add_texts'>
                <div class='cu_address_title'><?php the_field('call_number'); ?> </div>
                <div class='cu_address_text'><?php the_field('numbers_box'); ?></div>
            </div>
           
        </div>
    </div>
    </div>
 </div>
<?php get_footer() ?>

