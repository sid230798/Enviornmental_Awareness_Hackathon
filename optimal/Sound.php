<?php
        

        require_once "../includes/common.php";
  
        $result = mysqli_query($con,"select user_stories.id,user_id,name,title, content, imag_url from user_stories join user where user.id = user_id");
        echo $con->error;

?>
<!DOCTYPE html>
<!--
Template Name: Optimal
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Optimal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="row100 bgded" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!--
  <div class="wrapper row0">
    <div id="topbar" class="clear"> 

      <div class="fl_left">
        <ul class="nospace inline pushright">
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
      </div>

    </div>
  </div>
  -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  
  <div class="wrapper row1">
    <header id="header" class="clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Optimal</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="pages/gallery.html">Gallery</a></li>
              <li><a href="pages/full-width.html">Full Width</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <section id="pageintro" class="clear"> 
      <!-- ################################################################################################ -->
      <p class="font-x2 nospace btmspace-30 capitalise">Befair don't Pollute the Air</p>
      <h2 class="font-x3 uppercase nospace btmspace-30">Sound Pollution</h2>
      <p class="nospace btmspace-50"></p>
      <ul class="nospace inline pushright">
        <li><a class="btn" href="https://www.conserve-energy-future.com/causes-and-effects-of-noise-pollution.php">Sound Pollution Causes</a></li>
        <li><a class="btn bg-red" href="https://www.conserve-energy-future.com/causes-and-effects-of-noise-pollution.php">Sound Pollution Solutions</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="container clear"> 
    <!-- ################################################################################################ -->
    <div class="flex-carousel">
      <ul class="flex-carousel-items">
      <?php  if($result && $result->num_rows > 0) { 
	        while(($row = $result->fetch_assoc())){
	?>
        <li>
          <figure class="group">
            <div class="one_quarter first"><?php if($row['imag_url'] == null) { ?>
					<img class="circle" src="images/demo/180x180.png" alt="">
					<?php } else{?>
						        <img src="<?php echo $row['imag_url']; ?>" alt="" id="news-image1"/>	
					<?php } ?></div>
            <figcaption class="three_quarter">
              <p><?php echo substr($row['content'], 0, 20); ?><?php $url = "../generic.php?story_id=".$row['id']."&user_id=".$row['user_id']; ?><a href = "<?php echo $url; ?>" >...Read More</a></p>
              <ul>
                <li class="bold"><?php echo $row['name'] ; ?></li>
                <li class="bold"><?php echo $row['title']; ?></li>
              </ul>
            </figcaption>
          </figure>
          
        </li>
        <?php } } ?>
        <!--
        <li>
          <figure class="group">
            <div class="one_quarter first"><img class="circle" src="images/demo/180x180.png" alt=""></div>
            <figcaption class="three_quarter">
              <p>Sed sagittis, nunc sit amet consectetur convallis, tortor urna dictum lectus, in vulputate ligula turpis vitae neque. Pellentesque sagittis tempus sem nec dignissim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam aliquam id mi non viverra. Aliquam erat volutpat. Integer sagittis ante quis volutpat interdum. Vivamus id magna ac felis luctus tincidunt.</p>
              <ul>
                <li class="bold">Name</li>
                <li>Position, Title</li>
              </ul>
            </figcaption>
          </figure>
        </li>
        <li>
          <figure class="group">
            <div class="one_quarter first"><img class="circle" src="images/demo/180x180.png" alt=""></div>
            <figcaption class="three_quarter">
              <p>Nullam nec nibh ultricies diam suscipit congue a a tortor. Duis sed rhoncus metus, vel elementum est. Fusce sed justo et nibh tincidunt pharetra. Maecenas posuere ac felis nec faucibus. Etiam a sagittis orci. Morbi at sodales nunc. Suspendisse vitae posuere odio. Curabitur iaculis feugiat justo, a blandit dolor placerat nec. Sed lobortis volutpat cursus. Maecenas mollis massa sed maximus posuere.</p>
              <ul>
                <li class="bold">Name</li>
                <li>Position, Title</li>
              </ul>
            </figcaption>
          </figure>
        </li>
        -->
      </ul>
    </div>
    
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <p class="heading">Some Inovative Solutions for Problems</p>
    <h2 class="heading uppercase bold font-x2">Articles</h2>
    <p class="btmspace-50">People who are Crazy Enough to think they can change the world are the ones they do.</p>
    <div class="group products">
      <div class="one_third first">
        <figure><img src="images/demo/320x390.png" alt="">
          <figcaption class="bg-orange-trans">
            <p class="heading font-x1 uppercase">Global Warming Problem</p>
            <p>Duis semper ultrices eros id pharetra. Morbi in bibendum eros phasellus.</p>
            <footer><a class="btn bg-orange" href="http://www.sciencemag.org/news/2017/05/noise-pollution-invading-even-most-protected-natural-areas">Global Warming</a></footer>
          </figcaption>
        </figure>
      </div>
      <div class="one_third">
        <figure><img src="images/demo/320x390.png" alt="">
          <figcaption class="bg-black-trans">
            <p class="heading font-x1 uppercase">Natural Problems Cause</p>
            <p>Duis semper ultrices eros id pharetra. Morbi in bibendum eros phasellus.</p>
            <footer><a class="btn" href="https://helpsavenature.com/noise-pollution-effects">Natural Ways</a></footer>
          </figcaption>
        </figure>
      </div>
      <div class="one_third">
        <figure><img src="images/demo/320x390.png" alt="">
          <figcaption class="bg-red-trans">
            <p class="heading font-x1 uppercase">Outer World Innovations</p>
            <p>Duis semper ultrices eros id pharetra. Morbi in bibendum eros phasellus.</p>
            <footer><a class="btn bg-red" href="https://ourworldindata.org/air-pollution">Outer World</a></footer>
          </figcaption>
        </figure>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div>

  <h1> Top Stats of India in Sound Pollution : </h1>
  <img src="Sound.jpg" />

</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!--
<div class="wrapper row100 bgded" style="background-image:url('images/demo/backgrounds/01.png');">
  <div class="overlay">
    <div class="container clear center"> 

      <h2 class="uppercase">Sed hendrerit felis ante ut gravida sem bibendum non</h2>
      <p class="btmspace-50">Vivamus mollis purus viverra felis sodales pharetra. Cras tincidunt erat urna, at rutrum risus congue a. Aliquam nec nisi et sapien venenatis venenatis at id orci.</p>
      <p class="nospace"><a class="btn" href="#">Aenean sed erat a sapien vestibulum</a></p>

    </div>
  </div>
</div>

<div class="wrapper row2">
  <div class="container clear center"> 

    <h2 class="heading nospace uppercase">Donec luctus convallis rhoncus</h2>
    <p class="nospace btmspace-30">Sed euismod augue eget nibh congue, eget placerat purus convallis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam justo magna.</p>
    <ul class="nospace inline btmspace-50 pushright">
      <li><a class="btn bg-orange" href="#">Suspendisse ligula</a></li>
      <li><a class="btn bg-red" href="#">Etiam placerat magna</a></li>
    </ul>

    <ul class="nospace group">
      <li class="one_quarter first"><i class="fa fa-3x fa-users"></i>
        <p class="numb">12345</p>
        <p>Maecenas libero nunc</p>
      </li>
      <li class="one_quarter"><i class="fa fa-3x fa-thumbs-o-up"></i>
        <p class="numb">12345</p>
        <p>Volutpat eu erat sed</p>
      </li>
      <li class="one_quarter"><i class="fa fa-3x fa-line-chart"></i>
        <p class="numb">12345</p>
        <p>Blandit elementum etiam.</p>
      </li>
      <li class="one_quarter"><i class="fa fa-3x fa-money"></i>
        <p class="numb">12345</p>
        <p>Scelerisque eros nulla</p>
      </li>
    </ul>

  </div>
</div>

<div class="wrapper row100 bgded" style="background-image:url('images/demo/backgrounds/01.png');">
  <div class="overlay">
    <div id="newsletter" class="clear center"> 

      <h2 class="uppercase font-x3 btmspace-50">Subscribe to our newsletter</h2>
      <form class="inline clear" method="post" action="#">
        <input type="text" value="" placeholder="Email Here">
        <button class="btn" type="submit" title="Submit">Submit</button>
      </form>

    </div>
  </div>
</div>

<div class="wrapper row4">
  <footer id="footer" class="clear"> 

    <div class="one_quarter first">
      <h6 class="title">Company Details</h6>
      <address class="btmspace-15">
      Company Name<br>
      Street Name &amp; Number<br>
      Town<br>
      Postcode/Zip
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><span class="fa fa-phone"></span> +00 (123) 456 7890</li>
        <li><span class="fa fa-envelope-o"></span> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">From The Blog</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Maecenas pretium</a></h2>
        <time class="smallfont" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Sed consectetur enim</h6>
      <ul class="nospace linklist">
        <li><a href="#">Nullam id est condimen</a></li>
        <li><a href="#">Praesent eget purus ut</a></li>
        <li><a href="#">Ut quis augue quis neque</a></li>
        <li><a href="#">Quisque varius erat sed</a></li>
        <li><a href="#">Fusce quis dolor et</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Proin et magna eget</h6>
      <ul class="nospace linklist">
        <li><a href="#">Vivamus semper lorem</a></li>
        <li><a href="#">Morbi facilisis dui</a></li>
        <li><a href="#">Maecenas eu massa</a></li>
        <li><a href="#">Praesent iaculis</a></li>
        <li><a href="#">Praesent molestie</a></li>
      </ul>
    </div>

  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="clear"> 

    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>

  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
--> 
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>
