<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); 

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :
			 ?>

			<header class="page-header">
				<?php
				echo '<h1 class="page-title>">'.single_term_title().'</h1>'  ;
				// the_archive_title( '<h1 class="page-title">', '</h1>' )
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<section class="contents-box">
				<?php while ( have_posts() ) : the_post(); 
				?>
				
				<?php
					get_template_part( 'template-parts/content' );
				?>

				<?php
			 endwhile; ?>
			</section>
			

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
	
?>
<?php get_footer(); ?>
