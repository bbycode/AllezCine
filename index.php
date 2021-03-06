<?php
require "" 
 ?>
<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Cinema Inema Inema</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/scrolling-nav.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
	</head>

	<body>
		<header>
			<div id="logo_bar">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" id="center_col">
							<div class="col-md-3">
								<div id="logo">
									<h3>Cinema</h3>
									<img src="img/logo.png" alt="logo">
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1 flex_disp">
								<div class="input-group flex_middle">
									<input placeholder="Recherche" class="form-control" type="text">
									<span class="input-group-addon">Go</span>
								</div>
							</div>
							<div class="col-md-3 col-md-offset-1 flex_disp dont_count">
								<div class="form-inline flex_middle">
									<i class="glyphicon glyphicon-earphone"></i>
									<label>(+32)495959559</label>
									<!--login modal-->
									<button type="button" data-toggle="modal" data-target="#loginmodal" id="loginButton">
									Login
									</button>
								</div>
							</div>
							<!--modal-->
							<div class="modal fade" id="loginmodal">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<!--modal header-->
										<div class="modal-header">
											<div id="logo">
												<h3>Cinema</h3>
												<img src="img/logo.png" alt="logo">
											</div>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<!--end modal header-->
										<!--modal body-->
										<div class="modal-body">
											<div class="row">
												<div class="col-md-10 col-md-offset-1">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
														aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
												</div>
											</div>
										</div>
										<!--end modal body-->
										<!--modal footer-->
										<div class="modal-footer">
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
										<!--end footer modal-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-default" id="navbar_base">
				<div class="container-fluid" id="navbar_container">
					<div class="container" id="navbar_container_norm">
						<div class="row">
							<div class="col-md-10 col-md-offset-1" id="nav_padding">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
								</div>
								<div class="collapse navbar-collapse new_padding" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li class="active"><a class="dont_count" href="#">HOME<span class="sr-only">(current)</span></a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Films<span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Aventures</a></li>
												<li><a href="#">Comedy</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Series <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Aventures</a></li>
												<li><a href="#">Comedy</a></li>
											</ul>
										</li>
										<li><a class="page-scroll" href="#featured_movies">Freatured Films</a></li>
										<li><a class="page-scroll" href="#featured_tv_series">Freatured Series</a></li>
										<li><a class="page-scroll" href="#shop_movies">Shop Movies</a></li>
										<li><a class="page-scroll" href="#contact_us">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<div class="jumbotron" id="jumbotron_style">
				<div class="container-fluid">
					<div class="row" id="jumbot_row">
						<div class="col-md-9 col-xs-12">
							<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
								<div class="carousel-inner">
									<div class="item active">
										<img src="img/tarzan.jpg" alt="Los Angeles">
										<div class="carousel-caption">
											<div class="col-md-12">
												<div id="myProgress">
													<div id="myBar" class="transition-timer-carousel-progress-bar"></div>
												</div>
											</div>
											<div class="col-md-12" id="main_title">
												<div class="center_it">
													<h3 class="title_style">Titre de Film</h3>
													<p class="p_style">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<img src="img/tarzan.jpg" alt="Los Angeles">
										<div class="carousel-caption">
											<div class="col-md-12">
												<div id="myProgress">
													<div id="myBar" class="transition-timer-carousel-progress-bar"></div>
												</div>
											</div>
											<div class="col-md-12" id="main_title">
												<div class="center_it">
													<h3 class="title_style">Titre de Film</h3>
													<p class="p_style">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<img src="img/tarzan.jpg" alt="Los Angeles" width="100%">
										<div class="carousel-caption">
											<div class="col-md-12">
												<div id="myProgress">
													<div id="myBar" class="transition-timer-carousel-progress-bar"></div>
												</div>
											</div>
											<div class="col-md-12" id="main_title">
												<div class="center_it">
													<h3 class="title_style">Titre de Film</h3>
													<p class="p_style">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<img src="img/tarzan.jpg" alt="Los Angeles">
										<div class="carousel-caption">
											<div class="col-md-12">
												<div id="myProgress">
													<div id="myBar" class="transition-timer-carousel-progress-bar"></div>
												</div>
											</div>
											<div class="col-md-12" id="main_title">
												<div class="center_it">
													<h3 class="title_style">Titre de Film</h3>
													<p class="p_style">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="item">
										<img src="img/tarzan.jpg" alt="Los Angeles">
										<div class="carousel-caption">
											<div class="col-md-12">
												<div id="myProgress">
													<div id="myBar" class="transition-timer-carousel-progress-bar"></div>
												</div>
											</div>
											<div class="col-md-12" id="main_title">
												<div class="center_it">
													<h3 class="title_style">Titre de Film</h3>
													<p class="p_style">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a class="left carousel-control style_it_left" href="#myCarousel" data-slide="prev">
									<button class="prev_it"><</button>
								</a>
								<a class="right carousel-control style_it_right" href="#myCarousel" data-slide="next">
									<button class="next_it">></button>
								</a>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
							<ul id="add_right">
								<li class="active_jumbotron" data-target="#myCarousel" data-slide-to="0" id="1">
									<a href="#">
										<img src="img/tarzan_logo.jpg" alt="" class="img">
										<h3>Lorem Ipsum</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae sem pulvinar, vestibulum mauris sed, auctor ligula. Sed dignissim velit eros, at venenatis lectus interdum eu.</p>
									</a>
								</li>
								<li data-target="#myCarousel" data-slide-to="1" id="2">
									<a href="#">
										<img src="img/tarzan_logo.jpg" alt="" class="img">
										<h3>Lorem Ipsum</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae sem pulvinar, vestibulum mauris sed, auctor ligula. Sed dignissim velit eros, at venenatis lectus interdum eu.</p>
									</a>
								</li>
								<li data-target="#myCarousel" data-slide-to="2" id="3">
									<a href="#">
										<img src="img/tarzan_logo.jpg" alt="" class="img">
										<h3>Lorem Ipsum</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae sem pulvinar, vestibulum mauris sed, auctor ligula. Sed dignissim velit eros, at venenatis lectus interdum eu.</p>
									</a>
								</li>
								<li data-target="#myCarousel" data-slide-to="3" id="4">
									<a href="#">
										<img src="img/tarzan_logo.jpg" alt="" class="img">
										<h3>Lorem Ipsum</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae sem pulvinar, vestibulum mauris sed, auctor ligula. Sed dignissim velit eros, at venenatis lectus interdum eu.</p>
									</a>
								</li>
								<li data-target="#myCarousel" data-slide-to="4" id="5">
									<a href="#">
										<img src="img/tarzan_logo.jpg" alt="" class="img">
										<h3>Lorem Ipsum</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae sem pulvinar, vestibulum mauris sed, auctor ligula. Sed dignissim velit eros, at venenatis lectus interdum eu.</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="social_media">
			<ul>
				<li id="facebook">Facebook</li>
				<li id="twitter">Twitter</li>
				<li id="dribbble">Dribbble</li>
				<li id="googleplus">GooglePlus</li>
			</ul>
		</div>
		<div class="container">
			<section id="after_jumbotron">
				<div class="col-md-10 col-md-offset-1" style="border: 2px rgba(0,0,0,0.2) solid;">
					<div class="thelatest in_col dont_count">
						<img class="img-responsive" src="img/lepatientanglais-1996-dramatique.jpg" alt="Le patient anglais">
						<div class="caption">
							<!--caption en liste-->
							<ul>
								<li>Le patient anglais</li>
								<li>1996</li>
								<li>Dramatique</li>
							</ul>
						</div>
					</div>
					<div class="thelatest in_col dont_count">
						<img class="img-responsive" src="img/inception-2010-scifi.jpg" alt="Inception">
						<div class="caption">
							<!--caption en liste-->
							<ul>
								<li>Inception</li>
								<li>2010</li>
								<li>Sci-fi</li>
							</ul>
						</div>
					</div>
					<div class="thelatest in_col dont_count">
						<img class="img-responsive" src="img/thefall-2006-dramatique.jpg" alt="The fall">
						<div class="caption">
							<!--caption en liste-->
							<ul>
								<li>The fall</li>
								<li>2006</li>
								<li>Dramatique</li>
							</ul>
						</div>
					</div>
					<div class="thelatest in_col dont_count">
						<img class="img-responsive" src="img/zoolander-2001-comedie.jpg" alt="Zoolander">
						<div class="caption">
							<!--caption en liste-->
							<ul>
								<li>Zoolander</li>
								<li>2001</li>
								<li>Comedie</li>
							</ul>
						</div>
					</div>
					<div class="thelatest in_col dont_count sec_bor_right">
						<img class="img-responsive" src="img/thelastsamurai.jpeg" alt="The last samurai">
						<div class="caption">
							<!--caption en liste-->
							<ul>
								<li>The last samurai</li>
								<li>2008</li>
								<li>Dramatique</li>
							</ul>
						</div>
					</div>
				</div>
		</div>
		</section>
		<!--end section after_jumbotron-->
		<div class="container">
			<section id="featured_movies">
				<h3 class="sectiontitle">FEATURED MOVIES</h3>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="btn-grp-style">
							<button type="button" class="btn btn-style f_all">All</button>
							<button type="button" class="btn btn-style f_comedie">Comédie</button>
							<button type="button" class="btn btn-style f_thriller">Thriller</button>
							<button type="button" class="btn btn-style f_aventure">Aventure</button>
							<button type="button" class="btn btn-style f_sci-fi">Sci-fi</button>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<!--ligne 1-->
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
							<img class="img-responsive" src="img/lesdeuxtours-2002-aventure.jpg" alt="Les deux tours">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Les deux tours</li>
									<li>2002</li>
									<li>Aventure</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
							<img class="img-responsive" src="img/seven-1995-thriller.jpg" alt="Seven">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Seven</li>
									<li>1996</li>
									<li>Thriller</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sci-fi">
							<img class="img-responsive" src="img/starwarsempire-1980-scifi.jpg" alt="Stars War">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Stars War</li>
									<li>1980</li>
									<li>Sci-fi</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 comedie">
							<img class="img-responsive" src="img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="What we do in the Shadow">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>What we do</li>
									<li>2014</li>
									<li>Comedie</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
							<img class="img-responsive" src="img/lesdeuxtours-2002-aventure.jpg" alt="Les deux tours">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Les deux tours</li>
									<li>2002</li>
									<li>Aventure</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
							<img class="img-responsive" src="img/shutterisland-2010-thriller.jpg" alt="Shutter Island">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Shutter Island</li>
									<li>2010</li>
									<li>Thriller</li>
								</ul>
							</div>
						</div>
						<!--ligne 2-->
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sci-fi">
							<img class="img-responsive" src="img/xmen-apocalypse-2017.jpg" alt="Xmen">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Xmen</li>
									<li>2017</li>
									<li>Sci-Fi</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
							<img class="img-responsive" src="img/seven-1995-thriller.jpg" alt="Seven">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Seven</li>
									<li>1996</li>
									<li>Thriller</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sci-fi">
							<img class="img-responsive" src="img/starwarsempire-1980-scifi.jpg" alt="Stars War">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Stars War</li>
									<li>1980</li>
									<li>Sci-fi</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 comedie">
							<img class="img-responsive" src="img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="What we do in the Shadow">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>What we do</li>
									<li>2014</li>
									<li>Comedie</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
							<img class="img-responsive" src="img/lesdeuxtours-2002-aventure.jpg" alt="Les deux tours">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Les deux tours</li>
									<li>2002</li>
									<li>Aventure</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
							<img class="img-responsive" src="img/shutterisland-2010-thriller.jpg" alt="Shutter Island">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Shutter Island</li>
									<li>2010</li>
									<li>Thriller</li>
								</ul>
							</div>
						</div>
						<!--ligne 3-->
						<div id="cacher_les_deux">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure a_cacher">
								<img class="img-responsive" src="img/lesdeuxtours-2002-aventure.jpg" alt="Les deux tours">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Les deux tours</li>
										<li>2002</li>
										<li>Aventure</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller a_cacher">
								<img class="img-responsive" src="img/seven-1995-thriller.jpg" alt="Seven">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Seven</li>
										<li>1996</li>
										<li>Thriller</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sci-fi a_cacher">
								<img class="img-responsive" src="img/starwarsempire-1980-scifi.jpg" alt="Stars War">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Stars War</li>
										<li>1980</li>
										<li>Sci-fi</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 comedie a_cacher">
								<img class="img-responsive" src="img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="What we do in the Shadow">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>What we do</li>
										<li>2014</li>
										<li>Comedie</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure a_cacher">
								<img class="img-responsive" src="img/lesdeuxtours-2002-aventure.jpg" alt="Les deux tours">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Les deux tours</li>
										<li>2002</li>
										<li>Aventure</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller a_cacher">
								<img class="img-responsive" src="img/shutterisland-2010-thriller.jpg" alt="Shutter Island">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Shutter Island</li>
										<li>2010</li>
										<li>Thriller</li>
									</ul>
								</div>
							</div>
							<!--ligne 4-->
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure a_cacher">
								<img class="img-responsive" src="img/lesdeuxtours-2002-aventure.jpg" alt="Les deux tours">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Les deux tours</li>
										<li>2002</li>
										<li>Aventure</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller a_cacher">
								<img class="img-responsive" src="img/seven-1995-thriller.jpg" alt="Seven">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Seven</li>
										<li>1996</li>
										<li>Thriller</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sci-fi a_cacher">
								<img class="img-responsive" src="img/starwarsempire-1980-scifi.jpg" alt="Stars War">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Stars War</li>
										<li>1980</li>
										<li>Sci-fi</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 comedie a_cacher">
								<img class="img-responsive" src="img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="What we do in the Shadow">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>What we do</li>
										<li>2014</li>
										<li>Comedie</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure a_cacher">
								<img class="img-responsive" src="img/lesdeuxtours-2002-aventure.jpg" alt="Les deux tours">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Les deux tours</li>
										<li>2002</li>
										<li>Aventure</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller a_cacher">
								<img class="img-responsive" src="img/shutterisland-2010-thriller.jpg" alt="Shutter Island">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Shutter Island</li>
										<li>2010</li>
										<li>Thriller</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="div-btn" id="moviesfeatured">
					<button type="button" class="btn btn-style" id="show-hide">
					<a href="#featured_movies">PLUS DE FILMS</a>
					</button>
				</div>
			</section>
			<!--end section featured movies-->
			<section id="featured_tv_series">
				<h3 class="sectiontitle">FEATURES SERIES TV</h3>
				<!--ligne 1-->
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="btn-grp-style">
							<button type="button" class="btn btn-style s_all">All</button>
							<button type="button" class="btn btn-style s_comedie">Comédie</button>
							<button type="button" class="btn btn-style s_thriller">Thriller</button>
							<button type="button" class="btn btn-style s_aventure">Aventure</button>
							<button type="button" class="btn btn-style s_sci-fi">Sci-fi</button>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<!--ligne 1-->
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
							<img class="img-responsive" src="img/batmanmovie-2017-comedie.jpg" alt="Batman">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Les deux tours</li>
									<li>2002</li>
									<li>Aventure</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
							<img class="img-responsive" src="img/seven-1995-thriller.jpg" alt="Seven">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Seven</li>
									<li>1996</li>
									<li>Thriller</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sci-fi">
							<img class="img-responsive" src="img/Survivestyle5-2004-comedie.jpg" alt="Survive Style">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Stars War</li>
									<li>1980</li>
									<li>Sci-fi</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 comedie">
							<img class="img-responsive" src="img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="What we do in the Shadow">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>What we do</li>
									<li>2014</li>
									<li>Comedie</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
							<img class="img-responsive" src="img/intouchables-2011-comedie.jpg" alt="Les intouchables">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Les deux tours</li>
									<li>2002</li>
									<li>Aventure</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
							<img class="img-responsive" src="img/shutterisland-2010-thriller.jpg" alt="Shutter Island">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Shutter Island</li>
									<li>2010</li>
									<li>Thriller</li>
								</ul>
							</div>
						</div>
						<!--ligne 2-->
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
							<img class="img-responsive" src="img/batmanmovie-2017-comedie.jpg" alt="Batman">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Les deux tours</li>
									<li>2002</li>
									<li>Aventure</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
							<img class="img-responsive" src="img/seven-1995-thriller.jpg" alt="Seven">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Seven</li>
									<li>1996</li>
									<li>Thriller</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sci-fi">
							<img class="img-responsive" src="img/Survivestyle5-2004-comedie.jpg" alt="Survive Style">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Stars War</li>
									<li>1980</li>
									<li>Sci-fi</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 comedie">
							<img class="img-responsive" src="img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="What we do in the Shadow">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>What we do</li>
									<li>2014</li>
									<li>Comedie</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
							<img class="img-responsive" src="img/intouchables-2011-comedie.jpg" alt="Les intouchables">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Les deux tours</li>
									<li>2002</li>
									<li>Aventure</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
							<img class="img-responsive" src="img/shutterisland-2010-thriller.jpg" alt="Shutter Island">
							<div class="caption capt-style">
								<!--caption en liste-->
								<ul>
									<li>Shutter Island</li>
									<li>2010</li>
									<li>Thriller</li>
								</ul>
							</div>
						</div>
						<!-- ligne 3 -->
						<div id="cacher_les_deux_series">
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
								<img class="img-responsive" src="img/batmanmovie-2017-comedie.jpg" alt="Batman">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Les deux tours</li>
										<li>2002</li>
										<li>Aventure</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
								<img class="img-responsive" src="img/seven-1995-thriller.jpg" alt="Seven">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Seven</li>
										<li>1996</li>
										<li>Thriller</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sci-fi">
								<img class="img-responsive" src="img/Survivestyle5-2004-comedie.jpg" alt="Survive Style">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Stars War</li>
										<li>1980</li>
										<li>Sci-fi</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 comedie">
								<img class="img-responsive" src="img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="What we do in the Shadow">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>What we do</li>
										<li>2014</li>
										<li>Comedie</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
								<img class="img-responsive" src="img/intouchables-2011-comedie.jpg" alt="Les intouchables">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Les deux tours</li>
										<li>2002</li>
										<li>Aventure</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
								<img class="img-responsive" src="img/shutterisland-2010-thriller.jpg" alt="Shutter Island">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Shutter Island</li>
										<li>2010</li>
										<li>Thriller</li>
									</ul>
								</div>
							</div>
							<!-- ligne 4 -->
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
								<img class="img-responsive" src="img/batmanmovie-2017-comedie.jpg" alt="Batman">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Les deux tours</li>
										<li>2002</li>
										<li>Aventure</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
								<img class="img-responsive" src="img/seven-1995-thriller.jpg" alt="Seven">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Seven</li>
										<li>1996</li>
										<li>Thriller</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sci-fi">
								<img class="img-responsive" src="img/Survivestyle5-2004-comedie.jpg" alt="Survive Style">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Stars War</li>
										<li>1980</li>
										<li>Sci-fi</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 comedie">
								<img class="img-responsive" src="img/WhatWeDoInTheShadows-2014-comedie.jpg" alt="What we do in the Shadow">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>What we do</li>
										<li>2014</li>
										<li>Comedie</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 aventure">
								<img class="img-responsive" src="img/intouchables-2011-comedie.jpg" alt="Les intouchables">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Les deux tours</li>
										<li>2002</li>
										<li>Aventure</li>
									</ul>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 thriller">
								<img class="img-responsive" src="img/shutterisland-2010-thriller.jpg" alt="Shutter Island">
								<div class="caption capt-style">
									<!--caption en liste-->
									<ul>
										<li>Shutter Island</li>
										<li>2010</li>
										<li>Thriller</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="div-btn">
					<button type="button" class="btn btn-style" id="show-hide_series">
					<a href="#featured_tv_series">PLUS DE SERIES</a>
					</button>
				</div>
			</section>
			<!--end section featured tv series-->
			<section id="shop_movies">
				<h3 class="sectiontitle">SHOP MOVIES</h3>
				<!--debut bouton de defillement-->
				<div class="row btn-def">
					<div class="col-md-offset-1 col-md-10 btn-defilement">
						<button type="button" class="btn btn-style" class="right carousel-control" href="#carousel123" data-slide="next"> > </button>
						<button type="button" class="btn btn-style" class="left carousel-control" href="#carousel123" data-slide="prev"> < </button>
					</div>
				</div>
				<!--fin bouton defilement-->
				<div class="row content-def">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="trailer_shop">
							<embed src="https://www.youtube.com/embed/dKrVegVI0Us">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 rightside">
							<!--div class="row">
								<div class="col-md-2 dont_count">
									<h5>Résumé</h5></div>
								<div class="col-md-1">:</div>
								<div class="col-md-9">
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet.</p>
								</div>
						</div-->
							<div class="row" id="alaune">
								<h4 class="col-md-offset-1" id="title_shop">CAPTAIN AMERICA CIVIL WAR</h4>
							</div>
							<div class="row">
								<label class="control-label col-md-offset-1 col-md-2" for="summary">Résumé</label>
								<label class="control-label col-md-1" for="punctuation"> : </label>
								<div class="col-md-8">
									<p id="texte_shop">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="row">
								<label class="control-label col-md-offset-1 col-md-2" for="date">Date</label>
								<label class="control-label col-md-1" for="punctuation"> : </label>
								<div class="col-md-8">
									<p id="date_shop">Mai 06, 2016.</p>
								</div>
							</div>
							<div class="row">
								<label class="control-label col-md-offset-1 col-md-2" for="genre">Genre</label>
								<label class="control-label col-md-1" for="punctuation"> : </label>
								<div class="col-md-8">
									<p id="gender_shop">Action | Adventure</p>
								</div>
							</div>
							<div class="row">
								<label class="control-label col-md-offset-1 col-md-2" for="price">Prix</label>
								<label class="control-label col-md-1" for="punctuation"> : </label>
								<div class="col-md-8">
									<p id="price_shop">4.95 €</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" id="shop_content">
					<div class="col-md-10 col-md-offset-1">
						<div class="carousel carousel-showsixmoveone slide" id="carousel123">
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-xs-12 col-sm-4 col-md-2"><a href="#shop_movies" id="shop_1"><img src="img/seven-1995-thriller.jpg" class="img-responsive"></a></div>
								</div>
								<div class="item">
									<div class="col-xs-12 col-sm-4 col-md-2"><a href="#shop_movies" id="shop_2"><img src="img/lepatientanglais-1996-dramatique.jpg" class="img-responsive"></a></div>
								</div>
								<div class="item">
									<div class="col-xs-12 col-sm-4 col-md-2"><a href="#shop_movies" id="shop_3"><img src="img/shutterisland-2010-thriller.jpg" class="img-responsive"></a></div>
								</div>
								<div class="item">
									<div class="col-xs-12 col-sm-4 col-md-2"><a href="#shop_movies" id="shop_4"><img src="img/game-of-thrones.jpg" class="img-responsive"></a></div>
								</div>
								<div class="item">
									<div class="col-xs-12 col-sm-4 col-md-2"><a href="#shop_movies" id="shop_5"><img src="img/thelastsamurai.jpeg" class="img-responsive"></a></div>
								</div>
								<div class="item">
									<div class="col-xs-12 col-sm-4 col-md-2"><a href="#shop_movies" id="shop_6"><img src="img/zoolander-2001-comedie.jpg" class="img-responsive"></a></div>
								</div>
								<div class="item">
									<div class="col-xs-12 col-sm-4 col-md-2"><a href="#shop_movies" id="shop_7"><img src="img/lesdeuxtours-2002-aventure.jpg" class="img-responsive"></a></div>
								</div>
								<div class="item">
									<div class="col-xs-12 col-sm-4 col-md-2"><a href="#shop_movies" id="shop_8"><img src="img/swissarmyman-2016-comedie.jpg" class="img-responsive"></a></div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<!--end section shop movies-->
			<section id="contact_us">
				<h3 class="sectiontitle">CONTACT US</h3>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-3">
							<div class="col-contactus">
								<div class="gliph">
									<i class="glyphicon glyphicon-map-marker"></i>
								</div>
								<ul class="align_content">
									<li>
										<h3 class="titre_dans_contact">Adress</h3>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="col-contactus">
								<div class="gliph">
									<i class="glyphicon glyphicon-earphone"></i>
								</div>
								<ul class="align_content">
									<li>
										<h3 class="titre_dans_contact">Call</h3>
									</li>
									<li>(+32)49595959</li>
									<li>(+32)49595959</li>
									<li>(+32)49595959</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="col-contactus">
								<div class="gliph">
									<i class="glyphicon glyphicon-envelope"></i>
								</div>
								<ul class="align_content">
									<li>
										<h3 class="titre_dans_contact">Email</h3>
									</li>
									<li>exemple@exemple.com</li>
									<li>exemple@exemple.com</li>
									<li>exemple@exemple.com</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="col-contactus">
								<div class="gliph">
									<i class="glyphicon glyphicon-user"></i>
								</div>
								<ul class="align_content">
									<li>
										<h3 class="titre_dans_contact">Social Media</h3>
									</li>
									<li>Facebook</li>
									<li>Twitter</li>
									<li>Google+</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-md-offset-1">
					<div class="row" id="contact_form">
						<div class="col-md-6">
							<input type="text" placeholder="First Name" class="form-control">
						</div>
						<div class="col-md-6">
							<input type="text" placeholder="Last Name" class="form-control">
						</div>
						<div class="col-md-6">
							<input type="text" placeholder="Email" class="form-control">
						</div>
						<div class="col-md-6">
							<input type="text" placeholder="Subject" class="form-control">
						</div>
						<div class="col-md-12">
							<textarea class="form-control" rows="3" placeholder="Message" style="resize: none;"></textarea>
						</div>
					</div>
					<button class="btn btn-style send_msg">SEND MESSAGE</button>
				</div>
				</div>
			</section>
			<!--end section contact us-->
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1" id="set_to_zero">
							<div class="col-md-12 footer_section">
								<div class="col-md-6 text-left">
									<h2>SUBSCRIBE TO US!</h2>
									<div class="input-group" id="form_container">
										<input placeholder="exemple@exemple.com" class="form-control" type="email">
										<span class="btn btn-style input-group-addon">SEND</span>
									</div>
								</div>
								<div class="col-md-6 text-right">
									<img src="img/logo.png" alt="" style="margin-top: 30px;">
								</div>
							</div>
							<div class="col-md-12">
								<div id="underline_section">
									<div class="col-md-6">
										<p class="text-left">
											Created by <a href="https://github.com/bbycode">Gilles</a> & <a href="https://github.com/Zochowski">Adrian</a> / Designed by <a href="https://github.com/sallartiste">Eric</a> / Copyright 2017
										</p>
									</div>
									<div class="col-md-6">
										<ul class="list-inline text-right" id="footer_list">
											<li>Movies</li>
											<li>FAQ</li>
											<li>Action</li>
											<li>Adventure</li>
											<li>Comedy</li>
											<li>Icons</li>
											<li>Contact Us</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<script src="js/jquery-3.2.1.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/scrolling-nav.js"></script>
			<script src="js/jquery.easing.min.js"></script>
			<script src="js/main.js"></script>
	</body>

</html>
