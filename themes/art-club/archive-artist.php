<?php get_header(); 
// TODO:
// we should consider making the places and artists post types more dynamic
// rather than using archive pages to maintain unique layouts between the two
// potential idea:
// create a conditional on if the_post() is place or artist post types
// the result would pull in whatever template part from the templates folder 
// this will keep the post type layouts unique without requiring two different archives
?>

<section class="artist__gallery wrapper">

  <?php while(have_posts()) {
    the_post(); ?>
    
    <div class="artist__card">
      <div class="artist__image"><?php the_post_thumbnail(); ?></div>
      <h2 class="artist__name"><?php the_title(); ?></h2>
      <a href="<?php the_permalink(); ?>" class="artist__link">Read more</a>
    </div>
  <?php }; ?>

</section>

<?php get_footer(); ?>