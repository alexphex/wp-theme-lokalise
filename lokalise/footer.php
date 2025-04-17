<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lokalise
 */

?>
</div>


<footer style="background-color: #EEEEEE; padding: 20px;">
      <!-- Upper part of the footer -->
      <div class="container footer-container">
        <div class="row d-flex justify-content-between">

          <!-- footer columns -->
          <div class="col-md-3 footer-column col-with-img"><?php dynamic_sidebar('footer-1'); ?></div>
          <div class="col-md-2 pt-3 footer-column"><?php dynamic_sidebar('footer-2'); ?></div>
          <div class="col-md-2 pt-3 footer-column"><?php dynamic_sidebar('footer-3'); ?></div>
          <div class="col-md-2 pt-3 footer-column"><?php dynamic_sidebar('footer-4'); ?></div>
          <div class="col-md-2 pt-3 footer-column"><?php dynamic_sidebar('footer-5'); ?></div>
          <!-- / footer columns -->

        </div>
      </div>
    
      <!-- Divider -->
      <div class="container">
        <hr style="border-color: #000000;">
      </div>
      
      <!-- Bottom of the footer -->
      <div class="container">
        <div class="row py-3 ">
          <div class="col-md-6 d-flex flex-start align-items-center footer-botom-block">
            <div class="px-2 mb-2 block-logo">
              <a class="navbar-brand header-logo-img" href="<?php home_url('/'); ?>">
                <?php the_custom_logo(); ?>
              </a>
            </div>
            <p class="small footer-botom-text-block"><?php echo get_theme_mod('footer_text_setting_1', ''); ?></p>
          </div>
          <div class="col-md-6 text-end footer-all-rights footer-botom-block">
            <p class="small"><?php echo get_theme_mod('footer_text_setting_2', ''); ?></p>
          </div>
        </div>
      </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
