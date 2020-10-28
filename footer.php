<?php wp_footer(); ?>
<?php while (have_rows('footer')) {
  the_row(); ?>
  <footer class="page-footer font-small">
    <div class="footer-copyright text-center py-3" style="color: <?php echo get_sub_field('farg'); ?>"><?php the_sub_field('foot'); ?></div>
  </footer>
<?php } ?>
</body>

</html>