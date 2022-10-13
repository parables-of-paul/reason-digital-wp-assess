<link href="<?php
    echo get_template_directory_uri() . '/assets/styles/events.css'
?>" rel="stylesheet" />
<div class="events__wrapper">
    <div class="events-details__wrapper">
        <h2><?php
            echo get_field('event_details')['event_title'];
        ?></h2>
        <p><?php
            echo get_field('event_details')['event_description'];
        ?></p>
        <h4>Event Starts at: 
            <?php
            echo get_field('event_details')['date__time'];
            ?></h4>
        <img src="<?php
        echo get_field('event_details')['event_image']['url']?>" alt="<?php
        echo get_field('event_details')['event_image']['alt']?>" />
    </div>
    <div class="event-map__wrapper">
        <?php
        echo get_field('event_details')['location']
        ?>
    </div>
  </div>