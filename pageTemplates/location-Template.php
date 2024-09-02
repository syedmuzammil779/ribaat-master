<?php 
/* 
	Template Name: Location Template
*/
    get_header(); ?>


    <div class="loaction-main padding-main">
        <div class="container">
            <div class="location-padding">
                <h1>Store Locations</h1>
                <div class="location-flex">
                    <div class="loc-width">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/loc2.png">
                    </div>
                    <div class="loc-width">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/loc1.png">
                    </div>
                    <div class="loc-width">
                        <div class="iner-loc">
                            <h3>Ribaat Clothing Store</h3>
                            <p><?php the_field('store_location') ?></p>

                        </div>
                        <div class="ine-p">
                            <p><a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a></p>
                            <p>Monday - Friday 8am - 8pm EST</p>
                            <p>Saturday - Sunday 9am - 6pm EST</p>
                        </div>
                    </div>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3300.863716971396!2d-118.34985338478167!3d34.175401880572615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2959d361e786b%3A0x1855197f01109479!2s3408%20W%20Burbank%20Blvd%2C%20Burbank%2C%20CA%2091505%2C%20USA!5e0!3m2!1sen!2s!4v1600958848412!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>