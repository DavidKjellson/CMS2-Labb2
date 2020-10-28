<?php get_header(); ?>


<?php while (have_rows('kategorier')) {
  the_row(); ?>
  <div class="container py-5">
    <div class="jumbotron text-white jumbotron-image shadow" style="opacity: 0.8; background-image: url('<?php echo get_sub_field('kategoribild')['url']; ?>'); background-position: center;">
      <h1 class="mb-4" style="color: <?php echo get_sub_field('farg'); ?>;">
        <?php the_sub_field('kategori'); ?>
      </h1>
    </div>
  </div>
<?php } ?>

<?php get_footer(); ?>