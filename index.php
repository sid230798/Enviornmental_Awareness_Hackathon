<?php

        require_once "includes/common.php";
  
        $result = mysqli_query($con,"select id, title, content, image_url, url from news order by time_stamp limit 4");
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
							<p>Love is in the Air but is Highly <a href="https://templated.co">Polluted</a></p>
							<h2>Air Pollution</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="waste.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Dump No Waste Protect Your <a href="https://templated.co">Lives</a></p>
							<h2>Waste Dumping</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="sound.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>The Louder you Honk faster Your Health will <a href="https://templated.co">Conk ...</a></p>
							<h2>Sound Pollution</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="dump.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Garbage Clutters the house that has no <a href="https://templated.co">Dreams</a></p>
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
									<p id="news-content1"> <?php echo substr($row['content'], 0, 240); ?></p>
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
						<p>Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
						<h2>Morbi maximus justo</h2>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna</p>
						<h2>Morbi maximus justo</h2>
					</header>
					<div class="gallery">
						<div>
							<div class="image fit">
								<a href="#"><img src="images/pic01.jpg" alt="" /></a>
							</div>
						</div>
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