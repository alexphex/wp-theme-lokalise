<?php
/**
 * The template for displaying categories pages
 *
 *
 * @package lokalise
 */ 
?>

<?php get_header(); ?>

    <!-- section -->
    <section class="py-5 my-5 text-center preferred-section ">
        <div class="container text-center preferred-container">

            <div class="category-container">
                <h1><?php single_cat_title(); ?></h1>
                <div class="category-description">
                    <?php echo category_description(); ?>
                </div>
                <div class="category-posts">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="post-meta">
                                    <p>Published: <?php the_date(); ?> | Author: <?php the_author(); ?></p>
                                </div>
                                <div class="post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>No posts found in this category.</p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div> 
    </section>

<?php get_footer(); ?>