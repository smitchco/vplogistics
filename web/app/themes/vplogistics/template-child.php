<?php
/**
 * Template Name: Child Template
 *
 * Template for child pages
 */

get_header(); ?>

<main>
  <section class="py-5 header__background" style="background-image: url(<?php echo get_the_post_thumbnail_url($post, '1440x520'); ?>);">
    <div class="container-fluid container--max py-5">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-5">
          <h1 class="text-uppercase lh-100 py-md-5 h2 text-white text-shadow">
            It sounds complicated, because it is complicated.
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
          <button class="btn btn-tab">Request a Quote</button>
        </div>
      </div>
      <div class="row py-5">
        <div class="col-12 col-lg-3">
          <h2 class="text-blue h4 text-uppercase">
            Keep your containers on the move.
          </h2>
        </div>
        <div class="col-12 col-lg-9">
          Some refer to drayage as "the first mile." But we like call it "the make-it-or-break-it mile."" That's because setbacks at this stage affect your entire supply chain. This small but mighty leg of the intermodal journey can get complex with equipment, tight scheduling, fees and regulations. Our teams can navigate every port, nationwide.
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container-fluid container--max">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
          <img src="https://placehold.co/1200x475" class="img--full"/>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container-fluid container--max">
      <div class="row">
        <div class="col-12 col-lg-4">
          <h4 class="text-blue h6 text-uppercase">A Reliable Shipping Network</h4>
          <p class="p">VPL knows the rules and players with short-distance, local connectors. Our rock-solid relationships start here, where they matter most.</p>
        </div>
        <div class="col-12 col-lg-4">
          <h4 class="text-blue h6 text-uppercase">Advanced Transportation Technology</h4>
          <p class="p">Navigating ports and ramps with precision saves you time and money. Our drayage-specific technology gives us insight into rate analytics &mdash; so you get the best rates available.</p>
        </div>
        <div class="col-12 col-lg-4">
          <h4 class="text-blue h6 text-uppercase">Flexible Solutions</h4>
          <p class="p">The most experienced drayage teams have seen it all. We anticipate challenges all day long and keep the right resources in the right place, at the right time.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container-fluid container--max">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-6">
          <img src="https://placehold.co/600x600" class="img--full"/>
        </div>
        <div class="col-12 col-lg-6">
          <h3 class="text-blue text-uppercase">
            Leave the ports and ramps to us.
          </h3>
          <p>The best drayage partnerships come down to experience, high-touch support and leading technology. With the ever-changing landscape of transportation regulations and carriers, staying up-to-date is our full-time job.</p>
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

  <section class="py-5">
    <div class="container-fluid container--max">
      <div class="row">
        <div class="col-12 col-lg-3">
          <h4 class="text-blue text-uppercase">
            <?php the_title(); ?> Quote Request Form
          </h4>
          <p class="p">
            Let's get your container rolling. We book drayage at every ramp and port in the country. Fill out the form below &mdash; we've got the experts on standby.
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

<?php get_footer(); ?>