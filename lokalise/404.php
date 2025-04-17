<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package lokalise
 */

get_header();
?>

		<!-- section custom-404 -->
		<section class="py-5 most-loved-section">
			<div class="container my-5 most-loved-container">
			<div class="row align-items-center">
				<div class="d-flex justify-content-between align-items-center block-404-info">
					<div class="col-md-5 title-block">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'lokalise' ); ?></h1>
					</div>
					<div class="col-md-4 d-flex justify-content-center most-loved-img-block">
						<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
					</div>
				</div>
			</div>
			</div>
		</section> -->
		<!-- / section custom-404 

<?php
get_footer();
