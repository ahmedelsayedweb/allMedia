<!-- FOOTER-->
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo_image = ot_get_option( 'logo' );
	  $description_footer = ot_get_option( 'description_footer' );
	  $favicon = ot_get_option( 'favicon' );
	  $facebook = ot_get_option( 'facebook' );
	  $twitter = ot_get_option( 'twitter' );
	  $google = ot_get_option( 'google' );
	  $address = ot_get_option( 'address' );
	  $phone = ot_get_option( 'phone' );
	  $email = ot_get_option( 'email' );
	  $gallerytext = ot_get_option( 'gallerytext' );
	}
    ?>
            <footer>
                <div class="footer-wrapper">
                    <div class="footer-main">
                        <div class="container">
                            <div class="footer-main-wrapper">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="about-us-widget widget">
                                            <div class="footer-logo">
												<img src="<?php echo $logo_image; ?>" alt="" /></div>
                                            <div class="content-widget">
                                                <div class="text"><?php echo $description_footer; ?></div>
                                                <div class="socials">
													<a href="<?php echo $facebook; ?>" class="link facebook">
													<i class="fa fa-facebook"></i>
													</a>
													<a href="<?php echo $twitter; ?>" class="link twitter">
														<i class="fa fa-twitter"></i>
													</a>
													<a href="<?php echo $twitter; ?>" class="link pinterest">
														<i class="fa fa-pinterest-p"></i>
													</a>
													<a href="<?php echo $google; ?>" class="link google">
														<i class="fa fa-google"></i>
													</a>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="contact-us-widget widget">
                                            <div class="title-widget">contact us</div>
                                            <div class="content-widget">
                                                <div class="info-list">
                                                    <ul class="list-unstyled">
                                                        <li><i class="icons fa fa-map-marker"></i>
															<a href="#" class="link"><?php echo $address; ?></a>
														</li>
                                                        <li><i class="icons fa fa-phone"></i><a href="#" class="link"><?php echo $phone; ?></a></li>
                                                        <li><i class="icons fa fa-envelope-o"></i><a href="mailto:<?php echo $email; ?>" class="link"><?php echo $email; ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="twitter-widget widget">
                                            <div class="title-widget">Twitter widget</div>
                                            <div class="content-widget">
                                                <div class="recent-list">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <div class="text">Looking for awesome PSD template?</div>
                                                            <div class="text">Find it here: <a href="http://swlabs.co/">http://tf.net/swlabs</a></div>
                                                            <div class="date"><i class="fa fa-twitter"></i> 01 day ago</div>
                                                        </li>
                                                        <li>
                                                            <div class="text">You need an image stock</div>
                                                            <div class="text">Find it here: <a href="http://swlabs.co/">http://tf.net/swlabs</a></div>
                                                            <div class="date"><i class="fa fa-twitter"></i> 01 day ago</div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="gallery-widget widget">
                                            <div class="title-widget">Gallery</div>
                                            <div class="content-widget">
                                                <div class="text"><?php echo $gallerytext; ?></div>
                                                <div class="footer-form-search">
                                                    <form class="fm-search">
                                                        <input type="text" placeholder="Email" class="input-search" /><i class="icons fa fa-long-arrow-right"></i></form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="text">
							© <?php echo date ('Y'); ?>. All Rights Reserved | Design & Developer by <?php bloginfo('name'); ?>
						</div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- BUTTON BACK TO TOP-->
        <div class="btn-wrapper back-to-top">
			<a href="#top" class="btn btn-transparent">
				<img src="<?php echo $favicon; ?>" alt="" />				
			</a>
</div>
    </div>
<?php wp_footer(); ?>
	</body>	
</html>