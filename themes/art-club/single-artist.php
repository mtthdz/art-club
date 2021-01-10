<?php get_header(); ?>

<section class="main wrapper">
  <div class="artist__image"><?php the_post_thumbnail(); ?></div>
  <?php the_content(); ?>
</section>

<?php get_footer(); ?>