<?php
/**
 * The template for displaying all single posts.
 */

get_header(); ?>

  <div class="container-fluid container--max">
    <div class="row">
      <div class="col-12 col-md-9">
        <main class="main" role="main">

          <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('Post'); ?>>

          <header class="post__header">
            <div class="row">
              <div class="col-12 col-lg-8">
                <h1 class="h2 text-uppercase text-blue lh-100">
                  <?php the_title(); ?>
                </h1>
                <div class="post__meta">
                  <strong class="text-uppercase font-bold text-blue fw-800">Author</strong> 
                  <?php the_author(); ?>
                  <?php echo get_the_date( 'm/y' ); ?>
                </div>
              </div>
              <?php if ( has_post_thumbnail() ) : ?>
                <div class="col-12 col-lg-3 ml-auto">
                  <div class="post__thumbnail">
                    <?php the_post_thumbnail( 'large', array( 'class' => 'img-full lazyload' ) ); ?>
                  </div>
                </div>
              <?php endif; ?>

            </div>
          </header>

          <div class="mt-5 pt-5">
            <div class="row">
              <div class="col-12 col-lg-2">
              </div>
              <div class="col-12 col-lg-8">
                <?php the_content(); ?>
              </div>
              <div class="col-12 col-lg-2">
              </div>
          </div>

          </article><!-- .Post -->


          <?php endwhile; // end of the loop. ?>

        </main>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
