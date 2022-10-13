<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body <?php body_class(); ?>>

<div class="wrap">
  <div id="primary" class="content-area">
    <?php
   get_header();
   ?>
   <section id="primary" class="content-area">
		<main id="main" class="site-main">
    <?php if(have_posts()) : 
        get_template_part('template-parts/content', 'hero');
        get_template_part('template-parts/content', 'txtimg');
        get_template_part('template-parts/content', 'help-form');
        get_template_part('template-parts/content', 'mixed-cta');
    ?>
    <?php
  endif;
  ?>
        </main>
    </section>
<?php
    get_footer();
    ?>
  </div><!-- #primary -->
</div><!-- .wrap -->
</body>
</html>