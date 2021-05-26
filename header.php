<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body>
    <header>
      <nav class="cat-nav navbar navbar-light navbar-expand-xl">
        <div class="container-fluid d-flex justify-content-between">
          <a class="navbar-brand" href="./Home">
            <img src="<?php echo get_template_directory_uri()."/imgs/LOGO.png"; ?>" alt="Logo" class="img-fluid logo-img" />
          </a>
          <div class="d-flex">
            <img id="shop-cart-mobile"
                  src="<?php echo get_template_directory_uri()."/imgs/shopping_cart_black_24dp.svg"; ?>"
                  alt="Cart"
                  class="nav-icon img-fluid"/>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarToggleExternalContent"
              aria-controls="navbarToggleExternalContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
    
          <div
            class="collapse navbar-collapse"
            id="navbarToggleExternalContent">
            <?php
              wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 1,
              'container'         => 'div',
              'container_class'   => 'cat-ul navbar-nav',
              'container_id'      => '',
              'menu_class'        => 'navbar-nav mr-auto',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker()
              ) );
            ?>
            <img id="shop-cart-web"
                src="<?php echo get_template_directory_uri()."/imgs/shopping_cart_black_24dp.svg"; ?>"
                alt="Cart"
                class="nav-icon img-fluid"/>
          </div>
        </div>
      </nav>
    </header>