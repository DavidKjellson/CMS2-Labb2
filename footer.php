<?php wp_footer(); ?>
<?php while (have_rows('footer')) {
  the_row(); ?>
  <footer class="page-footer font-small">
    <div class="footer-copyright text-center py-3" style="color: <?php echo get_sub_field('footerfarg'); ?>;"><?php the_sub_field('footertext'); ?></div>
  </footer>
<?php } ?>
</body>

</html>