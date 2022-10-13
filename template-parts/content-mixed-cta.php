<link href="<?php
    echo get_template_directory_uri() . '/assets/styles/mixedCta.css'
?>" rel="stylesheet" />
<?php
$cta_card_1 = get_field('cta_card');
$cta_card_2 = get_field('cta_card_2');
$cta_card_3 = get_field('cta_card_3');
$cta_card_4 = get_field('cta_card_4');
?>
<div class="mixed-cta__wrapper">
    <div class="mixed-cta__heading-wrapper">
      <h2 class="mixed-cta__heading">
        <?php
            echo get_field('mixed_cta_heading');
        ?>
      </h2>
      <p class="mixed-cta__body">
        <?php
            echo get_field('mixed_cta_body');
        ?>
      </p>
    </div>
    
    <div class="mixed-cta__card-wrapper">
            <div class="cta-card">
                <h2><?php
                    echo $cta_card_1['cta_heading'];
                ?></h2>
                <p><?php
                    echo $cta_card_1['cta_card_subheading'];
                ?></p>
                <a href="<?php
                    echo $cta_card_1['cta_card_url'];
                ?>"><button class="red-on-white--border">
                    <?php
                    echo $cta_card_1['cta_card_button_text'];
                    ?>
                </button></a>
            </div>
            <div class="cta-card">
                <h2><?php
                    echo $cta_card_2['cta_heading'];
                ?></h2>
                <p><?php
                    echo $cta_card_2['cta_card_subheading'];
                ?></p>
                <a href="<?php
                    echo $cta_card_2['cta_card_url'];
                ?>"><button class="red-on-white--border">
                    <?php
                    echo $cta_card_2['cta_card_button_text'];
                    ?>
                </button></a>
            </div>
            <div class="cta-card">
                <h2><?php
                    echo $cta_card_3['cta_heading'];
                ?></h2>
                <p><?php
                    echo $cta_card_3['cta_card_subheading'];
                ?></p>
                <a href="<?php
                    echo $cta_card_3['cta_card_url'];
                ?>"><button class="red-on-white--border">
                    <?php
                    echo $cta_card_3['cta_card_button_text'];
                    ?>
                </button></a>
            </div>
            <div class="cta-card">
                <h2><?php
                    echo $cta_card_4['cta_heading'];
                ?></h2>
                <p><?php
                    echo $cta_card_4['cta_card_subheading'];
                ?></p>
                <a href="<?php
                    echo $cta_card_4['cta_card_url'];
                ?>"><button class="red-on-white--border">
                    <?php
                    echo $cta_card_4['cta_card_button_text'];
                    ?>
                </button></a>
            </div>
    </div>
    <a href="<?php
        echo get_field('mixed_cta_button_url');
        ?>" class="center">
    <button class="red-on-white center">
        <?php
        echo get_field('mixed_cta_button_text');
        ?>
    </button>
    </a>
  </div>