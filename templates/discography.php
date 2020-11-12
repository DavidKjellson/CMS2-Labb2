<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo get_sub_field('bild')['url']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php the_sub_field('rubrik'); ?></h5>
    <p class="card-text"><?php the_sub_field('beskrivning'); ?></p>
  </div>
</div>