<?php
/**
 * A custom template for the front page
 */

get_header(); ?>

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
    <div class="container-fluid container--max">
      <div class="row justify-content-center">
        <?php for ($i = 1; $i <= 7; $i++): ?>
          <div class="col text-white bg-blue-<?php echo $i; ?> py-5 carousel__slide">
            <div class="overflow-hidden">
              <h4>Slide <?php echo $i; ?></h4>
            </div>
          </div>
        <?php endfor; ?>
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
              <?php for ($i = 1; $i <= 10; $i++): ?>
                <div class="swiper-slide">
                  <div class="article p-5 bg-blue-<?php echo $i; ?> ">
                    <p class="article__overline">ARTICLE</p>
                    <h4 class="article__title">5 Logistics Technology Trends to Follow in 2023</h4>
                  </div>
                </div>
              <?php endfor; ?>
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
        <div class="col-12 col-md-6">
          <div class="outline-hover-blue-light p-5 text-center h-100">
            <h3 class="text-uppercase">Shippers</h3>
            <p>Go the extra mile in today's complex freight market. Manage your costs with unmatched quality, speed and integration.</p>
            <a href="" class="btn btn-primary btn-lg mt-4">Ship With Us</a>

          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="outline-hover-green p-5 text-center h-100">
            <h3 class="text-uppercase">Carriers</h3>
            <p>Our carriers set us apart. Thanks to our reliable, coast-to-coast network, we're growing to become one of the nation's Top 100 freight brokerages.</p>
            <a href="" class="btn btn-tertiary btn-lg mt-4">Partner With Us</a>

          </div>
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

<?php get_footer(); ?>
