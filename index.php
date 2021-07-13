<?php get_header(); ?>

    <section class="container-fluid">
      <div class="row class pc-view">
        <div class="col-1 v-container water-mark">
          <p class="v-text">premium treat</p>
          <p class="v-text">high-quality brands</p>
        </div>
        <div class="col-5 title-container">
          <h1 class="main-title">
            <span class="h1-start">beware to give your cat the perfect</span>
            Health <span class="h1-mid">&</span>
            <span class="h1-end">Comfy</span>
          </h1>

          <div class="shop-btn hvr-forward">
            <a href="https://dev-catcartshop.pantheonsite.io/">
              <div
                class="btn-one d-flex justify-content-center align-items-center"
              >
                <p class="shop-text">shop now</p>
                <img src="<?php echo get_template_directory_uri()."/imgs/arrow.svg"; ?>" alt="Arrow" class="arrow-one" />
              </div>
            </a>
          </div>
        </div>
        <div class="col-6">
          <img src="<?php echo get_template_directory_uri()."/imgs/IMG-HERO.png"; ?>" alt="Cat" class="img-fluid img-hero" />
        </div>
      </div>
    </section>

    <section>
    <div class="mobile-view ">  
      <h1 class="main-title">
            <span class="h1-start">beware to give your cat the perfect</span>
            Health <span class="h1-mid">&</span>
            <span class="h1-end">Comfy</span>
          </h1>
          <img src="<?php echo get_template_directory_uri()."/imgs/IMG-HERO-SMALL.png"; ?>" alt="Cat" class="small-cat-hero align-self-end" />
          <div class="shop-btn">
            <a href="#">
              <div
                class="btn-one d-flex justify-content-center align-items-center"
              >
                <p class="shop-text">shop now</p>
                <img src="<?php echo get_template_directory_uri()."/imgs/arrow.svg"; ?>" alt="Arrow" class="arrow-one" />
              </div>
            </a>
          </div>
      </div>
    </section>

    <section class="watch-tips">
      <div class="container-fluid row watch-tips-container">
        <div class="col-5 watch-tips-col">
          <p class="watch-tips-title">
            “ Perhaps one reason we are fascinated by cats is because such a
            small animal can contain so much independence, dignity, and freedom
            of spirit. ”
          </p>
          <div class="watch-tips-btn hvr-forward">
            <a href="./tips">
              <div class="btn-two d-flex justify-content-center align-items-center">
                <p class="watch-tips-text">Watch tips</p>
                <img src="<?php echo get_template_directory_uri()."/imgs/arrow.svg"; ?>" alt="Arrow" class="arrow-two" />
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="container-fluid">
      <div class="row">
        <div class="col-5 v-container how-we-work">
          <h2>How we work?</h2>
          <p class="how-we-work-p">
          Giving your cat the best treatment will make him the happiest.
          You’ll be able to find high-quality products to feed him, but also give him the space he deserves.
          As long as your cat is healthy and comfortable, you will be too.    
          </p>
          <div class="list-specify">
            <div class="d-flex services">
              <div class="d-flex align-items-end">
                <img
                  src="<?php echo get_template_directory_uri()."/imgs/delivery.svg"; ?>"
                  alt="Delivery"
                  class="delivery"
                />
              </div>
              <div>
                <h3>Free shipping</h3>
                <p class="p-services">
                Your order will have free shipping with no limited amount to it.
                With free shipping, your order is delivered five to eight days after all your items are available to ship, including pre-ordered items.
                </p>
              </div>
            </div>
            <div class="d-flex services">
              <div class="d-flex align-items-end">
                <img src="<?php echo get_template_directory_uri()."/imgs/phone.svg"; ?>"
                alt="Phone" class="phone" />
              </div>
              <div>
                <h3>24/7 support</h3>
                <p class="p-services">
                  You will get help and find answers to any question as soon as they come up with your mind on 24/7 and in real-time. Just
                  <a href="./contact">contact us.</a> Besides, you can ask to our vet every doubt about any product your cat needs.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 wool-balls-container">
          <img
            src="<?php echo get_template_directory_uri()."/imgs/IMG-HOW-WE-WORK.png"; ?>"
            alt="wool-balls"
            class="img-fluid how-we-work-img"
          />
        </div>
      </div>
    </section>
    <?php get_footer(); ?>