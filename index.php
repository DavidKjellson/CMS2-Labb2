<?php get_header(); ?>

<?php
while (have_rows('info')) {
  the_row();
  if (get_row_layout() === 'info') {
    get_template_part('templates/info');
  }
}
while (have_rows('infokort')) {
  the_row();
  if (get_row_layout() === 'infokort') {
    get_template_part('templates/infocard');
  }
}
while (have_rows('infokort_2')) {
  the_row();
  if (get_row_layout() === 'infokort_2') {
    get_template_part('templates/infocard2');
  }
}
while (have_rows('sociala_medier')) {
  the_row();
  if (get_row_layout() === 'sociala_medier') {
    get_template_part('templates/social-media');
  }
}
?>

<?php get_footer(); ?>