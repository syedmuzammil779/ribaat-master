<?php get_header(); ?>
<br>
<br>
<br>
<div class="prodycSop">
	<div class="container">
		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php global $product; ?>
				<div class="col-md-3 productContainershop">
					<div class="picks-img">
						<div class="imageWrapperS">
							<a href="<?php the_permalink(); ?>">
								<?php  
								if ( has_post_thumbnail() ) { ?>
								
									<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							
								<?php } else { ?>
				
									<img src="<?php echo get_template_directory_uri(); ?>/images/rep.jpeg">
							
								<?php }
								?>

							</a>
							<?php $product_id = $product->get_id(); $product = new WC_product($product_id); $attachment_ids = $product->get_gallery_image_ids();
							foreach( $attachment_ids as $attachment_id ) { ?>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>">
								</a>
							<?php } ?>
						</div>
						<div class="contentContainercatsPae">
							<br>
							<a href="<?php the_permalink(); ?>">
								<h3><?php the_title(); ?></h3>
								<div class="ratingCountCustom">
									<?php $ratingCOunts = $product->get_review_count(); ?>
									<?php for ($i=1; $i <=$ratingCOunts ; $i++) {  ?>
										<i class="fa fa-star checked"></i>
									<?php } ?>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<p>From <?php echo $product->get_price_html(); ?></p>
								<button class="default-btn1">Shop Now</button>
							</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="pageNavigation">
				<?php wp_pagenavi(); ?>
			</div>
		</div>
	</div>
</div>
<?php  get_footer(); ?>