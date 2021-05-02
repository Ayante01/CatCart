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
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="<?php echo get_template_directory_uri()."/imgs/LOGO.png"; ?>" alt="Logo" class="img-fluid logo-img" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent"
            aria-controls="navbarToggleExternalContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse"
            id="navbarToggleExternalContent"
          >
            <ul class="cat-ul navbar-nav">
              <li class="nav-item">
                <a class="nav-link active nav-text" aria-current="page" href="#"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link nav-text" href="#">Food and treats</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-text" href="#">Bed and chill</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-text" href="#">Tips</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-text" href="#">Contact</a>
              </li>
              <img
                src="<?php echo get_template_directory_uri()."/imgs/search_black_24dp.svg"; ?>"
                alt="Search"
                class="nav-icon img-fluid"
              />
              <img
                src="<?php echo get_template_directory_uri()."/imgs/shopping_cart_black_24dp.svg"; ?>"
                alt="Cart"
                class="nav-icon img-fluid"
              />
            </ul>
          </div>
        </div>
      </nav>
    </header>