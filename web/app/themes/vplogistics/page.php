<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>

<main class="main" role="main">

  <div class="container-fluid container--max">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/page' ); ?>

    <?php endwhile; // end of the loop. ?>

  </div>
</main><!-- .Main -->

<?php get_footer(); ?>
