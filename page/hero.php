<?php

  $hero_background = get_field("hero_background");
  $hero_description = get_field('hero_description');

?>

<div class="hero row">
  <img src="<?php echo $hero_background['url'] ?>" alt="<?php echo $hero_background['alt'] ?>" class="hero-image">
  <div class="black-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-lg-offset-0 col-sm-10 col-sm-offset-1">
      </div>
    </div>
  </div>
</div>
