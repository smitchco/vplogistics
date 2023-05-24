<?php
/**
 * Template Name: Child Template
 *
 * Template for child pages
 */

get_header(); ?>

<main>
  <section class="pt-5">
    <div class="container-fluid container--max">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-6 py-md-5">
          <h1 class="header__title text-uppercase lh-100 py-md-5">
            <?php echo get_field('hero_text'); ?>
          </h1>
        </div>
        <div class="col-12 col-lg-6">
          <div class="p-5">

            OUR SERVICES
            
            <?php the_content(); ?>

          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
