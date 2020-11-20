<?php

/** 
 * Template Name: Template Home Page 
 * Template Post Type: page 
 */

get_header();



$settings_general = get_field('settings', $post->ID);
$settings = get_fields('theme-options');


?>
<!-- Text Block -->
<style>
    .testimonials {

        background-image: url(<?php echo $settings_general["block"]['our_brand']['banner_brand']["url"]; ?>) !important;
    }

    .about .video-box {
        background-image: url(<?php echo $settings_general['information']["image-video"]["url"]; ?>) !important;

    }
</style>

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-5 col-lg-6" data-aos='fade-right'>
                    <figure class="wp-block-video"><video controls="" poster="<?= $settings_general['information']["image-video"]["url"]; ?>" src="<?= $settings_general['information']["video"]["url"]; ?>" playsinline=""></video></figure>
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-star"></i></div>
                        <h4 class="title"><a href="">Riconversione</a></h4>
                        <p class="description"><?= $settings_general['information']['riconversione'] ?></p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-star"></i></div>
                        <h4 class="title"><a href="">Investimenti</a></h4>
                        <p class="description"><?= $settings_general['information']['investimenti'] ?></p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-star"></i></div>
                        <h4 class="title"><a href="">Impegno</a></h4>
                        <p class="description"><?= $settings_general['information']['impegno'] ?></p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="<?= $settings_general['block']['one-row']['image1']['url'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 pt-4" data-aos="fade-up">
                    <h3><?= $settings_general['block']['one-row']['title'] ?></h3>
                    <p class="font-italic">
                        <?= $settings_general['block']['one-row']['subtitle'] ?>
                    </p>
                    <p><?= $settings_general['block']['one-row']['text'] ?></p>
                    <p><?= $settings_general['block']['one-row']['link'] ?></p>

                </div>
            </div>

            <div class="row content">
                <div class="col-md-6 order-1 order-md-2" data-aos="fade-left">
                    <img src="<?= $settings_general['block']['twe-row']['image2']['url'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3><?= $settings_general['block']['twe-row']['title'] ?></h3>
                    <p class="font-italic">
                        <?= $settings_general['block']['twe-row']['subtitle'] ?>
                    </p>
                    <p><?= $settings_general['block']['twe-row']['text'] ?></p>
                    <p><?= $settings_general['block']['twe-row']['link'] ?></p>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="<?= $settings_general['block']['three-row']['image3']['url'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 pt-5" data-aos="fade-up">
                    <h3><?= $settings_general['block']['three-row']['title'] ?></h3>
                    <p class="font-italic">
                        <?= $settings_general['block']['three-row']['subtitle'] ?>
                    </p>
                    <p><?= $settings_general['block']['three-row']['text'] ?></p>
                    <p><?= $settings_general['block']['three-row']['link'] ?></p>
                </div>
            </div>

        </div>
    </section><!-- End Details Section -->

    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">
                <?php foreach ($settings_general['block']['our_brand']['items'] as $brand) : ?>
                    <div class="testimonial-item">
                        <img src="<?= $brand['logo']['url'] ?>" class="testimonial-img" alt="">
                        <h3><?= $brand['name_brend'] ?></h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            <?= $brand['description'] ?>
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Contatti</h2>
                <p>Contattaci</p>
            </div>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Indirizzo:</h4>
                            <p><?= $settings['address'] ?></p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p><?= $settings['email'] ?></p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Telefono:</h4>
                            <p><?= $settings['tel'] ?></p>
                        </div>

                    </div>

                </div>


                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <form method="POST" action="<?= admin_url('admin-ajax.php') ?>" role="form" class="php-email-form">
                        <input type="hidden" name="action" value="submit_form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Il tuo Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="La tua E-mail" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Oggetto" data-rule="minlen:4" data-msg="Inserisci almeno 8 caratteri dell'oggetto" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Per favore scrivi qualcosa per noi" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="custom-control-input" id="privacy" required>
                            <label class="custom-control-label" for="privacy">Accetto l'informativa sulla <a href="<?= get_privacy_policy_url() ?>">privacy
                                    policy</a></label>
                        </div>

                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Il tuo messaggio è stato inviato con successo.</div>
                        </div>
                        <div class="text-center"><button id="button-form" type="submit">Invia Messaggio</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
<!-- End Text Block -->

<?php get_footer(); ?>