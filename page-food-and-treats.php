<?php get_header(); ?>

<section class="f-t-container container-fluid d-flex justify-content-between">
  <div class="f-t-col d-flex justify-content-between flex-column">
    <div class="d-flex justify-content-between">
      <h2 class="col-1 h2-f-t">Food and Treats</h2>
      <hr class="orange-line">
    </div>
      <a class="f-t-a" href="#">
        <div class="img-fluid f-t f-t-left food">
          <div class="f-t-text d-flex justify-content-end">
            <p class="text-left">Food</p>
          </div>
        </div>
      </a>
  </div>
      <a class="f-t-col" href="#">
        <div class="img-fluid f-t f-t-right treats">
          <div class="f-t-text d-flex">
              <p class="text-right">Treats</p>
          </div>
        </div>
      </a>
</section>

<?php get_footer(); ?>