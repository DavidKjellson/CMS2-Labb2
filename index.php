<?php get_header(); ?>

<?php while (have_rows('startsida')) {
  the_row(); ?>
  <div class="jumbotron myhero" style="background-image:url('<?php echo get_sub_field('sidbild')['url']; ?>');background-position: center;">
    <h1 class="display-4 mydisplay" style="color: <?php echo get_sub_field('farg'); ?>;"><?php the_sub_field('sidtitel'); ?></h1>
  </div>
<?php } ?>
<?php while (have_rows('kategorier')) {
  the_row(); ?>
  <div class="container py-5">
    <div class="jumbotron text-white jumbotron-image shadow" style="opacity: 0.8; background-image: url('<?php echo get_sub_field('kategoribild')['url']; ?>');">
      <h1 class="mb-4" style="color: <?php echo get_sub_field('farg'); ?>;">
        <?php the_sub_field('kategori'); ?>
      </h1>
    </div>
  </div>
<?php } ?>

<?php get_footer(); ?>