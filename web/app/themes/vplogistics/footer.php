<?php
/**
 * The footer for our theme.
 */
?>

  <footer class="footer py-5" role="contentinfo">
    <div class="container-fluid">
     
      <div class="row">
        <div class="col-12 col-md-6">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <div class="svg svg--logo py-5">
              <?php include( 'inc/svg/logo-full.svg' ); ?>
            </div>
          </a>
        </div>
        <div class="col-12 col-md-6">
          <h4 class="text-uppercase text-white h2 lh-100">We've Got It from Here</h4>
          <?php include( 'inc/svg/truck-outline.svg' ); ?>

        </div>
      </div>
      
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3">
          <ul class="p">
            <li>
              <h4>Contact</h4>
              1909 S Waukegan Road
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
          <ul class="p">
            <li>Logistics Program</li>
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
          <ul class="p">
            <li>Approach</li>
            <li>Carrier Network</li>
            <li>Asset-based</li>
            <li>Operations</li>
          </ul>

          <ul class="p">
            <li>Company</li>
            <li>About VPL</li>
            <li>Careers</li>
            <li>History</li>
            <li>Culture</li>
            <li>Trucking Awesome</li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          
          <a href="" class="btn btn-primary btn-block btn-lg">Contact Us</a>
          <a href="" class="btn btn-primary btn-block btn-lg">Join Our Network</a>
          <a href="" class="btn btn-secondary btn-block btn-lg">FAQs</a>
          <a href="" class="btn btn-primary btn-block btn-lg">Request A Quote</a>

        </div>
      </div>

      <div class="row">
        <div class="col-auto">
          <p class="text-white">&copy; Copyright <?php echo date('Y'); ?> VPLogistics</p>
        </div>
        <div class="col-auto">
          <ul class="p text-white">
            <li>Terms &amp; Conditions</li> 
            <li>Privacy Policy</li>
            <li>Do Not Sell Or Share My Information</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>
</html>
