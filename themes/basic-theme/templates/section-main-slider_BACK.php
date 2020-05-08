<?php
$is_mobile  = wp_is_mobile();
$responsive = $is_mobile ? 'mobile' : 'desktop';
if ( have_rows( '_sogo_main_sliders_' . $responsive ) ): ?>
    <section class="main-slider-wrapper" <?php echo sogo_print_bg( array( 'url' => get_field( '_sogo_main_slider_bg' ), 'position' => get_field( '_sogo_main_slider_bg_position' ) ) ) ?>>
        <div class="js-main-slider py-3">
			<?php while ( have_rows( '_sogo_main_sliders_' . $responsive ) ):the_row(); ?>
                <div class="container-fluid">
                    <div class="row d-flex menu-wrapper justify-content-center">
                        <div class="col-md-4 col-md-offset-2 mb-4 d-flex align-items-center justify-content-center justify-content-lg-start">
                            <div class="w-100">
                                    <span class="text-slider-title text-color-1 d-block mb-2" style="color: <?php the_sub_field( 'text_color' ); ?>">
                                        <?php the_sub_field( 'title' ); ?>
                                    </span>
                                <span class="text-slider-subtitle d-block mb-2" style="color: <?php the_sub_field( 'text_color' ); ?>">
                                        <?php the_sub_field( 'sub_title' ); ?>
                                    </span>
								<?php if ( ! empty( get_sub_field( 'text' ) ) ) : ?>
                                    <div class="mb-3" style="color: <?php the_sub_field( 'text_color' ); ?>">
                                        <p><?php the_sub_field( 'text' ); ?></p>
                                    </div>
								<?php endif; ?>
								   <div class="d-flex justify-content-center justify-content-lg-start">
									   <?php if ( get_sub_field( 'btn_text' ) ): ?>

										   <?php sogo_print_btn( array(
											   'text'   => get_sub_field( 'btn_text' ),
											   'href'   => esc_url( get_sub_field( 'btn_url' ) ),
											   'class'  => 's-btn-1',
											   'target' => get_sub_field( 'target_blank' ) ? '_blank' : '_self'
										   ) ); ?>

									   <?php endif; ?>
                                   </div>
                            </div>

                        </div>
                        <div class="col-md-4">
							<div class="px-5 px-lg-0">
								<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'full', false, array( 'class' => 'img-fluid' ) ) ?>
                            </div>
                        </div>
                    </div>
                </div>

			<?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>


<script>
    (function ($) {
        'use strict';
        var $ = jQuery.noConflict();
        $(document).ready(function () {
console.log('NAAAA')
            $('.js-main-slider').on('init', function (currentSlide) {
                // will try to find a video in the first slide and play it
                var vid = $('.slick-current').find('video');
                if (vid.length > 0)
                    $(vid).get(0).play();

            });

            // on slide change - stop other videos and play current slide video
            $('.js-main-slider').on('afterChange', function (slick, currentSlide) {

                var videos = $('.slick-slide:not(".slick-current")').find('video');
                // console.log(videos);
                if (videos.length > 0) {
                    $.each(videos, function (key, v) {
                        $(v).get(0).pause();
                        $(v).get(0).currentTime = 0;
                    });
                }

                var vid = $('.slick-current').find('video');
                if (vid.length > 0)
                    $(vid).get(0).play();
            });


            $(window).load(function () {
                $('.js-main-slider').slick({
                    autoplay: true,
                    autoplaySpeed: 3500,
                    infinite: false,
                    rtl: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    // nextArrow: sogoc.svg_arrow_right,
                    // prevArrow: sogoc.svg_arrow_left,
                    dots: true
                });

                //show all slides of main slider
                $('.slider').css('display', 'block');
            });

        });


    })(jQuery);

</script>
