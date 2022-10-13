<link href="<?php
    echo get_template_directory_uri() . '/assets/styles/helpForm.css'
?>" rel="stylesheet" />
<div class="help-form__wrapper">
    <h2 class="help-form__heading">
        <?php
            echo get_field('help_form_heading');
        ?>
    </h2>
    <p class="help-form__subheading">
        <?php
            echo get_field('help_form_subheading');
        ?>
    </p>
    <form class="help-form__form">
      <p class="help-form__form-content">I am </p>
        <select class="help-form__dropdown--iam">
            <option label="an individual" value="individual">An Individual</option>
            <option label="a business" value="business">A Business</option>
            <option label="A Non-profit Organisation" value="npo">A Non-profit Organisation</option>
        </select>
      <p class="help-form__form-content">and I want</p>
        <select class="help-form__dropdown--iam">
            <option label="To Learn" value="learn">To learn</option>
            <option label="To Find Funding" value="funding">To Find funding</option>
            <option label="To Network" value="network">To Network</option>
        </select>
    </form>
  </div>