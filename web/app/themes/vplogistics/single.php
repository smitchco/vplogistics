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

          <article id="post-<?php the_ID(); ?>" class="pb-5" <?php post_class('Post'); ?>>

          <header class="post__header" style="border-bottom: 1px solid #E1E1E1;">
            <div class="row">
              <div class="col-12 col-lg-7">
                <h1 class="h2 text-uppercase text-blue lh-100 mb-0 pb-0 pr-lg-5">
                  <?php the_title(); ?>
                </h1>
                <div class="post__meta py-5">
                  <strong class="text-uppercase font-bold text-blue fw-800">Author</strong> 
                  <?php the_author(); ?>
                  <?php echo get_the_date( 'm/y' ); ?>
                </div>
              </div>
              <?php if ( has_post_thumbnail() ) : ?>
                <div class="col-12 col-lg-5 ml-auto">
                  <div class="post__thumbnail">
                    <?php the_post_thumbnail( '500x350', array( 'class' => 'img--full lazyload' ) ); ?>
                  </div>
                </div>
              <?php endif; ?>

            </div>
          </header>

          <div class="mt-5 pt-5">
            <div class="row">
              <div class="col-12 col-lg-1 text-lg-center">
                <div style="position: sticky; top: 30px;" class="pb-5 pb-lg-0">
                  <a href="" class="d-lg-block p-3">
                    <i class="fa-brands fa-twitter fa-2xl" style="color: #1DA1F2;"></i>
                  </a>
                  <a href="" class="d-lg-block p-3">
                    <i class="fa-brands fa-facebook fa-2xl" style="color: #1877F2;"></i>
                  </a>
                  <a href="" class="d-lg-block p-3">
                    <i class="fa-brands fa-instagram fa-2xl" style="color: #000100;"></i>
                  </a>
                  <a href="" class="d-lg-block p-3">
                    <i class="fa-brands fa-linkedin fa-2xl" style="color: #0A66C2;"></i>
                  </a>
                  <a href="" class="d-lg-block p-3">
                    <i class="fa-brands fa-google-plus-g fa-2xl" style="color: #C55646;"></i>
                  </a>
                </div>
              </div>
              <div class="col-12 col-lg-7">
                <div class="article-content">
                  <?php the_content(); ?>
                </div>
              </div>
              <div class="col-12 col-lg-3">
                <div class="bg-gray-light p-4 ml-xl-5" style="position: sticky; top: 30px;">
                  <img src="<?php echo wp_get_attachment_image_src(186, '300x150'); ?>" class="img-full" />
                  <h4 class="p--med font-body">Join Our Network</h4>
                  <p class="p--med mb-0">All carriers must apply to be a part of our network. See what it takes to join our team.</p>
                  <a href="" class="btn btn-primary mt-3 d-block">Apply Today</a>
                </div>
              </div>
            </div>

          </article><!-- .Post -->


          <?php endwhile; // end of the loop. ?>

        </main>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
