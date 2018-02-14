<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myTheme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <article>

                <?php
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query('showposts');
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <a href="<?php the_permalink() ?>"><?php the_field('feature_icon'); ?></a>
                    <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            </article>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
