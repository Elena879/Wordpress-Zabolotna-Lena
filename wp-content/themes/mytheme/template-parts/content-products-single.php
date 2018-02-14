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
        <section class="single-item single-product">

            <h2><?php the_title(); ?></h2>
            <ul>
                <li><?php the_content(); ?></li>
                <li>
                    <?php

                    // vars
                    $urls = get_field('who_created_this_product');


                    // check
                    if( $urls ): ?>
                        <div>Who created this product:</div>
                        <ul>
                            <?php foreach( $urls as $url ): ?>
                                <li>
                                    <a href="<?php echo $url ?>"><?php echo $url; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <li>Client: <?php the_field('client') ?></li>
            </ul>

        </section>
        <footer class="entry-footer">
            <?php mytheme_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>


</article><!-- #post-<?php the_ID(); ?> -->
