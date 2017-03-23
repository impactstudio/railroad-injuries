<!-- footer widget area 1 -->
<div class="col-md-3 col-sm-6 col-xs-6 footer-widget">

  <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>

  <img class="footer-logo" src="<?php echo $logo[0]; ?>" alt="<?php echo get_option('companyname'); ?> logo">

  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-1')) : else : ?>

  <div class="pre-widget">
    <p><strong>Widgetized Area</strong></p>
    <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
  </div>

  <?php endif; ?>

</div>

<!-- footer widget area 2 -->
<div class="col-md-3 col-sm-6 col-xs-6 footer-widget">

  <?php if (!is_front_page()) : ?>
    <h4>Send Us a Message</h4>
    <?php echo do_shortcode('[contact-form-7 id="175" title="Footer Contact Form"]'); ?>
  <?php else: ?>
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-widget-2')) : else : ?>

    <div class="pre-widget">
      <p><strong>Widgetized Area</strong></p>
      <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
    </div>

    <?php endif; ?>
  <?php endif; ?>

</div>

<!-- footer widget area 3 -->
<div class="col-md-3 col-sm-6 col-xs-6 footer-widget widget">

  <h4>External Links</h4>

  <ul class="footer-external-links">
    <?php if (!empty(get_option('facebook'))): ?>
      <li>
        <a class="facebook" href="<?php echo get_option('facebook'); ?>"><i class="fa fa-facebook-square footer-icon icon-cream facebook"></i> Facebook</a>
      </li>
    <?php endif; ?>
    <?php if (!empty(get_option('google'))): ?>
      <li>
        <a class="google" href="<?php echo get_option('google'); ?>"><i class="fa fa-google-plus-square footer-icon icon-cream google"></i> Google</a>
      </li>
    <?php endif; ?>
    <?php if (!empty(get_option('linkedin'))): ?>
      <li>
        <a class="linkedin" href="<?php echo get_option('linkedin'); ?>"><i class="fa fa-linkedin-square footer-icon icon-cream linkedin"></i> LinkedIn</a>
      </li>
    <?php endif; ?>
  </ul>

</div>

<!-- footer widget area 4 -->
<div class="col-md-3 col-sm-6 col-xs-6 footer-widget widget">

  <h4>Company Information</h4>

  <ul class="footer-external-links footer-company-info">
    <li>
      <a target="_blank" href="<?php echo get_option('certificationlink'); ?>">
        <i class="fa fa-check-circle icon-cream" aria-hidden="true"></i>
        Certified <?php echo get_option('certification'); ?>
      </a>
    </li>
    <li>
      <a href="<?php echo get_option('gmaps'); ?>" target="_blank"><i class="fa fa-university footer-icon icon-cream"></i>
        <?php echo get_option('businessaddress'); ?>
      </a>
    </li>
    <li>
      <a href="tel:+1<?php echo remove_special_chars(get_option('phonenumber')); ?>">
        <i class="fa fa-phone icon-cream" aria-hidden="true"></i> <?php echo get_option('phonenumber'); ?>
      </a>
    </li>
    <li>
      <a href="mailto:<?php echo get_option('emailaddress'); ?>">
        <i class="fa fa-envelope icon-cream" aria-hidden="true"></i> <?php echo get_option('emailaddress'); ?>
      </a>
    </li>
  </ul>

</div>
