<?php
/**
 * The template for displaying all single posts.
 */

get_header(); ?>

  <div class="container-fluid container--max">
    <div class="row">
      <div class="col-12">
        <main class="main" role="main">

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/post' ); ?>

          <?php endwhile; // end of the loop. ?>

        </main>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
