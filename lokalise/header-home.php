
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php bloginfo( 'name' ); ?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="d-flex flex-column">
<?php wp_body_open(); ?>
  <div id="main-content" >

    <!-- logo / menu -->
    <div class="container header-menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid d-flex justify-space-between">

          <div class="block-logo">
            <a class="navbar-brand header-logo-img" href="<?php home_url('/'); ?>">
              <?php the_custom_logo(); ?>
            </a>
          </div>


          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse menu-block" id="navbarNav">
            <?php
              wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => '',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
              ));
            ?>

          </div>

        </div>

        <div class="header-btn-block">
          <button class="btn btn-login">Log in</button>
          <!-- <button class="btn btn-try">Try it free</button> -->
          <a href="<?php echo esc_url(get_theme_mod('header_button_1_url', '#')); ?>">
              <button class="btn btn-try"><?php echo get_theme_mod('header_button_1', 'Кнопка 1'); ?></button>
          </a>
        </div>

      </nav> <!-- / site-navigation -->
    </div>

    <!-- header section -->
    <header class="container py-5">
      <div class="row align-items-center">
        <!-- Left side -->
        <div class="col-md-6">
          <h1 class="fw-semibold header-title"><?php echo get_theme_mod('header_title', 'Default title'); ?></h1>
          <p class="header-text"><?php echo get_theme_mod('header_text', 'Default text'); ?></p>
          <div class="d-flex gap-2 mb-3">
            <a href="<?php echo esc_url(get_theme_mod('header_button_1_url', '#')); ?>">
              <button class="btn btn-try"><?php echo get_theme_mod('header_button_1', 'Кнопка 1'); ?></button>
            </a>
            <a href="<?php echo esc_url(get_theme_mod('header_button_2_url', '#')); ?>">
              <button class="btn btn-login"><?php echo get_theme_mod('header_button_2', 'Кнопка 2'); ?></button>
            </a>
          </div>
          <small>Try all features for 14 days · No credit card required</small>
        </div>
        <!-- Right side -->
        <div class="col-md-6">
          <?php
              $header_image = get_theme_mod('header_image', '');
          ?>
          <?php if ($header_image): ?>
              <img src="<?php echo esc_url($header_image); ?>" class="img-fluid header-section-img" alt="Header Image">
          <?php endif; ?>
        </div>
      </div>
    </header>

