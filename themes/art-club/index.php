<?php get_header(); ?>

<!-- using index file as 404 for generic fallback until needed -->
<section class="four-oh-four wrapper">
  <h2 class="four-oh-four__title" >404</h2>
  <a class="four-oh-four__link" href="<?php echo site_url('/') ?>">return to homepage</a>
</section>

<?php get_footer(); ?>