<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); 
$query=get_terms('taxonomy=product_type'
)
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					Shop Stuff
				</h1>
				<ul>
				<?php
						foreach($query as $x){
							echo '<li><a href="'.get_term_link($x).'">'.$x->slug.'</a></li>';
						}
					?>
				</ul>
				
			</header><!-- .page-header -->

			<div class="product-grid">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'template-parts/content-product-archive' );
					?>

				<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
