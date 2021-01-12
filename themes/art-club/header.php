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
    <h1 class="header__title">
      <a href="<?php echo site_url() ?>" class="home__link">ac.</a>
    </h1>

    <!-- TODO
      conditional styling isn't working with navigation elements
    -->
    <nav class="header__nav">
      <ul class="nav__list">
        <li class="nav__item">
          <a href="<?php echo get_post_type_archive_link('place') ?>" class="nav__link">Places</a>
        </li>
        <li class="nav__item">
          <a           
            href="<?php echo get_post_type_archive_link('artist') ?>" 
            class="nav__link"
            <?php if(get_post_type() == 'artist' or is_page('artists')) echo 'class="nav__link--current"' ?>
          >Arists</a>
        </li>
        <li class="nav__item">
          <a href="<?php echo site_url() ?>" class="nav__link">About</a>
        </li>
      </ul>
    </nav>
  </header>