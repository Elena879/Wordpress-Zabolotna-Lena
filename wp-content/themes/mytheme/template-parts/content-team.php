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


    <div class="item team-item">

        <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
        </a>
        <?php the_content(); ?>
        <p><?php the_field('member_age') ?>,<span><?php the_field('member_position') ?></span></p>
    </div>




</article><!-- #post-<?php the_ID(); ?> -->
