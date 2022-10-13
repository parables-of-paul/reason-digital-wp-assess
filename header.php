<!doctype html>
<html lang="en">
  <head>
    <script>
    const menuToggle = () => {
      const hamburgerMenu = document.querySelector('.hamburger__menu');
        const hamburgerIcon = document.querySelector('.hamburger__icon');
        hamburgerMenu.classList.toggle('open');
        hamburgerIcon.classList.toggle('open');
    };
    </script>
  <?php
    wp_head();
    ?>
    <style>
    :root {
    --good-things-red: #C0323B;
    --good-things-green: #478175;
    --good-things-teal: #497C8F;
}

@font-face {
    font-family: Rubik;
    src: url('<?php echo get_template_directory_uri() . '/assets/fonts/Rubik-Regular.ttf' ?>') format('truetype');
    font-display: swap;   
}
  * {
    font-family: 'Rubik';
    box-sizing: border-box;
  }

  a {
    text-decoration: none;
    outline: none;
    border: none;
    color: #000;
  }

  a:hover,
  a:visited {
    color: #000;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p {
    margin: 0;
  }

  .search-nav__button::before {
    background-image: url('<?php echo get_template_directory_uri() . '/assets/images/search-icon.png' ?>');
  }

  li {
    list-style-type: none;
  }
    </style>
    </head>

<body>
<div class="search-donate-nav">
    <button class="search-nav__button">
      Search
    </button>
    <div class="learn-donate__wrapper">
      <button class="learn-btn">
        Learn
      </button>
      <button class="donate-btn">
        Donate
      </button>
    </div>
  </div>
  <div id="nav">
    <a href="/"><img src="<?php echo get_template_directory_uri() . '/assets/images/good-things-logo.png' ?>" class="nav__logo" alt="Good Things Foundation Logo" /></a>
    <?php
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              
              'items_wrap' => '<div class="nav__menu-items--desktop">%3$s</div>',

            )
            );
            
            ?>
    <div class="nav-menu__items--mobile">
    <div class="hamburger__icon" onclick="menuToggle()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <?php wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              
              'items_wrap' => '<div class="hamburger__menu">%3$s</div>',

            )
            );
            ?>
    </div>
  </div>

