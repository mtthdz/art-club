<?php get_header(); ?>

<section class="places__gallery">

  <?php while(have_posts()) {
    // pulls in all post data
    the_post(); 
    // global $post;
    // print_r($post);
    ?>

    <div class="image"><?php the_post_thumbnail('medium'); ?></div>
    <div class="image--overlay">
      <a href="<?php the_permalink(); ?>" class="image__link">the link</a>
    </div>
  <?php }; ?>

</section>

<?php get_footer(); ?>