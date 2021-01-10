<?php get_header(); ?>

<section class="main wrapper">
  <div class="artist__image"><?php the_post_thumbnail(); ?></div>
  <?php the_content(); ?>
</section>

<section class="aside wrapper">
  <?php
    $relatedArtists = new WP_Query(array(
      'post_type' => 'place',
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
      <div class="test">
        <div class="artist__image"><?php the_post_thumbnail('medium'); ?></div>
        <h2 class="artist__name"><?php the_title(); ?></h2>
      </div>
    <?php } 
  ?>
</section>

<?php get_footer(); ?>