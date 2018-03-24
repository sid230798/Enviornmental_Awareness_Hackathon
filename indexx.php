<?php

        require_once "includes/common.php";
		session_start();
		$result = mysqli_query($con,"select id, title, content, image_url, url from news order by time_stamp limit 4");
		$result2 = mysqli_query($con,"select id,user_id,imag_url,title from user_stories limit 4");
?>
<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Clean Enviornment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html"></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<?php if(isset($_SESSION['email'])) { ?>
					<li><a href="phpscript/logout.php">Logout</a></li>
					<li><a href="form.html">Stories Submit</a></li>
					<?php }else{ ?>
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Signup</a></li>
					<?php } ?>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
					
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="air.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Love is in the Air but is Highly <a href="optimal/index.php">Polluted</a></p>
							<h2>Air Pollution</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="waste.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Dump No Waste Protect Your <a href="optimal/Waste.php">Lives</a></p>
							<h2>Waste Dumping</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="sound.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>The Louder you Honk faster Your Health will <a href="optimal/Sound.php">Conk ...</a></p>
							<h2>Sound Pollution</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="dump.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Garbage Clutters the house that has no <a href="https://www.marion.sa.gov.au/three-bin-system">Dreams</a></p>
							<h2>Use Of Dustbin</h2>
						</header>
					</div>
				</article>
				<!--
				<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Ipsum dolor sed magna veroeros lorem ipsum</p>
							<h2>Lorem adipiscing</h2>
						</header>
					</div>
				</article>
				-->
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<?php  if($result && $result->num_rows > 0) { 
							while(($row = $result->fetch_assoc())){
							?>
						<div>
							<div class="box" id="<?php echo $row['id']; ?>">
								<div class="image fit">
									<?php if($row['image_url'] == null) { ?>
									<img src="images/pic02.jpg" alt="" id="news-image1"/>
									<?php } else{?>
										<img src="<?php echo $row['image_url']; ?>" alt="" id="news-image1"/>	
									<?php } ?>
								</div>
								<div class="content">
									<header class="align-center">
									<!--
										<p>maecenas sapien feugiat ex purus</p>
								        -->
										<h2 id="news-title1"><?php echo $row['title']; ?></h2>
									</header>
									<p id="news-content1"> <?php echo substr($row['content'], 0, 200); ?> . . .</p>
									<footer class="align-center">
										<a href="<?php echo $row['url']; ?>" class="button alt" id="news-link1">Learn More</a>
									</footer>
								</div>
							</div>
						</div>
						<?php 
							}
						} ?>

					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>Stories ...</h2>
						<p>True Humility is not thinking less of yourself;it is thinking of yourselves less</p>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">Trending Users Stories</p>
						<h2>User Stories</h2>
					</header>
					<div class="gallery">
						<?php  if($result2 && $result2->num_rows > 0) { 
							while(($row = $result2->fetch_assoc())){ ?>
						<div>
							<div class="image fit">
							<?php $url = "../generic.php?story_id=".$row['id']."&user_id=".$row['user_id']; ?>
								<a href="<?php echo $url; ?>"><img src="<?php echo $row['imag_url']; ?>" alt="" /></a>
								<h2> <?php echo $row['title']; ?> </h2>
							</div>
						</div>
							<?php } } ?>
						<!--	
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic02.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic03.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic04.jpg" alt="" /></a>
							</div>
						</div>
							-->
					</div>
				</div>
			</section>


		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
