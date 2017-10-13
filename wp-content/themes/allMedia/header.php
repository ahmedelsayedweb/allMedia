<!DOCTYPE html>
<html <?php get_bloginfo('language') ?>>
<?php  
    if ( function_exists( 'ot_get_option' ) ) {
	  $logo_image = ot_get_option( 'logo' );
	  $logo_thumbnail = ot_get_option( 'logo_thumbnail' );
	  $favicon = ot_get_option( 'favicon' );
	}
    ?>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/ico" href="<?php echo $logo_thumbnail; ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<!-- FONT CSS-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
		<?php wp_head(); ?>
	</head>
	<body>
    <div class="body-wrapper">
        <!-- PAGE LOADER-->
        <div class="preload">
            <div class="logo-container">
				<img src="<?php echo $logo_thumbnail; ?>" alt="" class="logo">
                <div class="logo-curtain">
                    <div></div>
                </div>
            </div>
        </div>
        <div class="wrapper-content">
            <!-- HEADER-->
            <header>
                <div class="bg-transparent header header-01 ver2">
                    <div class="header-main">
                        <div class="container">
							<div class="logo none">
                                        <a href="<?php bloginfo('url'); ?>" class="header-logo">
											<img src="<?php echo $logo_image; ?>" alt="" />
										</a>
                             </div>
                            <div class="header-main-wrapper">
                                <div class="hamburger-menu">
                                    <div class="hamburger-menu-wrapper"><span>Menu</span>
                                        <div class="icons"><span class="line-menu line-top"></span><span class="line-menu line-middle"></span><span class="line-menu line-bottom"></span></div>
                                    </div>
                                </div>
                                <div class="navbar-header">
                                    <div class="logo">
                                        <a href="index.html">
											<img src="<?php echo $logo_thumbnail; ?>" alt="" />
										</a>
                                    </div>
                                </div>
                                <div class="group-title group-title-1">
                                    <h2 class="main-title">
										<span class="mute-title">Menu</span>
									</h2>
								</div>
                                <div class="drawer-overlay hidden-sm hidden-xs">
									<i class="fa fa-times"></i>
								</div>
                                <nav class="navigation">
                                    <div class="navigation-all">
                                        <div class="menu-hamburger">
                                            <div class="drawer-overlay hidden-lg hidden-md">
												<i class="fa fa-times"></i>
											</div>
                                            <div class="button-search">
                                                <div class="main-menu">
                                                    <div class="nav-search">
                                                        <form action="#">
                                                            <input type="text" placeholder="Search" class="input-search form-control" />
                                                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav-links nav navbar-nav is-hidden ">
												
												<?php bootstrap_menu(); ?>
<!--
                                                <li class="dropdown active">
													<a href="javascript:void(0)" class="main-menu">
														<span class="text">Home</span>
													</a>
                                                </li>
                                                <li><a href="about-us.html" class="main-menu">
													<span class="text">about</span>
													</a>
												</li>
                                                <li><a href="services.html" class="main-menu">
													<span class="text">Services</span>
													</a>
												</li>
                                                <li><a href="team.html" class="main-menu">
													<span class="text">Team</span>
													</a>
												</li>
                                                <li><a href="contact.html" class="main-menu">
													<span class="text">Contact</span>
													</a>
												</li>
-->
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- WRAPPER-->