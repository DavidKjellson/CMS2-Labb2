<div class="card mb-3" style="width: 70%; margin-left: 15%;">
  <img src="<?php echo get_sub_field('bild')['url']; ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
  <div class="card-body">
    <h5 class="card-title" style="color: <?php echo get_sub_field('farg'); ?>;"><?php the_sub_field('rubrik'); ?></h5>
    <p class="card-text" style="color: <?php echo get_sub_field('farg'); ?>;"><?php the_sub_field('textfalt'); ?></p>
  </div>
</div>