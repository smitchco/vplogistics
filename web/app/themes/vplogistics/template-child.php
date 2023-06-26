<?php
/**
 * Template Name: Child Template
 *
 * Template for child pages
 */

get_header(); 

while(have_posts()): the_post(); 
?>

<main>
  <section class="py-5 header__background" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, '1440x520'); ?>);">
    <div class="container-fluid container--max py-5">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-5">
          <h1 class="text-uppercase lh-100 py-md-5 h2 text-white text-shadow">
            <?php echo get_field('hero_text'); ?>
          </h1>
        </div>
        <div class="col-12 col-lg-7 mt-auto">
          <div class="px-5 pb-5">
            <h2 class="header__overline font-body mb-0 text-white text-uppercase">
              <?php the_title(); ?>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid container--max">
      <div class="row justify-content-center align-items-center">
        <div class="col-12">
          <a class="btn btn-tab" href="#quote-form">
            <?php echo get_field('top_button_text'); ?>
          </a>
        </div>
      </div>
      <div class="row py-5">
        <div class="col-12 col-lg-3">
          <h2 class="text-blue h4 text-uppercase">
            <?php echo get_field('top_content_header'); ?>
          </h2>
        </div>
        <div class="col-12 col-lg-9">
          <p><?php echo get_field('top_content_paragraph'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <?php if(get_field('video')): ?>
    <section class="py-5">
      <div class="container-fluid container--max">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 text-center">
            <div class="video__container">
              <div class="video__circles">
                <?php include( 'inc/svg/circles.svg' ); ?>
              </div>

              <iframe src='<?php echo get_field('video'); ?>' frameborder='0' allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <?php if(have_rows('bullet_points')): ?>
    <section class="py-5">
      <div class="container-fluid container--max">
        <div class="row">
          <?php 
            while(have_rows('bullet_points')): the_row(); 
          ?>
            <div class="col-12 col-lg-4">
              <h4 class="text-blue h6 text-uppercase">
                <?php echo get_sub_field('bullet_point_title') ?>
              </h4>
              <p class="p">
                <?php echo get_sub_field('bullet_point_paragraph') ?>
              </p>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="py-5">
    <div class="container-fluid container--max">
      <div class="row justify-content-center align-items-center">
        <?php if(get_field('middle_image')): ?>
          <div class="col-12 col-lg-6">
            <img src="<?php echo get_field('middle_image')['sizes']['600x600']; ?>" class="img--full"/>
          </div>
        <?php endif; ?>
        <div class="col-12 col-lg-6">
          <h3 class="text-blue text-uppercase">
            <?php echo get_field('middle_content_title'); ?>
          </h3>
          <p><?php echo get_field('middle_content_paragraph'); ?></p>
        </div>
      </div>
    </div>
  </section>
  

  <section class="py-5">
    <div class="container-fluid container--max">
      <div class="row justify-content-center align-items-center">
      <?php
        $q = new WP_Query([
          'post_type' => 'post',
          'posts_per_page' => 2,
          'order' => 'DESC',
          'orderby' => 'date'
        ]);

        while ($q->have_posts()): $q->the_post(); 
        ?>
  
        <div class="col-12 col-lg-6">
          <div class="article p-5 position-relative h-100" style="background: url(<?php the_post_thumbnail_url('400x400'); ?>);">
            <a href="<?php the_permalink(); ?>" class="card__link"></a>
            <p class="article__overline">ARTICLE</p>
            <h4 class="article__title mt-5 pt-5 p--large">
              <?php the_title(); ?>
            </h4>
          </div>
        </div>
        <?php 
          endwhile; 
          wp_reset_postdata(); 
        ?>
      </div>
    </div>
  </section>

  <section class="py-5" id="quote-form">
    <div class="container-fluid container--max">
      <div class="row">
        <div class="col-12 col-lg-3">
          <h4 class="text-blue text-uppercase">
            <?php the_title(); ?> <?php echo get_field('form_content_title'); ?>
          </h4>
          <p class="p">
            <?php echo get_field('form_content_paragraph'); ?>
          </p>
        </div>
        <div class="col-12 col-lg-9">
          <div class="pl-lg-5">
            <?php echo do_shortcode('[contact-form-7 id="56"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
endwhile; 
get_footer(); ?>