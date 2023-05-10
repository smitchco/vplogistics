<?php
/**
 * A custom template for the front page
 */

get_header();

while(have_posts()): the_post(); 

?>

  <main class="main" role="main">

  <section class="pt-5 container--home-hero">
    <div class="container-fluid container--max">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-6 py-5">
          <h1 class="header__title text-uppercase lh-100 py-5">We've Got It from Here</h1>
        </div>
        <div class="col-12 col-lg-6 bg-blue">
          <div class="bg-blue text-white p-5">
            <p>When you partner with experts, you ship in confidence every step of the way. Our total transportation solutions scale to meet your business needs. VP Logistics is a bonded asset, third-party logistics provider. Backed by years of experience, we know first-hand what it takes to set your supply chain apart.</p>

            <a href="" class="btn-line">Request A Quote</a>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="carousel--home bg-blue">
    <div class="container-fluid container--max px-0">
      <div class="row mx-0 justify-content-center">
        <?php
        while (have_rows('homepage_slider')): 
          the_row(); 
        ?>
          <div class="col text-white carousel__slide overflow-hidden px-0" style="background-image: url(<?php echo wp_get_attachment_image_src(get_sub_field('slider_image')['ID'], 'square_medium')[0]; ?>)">
            <div class="card card--min p-3 d-flex h-100">
              <a href="http://www.google.com" class="card__link"></a>
              <div class="card__body h-100 d-flex flex-column">
                <h4 class="p card__overline mb-auto lh-100">
                  <span class="card__overline__title py-3">
                    <?php echo get_sub_field('slider_title'); ?>
                  </span>
                </h4>
                <p class="lh-100 mt-auto p--small pb-0 mb-0 card__content pb-5">
                  <?php echo get_sub_field('slider_content'); ?>
                </p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>


  <section class="py-5">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-9">
          <p class="p--large">
            VP Logistics is committed to ensuring your shipment arrives on time, in perfect condition and at a capacity that makes sense to you &mdash; full truckload, partial truckload (LTL), expedited, drayage and intermodal. Your peace of mind is our road map, every step of the way.
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="py-5">
    <div class="container-fluid px-0">
      <div class="row mx-0">
        <div class="col-12 px-0">
          <div class="swiper-container swiper-container--article">
            <div class="swiper-wrapper">
              <?php
              
              $q = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 10,
                'order' => 'DESC',
                'orderby' => 'date'
              ]);

              while ($q->have_posts()): $q->the_post(); 
              ?>
                <div class="swiper-slide text-white">
                  <div class="article p-5 position-relative h-100" style="background: url(<?php the_post_thumbnail_url('square_large'); ?>);">
                    <a href="<?php the_permalink(); ?>" class="card__link"></a>
                    <p class="article__overline">ARTICLE</p>
                    <h4 class="article__title mt-5 pt-5">
                      <?php the_title(); ?>
                    </h4>
                  </div>
                </div>
              <?php endwhile; 
              wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container-fluid container--max">
      <div class="row justify-content-center">

        <div class="col-12 col-md-4 col-lg-3">
          <h3 class="h6 text-uppercase text-blue">Solutions Driven</h3>
          <p class="p--small">Another day, another customized shipping solution. Get moving with on-time shipping, real-time visibility and dedicated personal service.</p>
          <a href="" class="btn-circle btn-lg mt-5"><i></i>Request A Quote</a>

        </div>

        <div class="col-12 col-md-4 col-lg-3">
          <h3 class="h6 text-uppercase text-blue">Performance Driven</h3>
          <p class="p--small">Turn your supply chain into a competitive advantage. Learn how we connect a nationwide network with constantly-evolving technology.</p>
          <a href="" class="btn-circle btn-lg mt-5"><i></i>Learn More</a>

        </div>

        <div class="col-12 col-md-4 col-lg-3">
          <h3 class="h6 text-uppercase text-blue">Value Driven</h3>
          <p class="p--small">At VP Logistics, we take every shipment personally. Our teams are committed to industry-leading excellence and customer satisfaction.</p>
          <a href="" class="btn-circle btn-lg mt-5"><i></i>Get To Know Us</a>

        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid p-0">
      <div class="row mx-0 h-100">
        <?php 
          $i = 0;

          while(have_rows('shippers_carriers_section')): 
          the_row(); 

          $i++;

          $borderClass = $i === 1 ? 'border-blue-light' : 'border-green';
          
        ?>
          <div class="col-12 col-md-6 px-0">
            <div class="text-white p-5 text-center d-flex align-items-center justify-content-center flex-column <?php echo $borderClass; ?>" style="height: 50vw; max-height: 600px; background-image: url(<?php echo wp_get_attachment_image_src(get_sub_field('card_background_image')['ID'], 'square_medium')[0]; ?>)">
              <h3 class="text-uppercase"><?php echo get_sub_field('card_title'); ?></h3>
              <p><?php echo get_sub_field('card_content'); ?></p>
              <a href="<?php echo get_sub_field('card_button_link'); ?>" class="btn btn-lg mt-4 <?php echo $i === 1 ? 'btn-primary' : 'btn-tertiary'; ?>"><?php echo get_sub_field('card_button_text'); ?></a>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
    </div>

  </section>

  <section class="py-5">
    <div class="container-fluid container--max">
      <div class="row">
        <div class="col-12 col-md-6 py-5">
          <h3 class="h1 text-blue-light lh-100 text-uppercase"><strong>Join A Team of Thinkers &amp; Doers.</strong></h1>
          <a href="" class="btn btn-primary btn-lg">Contact Us</a>

        </div>
        <div class="col-12 col-md-6 py-5">
          <h3>Who says logistics can't be fun</h3>
          <p>We're busy shaping the future. If you're a problem solver who values personal connections and transformational technology, we'd love to meet you.</p>
        </div>
      </div>
    </div>
  </section>



 

  </main><!-- .Main -->

<?php 

          endwhile; 
          get_footer(); ?>
