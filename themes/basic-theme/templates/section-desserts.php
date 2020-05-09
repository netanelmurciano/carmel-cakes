<?php
$is_mobile = wp_is_mobile();
$responsive = $is_mobile ? 'mobile' : 'desktop';


$_posts_args = array(
    'post_type' => 'desserts',
    'post_status' => 'publish',
    'posts_per_page' => 3,
);
$_posts = new WP_Query($_posts_args);

?>

<?php if ($_posts->have_posts()): ?>
    <div class="col-md-12 js-main-slider">
       <div class="row">
          <div class="col-12 col-md-8 mx-auto">
              <div class="row d-flex justify-content-center">
                  <?php while ($_posts->have_posts()): $_posts->the_post(); ?>
                      <div class="col-12 col-md-4 text-center"  >
                          <?php if(has_post_thumbnail()): ?>
                              <img src="<?php the_post_thumbnail_url('small_image');?>" class="w-100" data-aos="flip-right">
                          <?php endif;?>
                          <h2 class="h3 text-center text-color-5 mt-1"><?php the_title(); ?></h2>
                          <div class=" text-center"><?php the_content(); ?></div>
                      </div>
                      <?php $counter++ ?>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>

                  <!-- Desserts Btn -->
                  <?php $btn = get_field('desserts_btn_text', 'option') ?>
                  <?php if ($btn) : ?>
                  <div data-aos="fade-up"
                       class="text-center py-3 d-flex justify-content-center justify-content-lg-start ">
                      <?php
                      sogo_print_btn(array(
                          'href' => get_field('desserts_link_address', 'option'),
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


<!--    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col"><img src=".." alt="1 slide"></div>
                    <div class="col"><img src=".." alt="2 slide"></div>
                    <div class="col"><img src=".." alt="3 slide"></div>
                </div>
                <div class="row">
                    <div class="col"><img src=".." alt="4 slide"></div>
                    <div class="col"><img src=".." alt="5 slide"></div>
                    <div class="col"><img src=".." alt="6 slide"></div>
                </div>
            </div>
        </div>
    </div>
-->

   <!-- <div class="col-12 col-md-4">
        <?php /*if(has_post_thumbnail()): */?>
            <img src="<?php /*the_post_thumbnail_url('small_image');*/?>" width="390px" height="290px">
        <?php /*endif;*/?>
        <h2 class="h3 text-center text-color-5"><?php /*the_title(); */?></h2>
        <div class=" text-center"><?php /*the_content(); */?></div>
    </div>

    <div class="col-12 col-md-4">
        <?php /*if(has_post_thumbnail()): */?>
            <img src="<?php /*the_post_thumbnail_url('small_image');*/?>" width="390px" height="290px">
        <?php /*endif;*/?>
        <h2 class="h3 text-center text-color-5"><?php /*the_title(); */?></h2>
        <div class=" text-center"><?php /*the_content(); */?></div>
    </div>-->


