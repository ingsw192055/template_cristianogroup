<?php

/** 
 * Template Name: Contatti 
 * Template Post Type: page 
 */

get_header();

$settings = get_fields('theme-options');
?>

<section id="contact" class="contact">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2><?php the_title() ?></h2>
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

<?php get_footer(); ?>