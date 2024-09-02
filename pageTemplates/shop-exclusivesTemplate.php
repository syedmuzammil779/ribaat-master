<?php 
/* 
	Template Name: Shop Exclusives Template 
*/
    get_header(); ?>

    <section class="shop-exclusive padding-main">
        <div class="container">
            <div class="iner-shop-all">
                <div class="shop-flex-all">
                    <div class="shop-width-all">
                        <h1>Shop Exclusives</h1>
                    </div>
                    <div class="shop-width-all1">
                        <p>Choose the perfect luxury bouquet for any occasion from our large selection of artfully curated and perfectly preserved rose arrangements</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="picks-home padding-main">
        <div class="container">
            <div class="pick-flex">
                <?php  $args = array(  
                    'post_type' => 'product',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                );

                $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); global $product;  ?>
                
                <div class="pick-width">
                    <div class="picks-img">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } else { ?>
						
                            <img src="<?php echo get_template_directory_uri(); ?>/images/rep.jpeg">
						
                        <?php } ?>
                        <h3><?php the_title(); ?></h3>
                        <p>From <?php echo $product->get_price_html(); ?></p>
                        <a class="default-btn1" href="<?php the_permalink(); ?>">SHOP NOW</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata();  
            ?>
        </div>
        <div class="view-all" id="mobile-pad">
            <a href="#">Load More</a>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>