<div class="container py-5">
  <div class="jumbotron text-white jumbotron-image shadow" style="opacity: 0.8; background-image: url('<?php echo get_sub_field('bakgrundsbild')['url']; ?>');">
    <h1 class="mb-4" style="color: <?php echo get_sub_field('farg'); ?>;">
      <?php the_sub_field('rubrik'); ?>
    </h1>
    <p class="mb-4" style="color: <?php echo get_sub_field('farg'); ?>;">
      <?php the_sub_field('textfalt'); ?>
    </p>
  </div>
</div>