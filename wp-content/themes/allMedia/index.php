<?php get_header(); ?>
    	<!-- WRAPPER-->
            <div id="wrapper-content">
	<?php  
		if ( function_exists( 'ot_get_option' ) ) {
		  $banner1 = ot_get_option( 'banner1' );
		  $logo_thumbnail = ot_get_option( 'logo_thumbnail' );
		  $favicon = ot_get_option( 'favicon' );
		}
    ?>
	<!-- PAGE WRAPPER-->
	<div id="page-wrapper">
		<!-- MAIN CONTENT-->
		<div class="main-content">
			<section class="page-banner homepage-03">
				<div class="slider-img-banner">					
		<?php 
		if ( function_exists( 'ot_get_option' ) ) {			
		  $slides = ot_get_option( 'banner', array() );	
			$title_slider = ot_get_option( 'title_slider' );
			$link_slider = ot_get_option( 'link_slider' );
		  if ( ! empty( $slides ) ) {
			foreach( $slides as $slide ) {
			  echo '
			  <div style="background-image: url(\'' . $slide['image'] . '\')" class="slide">
					<div class="container">
						<div class="homepage-banner-warpper">
							<div class="homepage-banner-content">
								<div class="banner-info">
									<div class="main-title">
										<h2 class="caption flipInX animated delay-01">' . $slide['title'] . '</h2>
										<div class="group-title">
											<div class="line-diamond"><span></span></div>' ?>
					
											<div class="text flipInX animated delay-02"><?php echo $title_slider ?> </div>
					<?php echo '
										</div>
										<div class="description flipInX animated delay-03">' . $slide['description'] . '</div>
										<div class="group-actions flipInX animated delay-04">
										<a href="' . $slide['link'] . '" class="btn btn-primary btn-read-more">Read more</a><a href="' . $slide['link'] . '" class="btn btn-white btn-outline btn-purchase-now">Purchase now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';
			}
		  }
		}	
	  ?>	
	</div>
</section>
<section class="what-we-do layout-3 padding-top-100 padding-bottom-100">
	<div class="box-content box-content-left">
		<div class="box-img">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/homepage/banner-adv-2.png" alt="" class="img-responsive">
		</div>
	</div>
	<?php  
		if ( function_exists( 'ot_get_option' ) ) {
		  $title_top = ot_get_option( 'title_top' );
		  $title_mute_w = ot_get_option( 'title_mute_w' );
		  $favicon = ot_get_option( 'favicon' );
		}
    ?>
	<div class="box-content-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="group-content">
						<div class="group-title group-title-2">
							<h2 class="main-title"><?php echo $title_top; ?><span class="dot"></span> <span class="mute-title"><?php echo $title_mute_w; ?></span></h2></div>
					<div class="group-wrapper">
				<div class="row group-list">
				<?php 
						if ( function_exists( 'ot_get_option' ) ) {
							$items = ot_get_option( 'item_box', array() );
							if ( ! empty( $items ) ) {
								foreach( $items as $item ) {
									echo '
									<div class="col-sm-3 padding-bottom-50">
									<div class="box-media layout-3">
									<div class="box-media-wrapper">
									<a href="' . $item['link'] . '">
									<div class="box-icon">
									<a href="' . $item['link'] . '" class="icons">
									' . $item['icons'] . '
									</a>
									</div>
									<div class="box-info">
									<a href="' . $item['link'] . '" class="title">' . $item['title'] . '</a>
									<div class="text">' . $item['description'] . '</div>
									</div>
									</a>
									</div>
									</div>
									</div>';
								}
							  }

							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
</div>
</section>
			<?php  
			if ( function_exists( 'ot_get_option' ) ) {
			  $title_about = ot_get_option( 'title_about' );
			  $title_mute_ab = ot_get_option( 'title_mute_ab' );
			  $description_about = ot_get_option( 'description_about' );
			  $link_about = ot_get_option( 'link_about' );
			  $image_about = ot_get_option( 'image_about' );
			}
		?>
<section class="about-us layout-3 padding-top-100 padding-bottom-100 bg-dark">
		<div class="box-content">
			<div class="box-img about-us-img">
				<img src="<?php echo $image_about; ?>" alt="" class="img-responsive">
				<div class="line"></div>
			</div>
		</div>
		<div class="box-content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="group-content">
							<div class="group-title group-title-1 bg-secondary">
								<h2 class="main-title"><?php echo $title_about; ?>
									<span class="dot"></span> 
									<span class="mute-title"><?php echo $title_mute_ab; ?></span>
								</h2>
							</div>
						<div class="group-wrapper">
							<div class="text"><?php echo $description_about; ?></div>
							<br>
							<div class="group-button">
								<a href="<?php echo $link_about; ?>" class="btn btn-main">Read More</a>
							</div>
						</div>
					</div>
				</div>
			<div class="col-sm-6"></div>
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>
</section>
<?php
			if ( function_exists( 'ot_get_option' ) ) {
				$images = explode( ',', ot_get_option( 'gallery', '' ) );
				$title_work = ot_get_option( 'title_work' );
			  $description_work = ot_get_option( 'description_work' );
			  $title_our = ot_get_option( 'title_our' );
			  $title_mute_our = ot_get_option( 'title_mute_our' );
?>
<section class="our-latest-work layout-2 padding-top-100 padding-bottom-100">
	<div class="box-content-wrap">
		<div class="box-content">
			<div class="box-description">
				<div class="box-img">
					<div class="slider-img">
						<?php
								if ( ! empty( $images ) ) {
							foreach( $images as $id ) {
								if ( ! empty( $id ) ) {
							$full_img_src = wp_get_attachment_image_src( $id, 'custom-thumb' );
								  echo '
								  <div class="item"><img src="' . $full_img_src[0] . '" alt="" class="img-responsive"></div>';
								}
							  }
							}	
						}
					?>
					</div>
					<div class="line"></div>
					<div class="nav-slide"></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-8">
					<div class="group-content">
						<div class="group-title group-title-2">
							<h2 class="main-title"><?php echo $title_our; ?><span class="dot"></span> <span class="mute-title"><?php echo $title_mute_our; ?></span></h2></div>
						<div data-wow-delay="0.2s" class="group-wrapper wow fadeInRight">
							<h3 class="main-title"><?php echo $title_work; ?></h3>
							<?php echo $description_work; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</section>
<?php  
			if ( function_exists( 'ot_get_option' ) ) {
			  $mute_title  = ot_get_option( 'mute_title' );
			  $main_title = ot_get_option( 'main_title' );
			  $description_adv = ot_get_option( 'description_adv' );
			}
		?>
<section class="banner-adv layout-1 bg-dark">
	<div class="box-content-wrap">
		<div class="box-content box-content-left">
			<div class="box-img-bot box-left">

			</div>
			<div class="box-description">
				<h1 class="mute-title"><?php echo $mute_title; ?></h1>
				<h4 class="main-title"><?php echo $main_title; ?></h4></div>
		</div>
		<div class="box-purchase">
			<div class="box-purchase-line-1"></div>
			<div class="box-purchase-sub"></div>
			<div class="box-purchase-line-2"></div>
			<div class="box-purchase-main">
				<?php echo $description_adv; ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</section>
			<?php  
			if ( function_exists( 'ot_get_option' ) ) {
				$title_main_ex = ot_get_option( 'title_main_ex' );
			  $mute_title_ex = ot_get_option( 'mute_title_ex' );
			  $title_skill = ot_get_option( 'title_skill' );
			  $title_d = ot_get_option( 'title_d' );
			  $title_w = ot_get_option( 'title_w' );
			  $title_t = ot_get_option( 'title_t' );
			  $title_s = ot_get_option( 'title_s' );
			  $data_d = ot_get_option( 'data_d' );
			  $data_w = ot_get_option( 'data_w' );
			  $data_t = ot_get_option( 'data_t' );
			  $data_s = ot_get_option( 'data_s' );
			  $description_mission = ot_get_option( 'description_mission' );
			  $description_value = ot_get_option( 'description_value' );
			}
		?>
<section class="our-skill layout-1 padding-top-100 padding-bottom-100">
	<div class="box-content-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="group-content">
						<div class="group-title group-title-2">
							<h2 class="main-title"><?php echo $title_main_ex; ?> <span class="dot"></span> <span class="mute-title"><?php echo $mute_title_ex; ?></span></h2></div>
						<div class="group-wrapper">
							<div class="row">
								<div class="col-sm-4">
									<div class="box-item box-item-1">
										<div class="box-heading"><?php echo $title_skill; ?></div>
										<div class="box-info">
											<div class="group-progress-bar-list">
												<div class="progress-item">
													<div class="heading"><?php echo $title_d; ?></div>
													<div class="progress">
														<div data-width="<?php echo $data_d; ?>" class="progress-bar"></div>
													</div>
												</div>
												<div class="progress-item">
													<div class="heading"><?php echo $title_w; ?></div>
													<div class="progress">
														<div data-width="<?php echo $data_w; ?>" class="progress-bar"></div>
													</div>
												</div>
												<div class="progress-item">
													<div class="heading"><?php echo $title_t; ?></div>
													<div class="progress">
														<div data-width="<?php echo $data_t; ?>" class="progress-bar"></div>
													</div>
												</div>
												<div class="progress-item">
													<div class="heading"><?php echo $title_s; ?></div>
													<div class="progress">
														<div data-width="<?php echo $data_s; ?>" class="progress-bar"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="box-item box-item-1">
										<?php echo $description_mission; ?>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="box-item box-item-1">
										<?php echo $description_value; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</section>
<section class="fun-fact layout-2 padding-bottom-100">
	<div class="box-content-wrap">
		<div class="box-content box-content-right">
			<div class="box-img"><img src="<?php bloginfo('template_directory'); ?>/assets/img/homepage/banner2.png" alt="" class="img-responsive"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-11">
					<div class="group-content">
						<div class="group-title group-title-4 bg-secondary">
							<h2 class="main-title">Some Cool Fun <span>fact</span> <span class="dot"></span> <span class="mute-title">Fact</span></h2></div>
						<div class="group-wrapper">
							<div class="row">
								<div class="col-sm-2">
									<div class="box-item">
										<div class="box-icon"><span class="alab-speech-bubble-and-three-dots"></span></div>
										<div class="box-info">
											<div data-count="2987" class="number">0</div>
											<div class="title">Comment</div>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="box-item">
										<div class="box-icon"><i class="alab-writing-notes"></i></div>
										<div class="box-info">
											<div data-count="689" class="number">0</div>
											<div class="title">Work View</div>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="box-item">
										<div class="box-icon"><span class="alab-bookmark"></span></div>
										<div class="box-info">
											<div data-count="1342" class="number">0</div>
											<div class="title">Project Tickets</div>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="box-item">
										<div class="box-icon"><i class="alab-shuffle-arrows"></i></div>
										<div class="box-info">
											<div data-count="1427" class="number">0</div>
											<div class="title">Item Deliver</div>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="box-item">
										<div class="box-icon"><span class="alab-trophy"></span></div>
										<div class="box-info">
											<div data-count="145" class="number">0</div>
											<div class="title">Web Awwards</div>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="box-item">
										<div class="box-icon"><i class="alab-user"></i></div>
										<div class="box-info">
											<div data-count="3378" class="number">0</div>
											<div class="title">Customers</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</section>
			<?php
			$cats = [];
						$args = array(
								'post_type' => 'portfolio',
								'posts_per_page' => 7,
						);
						$portfolio_query = new WP_Query( $args );
							 ?>
						<?php if ( $portfolio_query->have_posts() ) : ?>
			<?php $i = 1; ?>
							<?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); 
			$categories = get_the_category();
			$cats = array_merge($cats, $categories);
			?>
			<?php endwhile; endif; ?>
<section class="our-portfolio layout-2 padding-top-100 padding-bottom-100">
	<div class="box-content-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="group-content">
						<div class="group-title group-title-1 bg-secondary">
							<h2 class="main-title">our <span>Projects</span> <span class="dot"></span> <span class="mute-title">Work</span></h2></div>
						<div class="group-wrapper">
							<div class="group-filter filter-button-group">
								<?php if (!empty($cats)){
								$temp = [];?>
								<a href="javascript:;" data-filter="*" class="filter-item active">All</a>
								<?php	foreach ($cats as $key => $cat) {
										$slug = $cat->slug;
										$name = $cat->name;
									if(!in_array($slug, $temp)){
										$temp [] = $slug;
								?>
								<a href="javascript:;" data-filter=".<?php echo $slug; ?>" class="filter-item"><?php echo $name; ?></a>
								<?php }?>
								<?php }?>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>					
	<div class="gallery-masonry-isotope">
		<div class="grid-sizer"></div>
		<div class="grid-item">
			<?php if ( $portfolio_query->have_posts() ) : ?>
			<?php $i = 1; ?>
			<?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
			$categories = get_the_category();
			$slug = '';
			foreach($categories  as $cat){
			if(isset($cat->slug)){
				$slug .= $cat->slug;
			}
			}
			switch($i){
				case 1:
					$class_wrap = ' item-width-34 item-height-91 ';
					$img_size = 'thumbnail';
				break;
				case 2:
					$class_wrap = ' item-width-34 item-height-456 ';
					$img_size = 'thumbnail';
				break;
				case 3:
					$class_wrap = ' item-width-16 item-height-97 ';
					$img_size = 'thumbnail';
				break;
				case 4:
					$class_wrap = ' item-width-16 item-height-97 ';
					$img_size = 'thumbnail';
				break;
				case 5:
					$class_wrap = ' item-width-16 item-height-97 ';
					$img_size = 'thumbnail';
				break;
				case 6:
					$class_wrap = ' item-width-34 item-height-456 ';
					$img_size = 'thumbnail';
				break;
				case 7:
					$class_wrap = ' item-width-16 item-height-97 ';
					$img_size = 'thumbnail';
				break;
			}
			?>
			<div class="content-grid-item item-width-50-responsive<?php echo $class_wrap.' '. $slug;?>">
				<div class="inner">
					<div class="pic">
						<a href="<?php the_post_thumbnail_url(); ?>" data-fancybox-group="gallery" class="fancybox">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive">
							<span class="dh-overlay"></span>
						</a>
					</div>
				</div>
			</div>
			<?php $i++;
									?>
							
			<?php endwhile; endif; ?>
<!--
			$image_attachment = wp_get_attachment_image_src( $image_id, $image_size );
                                $image_url = $image_attachment[0];
			<div class="content-grid-item item-width-50-responsive  print-ads package">
				<div class="inner">
					<div class="pic">
						<a href="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-72.jpg" data-fancybox-group="gallery" class="fancybox"><img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-72.jpg" alt="" class="img-responsive"><span class="dh-overlay"></span></a>
					</div>
				</div>
			</div>
			<div class="content-grid-item item-width-50-responsive  illustration">
				<div class="inner">
					<div class="pic">
						<a href="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-73.jpg" data-fancybox-group="gallery" class="fancybox"><img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-73.jpg" alt="" class="img-responsive"><span class="dh-overlay"></span></a>
					</div>
				</div>
			</div>
			<div class="content-grid-item item-width-50-responsive item-width-16 item-height-97 branding">
				<div class="inner">
					<div class="pic">
						<a href="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-74.jpg" data-fancybox-group="gallery" class="fancybox"><img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-74.jpg" alt="" class="img-responsive"><span class="dh-overlay"></span></a>
					</div>
				</div>
			</div>
			<div class="content-grid-item item-width-50-responsive item-width-16 item-height-97 print-ads">
				<div class="inner">
					<div class="pic">
						<a href="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-75.jpg" data-fancybox-group="gallery" class="fancybox"><img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-75.jpg" alt="" class="img-responsive"><span class="dh-overlay"></span></a>
					</div>
				</div>
			</div>
			<div class="content-grid-item item-width-50-responsive  branding">
				<div class="inner">
					<div class="pic">
						<a href="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-76.jpg" data-fancybox-group="gallery" class="fancybox"><img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-76.jpg" alt="" class="img-responsive"><span class="dh-overlay"></span></a>
					</div>
				</div>
			</div>
			<div class="content-grid-item item-width-50-responsive item-width-16 item-height-97 package">
				<div class="inner">
					<div class="pic">
						<a href="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-77.jpg" data-fancybox-group="gallery" class="fancybox"><img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/portfolio-77.jpg" alt="" class="img-responsive"><span class="dh-overlay"></span></a>
					</div>
				</div>
			</div>
-->
		</div>
	</div>
</section>
<section class="our-team layout-1 padding-top-100 padding-bottom-100 blind">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="group-content">
					<div class="group-title group-title-1">
						<h2 class="main-title">awesome <span>team</span> <span class="dot"></span> <span class="mute-title">Team</span></h2></div>
					<div class="group-wrapper">
						 <?php
						$args = array(
								'post_type' => 'team',
								'posts_per_page' => 5,
						);
						$team_query = new WP_Query( $args );
							 ?>
						<?php if ( $team_query->have_posts() ) : ?>
						<div class="team-slick">
							 <?php $i = 1; ?>
							<?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
						 <div class="item item-member">
							<div class="member-line-1"></div>
							<div class="member-line-2">
								<div class="member-social member-left">
									<ul class="list-unstyled">
										<li><a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
										<li><a href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
										<li><a href="<?php the_field('pinterest'); ?>"><i class="fa fa-pinterest"></i></a></li>
										<li><a href="<?php the_field('google-plus'); ?>"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
								<div class="member-right"></div>
							</div>
							<div class="member-info">
								<div class="member-info-wrapper"><a href="<?php the_permalink(); ?>" class="member-name"><?php the_title(); ?></a>
									<div class="member-position"><?php the_field('member_position'); ?></div>
								</div>
							</div>
							<div class="member-wrapper">
								<div class="member-img"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive"></div>
							</div>
						</div>
							<?php $i++;
									?>
								<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="our-client layout-1 ver-2 padding-top-100 padding-bottom-100">
	<div class="container">
		<div class="row banner">
			<div class="col-sm-7 banner-left">
				<?php
						$args = array(
								'post_type' => 'our_clients',
								'posts_per_page' => 5,
						);
						$our_clients_query = new WP_Query( $args );
							 ?>
						<?php if ( $our_clients_query->have_posts() ) : ?>
				<div class="client-slick">
					<?php $i = 1; ?>
							<?php while ($our_clients_query->have_posts()) : $our_clients_query->the_post(); ?>
					<div class="item">
						<div class="avatar"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive"></div>
						<div class="name"><?php the_title(); ?></div>
						<div class="position"><?php the_field('position'); ?></div>
						<div class="description">
							<div class="line"></div>
							<div class="text"><?php the_content();?></div>
						</div>
					</div>
					<?php $i++;
									?>
								<?php endwhile; endif; ?>
				</div>
				<div class="nav-slide-client"> </div>
			</div>
			<div class="col-sm-5 banner-right">
				<div class="group-content">
					<div class="group-title group-title-2 bg-primary">
						<h2 class="main-title">our clients <span>said</span> <span class="dot"></span> <span class="mute-title">Said</span></h2></div>
					<div class="group-wrapper">
						<div class="text"><span class="w3-icon">&#10077;     </span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="blog-news layout-1 padding-top-100 padding-bottom-100">
	<div class="box-content-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php
						$args = array(
								'post_type' => 'news',
								'posts_per_page' => 2,
						);
						$news_query = new WP_Query( $args );
							 ?>
						<?php if ( $news_query->have_posts() ) : ?>
					<div class="group-content">
						<div class="group-title group-title-1">
							<h2 class="main-title">read our <span>news</span> <span class="dot"></span> <span class="mute-title">Blog</span></h2></div>
						<div class="group-wrapper">
							<ul class="list-blog-news list-unstyled">
								<?php $i = 1; ?>
							<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
								<li data-wow-delay="0.2s" class="wow fadeIn">
									<div class="box-date">
										<div class="date">
										<?php the_time('d') ?>
											</div>
									</div>
									<div class="box-img">
										<a href="<?php echo get_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive"></a>
									</div>
									<div class="box-content">
										<div class="info">
											<div class="item author">Posted By: <a href="#"><?php the_author_posts_link(); ?></a>
											</div>
											<div class="item comments"><i class="fa fa-comment"></i>
												<?php comments_popup_link('0 Comments','One Comment','% Comments', 'comment', 'Comment Disabled'); ?></div>
										</div><a href="<?php echo get_permalink(); ?>" class="title"><?php the_title() ?></a>
										<div class="text"><?php the_excerpt(); ?></div>
										<a href="<?php echo get_permalink(); ?>" class="btn btn-main">Read More</a>
									</div>
								</li>
								<?php $i++;
									?>
								<?php endwhile; endif; ?>
							</ul>
							<div class="group-button">
								<a href="#" class="btn btn-second btn-load-more">Read more News</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact layout-1 page-branding">
	<div class="container">
		<div class="row banner">
			<div class="col-sm-4 banner-right">
				<div class="group-title group-title-3">
					<h2 class="main-title">Get in <span>touch</span> <span class="dot"></span> <span class="mute-title">Start</span></h2></div>
			</div>
			<div class="col-sm-8 banner-left">
				<div class="banner-content">
					<div class="title">Let's start a <span>new project</span> together!</div>
					<form action="#" class="form-contact">
						<div class="form-group">
							<input type="text" placeholder="Name" class="form-control">
						</div>
						<div class="form-group">
							<input type="email" placeholder="Email" class="form-control">
						</div>
						<div class="form-group">
							<textarea rows="5" placeholder="Message" class="form-control"></textarea>
						</div><a href="#" class="btn btn-main">Submit Message</a></form>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
</div>
</div>
<?php get_footer(); ?>