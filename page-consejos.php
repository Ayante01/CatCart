<?php get_header(); ?>
<section>
    <div class="watch-tips hero-tips">
      <div class="container-fluid row watch-tips-container">
          <div class="d-flex justify-content-flex-start breadcrumb align-items-center">
            <a href="./home">
                <img src="<?php echo get_template_directory_uri()."/imgs/home.svg"; ?>" alt="Home" class="home-breadcrumb hvr-float">
            </a>
            <p class="breadcrumb-text active">I</p>
            <a href="#">
                <p class="breadcrumb-text active hvr-float">Consejos</p>
            </a>
        </div>
        <div class="col-5 watch-tips-col animate__animated animate__backInRight">
          <p class="watch-tips-title mt-custom">
          “ Quizás una de las razones por las que nos fascinan los gatos es por como
            un animal tan pequeño puede contener tanta independencia, dignidad y libertad.
            de espíritu. ”
          </p>
        </div>
        </div>
    </div>
    <div class="news-tips">
        <div class="news-container">
            <h2 class='tips-title'>Noticias de hoy</h2>
            <h3 class="h3-tips col-6"><?php the_field('today_second_title'); ?></h3>
            <div class="d-flex justify-content-between tips-columns">
                <div class="col-5 tips-news-text-container">
                    <p class="hashtag">#salud</p>
                    <p class="tips-left-text"><?php the_field('body_one'); ?></p>
                </div>
                <div class="col-5 tips-news-text-container">
                <p class="tips-left-text"><?php the_field('body_two'); ?></p>
                <h4 class="hashtag resourse">Recurso de: https://www.purina.com/<br>articles/cat/health/guide-to-cat-hydration</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="articles news-container">
        <h4 class="article-h4">Articulos destacados sobre gatos</h4>
        <div class="d-flex justify-content-between tips-card-col">
        <?php
                        //get services
                        $args = array(
                            'post_type' => 'page',
                            'posts_per_page' => -1,
                            'post_parent' => $post->ID,
                            'order' => 'ASC',
                            'orderby' => 'menu_order'
                        );

                        $the_query = new WP_Query($args);

                        if( $the_query->have_posts() ) :

                        while( $the_query-> have_posts() ) : $the_query->the_post();
            ?>
            <div class="article-card hvr-float">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" alt="Cat" class="article-image" />
                <div class="card-text-container">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="hashtag">#salud</p>
                    <p class="card-text"><?php the_content(); ?></p>
                    <div class="d-flex justify-content-end">
                        <a href="<?php the_permalink(); ?>" >
                            <button class="card-btn hvr-grow">lee mas</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile;
                else :
                    echo "<p>no content to show here</p>";
            endif; ?>
        
        </div>
    </div>
</section>

<?php get_footer(); ?>