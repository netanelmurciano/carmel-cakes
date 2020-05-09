<?php
$is_mobile = wp_is_mobile();
$responsive = $is_mobile ? 'mobile' : 'desktop';


$_posts_args = array(
    'post_type' => 'cakes',
    'post_status' => 'publish',
    'posts_per_page' => 6,
);
$_posts = new WP_Query($_posts_args);

?>

<?php if ($_posts->have_posts()): ?>
    <div class="col-md-12">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto">
                <div class="row d-flex justify-content-center py-3">
                    <?php while ($_posts->have_posts()): $_posts->the_post(); ?>
                        <div class="col-12 col-md-4 text-center">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('small_image'); ?>" class="w-100"
                                     data-aos="flip-right">
                            <?php endif; ?>
                            <h2 class="h3 text-center text-color-5 mt-1"><?php the_title(); ?></h2>
                            <div class=" text-center"><?php the_content(); ?></div>
                        </div>
                        <?php $counter++ ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    <!-- Cakes Btn -->
                    <?php $btn = get_field('cakes_btn_text', 'option') ?>
                    <?php if ($btn) : ?>
                    <div data-aos="fade-up"
                         class="text-center py-3 d-flex justify-content-center justify-content-lg-start ">
                        <?php
                        sogo_print_btn(array(
                            'href' => get_field('cakes_link_address', 'option'),
                            'text' => $btn,
                            'class' => 's-btn-1',
                        ));
                        ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


