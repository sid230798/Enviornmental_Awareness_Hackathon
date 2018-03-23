<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="includes/css/login.css" rel="stylesheet" type="text/css">
<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
    <form method="post" action="phpscript/login_submit.php">
        <input type="email" value="" placeholder="email" id="username" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,}" required/>
        <input type="password" value="" placeholder="Password" id="password" minlength="7" required/>
        <button>submit</button>
        <?php if(isset($_GET['error'])){ $error = $_GET['error'];?>
        <div class="hr"></div>
        <div align="center"><b> <?php echo $error; ?></b></div>
        <?php } ?>
    </form>
</div>