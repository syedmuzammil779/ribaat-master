<?php 
/* 
	Template Name: Home Page Template 
*/
    get_header(); ?>
    <section class="home-gifts padding-main">
        <div class="container">
            <div class="gift-flex">
                <?php if( have_rows('home_first_column') ): while( have_rows('home_first_column') ) : the_row(); ?>
                    <div class="width-gift">
                        <div class="gift-img">
							
                            <img src="<?php echo the_sub_field('icon_row_1'); ?>">
                            <h3><?php echo the_sub_field('heading_column'); ?></h3>
                        </div>
                        <div class="gift-para">
                            <p><?php echo the_sub_field('content_column'); ?></p>
                        </div>
                    </div>
                <?php endwhile; else : endif; ?>
            </div>
        </div>
    </section>
    <section class="home-shop padding-main">
        <div class="container">
            <div class="shop-flex">
                <?php $termchildren = get_terms( 'product_cat',  array('parent' => 0) );?>
                <?php foreach($termchildren as $category) {  $term_link = get_term_link( $category ); $featuredCat =  get_field('show_this_category_on_homepage', 'product_cat_'.$category->term_id); 
                if($featuredCat == 'Yes') { ?>
                    <div class="shop-width featuredCats">
                        <div class="inner-shop">
                            <?php $catImage = get_field('image_cat', 'product_cat_'.$category->term_id); 
                            if($catImage) { ?>
							
                     <img src="<?php the_field('image_cat', 'product_cat_'.$category->term_id); ?>">
						
                            <?php } else { ?>
						
                               <img src="<?php echo get_template_directory_uri(); ?>/images/rep.jpeg">
					
                           <?php } ?>
                           <div class="lock">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/lock.png">
                        </div>
                        <h2><?php echo $category->name; ?></h2>
                        
                            <?php echo category_description($category->term_id); ?>
                            <span>From $99</span>
                            <div class="adad">
                                <a href="<?php echo $term_link; ?>" class="default-btn1">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </section>
    <section class="glam-home padding-main">
        <div class="container">
            <div class="glam-main">
                <h1><?php echo the_field('secret_heading'); ?></h1>
                <p><?php echo the_field('secret_content'); ?></p>
                <div class="learn-btn">
                    <a href="<?php echo the_field('secret_link'); ?>" class="learn">Learn more</a>
                </div>
                <div class="inside-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/genuine roses.png">
                </div>
            </div>
        </div>
    </section>
    <section class="picks-home padding-main">
        <div class="container">
            <div class="para-picks">
                <h2>Mother’s Day Picks</h2>
                <p>Let these lovely "Mother's Day Picks" help to express your appreciation</p>
            </div>
            <div class="pick-flex">
                <?php $args = array(
                    'post_type'             => 'product',
                    'post_status'           => 'publish',
                    'ignore_sticky_posts'   => 1,
                    'posts_per_page'        => '6',
                    'tax_query'             => array(
                        array(
                            'taxonomy'      => 'product_cat',
                            'field' => 'term_id',
                            'terms'         => 15,
                            'operator'      => 'IN'
                        ),
                    )
                );
                $products = new WP_Query($args);
                while ( $products->have_posts() ) : $products->the_post(); global $product; ?>
                    <div class="pick-width">
                        <div class="picks-img">
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/rep.jpeg">
                            <?php } ?>
                            <h3><?php the_title(); ?></h3>
                            <p>From <?php echo $product->get_price_html(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="default-btn1" type="button">SHOP NOW</a>
                        </div>

                    </div>
                <?php endwhile; wp_reset_postdata();  ?>
            </div>
            <div class="view-all">
                <a href="#">View All Picks</a>
            </div>
        </div>
    </section>
    <section class="customer-slider padding-main">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <div class="owl-carousel home-slider owl-theme">
                <?php if( have_rows('customer_testimonials', 'option') ): while( have_rows('customer_testimonials', 'option') ) : the_row(); ?>
                    <div class="item">
                        <div class="in-shape">
                            <div class="inner-slider">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Srars.png">
                                <p><?php the_sub_field('customers_saying', 'option'); ?></p>
                                <span><?php the_sub_field('customer_date', 'option'); ?><br>
                                    <?php the_sub_field('customer_name', 'option'); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
        </section>
        <div class="home-popup">
            <div id="myModal22" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/images/X.png"></button>
                        <div class="popup-data">
                            <div class="modal-header">

                                <h1 class="modal-title">Want<br>
                                15% Off ?</h1>
                            </div>
                            <div class="modal-body">
                                <h3>Become a VIP and save
                                on your firts order</h3>
                                <form>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Birthday</label>
                                        <input type="date" class="form-control" placeholder="mm/dd/yyyy">
                                    </div>
                                    <div class="form-group">
                                        <label>Anniversary</label>
                                        <input type="date" class="form-control" placeholder="mm/dd/yyyy">
                                    </div>
                                    <p>Who will you give roses to?</p>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Spouse/Partner</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Friends</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Myself</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Family</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Co-workers</label>
                                    </div>
                                    <div class="pop-btn">
                                        <button type="submit" class="btn btn-primary">GO VIP</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <?php get_footer(); ?>