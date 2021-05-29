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
              <form class="row form" action="">
                <input
                  class="input-text col-8"
                  type="email"
                  name="email"
                  placeholder="Enter your email address here"
                />
                <input
                  class="col-2 input-submit hvr-grow"
                  type="submit"
                  value="submit"
                />
              </form>
            </div>
            <div class="row footer-nav-container">
              <div class="col-3 footer-nav">
                <a href="#">
                  <p class="footer-a-text">Home</p>
                </a>
                <a href="#">
                  <p class="footer-a-text">Food & treats</p>
                </a>
                <a href="#">
                  <p class="footer-a-text">Bed & chill</p>
                </a>
              </div>
              <div class="col-3 footer-nav second-row">
                <a href="#">
                  <p class="footer-a-text">Tips</p>
                </a>
                <a href="#">
                  <p class="footer-a-text">Contact</p>
                </a>
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2T6ZNKLWBV"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-2T6ZNKLWBV');
    </script>
  </body>
</html>
