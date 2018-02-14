<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="container">
        <section class="single-item">

            <h2><?php the_title(); ?> <?php the_field('member_surname') ?></h2>
            <ul>
                <li><?php the_content(); ?></li>
                <li><?php the_field('member_age') ?>, <?php the_field('member_gender') ?></li>
                <li>Position:
                    <?php the_field('member_position') ?>.</li>
                <li>My hobbies:
                    <?php the_field('member_hobbies') ?>.</li>
                <li>Email:
                    <?php the_field('email') ?>.</li>
                <li>Social links:
                    <?php the_field('social_links') ?>.</li>
            </ul>

        </section>
        <footer class="entry-footer">
            <?php mytheme_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>


</article><!-- #post-<?php the_ID(); ?> -->
