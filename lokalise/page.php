<?php
/**
 * The template for displaying all pages
 *
 * @package lokalise
 */

get_header();
?>
    <!-- section -->
    <section class="py-5 my-5 text-center preferred-section ">
        <div class="container text-center preferred-container">
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>
        </div>
    </section>

<?php
get_footer();
