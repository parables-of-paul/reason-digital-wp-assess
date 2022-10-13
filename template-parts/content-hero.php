<link href="<?php
    echo get_template_directory_uri() . '/assets/styles/hero.css'
?>" rel="stylesheet" />
<div class="hero__wrapper" style="background-image: url('<?php echo get_field('hero_image'); ?>">
    <h1 class="hero__wrapper--heading">
        <?php
            echo get_field('hero_heading');
        ?>
    </h1>
    <p class="hero__wrapper--subheading">
        <?php
            echo get_field('hero_subheading');
        ?>
    </p>
    <a href="<?php
    echo get_field('hero_button_url');
    ?>">
        <button class="red-on-white">
        <?php
            echo get_field('hero_button_text');
        ?>
        </button>
    </a>
  </div>
  