<ul class="header-info flexbox center-children">
  <li class="fela">
    <i class="fa fa-gavel denim pull-left"></i>
    Nationally Recognized <span class="block">FELA Attorneys</span>
  </li>
  <li class="phone">
    <small class="block">IF YOU OR A LOVED ONE ARE INJURED - CALL US</small>
    <span>
      <i class="fa fa-phone denim pull-left"></i>
      <a class="header-link phone-number" href="tel:+1<?php echo remove_special_chars(get_option('phonenumber')); ?>">
        <?php echo get_option('phonenumber'); ?>
      </a>
    </span>
  </li>
  <li class="social">
    <?php if (get_option('facebook')): ?>
      <a target="_blank" class="header-link" href="<?php echo get_option('facebook'); ?>">
        <i class="fa fa-facebook-square header-social-icon"></i>
      </a>
    <?php endif; ?>

    <?php if (get_option('google')): ?>
      <a target="_blank" class="header-link" href="<?php echo get_option('google'); ?>">
        <i class="fa fa-google-plus-square header-social-icon"></i>
      </a>
    <?php endif; ?>

    <?php if (get_option('linkedin')): ?>
      <a target="_blank" class="header-link" href="<?php echo get_option('linkedin'); ?>">
        <i class="fa fa-linkedin-square header-social-icon"></i>
      </a>
    <?php endif; ?>
  </li>
</ul>
