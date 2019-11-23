<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<!-- .product-item -->
<article id="post-<?php the_ID(); ?>" <?php post_class('product-item'); ?>>
    <a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
        <div class="product-thumbnail-container">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>
        </div>
        
        <div class="product-info">
            <p class="product-price">
                $<?php echo get_field('price'); ?>
            </p>

            <?php the_title( '<h2 class="product-title">', '</h2>' ); ?>
        </div>
    </a>
</article><!-- #post-## -->
