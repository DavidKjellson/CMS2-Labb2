<?php get_header(); ?>

<?php
while (have_rows('info')) {
  the_row();
  if (get_row_layout() === 'info') {
    get_template_part('templates/info');
  }
}
while (have_posts()) {
  the_post(); ?>
  <div class="card" style="width: 18rem; margin-left: 75%;">
    <div class="card-body">
      <p class="card-text"><?php the_content(); ?></p>
    </div>
  </div>
<?php } ?>

<?php get_footer(); ?>