<ul class="header-info flexbox center-children">
  <li class="fela">
    <i class="fa fa-gavel denim pull-left"></i>
    Nationally Recognized <span class="block">FELA Attorneys</span>
  </li>
  <li class="phone">
    <small class="block">IF YOU OR A LOVED ONE ARE INJURED - CALL US</small>
    <i class="fa fa-phone denim pull-left"></i>
    <a href="tel:+1<?php echo remove_special_chars(get_option('phonenumber')); ?>">
      <?php echo get_option('phonenumber'); ?>
    </a>
  </li>
  <li class="social">
    <?php if (get_option('facebook')): ?>
      <a href="<?php echo get_option('facebook'); ?>">
        <i class="fa fa-facebook-square social-icon"></i>
      </a>
    <?php endif; ?>

    <?php if (get_option('google')): ?>
      <a href="<?php echo get_option('google'); ?>">
        <i class="fa fa-google-plus-square social-icon"></i>
      </a>
    <?php endif; ?>

    <?php if (get_option('linkedin')): ?>
      <a href="<?php echo get_option('linkedin'); ?>">
        <i class="fa fa-linkedin-square social-icon"></i>
      </a>
    <?php endif; ?>
  </li>
</ul>
