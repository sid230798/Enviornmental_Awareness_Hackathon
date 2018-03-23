<html>
	<head>
		<title>Clean Enviornment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="includes/css/login.css" />
        <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css" />
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
					<?php }else{ ?>
					<li><a href="login.php">Login</a></li>
					<?php } ?>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <form method="post" action="phpscript/signup_submit.php">
        <input type="name" value="" name="name" placeholder="full name" id ="username" required />
        <input type="email" value="" name="email" placeholder="email" id="username" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,}" required/>
        <input type="password" value="" name="password" placeholder="Password" id="password" minlength="7" required/>
        <button>submit</button>
        <?php if(isset($_GET['error'])){ $error = $_GET['error'];?>
        <div class="hr"></div>
        <div align="center"><b> <?php echo $error; ?></b></div>
        <?php } ?>
    </form>
</div>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

