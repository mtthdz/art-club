<?php 
  get_header(); 

  while(have_posts()) {
    the_post(); ?>

    <div class="image"><?php the_post_thumbnail(); ?></div>
  <?php };
?>

<?php get_footer(); ?>