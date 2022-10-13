<?php
   get_header();
   ?>
   <section id="primary" class="content-area">
		<main id="main" class="site-main">
	   <?php
        get_template_part('template-parts/content-hero');
        get_template_part('template-parts/content-events');
        get_template_part('template-parts/content-txtimg');
    ?>
        </main>
    </section>
<?php
    get_footer();
    ?>