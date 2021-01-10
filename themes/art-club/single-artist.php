<?php get_header(); ?>

<section class="main wrapper">
  <div class="artist__image"><?php the_post_thumbnail(); ?></div>
  <?php the_content(); ?>
</section>

<section class="aside wrapper">
  <?php
    // location is the key used in the WP_Query in single-place
    $relatedPlaces = get_field('location');

    if($relatedPlaces) {
      echo '<h2>Artwork found at:</h2>';

      foreach($relatedPlaces as $place) { ?>
        <a href="<?php echo get_the_permalink($place); ?>"><?php echo get_the_title($place); ?></a>
      <?php }
    }
  ?>
</section>

<?php get_footer(); ?>