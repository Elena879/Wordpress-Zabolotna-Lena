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

    <div class="item product-item">
        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <?php the_content(); ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
