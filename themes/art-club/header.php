<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <title>Art Club</title>
</head>

<body>
  <header class="wrapper">
    <h1 class="header__title">ac.</h1>
    <nav class="header__nav">
      <ul class="nav__list">
        <li class="nav__item"><a href="<?php echo get_post_type_archive_link('place') ?>" class="nav__link">Places</a></li>
        <li class="nav__item"><a href="<?php echo site_url('/artists') ?>" class="nav__link">Arists</a></li>
        <!-- <li class="nav__item"><a href="#" class="nav__link">Artwork</a></li> -->
      </ul>
    </nav>
  </header>