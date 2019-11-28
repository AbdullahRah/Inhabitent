<?php
/**
 * Template part for displaying product.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		
		<!-- <div class="entry-meta">
            <?php //red_starter_posted_on(); ?> / <?php //red_starter_comment_count(); ?> / <?php //red_starter_posted_by(); ?>
		</div>.entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
    <h1 class="entry-title">
            <?php echo the_title(); ?>
        </h1>
        <div class="product-price">
        $<?php the_field('price'); ?>
        </div>
            
    <?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
        ?>
  
  <div class="socialmedia">
							<a class="tag" href="#"> <span> <i class="fab fa-facebook-square"></i> </span> LIKE</a>
							<a class="tag" href="#"> <span><i class="fab fa-twitter-square"></i></span> TWEET </a>
							<a class="tag" href="#"> <span><i class="fab fa-pinterest"></i></span> PIN</a>
						</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
