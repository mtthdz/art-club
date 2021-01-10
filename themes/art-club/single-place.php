<?php get_header(); ?>

<section class="main wrapper">
  <?php the_content(); ?>
</section>

<section class="related__artists wrapper">
  <!-- artist card -->
  <!-- query all related artists -->
  <?php
    $relatedArtists = new WP_Query(array(
      'post_type' => 'artist',
      'posts_per_page' => -1,
      'meta_query' => array(
        array(
          'key' => 'location',
          'compare' => 'LIKE',
          'value' => get_the_ID()
        )
      )
    ));
    if($relatedArtists->have_posts()) {
      echo '<h2 class="section__title">Featured Artists</h2>';
      echo '<div class="artist__gallery">';

      while($relatedArtists->have_posts()) {
        $relatedArtists->the_post();?>

        <div class="artist__card">
          <a href="<?php the_permalink(); ?>" class="artist__link">
            <div class="artist__image"><?php the_post_thumbnail('medium'); ?></div>
            <h2 class="artist__name"><?php the_title(); ?></h2>
          </a>
        </div>
    <?php } 
      echo '</div>';
    }
  ?>
</section>

<?php get_footer(); ?>