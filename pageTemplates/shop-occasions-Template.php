<?php 
/* 
	Template Name: Shop Occasions Template
*/
    get_header(); ?>


    <section class="shop-occasion padding-main">
        <div class="container">
            <div class="iner-shop-all">
                <div class="shop-flex-all">
                    <div class="shop-width-all">
                        <h1><?php the_field('main_heading'); ?></h1>
                    </div>
                    <div class="shop-width-all1">
                        <p><?php the_field('main_content_page'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-shop1 padding-main">
        <div class="container">
            <div class="shop-flex">
                <?php $termchildren = get_terms( 'product_cat',  array('parent' => 0) );?>
                <?php foreach($termchildren as $category) {  $term_link = get_term_link( $category ); ?>
                    <div class="shop-width">
                        <div class="inner-shop">
                            <?php 
                            $catImage = get_field('image_cat', 'product_cat_'.$category->term_id); 
                            if($catImage) { ?>
                                <img src="<?php the_field('image_cat', 'product_cat_'.$category->term_id); ?>">
                            <?php } else { ?>
                               <img src="<?php echo get_template_directory_uri(); ?>/images/rep.jpeg">
                           <?php }
                           ?>
                           <div class="lock">
                            <img src="images/lock.png">
                        </div>
                        <h2><?php echo $category->name; ?></h2>
                        <div class="adad">
                            <a href="<?php echo $term_link; ?>" class="default-btn1">SHOP NOW</a>
                        </div>

                    </div>

                </div>
            <?php } ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>