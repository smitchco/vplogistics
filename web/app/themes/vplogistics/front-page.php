<?php
/**
 * A custom template for the front page
 */

get_header(); ?>

  <main class="main" role="main">

  <section class="py-5">
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-6">
          <h1 class="header__title text-uppercase lh-100">We've Got It from Here</h1>
        </div>
        <div class="col-12 col-lg-6 bg-blue">
          <div class="bg-blue text-white p-5">
            <p>When you partner with experts, you ship in confidence every step of the way. Our total transportation solutions scale to meet your business needs. VP Logistics is a bonded asset, third-party logistics provider. Backed by years of experience, we know first-hand what it takes to set your supply chain apart.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="py-5 carousel--home">
    <div class="container-fluid">
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
          <p class="p--large">VP Logistics is committed to ensuring your shipment arrives on time, in perfect condition and at a capacity that makes sense to you &mdash; full truckload, partial truckload (LTL), expedited, drayage and intermodal. Your peace of mind is our road map, every step of the way.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12 col-md-4">
          <h3 class="h6 text-uppercase text-blue">Solutions Driven</h3>
          <p class="p--small">Another day, another customized shipping solution. Get moving with on-time shipping, real-time visibility and dedicated personal service.</p>
        </div>

        <div class="col-12 col-md-4">
          <h3 class="h6 text-uppercase text-blue">Performance Driven</h3>
          <p class="p--small">Turn your supply chain into a competitive advantage. Learn how we connect a nationwide network with constantly-evolving technology.</p>
        </div>

        <div class="col-12 col-md-4">
          <h3 class="h6 text-uppercase text-blue">Value riven</h3>
          <p class="p--small">At VP Logistics, we take every shipment personally. Our teams are committed to industry-leading excellence and customer satisfaction.</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-6 py-5">
          <h2>Shippers</h2>
          <p>Go the extra mile in today's complex freight market. Manage your costs with unmatched quality, speed and integration.</p>
        </div>
        <div class="col-12 col-md-6 py-5">
          <h2>Carriers</h2>
          <p>Our carriers set us apart. Thanks to our reliable, coast-to-coast network, we're growing to become one of the nation's Top 100 freight brokerages.</p>
        </div>
      </div>
    </div>

  </section>


  </main><!-- .Main -->

<?php get_footer(); ?>
