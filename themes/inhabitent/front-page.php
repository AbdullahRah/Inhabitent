<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); 
$override='';?>
	<div id="primary" class="front-page">
		<main id="main" class="site-main" role="main">
		<section class= "tent logo">
		<!-- <img src="<?php echo get_stylesheet_directory_uri();?>/images/logos/inhabitent-logo-tent-white.svg"> -->
		
		</section>
		
		<section class="product-info container">
            <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product_type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">
                  <?php foreach ( $terms as $term ) : ?>
                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>
                  <?php endforeach; ?>
               </div>
            <?php endif; ?>
         </section>
         
         <?php
          $args = array(
               'post_type' => 'post',
               'posts_per_page' => 3,
               'order' => 'ASC');
          $product_posts = get_posts( $args ); // returns an array of posts
    ?>
    <section class="journal-content-section">
    <?php
        foreach ( $product_posts as $post ) : setup_postdata( $post );
        echo "<div class='journal-content'>";
            the_post_thumbnail('large');
            ?> <h2> <?php the_title();?></h2><?php
            comments_number();
        echo "</div>";
        
        endforeach; wp_reset_postdata();  ?>


    </section>
    <article class="adventures-container page">
            <div class="title-post">
                <h2> LATEST ADVENTURES </h2>
            </div>
            <div class="wrap-box">
               <div class="canoe-girl">
                  <img src="<?php echo get_template_directory_uri() . '/images/adventure-photos/canoe-girl.jpg' ?>" alt="canoeing">
                  <div class="naturetext">
                     <h3 class="title-adventure">
                           <a href="#"> Getting Back to <br> Nature in a Canoe</a>
                     </h3>
                     <a class="white-btn" href="#">Read More</a>
                  </div>
               </div>
               <div class="beach">
                <img src="<?php echo get_template_directory_uri() . '/images/adventure-photos/beach-bonfire.jpg' ?>" alt="beach">
                <div class="nighttext">
                    <h3 class="tit">
                        <a href="#">A Night with Friends <br> at the Beach</a>
                    </h3>
                    <a class="white-btn" href="#">Read More</a>
                </div>
                  </div>
                  <div class="hill">
                <img src="<?php echo get_template_directory_uri() . '/images/adventure-photos/mountain-hikers.jpg' ?>" alt="hikers">
                <div class="viewtext">
                    <h3 class="smalltitle">
                        <a href="#">Taking in the<br> View at<br> Big Mountain</a>
                    </h3>
                    <a class="white-btn" href="#">Read More</a>
                </div>
      </div>
      <div class="night-sky">
                <img src="<?php echo get_template_directory_uri() . '/images/adventure-photos/night-sky.jpg' ?>" alt="hikers">
                <div class="startext">
                    <h3 class="smalltitle">
                        <a href="#">Star-Gazing at<br> the Night Sky</a>
                    </h3>
                    <a class="white-btn" href="#">Read More</a>
                </div>
      </div>
                <div class="more-adv-btn">
                    <p> MORE ADVENTURES </p>
                </div>
            </div>
        </article>

		</main><!-- #main -->
	</div><!-- #primary -->

   
<?php get_footer(); ?>
