<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myTheme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="features">
                <div class="container">
                    <ul class="features-list">
                        <?php $the_query = new WP_Query('showposts=3');

                        while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <li><a href="<?php the_permalink() ?>" class="feature-icon">
                                    <?php the_field('feature_icon'); ?>
                                </a>
                                <a href="<?php the_permalink() ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <?php the_excerpt(); ?>
                            </li>
                            <?php
                        endwhile;
                        ?>
                    </ul>
                </div>
            </section>
            <section class="our-products">
                <div class="container">
                    <div class="item-list">
                        <?php
                        $args = [
                            'post_type' => 'products',
                            'posts_per_page' => '2',
                        ];
                        query_posts($args);
                        while (have_posts()) : the_post();

                            get_template_part('template-parts/content', 'products');
                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </section>
            <section class="our-team">
                <div class="container">
                    <div class="item-list team-list-main">
                        <?php
                        $args = [
                            'post_type' => 'team',
                            'posts_per_page' => '4',
                        ];
                        query_posts($args);
                        while (have_posts()) : the_post();

                            get_template_part('template-parts/content', 'team');
                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </section>
            <section class="get-notified">
                <div class="container get-notified-block">
                    <div class="main-get-notified">
                        <h2><?php echo get_theme_mod('get_notified_title') ?></h2>
                        <p><?php echo get_theme_mod('get_notified_text') ?></p>
                        <form action="http://home14.local" id="form" name="form" method="post"
                              enctype="application/x-www-form-urlencoded" class="get-notified-form">
                            <input type="text" name="email" id="email" placeholder="Email Address" class="email">
                            <input type="submit" name="submit" id="submit" value="Notify" class="submit">
                        </form>
                    </div>
                    <iframe src="<?php echo get_theme_mod('get_notified_media') ?>" allowfullscreen></iframe>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
