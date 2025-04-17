<?php   

get_header('home');
?>
      <!-- section preferred -->
      <section class="py-5 my-5 text-center preferred-section ">
        <div class="container text-center preferred-container">
          <!-- Title section -->
           <div class=" text-center preferred-title-block">
              <h2 class="fw-semibold mb-4  preferred-title"><?php echo get_theme_mod('preferred_title_setting', 'Default Title'); ?></h2>
            </div>
          <!-- images -->
          <div class="row justify-content-center align-items-center">

            <?php 
              for ($i = 1; $i <= 6; $i++) { ?>
                <!-- <div class="col-4 col-sm-4 col-md-2 mb-3"> -->
                  <?php 
                    $image_url = get_theme_mod("preferred_image_$i");
                    if ($image_url) {
                        echo '<img class="preferred-img" src="' . esc_url($image_url) . '" alt="Image ' . $i . '">';
                    } ?> 
                <!-- </div>  -->
              <?php
              }
            ?>

          </div>
        </div>
      </section>

      <!-- sections (custom post) -->
      <?php
        $query = new WP_Query( array(
          'post_type'      => 'custom_section', 
          'posts_per_page' => 4, 
          'orderby'        => 'date',
          'order'          => 'ASC',
        ) );

        if ( $query->have_posts() ) {
          $counter = 0; // Initializing the counter
          while ( $query->have_posts() ) {
            $query->the_post();
            $counter++; 

            if ( $counter == 1 || $counter == 3 ) {
                // layout for First and third post 
                ?>
                <section class="py-5">
                  <div class="container my-5">
                    <div class="row align-items-center">
                      <div class="col-md-6">
                        <h2 class="fw-semibold mb-3 control-title"><?php the_title(); ?></h2>
                        <p class="mb-4 control-text"><?php the_excerpt(); ?></p>
                        <a class="control-link" href="<?php the_permalink(); ?>">Start now</a>
                      </div>
                      <div class="col-md-6 text-center section-img-block">
                        <?php the_post_thumbnail(); ?>
                      </div>
                    </div>
                  </div>
                </section>
                <?php
            } elseif ( $counter == 2 || $counter == 4 ) {
                ?> 
                <section class="py-5">
                  <div class="container my-5">
                    <div class="row align-items-center">
                      <div class="col-md-6 text-center section-img-block">
                        <?php the_post_thumbnail(); ?>
                      </div>
                      <div class="col-md-6">
                        <h2 class="fw-semibold mb-3 market-title"><?php the_title(); ?></h2>
                        <p class="mb-4 market-text"><?php the_excerpt(); ?></p>
                        <a class="control-link" href="<?php the_permalink(); ?>">Start now</a>
                      </div>
                    </div>
                  </div>
                </section>
                <?php
            } else {
                // general layout
              ?>
                <section class="py-5">
                  <div class="container my-5">
                    <div class="row align-items-center">
                      <div class="col-md-6 text-center">
                        <?php the_post_thumbnail(); ?>
                      </div>
                      <div class="col-md-6">
                        <h2 class="fw-semibold mb-3 market-title"><?php the_title(); ?></h2>
                        <p class="mb-4 market-text"><?php the_excerpt(); ?></p>
                        <a class="control-link" href="<?php the_permalink(); ?>">Start now</a>
                      </div>
                    </div>
                  </div>
                </section> 
              <?php
            }
          }
            wp_reset_postdata(); 
          } else {
            echo 'Any post.';
        } 
      ?>
      <!-- / sections (custom post) -->

      <!-- section what can you -->
      <section class="text-center my-5 what_can_you-section">
        <div class="container text-center what_can_you-block">
          <h2 class="fw-semibold what_can_you-title"><?php echo get_theme_mod('what_can_title_setting', 'Default Title'); ?></h2>
          <div class="row">

            <?php
            global $post;
            
            $query = new WP_Query( [
              'post_type' => 'what_can_post',
              'posts_per_page' => 6,
              'orderby'        => 'ASC',
            ] );
            
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
                ?>
                  <!-- cards 'what can' section loop -->
                    <div class="col-md-4 mb-4">
                      <div class="card text-center what_can_you-card">
                        <div class="text-center py-4">
                          <?php the_post_thumbnail() ?>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title fw-semibold"><?php the_title(); ?></h5>
                          <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                      </div>
                    </div>
                  <!-- / cards 'what can' section loop -->
                <?php
              }
            } else {
              // No Posts
            }
            wp_reset_postdata(); // Сбрасываем $post
            ?>

          </div>
        </div>
      </section>

      <!-- section boost -->
      <section class="text-center my-5">
        <div class="container text-center boost-block">
          <h2 class="fw-semibold boost-title"><?php echo get_theme_mod('boost_title_setting', 'Default Title'); ?></h2>
          <div class="row">

          <?php
            global $post;
            
            $query = new WP_Query( [
              'post_type' => 'boost_post',
              'posts_per_page' => 3,
              'orderby'        => 'ASC',
            ] );
            
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
                ?>
                  <!-- cards 'boost' section loop -->
                    <div class="col-md-4 mb-4">
                      <div class="card text-center">
                        <div class="text-center py-4">
                          <?php the_post_thumbnail() ?>
                        </div>
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title fw-semibold"><?php the_title(); ?></h5>
                          <p class="card-text boost-text"><?php the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>" class="boost-link">Learn more</a>
                        </div>
                      </div>
                    </div>
                  <!-- / cards 'boost' section loop -->
                <?php
              }
            } else {
              // No Posts
            }
            wp_reset_postdata(); // Сбрасываем $post
          ?>

          </div>
        </div>
      </section>

      <!-- section revolut -->
      <section class="py-5 revolut-section">
        <div class="container my-5">
          <div class="row align-items-center">
            <?php
              $revolut_post_id = 81; // Замените 123 на ID нужного поста

              $query = new WP_Query([
                  'p' => $revolut_post_id,
                  'post_type' => 'post', // Укажите тип записи, если необходимо
              ]);

              if ($query->have_posts()) {
                  while ($query->have_posts()) {
                      $query->the_post();
                      ?>
                      <div class="col-md-6">
                        <p class="mb-4 revolut-text"><?php the_content(); ?></p>
                        <h4 class="fw-semibold py-5 mb-3"><?php the_title(); ?></h4>
                      </div>
                      <div class="col-md-6 text-center revolut-img-block">
                        <?php the_post_thumbnail(); ?>
                      </div>
                      <?php
                  }
                  wp_reset_postdata();
              } else {
                  echo 'No post.';
              }
            ?>
          </div>
        </div>
      </section>

      <!-- section most-loved -->
      <section class="py-5 most-loved-section">
        <div class="container my-5 most-loved-container">
          <div class="row align-items-center">
            <div class="d-flex justify-content-center align-items-center">
              <div class="col-md-3">

                <?php 
                  $image_url_1 = get_theme_mod("most-loved_image_1_setting");
                  if ($image_url_1) {
                    echo '<img class="img-fluid" src="' . esc_url($image_url_1) . '" alt="Image">';
                  } 
                ?> 

              </div>
              <div class="col-md-5 title-block">
                <h2 class="fw-semibold mb-3 most-loved-title"><?php echo get_theme_mod('most-loved_title_setting', 'Default Title'); ?></h2>
              </div>
              <div class="col-md-4 d-flex justify-content-between most-loved-img-block">

                <?php 
                  $image_url_2 = get_theme_mod("most-loved_image_2_setting");
                  if ($image_url_2) {
                    echo '<img class="img-fluid" src="' . esc_url($image_url_2) . '" alt="Image">';
                  } 

                  $image_url_3 = get_theme_mod("most-loved_image_3_setting");
                  if ($image_url_3) {
                    echo '<img class="img-fluid" src="' . esc_url($image_url_3) . '" alt="Image">';
                  } 
                ?> 

              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- section integrate -->
      <section class="text-center py-5">
        <div class="container integrate-container">
          <h2 class="fw-semibold mb-4 integrate-title"><?php echo get_theme_mod('integrate_title', 'Default Title'); ?></h2>
          <p class="mb-4 integrate-subtitle"><?php echo get_theme_mod('integrate_subtitle', 'subtitle text'); ?></p>
          <div class="text-center">

            <?php 
              $image_integrate = get_theme_mod("integrate_image");
              if ($image_integrate) {
                echo '<img class="img-fluid mb-4" src="' . esc_url($image_integrate) . '" alt="Image">';
              } 
            ?>

          </div>

          <!-- btn -->
          <?php
              // btn text
              $button_integrate_text = get_theme_mod('integrate_button_text', 'Click Me');

              // btn bg color
              $button_integrate_color = get_theme_mod('integrate_button_color', '#000000');
              ?>

              <button class="btn btn-integrate" style="background-color: <?php echo esc_attr($button_integrate_color); ?>;">
                  <?php echo esc_html($button_integrate_text); ?>
              </button>
          <!-- / btn -->

        </div>
      </section>

      <!-- section easy -->
      <section class="text-center py-5 easy-section">
        <div class="container easy-container">
          <h2 class="fw-semibold mb-4 easy-title"><?php echo get_theme_mod('easy_title_1', 'Default Title 1'); ?></br> <?php echo get_theme_mod('easy_title_2', 'Default Title 2'); ?></h1>
          <p class="mb-4 easy-subtitle"><?php echo get_theme_mod('easy_subtitle', 'subtitle text'); ?></p>

          <!-- btn -->
          <?php
              // btn text
              $button_easy_text = get_theme_mod('easy_button_text', 'Click Me');

              // btn bg color
              $button_easy_color = get_theme_mod('easy_button_color', '#000000');
              ?>

              <button class="btn btn-dark" style="background-color: <?php echo esc_attr($button_easy_color); ?>;">
                  <?php echo esc_html($button_easy_text); ?>
              </button>
          <!-- / btn -->

        </div>
      </section>



<?php
get_footer();
