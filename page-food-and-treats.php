<?php get_header(); ?>

<section class="f-t-container">
    <div class="d-flex justify-content-between f-t-row-col">
        <div class="f-t-col food">
        <img
            src="<?php echo get_template_directory_uri()."/imgs/FOOD.png"; ?>"
            alt="FOOD"
            class="img-fluid f-t f-t-left"
          />
          <div class="f-t-text text-food">
            <hr class="orange-line">
            <p class="">Food</p>
          </div>
        </div>
        <div class="f-t-col">
        <img
            src="<?php echo get_template_directory_uri()."/imgs/TREATS.png"; ?>"
            alt="TREATS"
            class="img-fluid d-flex align-self-end f-t f-t-right"
          />
          <div class="f-t-text text-treats d-flex">
            <p class="d-flex align-self-end treats">Treats</p> 
            <hr class="orange-line">
          </div>
        </div> 
    </div>
</section>

<?php get_footer(); ?>