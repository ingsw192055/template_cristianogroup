<?php

$settings = get_fields( 'theme-options' );
$args = array('theme_location' => $settings['select-menu']);
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $args['theme_location'] ] );

?>

	<!-- ======= Footer ======= -->
	<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="footer-info">
              <h3>Cristiano Group SRL</h3>
              <p class="pb-3"><em><?=$settings['text-footer']?></em></p>
              <p>
			  	<strong>Indirizzo:</strong> <?=$settings['address']?> <br>
				<strong>Telefono:</strong> <?=$settings['tel']?><br>
				<strong>Cell:</strong> <?=$settings['cell']?><br>
                <strong>Email:</strong> <?=$settings['email']?><br>
              </p>
            </div>
          </div>
		<?php if($settings['select-menu'] != null):?>
          <div class="col-lg-6 col-md-6 footer-links">
            <h3><?=$menu->name?></h3>
            <?php
				wp_nav_menu([
					'theme_location'	=> $settings['select-menu'],
					'container'				=> 'ul',
					'before'       =>'<i class="bx bx-chevron-right"></i>'
				]);
				?>
		  </div>
				<?php endif; ?>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
	  <p><?=$settings['copyright']?></p>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>