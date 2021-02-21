  <!-- Start Footer -->
  <footer>
    <div class="container">
      <div class="row footer-widgets">

        <!-- Start Subscribe & Social Links Widget -->
        <div class="col-md-3">
          <div class="footer-widget mail-subscribe-widget">
            <h4>Get in touch<span class="head-line"></span></h4>
            <p>Subscribe to our forum to stay tuned for the latest updates related to <b>WCE Research Symposium on Computing!</b></p>
            <form class="subscribe">
              <input type="email" class="email" id="txtEmail" placeholder="mail@example.com">
              <a href="#subscribe" class="btn btn-lg btn-system" onclick="subscribe()">Subscribe</a>
            </form>
            <div id="subscribeResponse"></div>
          </div>
          <div class="footer-widget social-widget">
            <h4>Follow Us<span class="head-line"></span></h4>
            <ul class="social-icons">
              <li>
                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
              </li>
              <li>
                <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- .col-md-3 -->
        <!-- End Subscribe & Social Links Widget -->


        <!-- Start Twitter Widget -->
        <div class="col-md-3">
          <div class="footer-widget twitter-widget">
            <h4>Quick Links<span class="head-line"></span></h4>
            <ul>
              <li>
                <a href="asset/RSC-2018.pdf" target="_blank">e-Proceeding Download </a>
              </li>
              <li>
                <a href="about.php">About Us </a>
              </li>

              <li>
                <a href="contact.php">Contact Us </a>
              </li>
              <li>
                <a href="terms.php">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- .col-md-3 -->
        <!-- End Twitter Widget -->


        <!-- Start Flickr Widget -->
        <div class="col-md-3">
          <div class="footer-widget flickr-widget">
            <h4>External Links<span class="head-line"></span></h4>
            <ul class="flickr-list">
             <?PHP
             $sql = "select * from external_links where status='1' limit 0,9";
             $result = mysqli_query($conn, $sql);
             if(mysqli_num_rows($result)>0){
              while($row = mysqli_fetch_assoc($result))
                { ?>
                  <li>
                    <a href="<?php echo $row['ext_link'];?>" class="lightbox">
                      <img alt="<?php echo $row['link_name'];?>" src="<?php echo $row['image_link'];?>">
                    </a>
                  </li>
                <?php } } ?>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-3">
            <div class="footer-widget contact-widget">
              <h4><img src="images/acm.png" class="img-responsive" alt="WCE Research Symposium on Computing" /></h4>
              <p>WCE Research Symposium on Computing 2021 is the 5th National Level event organized by Department of Computer Science &amp; Engineering, Walchand College of Engineering, Sangli.</p>
              <ul>
                <li><span>Phone Number:</span> <?php echo $acm->SiteContact(); ?></li>
                <li><span>Email:</span> <?php echo $acm->SiteEmail(); ?></li>
                <li><span>Website:</span> http://rsc.wce.ac.in</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2021 WCE Research Symposium on Computing - All Rights Reserved <br/></p>
              </div>
              <div class="col-md-6">
                <ul class="footer-nav">
                  <li><a href="sitemap.php">Sitemap</a></li>
                  <li><a href="privacy.php">Privacy Policy</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End Copyright -->

        </div>
      </footer>
      <!-- End Footer -->
