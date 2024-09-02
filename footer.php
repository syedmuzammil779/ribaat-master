<section class="insta-home padding-main">
	<div class="container">
		<div class="iner-insta">
			<img src="<?php echo get_template_directory_uri(); ?>/images/crown.png">
			<h2>Shop Our Instagram</h2>
			<p>@Ribaat ClothingOfficial</p>
		</div>
	</div>
</section>

<footer class="main-footer">
	<div class="container">
		<div class="footer-flex">
			<div class="footer-width">
				<div class="inner-foter">
					<div class="in-aftr">
						<p>Discover</p>
						<div class="footer-na">
							
							<?php 
							wp_nav_menu(array( 
								'theme_location' => 'discover-menu', 
                                // 'container_class' => 'navbar-nav' ,
                                // 'menu_class' => 'navbar-nav'
							));
							?>
						</div>
					</div>
				</div>

			</div>
			<div class="footer-width">
				<div class="inner-foter">
					<div class="in-aftr">
						<p>Customer Service</p>
						<div class="footer-na">
							
							<?php 
							wp_nav_menu(array( 
								'theme_location' => 'customer-service', 
                                // 'container_class' => 'navbar-nav' ,
                                // 'menu_class' => 'navbar-nav'
							));
							?>
						</div>
					</div>
				</div>

			</div>
			<div class="footer-width">
				<div class="inner-foter">
					<p id="border-none-mobile">Let’s Stay In Touch</p>
					<div class="social" id="mobile-social">
						<ul>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/insta.png"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pin-trest.png"></a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="footer-width1" id="mobile-space">
				<div class="iner-d">
					<div class="inner-foter">
						<p id="space-mob">Be the first to hear about new releases, limited editions & more</p>
						<form>
							<div class="form-fo">
								<input type="email" placeholder="Enter your email">
								<button type="submit" class="plane"><img src="<?php echo get_template_directory_uri(); ?>/images/em.png"></button>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="botom-line">
			<p>© Glam Flerur LLC. All Rights Reserved</p>
		</div>
	</div>
</footer>

<!-- jQuery Version 3.2.1 -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.js"></script>
<!-- fancybox -->
<script src="<?php echo get_template_directory_uri(); ?>/js/fancybox.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- owl slider -->
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- custom js -->

<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.18/jquery.zoom.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>