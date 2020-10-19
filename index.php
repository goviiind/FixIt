<html lang="en">
	<head>
		<title>FixIt</title>
		<!-- Required meta tags -->
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link href="https://fonts.googleapis.com/css2?family=Exo:wght@900&family=Roboto:wght@900&family=Rubik:wght@300&family=Viga&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
		
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light navbar-default fixed-top bg-light">
			<a class="navbar-brand" href="#">FixIt</a>
			<button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link" href="#home">Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admin/login.php" >Admin</a>
					</li>
					
				</div>
			</nav>
			<section id="home">
				<div class="heading">
					
					<div class="header">
						<h2>We Love to maintain your</h2>
						<h1>Beautiful Home.</h1>
						<p>Home Repair Service from FixIt in Mumbai.</p>
						<a href="#services"><button type="button" class="btn btn-outline-light btn-lg"name="button">Book Now</button></a>
					</div>
				</div>
			</section>
			<section id="services">
				<div class="container plumber-services" >
					<h3>Services Related to Plumbing</h3>
					<hr>
					
					
					<div class="row ">
						<div class=" plum-ser col-lg-4 col-md-6 " data-aos="fade-up">
							<img src="images/pipes.jpg" class="plum-services" height="200" width="300">
							<p>Install and Repair Pipes</p>
						</div>
						<div class=" plum-ser col-lg-4 col-md-6 " data-aos="fade-up">
							<img src="images/watertap.jpg" height="200" width="300"class="plum-services">
							<p>Watertaps</p>
						</div>
						
						
						
						<div class=" plum-ser col-lg-4 col-md-12" data-aos="fade-up">
							<img src="images/bathtub.jpg" height="200" width="300" class="plum-services">
							<p>Shower/Bathtub</p>
						</div>
						
						
					</div>
					<button type="button" class="btn btn-outline-dark btn-lg"name="button"data-toggle="modal" data-target="#myModal">Book Plumber</button>
					<h3>Services Related to Electrical</h3>
					<hr>
					
					<div class="row ">
						<div class=" plum-ser col-lg-4 col-md-6 " data-aos="fade-up">
							<img src="images/switch.jpg" class="plum-services" height="200" width="300">
							<p>Dimmers, switches, plugs & outlets</p>
						</div>
						<div class=" plum-ser col-lg-4 col-md-6 " data-aos="fade-up">
							<img src="images/wire.jpg" height="200" width="300"class="plum-services">
							<p>Wiring inspections</p>
						</div>
						
						
						
						<div class=" plum-ser col-lg-4 col-md-12" data-aos="fade-up">
							<img src="images/generator.jpg" height="200" width="300" class="plum-services">
							<p>Home generators</p>
						</div>
						
					</div>
					<button type="button" class="btn btn-outline-dark btn-lg"name="button" data-toggle="modal" data-target="#myModal2" >Book Electrician</button>
					
				</div>
			</section>
			<section>
				<div class="modal m-modal fade" id="myModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header d-block text-center">
								<h5 class="modal-title">Plumber Will Contact You in few minutes</h5>
								<button type="button" class="close " data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="booking.php" method="post" autocomplete="off">
									
									<input type="text" name="name" placeholder="Enter Your Name" required><br>
									
									
									<input type="email" name="email" placeholder="Email" required="" email><br>
									
									
									<input type="text" name="city" placeholder="City" required><br>
									
									<input type="text" name="contact" maxlength="10"   placeholder="Enter Your Number" onkeyup="val1(contact)" required>

									<div class="alert alert-danger  fade show  " style="display:none;" id="number"role="alert">
										<h6 class="text-center">Enter Numbers Only !</h6>
										
										
									</div>
									
									
									
									
									<button type="submit" class="btn  btn-dark btn-block  " name="book-plum">Book Now</button>
									
									
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="modal m-modal fade" id="myModal2"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header d-block text-center">
								<h5 class="modal-title">Electrician Will Contact You in few minutes</h5>
								
								<button type="button" class="close " data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="booking.php" method="post" autocomplete="off">
									
									<input type="text" name="name" placeholder="Enter Your Name" required><br>
									
									
									<input type="email" name="email" placeholder="Email" required><br>
									
									
									<input type="text" name="city" placeholder="City" required><br>
									
									<!-- <input type="text" name="contact"  maxlength="10" placeholder="Enter Your 10 Digit Mobile No"> -->
									<input type="text" name="contact" maxlength="10"   placeholder="Enter Your Number" onkeyup="val2(contact)" required>
									
									<div class="alert alert-danger  fade show  "  style="display:none;" id="number2"role="alert">
										<h6 class="text-center">Enter Numbers Only !</h6>
										
										
									</div>
									
									
									<button type="submit" class="btn  btn-dark btn-block"  name="book-elec">Book Now</button>

									
								</div>
								
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="process">
			<div class= "process">
				<h4>How We Work</h4>
				<hr>
				<p>You can book a home repair service requirement right from your home.It's quite easy and here's how it works.</p>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 "data-aos="fade-right">
							<i class="far icon   fa-clipboard"></i>
							<h5>We have a list of verified Servicemen</h5>
							<p class="para">These are trained , verified and Trustworthy guys</p>
						</div>
						<div class="col-md-4 "data-aos="fade-up">
							<i class="fas icon  fa-male"></i>
							<h5>Say you need a serviceman for your home</h5>
							<p class="para">You can book on our website or call our customer care number</p>
						</div>
						<div class="col-md-4 " data-aos="fade-left">
							<i class="fas icon  fa-handshake"></i>
							<h5>FixIt resolves all your home repair issues</h5>
							<p class="para">The call is closed after your complete satisfaction</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="about">
			<div class="abt-header">
				
				<div class="abt-heading">
					<h3>About Us</h3>
					<hr>
				</div>
				<div class="about">
					<p>FixIt is our commitment to bring professionalism, good service and trust to the
						home repair service and maintenance business. We take immense pride
						in sending some of the most professional handymen to your homes to
					fix things that aren't working.</p>
				</div>
			</div>
			<div class="container">
				<div class=" vision">
					<div class="row abt">
						<div class="col-lg-6 col-md-6 vis" data-aos="fade-right">
							<h3>Our Vision</h3>
							<P>To provide customers with home repair service experience that delights
							them and become their best-handy-friend.</p>
						</div>
						<div class="col-lg-6 col-md-6" data-aos="fade-left">
							<img class="vis-img"src="images/vision.jpg" height="220" width="400">
						</div>
						
						
					</div>
					
				</div>
				<hr>
				<div class="vision">
					<div class="row abt">
						<div class="col-lg-6 col-md-6 val" data-aos="fade-right">
							<img class="val-img"src="images/values.jpg" height="220" width="400">
						</div>
						<div class="col-lg-6 col-md-6" data-aos="fade-left">
							<h3>Our Values</h3>
							<p>We believe in our processes and in our people who lead them.
							We enjoy the power of empowerment and delegation.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="contact">
			<div class="con-header">
				<div class="con-heading">
					<h3>Get In Touch</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et augue purus. In ut tempus dolor. Nullam nec faucibus sem. Mauris posuere lorem vel risus scelerisque scelerisque. In eget odio felis.</p>
				</div>
				<div class="con-form">
					<form method="post" action="contact.php" autocomplete="off">
						<table>
							<tr>
								
								<td><input type="text" name="name" placeholder="Name"  required><br></td>
							</tr>
							<tr>
								
								<td><input type="email" name="email" placeholder="Email" required><br></td>
							</tr>
							<tr>
								
								<td><textarea placeholder="Message" name="msg" required></textarea><br></td>
							</tr>
						</table>
						
						
						
						
						<button type="submit" class="btn  btn-outline-light  btn-lg"><i class="fas fa-paper-plane"></i></button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<p>All Rights &copy; Reserved by FixIt</p>
		<a href="https://www.instagram.com/goviiind/"><i class="fab fa-instagram"></i></a>
		<a href="https://twitter.com/govindsharma781"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-linkedin"></i></a>
		<a href="#"><i class="fab  fa-facebook"></i></a>
		
		<div class="hm">
			<a href="#"><i class="hm fa fa-arrow-up " aria-hidden="true"></i></a>
		</div>
		
	</footer>
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	


	<script type="text/javascript" src="js/index.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
	AOS.init({
		offset:200,
		duration: 800,
	});
	</script>
</body>
</html>