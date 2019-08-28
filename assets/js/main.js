jQuery(function($){

    $(document).ready(function(){

        $('#menu_open').click(function(){

            $(this).toggleClass('change');

            $('.nav_wraper').toggleClass('open');

        })

        $('.sec3_slide_item').first().addClass('active_hs3');

        var bgImage = $('.active_hs3').find('.sec3_slide_item_image img').attr('src');

        $('.sec3_slide_imageholder').css('background-image',`url(${bgImage})`);

        $('.sec3_slide_item').each(function(){

            $(this).click(function(){

                $('.sec3_slide_item').removeClass('active_hs3');

                $(this).addClass('active_hs3');

                var bgImageNew =   $(this).find('.sec3_slide_item_image img').attr('src');

                $('.sec3_slide_imageholder').css('background-image',`url(${bgImageNew})`);

            })

        })

        $('.hsec4_slidr_item').each(function(){

           $(this).find('.hsec4_slidr_logo img').appendTo( ".hsec4_slidr_logo_holder" );

        })



        $( "#hvideo_play" ).click(function(e) {

            $('.hvideo_container').addClass("video_open");

            $('.hvide_ovly_img').addClass('hidden');

            $('.hsec5_right').addClass('hidden');

            $('body').addClass('videBg');

            $('.hsec5_left').addClass('fullVideo');

            e.stopPropagation();

          });

          

           $('body').click(function(){

            $('.hvideo_container').removeClass("video_open");

            $('.hvide_ovly_img').removeClass('hidden');

            $('.hsec5_right').removeClass('hidden');

            $('body').removeClass('videBg');

            $('.hsec5_left').removeClass('fullVideo');

          });

          $('#cont_quest option:first').attr('disabled', 'disabled');

    })

        var lastScrollTop = 0;

        window.addEventListener("scroll", function(){ 

        var st = window.pageYOffset || document.documentElement.scrollTop; 

        if (st > lastScrollTop){

         
        } else {

        console.log('up')

        }

        lastScrollTop = st <= 0 ? 0 : st; 

        }, false);

})

