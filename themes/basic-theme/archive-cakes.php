<?php get_header(); ?>

<?php if (have_posts()): ?>
    <div class="col-md-12">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto bg-light">
                <div class="row d-flex justify-content-center py-3">
                    <?php while (have_posts()): the_post(); ?>
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
                </div>

                <!-- PAGE-NAVIGATION -->
                <div class="page-navigation text-center">
                    <?php function_exists( 'wp_pagenavi' ) ? wp_pagenavi() : null; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php get_footer(); ?>
