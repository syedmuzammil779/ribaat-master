<?php 
/* 
	Template Name: Support Template
*/
    get_header(); ?>



    <section class="support padding-main">
        <div class="container">
            <div class="inner-ref">
                <div class="inner-ref1">
                    <h1>Support</h1>
                    <h3>Ribaat Clothing Store</h3>
                    <p><?php the_field('store_location', 98) ?></p>
                    <div class="in-para">
                        <p><?php the_field('phone_number', 98) ?></p>
                        <p>Monday - Friday 8am - 8pm EST</p>
                        <p>Saturday - Sunday 9am - 6pm EST</p>
                    </div>
                </div>
                <div class="form-support">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>First Name:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>E-mail address:</label>
                                <input type="email" class="form-control">
                            </div>            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Please enter your message below:</label>
                                <textarea class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="text-center frm-btn">
                            <button type="submit" class="custom-btn">SEND</button>
                        </div>

                    </form>
                </div>
            </div>

            
        </div>
    </section>

    <?php get_footer(); ?>