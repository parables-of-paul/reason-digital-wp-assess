<link href="<?php
    echo get_template_directory_uri() . '/assets/styles/imgText.css'
?>" rel="stylesheet" />

<?php

$img_text_img = get_field('image_text_image');
$img_text_heading = get_field('imgtext_heading');
$img_text_body = get_field('imgtext_text');
$img_text_button_text = get_field('txt_img_button_text');
$img_text_button_url = get_field('txt_img_button_url');

?>
<div class="image-text__wrapper">
    <div class="image-text__image">
      <img src="
      <?php
        echo esc_url($img_text_img['url']);
      ?>
      " alt="<?php
      echo esc_attr($img_text_img['alt']);
      ?>" />
    </div>
    <div class="image-text__text-wrapper">
      <h2 class="image-text__heading">
        <?php
        echo $img_text_heading
        ?>
      </h2>
      <p class="image-text__body">
        <?php
        echo $img_text_body
        ?>
      </p>
      <a href="<?php
    echo $img_text_button_url;
    ?>">
        <button class="green-on-white">
        <?php
            echo $img_text_button_text
        ?>
        </button>
    </a>
    </div>
  </div>