<?php

  $hero_background = get_field("hero_background");
  $hero_description = get_field('hero_description');

?>

<div class="subpage-hero z-0">
  <img
    src="<?php echo $hero_background['url'] ?>"
    alt="<?php echo $hero_background['alt'] ?>"
    class="hero-image">
  <div class="black-overlay z-1"></div>
  <div class="container">
    <div class="row">
      <div class="subpage-hero-content z-2">
        <h1>Knowing your rights under FELA</h1>
        <p class="lead">How understanding your FELA rights can help your case</p>
      </div>
    </div>
  </div>
</div>
