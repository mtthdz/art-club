<?php get_header(); ?>

<section class="secondary__nav wrapper">
  <a href="javascript:window.history.back();" class="back__link">< back</a>
</section>

<!-- main content -->
<section class="artist__about wrapper">
  <?php the_content(); ?>
</section>

<!-- related post type content -->
<section class="related__section wrapper">
  <?php
    // location is the key used in the WP_Query in single-place
    $relatedPlaces = get_field('location');

    if($relatedPlaces) {
      echo '<h3 class="section__title">Artwork found at:</h3>';
      echo '<ul class="related-place__list">';

      foreach($relatedPlaces as $place) { ?>
        <li class="related-place__item">
          <a class="related-place__link" href="<?php echo get_the_permalink($place); ?>"><?php echo get_the_title($place); ?></a>
        </li>
      <?php }

        echo '</ul>';
      }
  ?>
</section>

<?php get_footer(); ?>