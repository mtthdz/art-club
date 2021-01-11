<?php get_header(); ?>

<section class="main wrapper">
  <p class="main__content"><?php the_content(); ?></p>
  <?php 
      // pulls in all post data
    // the_post(); 
    // global $post;
    // print_r($post);
  ?>
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
      echo '<h2 class="gallery__title">Featured Artists</h2>';
      echo '<div class="related__artists-gallery">';
      
      while($relatedArtists->have_posts()) {
        $relatedArtists->the_post();?>

        <div class="artist__card">
          <div class="artist__image"><?php the_post_thumbnail(); ?></div>
          <a href="<?php the_permalink(); ?>" class="artist__link"><?php the_title(); ?></a>
        </div>
    <?php } 
      echo '</div>';
    }
  ?>
</section>

<?php get_footer(); ?>