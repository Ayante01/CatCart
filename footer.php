    <footer>
    
      <div class="col footer-cat-small">
          <img
            src="<?php echo get_template_directory_uri()."/imgs/FOOOTER-CAT-SMALL.png"; ?>"
            alt="FooterCatSmall"
            class="mini-cat"
          />
      </div>
      <div class="container-footer row">
        <div class="col footer-cat">
          <img
            src="<?php echo get_template_directory_uri()."/imgs/FOOTER-CAT-BIG.png"; ?>"
            alt="FooterCat"
            class="img-fluid"
          />
        </div>
        <div class="col-7 stay-in-touch">
          <div class="row">
            <div class="col footer-row-one">
              <h2>Stay in touch!</h2>
              <p class="footer-p">
                Subscribe for all offers and updates we have for you and your
                cat. We are glad to be part of your meowy family
              </p>
              <?php echo do_shortcode( '[wpforms id="119" title="false"]' )?>
            </div>
            <div class="row footer-nav-container">
              <div class="col-3 footer-nav d-flex flex-column">
                <a href="/home" class="hvr-bob">
                  <p class="footer-a-text">Home</p>
                </a>
                <a href="/food-and-treats" class="hvr-bob">
                  <p class="footer-a-text">Food & treats</p>
                </a>
                <a href="/bed-and-chill" class="hvr-bob">
                  <p class="footer-a-text">Bed & chill</p>
                </a>
              </div>
              <div class="col-3 footer-nav second-row d-flex flex-column">
                <a href="/tips" class="hvr-bob">
                  <p class="footer-a-text">Tips</p>
                </a>
                <a href="/contact" class="hvr-bob">
                  <p class="footer-a-text">Contact</p>
                </a>
              </div>
              <div class="col-3 d-flex justify-content-between align-items-end social-medias">
                <a href="#">
                  <img
                  src="<?php echo get_template_directory_uri()."/imgs/facebook.svg"; ?>"
                  alt="Facebook"
                  class="social-icon hvr-grow"/>
                </a>
                <a href="#">
                  <img
                  src="<?php echo get_template_directory_uri()."/imgs/instagram.svg"; ?>"
                  alt="Instagram"
                  class="social-icon insta hvr-grow"/>
                </a>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex flex-column bottom">
        <div class="d-flex align-self-center copy">
          <img class="copy-img " src="<?php echo get_template_directory_uri()."/imgs/copyright.svg"; ?>" alt="Copy" />
          <p class="copy-text ">Copyright 2021, Cat Cart. All rights reserved</p>
        </div>
        <img src="<?php echo get_template_directory_uri()."/imgs/CORNER-RIGHT.png"; ?>" alt="Vector" class="img-fluid vector align-self-end" />
        <img src="<?php echo get_template_directory_uri()."/imgs/CORNER-RIGHT-SMALL.png"; ?>" alt="Vector" class="img-fluid vector-small align-self-end" />
      </div>
    </footer>
  </body>
</html>
