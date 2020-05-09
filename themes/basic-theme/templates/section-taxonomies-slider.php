<?php
$is_mobile = wp_is_mobile();
$responsive = $is_mobile ? 'mobile' : 'desktop';


$_posts_args = array(
    'post_type' => 'taxonomies',
    'post_status' => 'publish',
    'posts_per_page' => 3,
);
$_posts = new WP_Query($_posts_args);

?>

<?php if ($_posts->have_posts()): ?>
    <div class="col-md-12 js-main-slider">
        <div id="carouselTaxonomies" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <?php $counter = 0; ?>
                <?php while ($_posts->have_posts()): $_posts->the_post(); ?>
                    <div class="carousel-item <?php echo $counter === 0 ? 'active' : '' ?>">
                        <div class="main-slider-wrapper">
                            <div class="h-100">
                                <div class="d-flex col-8 mx-auto h-100 ">
                                    <div class="row w-100">
                                        <div class="col-12 align-self-center justify-content-center">
                                            <div class="w-100">
                                                <h2 class="h3 text-center text-color-5"><?php the_title(); ?></h2>
                                                <div class=" text-center"><?php the_content(); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $counter++ ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <a class="carousel-control-prev" href="#carouselTaxonomies" role="button" data-slide="prev">
                <span><i class="fa fa-angle-left fa-4x text-color-3"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTaxonomies" role="button" data-slide="next">
                <span><i class="fa fa-angle-right fa-4x text-color-3"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<?php endif; ?>



