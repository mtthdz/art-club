<?php get_header(); ?>

<section class="main wrapper">
  <?php the_content(); ?>
</section>

<section class="related__artists wrapper">
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

    while($relatedArtists->have_posts()) {
      $relatedArtists->the_post();?>
      
      <div class="artist__card">
        <a href="<?php the_permalink(); ?>" class="artist__link">
          <div class="artist__image"><?php the_post_thumbnail('medium'); ?></div>
          <h2 class="artist__name"><?php the_title(); ?></h2>
        </a>
      </div>
    <?php } 
  ?>
</section>

<?php get_footer(); ?>