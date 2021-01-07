<?php 
  get_header(); 

  while(have_posts()) {
    the_post(); ?>

    <div class="image"><?php the_post_thumbnail('large'); ?></div>
    <div class="image--overlay">
      <a href="<?php the_permalink(); ?>" class="image__link">the link</a>
    </div>
  <?php };
?>

<?php get_footer(); ?>