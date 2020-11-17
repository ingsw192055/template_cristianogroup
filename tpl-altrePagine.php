<?php

/**
 * Template Name: Altre Pagine
 * Template Post Type: page
 */
get_header('other');

$settings_general = get_field('settings_other', $post->ID);

?>
<style>
  .about .video-box {
    background-image: url(<?php echo $settings_general["image-video"]["url"]; ?>) !important;
  }
</style>
<main id="main">
  <section style="margin-top: 90px" id="about" class="about">
    <div class="container-fluid">
      <div class="row content">
        <div class="col-md-12 text-center">
          <h2 class="text-center"><?= $settings_general['title'] ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="mt-3 col-xl-12 col-lg-12 ">
          <figure class="wp-block-video aligncenter"><video controls="" poster="<?= $settings_general["image-video"]["url"]; ?>" src="<?= $settings_general["video"]["url"]; ?>" playsinline=""></video></figure>
        </div>
  </section>
  <!-- ======= Details Section ======= -->
  <section id="details" class="details">
    <div class="container">
      <div class="row content">
        <div class="col-md-12 text-right">
          <?= $settings_general['link'] ?>
        </div>
      </div>
      <div class="row content">
        <div class="col-md-6 pt-5 order-1 order-md-2" data-aos="fade-left">
          <p><?= $settings_general['text-right'] ?>
        </div>
        <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-up">
          <img src="<?= $settings_general['image-1']['url'] ?>" class="img-fluid" alt="">
        </div>
      </div>
      <div class="row content">
        <div class="col-md-12 text-center" data-aos="fade-up">
          <img src="<?= $settings_general['image-3']['url'] ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Details Section -->
  <?php if (isset($settings_general['video_2']['url'])) : ?>
    <section id="about" class="about">
      <div class="container-fluid">
        <div class="row content">
          <div class="col-md-12 text-center">
            <h2 class="text-center"><?= $settings_general['title-video'] ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="mt-3 col-xl-12 col-lg-12 ">
            <figure class="wp-block-video aligncenter"><video controls="" poster="<?= $settings_general["image_video_2"]["url"]; ?>" src="<?= $settings_general["video_2"]["url"]; ?>" playsinline=""></video></figure>
          </div>
    </section>
  <?php endif; ?>

</main><!-- End #main -->
<!-- End Text Block -->
<?php get_footer(); ?>