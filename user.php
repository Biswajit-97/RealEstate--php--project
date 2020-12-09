<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>DreamProperty.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
    <div class="banner">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand text-white" href="#">
                        DreamProperty
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item   mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item  mr-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="banner-text">
                <div class="slider-info">
                    <h3>Find a Home to Suit Your Lifestyle</h3>
                    <a class="btn btn-primary mt-lg-5 mt-3 agile-link-bnr" href="about.html" role="button">View More</a>
                </div>
            </div>
        </div>
    </div>
<br><br><br>

    <?php include 'property.php'; ?>
    <br><br><br>
	<?php include 'loc.php'; ?><br><br><br>
	
    <footer id="footer" class="py-5">
			<div class="container">
				<div class="row  py-lg-5">
					<div class="col-lg-3 col-sm-6 footer-logo">
						<h5>about us</h5>
						<h2>
							<a href="index.html">Real Estate</a>
						</h2>
						<p class="mt-3">Nulla quis lorem ut libermalesuada ultrices posuere cubilia feugiatrice praesent sapien massa</p>
					</div>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
						<h5>Quick links</h5>
						<ul class="list-unstyled quick-links">
							<li>
								<a href="index.html">
								<i class="fa fa-angle-double-right"></i>Home</a>
							</li>
							<li>
								<a href="about.html">
									<i class="fa fa-angle-double-right"></i>About</a>
							</li>
							<li>
								<a href="services.html">
									<i class="fa fa-angle-double-right"></i>Services</a>
							</li>
							<li>
								<a href="gallery.html">
									<i class="fa fa-angle-double-right"></i>Gallery</a>
							</li>
							<li>
								<a href="contact.html">
									<i class="fa fa-angle-double-right"></i>Contact</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
						<h5>working hours</h5>
						<ul class="list-unstyled quick-links">
							<li>
								Monday - Friday
								<br>
								<span>9.00 - 20.00</span>
							</li>
							<li>
								Saturday
								<br>
								<span> 10.00 - 16.00 </span>
							</li>
							<li>
								Sunday
								<br>
								<span> Closed </span>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-sm-6 footer_grid1 mt-lg-0 mt-4">
						<h5>Address</h5>
						<div class="fv3-contact">
							<span class="fas fa-envelope-open mr-2"></span>
							<p>
								<a href="mailto:example@email.com">info@example.com</a>
							</p>
						</div>
						<div class="fv3-contact my-2">
							<span class="fas fa-phone-volume mr-2"></span>
							<p>+456 123 7890</p>
						</div>
						<div class="fv3-contact">
							<span class="fas fa-home mr-2"></span>
							<p>+90 nsequursu dsdesdc,
								<br>xxx Street State 34789.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>


    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>