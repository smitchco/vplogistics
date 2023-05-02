<?php
/**
 * The footer for our theme.
 */
?>

  <footer class="footer py-5" role="contentinfo">
    <div class="container-fluid">
     
      <div class="row">
        <div class="col-12 col-md-auto">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <div class="svg svg--logo py-5">
              <?php include( 'inc/svg/logo-full.svg' ); ?>
            </div>
          </a>
        </div>
        <div class="col-12 ml-md-auto col-md-auto">
          <div class="position-relative">
            <?php include( 'inc/svg/truck-outline.svg' ); ?>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3">
          <ul class="p--med footer__list">
            <li>
              <h4 class="text-gray p--small">Contact</h4>
              1909 S Waukegan Road<br/>
              Waukegan, IL 60085
          </li>
          <li>
            <a href="mailto:info@vplogistics.com" class="text-white">
              info@vplogistics.com
            </a>
          </li>
          <li>
            <a href="tel:8667910372" class="text-white">
              (866) 791-0372
            </a>
          </li>


        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <h4 class="text-gray p--small">Logistics Program</h4>
          <ul class="p--med footer__list">
            <li>Expedited</li>
            <li>Drayage</li>
            <li>Truckload</li>
            <li>LTL | Partial</li>
            <li>Specialized Services</li>
            <li>Cross Border</li>
            <li>Temperature Controlled</li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <h4 class="text-gray p--small">Approach</h4>
          <ul class="p--med footer__list">
            <li>Carrier Network</li>
            <li>Asset-based</li>
            <li>Operations</li>
          </ul>

          <h4 class="text-gray p--small mt-5">Company</h4>
          <ul class="p--med footer__list">
            <li>About VPL</li>
            <li>Careers</li>
            <li>History</li>
            <li>Culture</li>
            <li>Trucking Awesome</li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          
          <a href="" class="btn btn-primary btn-block btn-lg mb-3">Contact Us</a>
          <a href="" class="btn btn-primary btn-block btn-lg mb-3">Join Our Network</a>
          <a href="" class="btn btn-secondary btn-block btn-lg mb-3">FAQs</a>
          <a href="" class="btn btn-primary btn-block btn-lg mb-3">Request A Quote</a>

        </div>
      </div>

      <div class="row">
        <div class="col-auto mt-5">
          <p class="text-gray p--med">&copy; Copyright <?php echo date('Y'); ?> VPLogistics</p>
        </div>
        <div class="col-auto mt-5">
          <ul class="p--med text-gray footer__list">
            <li class="d-inline-block ml-3">Terms &amp; Conditions</li> 
            <li class="d-inline-block ml-3">Privacy Policy</li>
            <li class="d-inline-block ml-3">Do Not Sell Or Share My Information</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>
</html>
