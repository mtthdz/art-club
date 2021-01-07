<?php get_header(); ?>

<section class="artist__gallery">

  <?php while(have_posts()) {
    // pulls in all post data
    the_post(); 
    // global $post;
    // print_r($post);
    ?>

    <div class="artist__card">
      <a href="<?php the_permalink(); ?>" class="artist__link">
        <div class="artist__image"><?php the_post_thumbnail('medium'); ?></div>
        <h2 class="artist__name"><?php the_title(); ?></h2>
      </a>
    </div>
  <?php }; ?>

</section>

<?php get_footer(); ?>