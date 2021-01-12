<?php get_header(); ?>

<section class="secondary__nav wrapper">
  <a href="javascript:window.history.back();" class="back__link">< back</a>
</section>

<!-- main content -->
<section class="place wrapper">
  <?php the_content(); ?>
</section>

<!-- related post type content -->
<section class="related__artists wrapper">
  <!-- artist card query -->
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

        <div class="related__artist-card">
          <div class="related__artist-image"><?php the_post_thumbnail(); ?></div>
          <a href="<?php the_permalink(); ?>" class="related__artist-link"><?php the_title(); ?></a>
        </div>
    <?php } 
      echo '</div>';
    }
  ?>
</section>

<?php get_footer(); ?>