<?php
/**
 * Template Name: Parent Template
 *
 * Template for parent pages
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



<main class="main" role="main">
  <div class="container-fluid container--max">
    <section>
      <div class="container-fluid container--max px-0">
        <div class="row mx-0">
          <?php
            $q = new WP_Query([
              'post_type' => 'page',
              'post_parent' => $post->ID,
              'posts_per_page' => -1
            ]);

            while ($q->have_posts()): $q->the_post();

            ?>
              <div class="col-12 col-md-4 text-white carousel__slide overflow-hidden px-0" style="background-image: url(<?php echo wp_get_attachment_image_src(get_sub_field('slider_image')['ID'], 'square_medium')[0]; ?>)">
                <div class="card card--min p-3 d-flex h-100">
                  <a href="<?php echo the_permalink(); ?>" class="card__link"></a>
                  <div class="card__body h-100 d-flex flex-column">
                    <h4 class="p card__overline mb-auto lh-100 font-body">
                      <span class="card__overline__title py-3 font-body">
                        <?php the_title(); ?>
                      </span>
                    </h4>

                    <p class="lh-100 mt-auto p--small pb-0 mb-0 card__content py-5">
                      <?php //echo get_sub_field('slider_content'); ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>

            <div class="col-12 col-md-4 px-0">
              <div class="row flex-column">
                
                <div class="col">
                  <div class="p-5 text-center d-flex align-items-center justify-content-center flex-column " style="background-image: url(<?php echo wp_get_attachment_image_src(get_sub_field('card_background_image')['ID'], 'square_medium')[0]; ?>)">
                    <h3 class="text-uppercase">
                      Carriers
                    </h3>
                  </div>
                </div>

                <div class="col">
                  <div class="p-5 text-center d-flex align-items-center justify-content-center flex-column " style="background-image: url(<?php echo wp_get_attachment_image_src(get_sub_field('card_background_image')['ID'], 'square_medium')[0]; ?>)">
                    <h3 class="text-uppercase">
                      Shippers
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
