<?php
// Template name: contact-us

get_header();
?>

<section class="container-fluid bg-light">
    <!-- Title and Sub title-->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="h2 mb-3 text-center"><?php the_title(); ?></h1>
            <h2 class="h6 mb-3 text-center"><?php the_field('contact_sub_title', 'option'); ?></h2>
        </div>
    </div>

    <!-- Icons and data-->
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="text-color-5 h2"><i class="fa fa-users" aria-hidden="true"></i></div>
                    <div class="h3">שירות לקוחות</div>
                    <p><?php the_field('contact_email', 'option'); ?></p>
                </div>
                <div class="col-md-3">
                    <div class="text-color-5 h2"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="h3">מייל</div>
                    <p><?php the_field('contact_email', 'option'); ?></p>
                </div>
                <div class="col-md-3">
                    <div class="text-color-5 h2"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="h3">כתובת</div>
                    <p><?php the_field('contact_address', 'option'); ?></p>
                </div>
                <div class="col-md-3">
                    <div class="text-color-5 h2"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="h3">טלפון</div>
                    <p><?php the_field('contact_phone', 'option'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact form 7 -->
    <div class="row justify-content-center">
        <div class="col-md-8 col-xs-12">
            <div class="row">
                <div class="col-md-12 col-xs-12  text-right py-3 py-lg-4">
                    <?php echo do_shortcode('[contact-form-7 id="9" title="טופס יצירת קשר 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
