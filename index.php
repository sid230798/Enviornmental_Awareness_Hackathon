<?php

        include('Connection.php');
  
        $result = mysqli_query($conn,"select id from news order by time_stamp limit 4");
  
        $id_array = array();
        if (mysqli_num_rows($result) > 0){
        
                while($row = mysqli_fetch_assoc($result)) {
                
                        $id = $row["id"]; 
                        array_push($id_array,$id);     
                }
        
        
        }else{
        
                echo "0 results"; 
        
        }

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

						<div>
							<div class="box" id="<?php echo $id_array[0]?>">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" id="news-image1"/>
								</div>
								<div class="content">
									<header class="align-center">
									<!--
										<p>maecenas sapien feugiat ex purus</p>
								        -->
										<h2 id="news-title1">Lorem ipsum dolor</h2>
									</header>
									<p id="news-content1"> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
									<footer class="align-center">
										<a href="#" class="button alt" id="news-link1">Learn More</a>
									</footer>
								</div>
							</div>
						</div>
						
						<script>
						        var id  = <?php echo $id_array[0]?>;
						        var url = "api/newsapi.php?id="+id;
						        $(document).ready(function() {
						                
						                $.getJSON(url, function(json) {
						                
                                                                          json.forEach(function(val) {
                                                                          
                                                                                $("#news-image1").attr('src',val.image_url);
                                                                                $("#news-link1").attr('href',val.url);
                                                                                $("#news-title1").html(val.title);
                                                                                $("#news-content1").html(val.content);
                                                                          
                                                                          });
                                                                          
                                                                });
						        
						        });
						
						</script>

						<div>
							<div class="box" id="<?php echo $id_array[1]?>">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" id="news-image2"/>
								</div>
								<div class="content">
									<header class="align-center">
									<!--
										<p>maecenas sapien feugiat ex purus</p>
								        -->
										<h2 id="news-title2">Lorem ipsum dolor</h2>
									</header>
									<p id="news-content2"> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
									<footer class="align-center">
										<a href="#" class="button alt" id="news-link2">Learn More</a>
									</footer>
								</div>
							</div>
						</div>
						<script>
						        var id  = <?php echo $id_array[1]?>;
						        var url = "api/newsapi.php?id="+id;
						        $(document).ready(function() {
						                
						                $.getJSON(url, function(json) {
						                
                                                                          json.forEach(function(val) {
                                                                          
                                                                                $("#news-image2").attr('src',val.image_url);
                                                                                $("#news-link2").attr('href',val.url);
                                                                                $("#news-title2").html(val.title);
                                                                                $("#news-content2").html(val.content);
                                                                          
                                                                          });
                                                                          
                                                                });
						        
						        });
						
						</script>
						<div>
							<div class="box" id="<?php echo $id_array[2]?>">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" id="news-image3"/>
								</div>
								<div class="content">
									<header class="align-center">
									<!--
										<p>maecenas sapien feugiat ex purus</p>
								        -->
										<h2 id="news-title3">Lorem ipsum dolor</h2>
									</header>
									<p id="news-content3"> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
									<footer class="align-center">
										<a href="#" class="button alt" id="news-link3">Learn More</a>
									</footer>
								</div>
							</div>
						</div>
						<script>
						        var id  = <?php echo $id_array[2]?>;
						        var url = "api/newsapi.php?id="+id;
						        $(document).ready(function() {
						                
						                $.getJSON(url, function(json) {
						                
                                                                          json.forEach(function(val) {
                                                                          
                                                                                $("#news-image3").attr('src',val.image_url);
                                                                                $("#news-link3").attr('href',val.url);
                                                                                $("#news-title3").html(val.title);
                                                                                $("#news-content3").html(val.content);
                                                                          
                                                                          });
                                                                          
                                                                });
						        
						        });
						
						</script>
						<div>
							<div class="box" id="<?php echo $id_array[3]?>">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" id="news-image4"/>
								</div>
								<div class="content">
									<header class="align-center">
									<!--
										<p>maecenas sapien feugiat ex purus</p>
								        -->
										<h2 id="news-title4">Lorem ipsum dolor</h2>
									</header>
									<p id="news-content4"> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
									<footer class="align-center">
										<a href="#" class="button alt" id="news-link4">Learn More</a>
									</footer>
								</div>
							</div>
						</div>
						<script>
						        var id  = <?php echo $id_array[3]?>;
						        var url = "api/newsapi.php?id="+id;
						        $(document).ready(function() {
						                
						                $.getJSON(url, function(json) {
						                
                                                                          json.forEach(function(val) {
                                                                          
                                                                                $("#news-image4").attr("src",val.image_url);
                                                                                $("#news-link4").attr("href",val.url);
                                                                                $("#news-title4").html(val.title);
                                                                                $("#news-content4").html(val.content);
                                                                          
                                                                          });
                                                                          
                                                                });
						        
						        });
						
						</script>

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
