<?php 
/* Template Name: Article */
get_header(); ?>

<section>
<?php while( have_posts() ) : the_post(); ?>
    <div class="article" style="background:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>);">
        <div class="d-flex justify-content-flex-start breadcrumb align-items-center container-fluid">
            <a href="./home">
                <img src="<?php echo get_template_directory_uri()."/imgs/home.svg"; ?>" alt="Home" class="home-breadcrumb hvr-float">
            </a>
            <p class="breadcrumb-text active">I</p>
            <a href="../tips">
                <p class="breadcrumb-text hvr-float">Tips</p>
            </a>
            <p class="breadcrumb-text active">I</p>
            <a href="#">
                <p class="breadcrumb-text active hvr-float">Features cat articles</p>
            </a>
        </div>
    </div>
    <div class="news-tips">
        <div class="news-container">
            <h2 class='tips-title'><?php the_title(); ?></h2>
            <h3 class="h3-tips col-6"><?php the_field('second_title'); ?></h3>
            <div class="d-flex justify-content-between tips-columns">
                <div class="col-5 tips-news-text-container">
                    <p class="hashtag">#health</p>
                    <p class="tips-left-text"><?php the_field('body_one'); ?></p>
                </div>
                <div class="col-5 tips-news-text-container">
                <p class="tips-left-text"><?php the_field('body_two'); ?></p>
                <h4 class="hashtag resourse">Resource from: https://www.purina.com/<br>articles/cat/health/guide-to-cat-hydration</h4>
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
<?php endwhile; ?>
</section>