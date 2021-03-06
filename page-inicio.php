<?php get_header(); ?>

    <section class="container-fluid">
      <div class="row class pc-view">
        <div class="col-1 v-container water-mark">
          <p class="v-text">trato de calidad</p>
          <p class="v-text">marcas de alta-calidad</p>
        </div>
        <div class="col-5 title-container animate__animated animate__backInLeft">
          <h1 class="main-title">
            <span class="h1-start">cuida de darle a tu gato la perfecta</span>
            Salud <span class="h1-mid">&</span>
            <span class="h1-end">Comfort</span>
          </h1>
          
          <div class="shop-btn hvr-forward">
            <a href="https://dev-catcartshop.pantheonsite.io/">
              <div
                class="btn-one d-flex justify-content-center align-items-center"
              >
                <p class="shop-text">compra ahora</p>
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
            <span class="h1-start">cuida de darle a tu gato la perfecta</span>
            Salud <span class="h1-mid">&</span>
            <span class="h1-end">Comodidad</span>
          </h1>
          <img src="<?php echo get_template_directory_uri()."/imgs/IMG-HERO-SMALL.png"; ?>" alt="Cat" class="small-cat-hero align-self-end" />
          <div class="shop-btn">
            <a href="#">
              <div
                class="btn-one d-flex justify-content-center align-items-center"
              >
                <p class="shop-text">compra ahora</p>
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
            ??? Quiz??s una de las razones por las que nos fascinan los gatos es por como
              un animal tan peque??o puede contener tanta independencia, dignidad y libertad.
              de esp??ritu. ???
          </p>
          <div class="watch-tips-btn hvr-forward">
            <a href="#">
              <div class="btn-two d-flex justify-content-center align-items-center">
                <p class="watch-tips-text">Ve los tips</p>
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
          <h2>Como trabajamos?</h2>
          <p class="how-we-work-p">
            Darle a tu gato el mejor trato lo har?? siempre m??s feliz.
            Podr?? encontrar productos de alta calidad para alimentarlo, pero
            tambi??n dale el espacio que se merece. Siempre que tu gato est?? sano
            y c??modo t?? tambi??n lo estar??s.
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
                <h3>Envio Gratis</h3>
                <p class="p-services">
                  Tu pedido tendr?? env??o gratuito sin cantidad limitada.
                  Con env??o gratuito, su pedido se entregara en un plazo de cinco a ocho
                  d??as despu??s de que todos sus art??culos est??n disponibles para enviar, incluidos
                  art??culos por adelantado.
                </p>
              </div>
            </div>
            <div class="d-flex services">
              <div class="d-flex align-items-end">
                <img src="<?php echo get_template_directory_uri()."/imgs/phone.svg"; ?>"
                alt="Phone" class="phone" />
              </div>
              <div>
                <h3>Apoyo 24/7</h3>
                <p class="p-services">
                 Recibir?? ayuda y encontrar?? respuestas a cualquier pregunta tan pronto como
                  vienen a tu mente las 24 horas del d??a, los 7 d??as de la semana y en tiempo real. S??lo
                  <a href="#">contactanos.</a>Adem??s, puedes preguntar a nuestro veterinario
                  cualquier duda que tengas sobre los productos que tu gato necesite.
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
    
    <?php get_footer('sp'); ?>