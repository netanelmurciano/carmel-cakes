<?php
// Template Name: Front page

get_header();

$contact_us_bg = get_field('home_contact_us_bg_image');
$tax_bg = get_field('tax_bg_image');

?>
<main>
    <!-- Main sliders -->
    <section>
        <?php include "templates/section-main-slider.php"; ?>
    </section>

    <!-- About Section -->
    <section class="container-fluid bg-light">
        <div class="row justify-content-center">
            <div class="col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-md-6 col-xs-12  text-right py-3 py-lg-5">
                        <h2 class="h1 mb-3 h-border-top "><?php the_field('about_title') ?></h2>
                        <div class="entry-content ">
                            <?php echo wp_trim_words(get_field('about_text'), $num_words = 55, $more = null) ?>
                        </div>

                        <?php $btn = get_field('about_btn_text') ?>
                        <?php if ($btn) : ?>
                        <div data-aos="fade-up"
                             class="text-center py-3 d-flex justify-content-center justify-content-lg-start ">
                            <?php
                            sogo_print_btn(array(
                                'href' => get_field('about_link'),
                                'text' => $btn,
                                'class' => 's-btn-1',
                            ));
                            ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12 py-3 py-lg-5">
                        <img class="w-100 height-50" src="<?php the_field('about_pic') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Taxonomies-->
    <section class="container-fluid py-3 bg-white" <?php sogo_print_bg(array(
        'url' => $tax_bg,
        'size' => 'cover',
        'position' => 'left ',
        'height' => 'auto',
    )) ?>>
        <h2 class="h1 mb-3 h-border-top text-center" data-aos="fade-down"><?php the_field('tax_title'); ?></h2>
        <?php include "templates/section-taxonomies-slider.php"; ?>
    </section>

    <!-- Cakes -->
    <section class="container-fluid bg-light py-3">
        <h2 class="h1 mb-3 h-border-top text-center" data-aos="fade-down">
            <?php the_field('cakes_title', 'option'); ?>
        </h2>
        <?php include "templates/section-cakes.php"; ?>
    </section>

    <!-- Desserts -->
    <section class="container-fluid py-3 bg-white" data-aos="fade-down">
        <h2 class="h1 mb-3 h-border-top text-center" >
            <?php the_field('desserts_title', 'option'); ?>
        </h2>
        <?php include "templates/section-desserts.php"; ?>
    </section>

    <!-- Contact Us Section -->
    <section class="container-fluid bg-light" <?php sogo_print_bg(array(
        'url' => $contact_us_bg,
        'size' => 'cover',
        'position' => 'left ',
        'height' => 'auto',
    )) ?>>
        <div class="row justify-content-center py-3 py-lg-3">
            <div class="col-md-8 col-xs-12">
                <div class="row" data-aos="fade-up">
                    <h3 class="col-12 h1 text-black text-center mb-2"><?php the_field('home_contact_us_title'); ?></h3>
                    <div class="col-12 h6 text-black d-block text-center mb-3"><?php the_field('home_contact_us_sub_title'); ?></div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12  text-right ">
                        <?php echo do_shortcode('[contact-form-7 id="251" title="עמוד הבית"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
