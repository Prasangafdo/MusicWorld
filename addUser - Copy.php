<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Tabbed Navigation</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="styles/layout.css" type="text/css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <header>
  
      <marquee style="font-size:28px" direction="left" behavior="alternate" scrollamount="6">Welcome to <b> Music World </marquee>
      <p style="font-size:20px"> <marquee behavior="scroll" direction="right" scrollamount="3">Listen to millions of songs online for free</marquee></p>
      <p style="font-size:20px"> <marquee behavior="scroll" direction="left" scrollamount="2">Sign Up now</marquee></p>
  
    <nav>
      <ul class="nav">
        <li><a href="index.html" class="icon home"><span>Home</span></a></li>
        <li class="dropdown">
          <a href="Artist.php">Artists</a>
          <ul>
            <li><a href="index.html">Enrique</a></li>
            <li><a href="index.html">Rihanna</a></li>
            <li><a href="index.html">Taylor</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="Albums.php">Albums</a>
          <ul class="large">
            <li><a href="index.html">Enriques's Albums</a></li>
            <li><a href="index.html">Rihanna's Albums</a></li>
            <li><a href="index.html">Taylor's Albums</a></li>

          </ul>
        </li>
           <li class="dropdown">
          <a href="Albums.php">Tracks</a>
          <ul class="large">
            <li><a href="index.html">Enriques's songs</a></li>
            <li><a href="index.html">Rihanna's songs</a></li>
            <li><a href="index.html">Taylor's songs</a></li>

          </ul>
        </li>
        
        <li class="dropdown">
          <a href="Albums.php">Users</a>
          <ul class="large">
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Login</a></li>
           
          </ul>
        </li>
        
        <li class="dropdown">
          <a>About</a>
          <ul class="large">
            <li><a href="about.html">About Us</a></li>
            <li><a href="aboutgen.html">About the Genre</a></li>

          </ul>
        </li>
        
      </ul>
    </nav>
  </header>
<?php
$connect=mysqli_connect("localhost","root","","musicworld") or die("Please check the server connection");
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$country=$_POST['country'];
$pasword=$_POST['pass1'];
$statement="INSERT INTO user(email, password,first_name, last_name, country)
  VALUES ('$email',(PASSWORD('$pasword')),'$fname','$lname','$country')";
$result = mysqli_query($connect, $statement) or die(mysql_error());
?>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    
    <!-- main content -->
    <div id="intro">
      <section class="clear">
        <!-- article 1 -->
        <article class="two_quarter">
          <h2>Registered</h2>
          <p><?php
		  if ($result)
		  {?>
		  <p>Dear <?php echo $fname; ?>, your account is successfully created
		  <?php
		  }
		  else
		  {
			echo "An error occurred. Please use different email address";
		  }?></p>
		  
        </article>
      </section>
    </div>
  </div>
</div>
<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

	<body>

		<footer class="footer-distributed">

			<div class="footer-left">

				<h3> <a href="index.html"> Music<span>World</span></a></h3>

				<p class="footer-links">
					<a href="index.html">Home</a>
					·
					<a href="prasangafdo.blogspot.com">Blog</a>
					·
					<a href="about">About</a>
					·
					<a href="contact">Contact</a>
				</p>

				<p class="footer-company-name">Music World &copy; 2016</p>
			</div>

			<div class="footer-center">

				<div>
<p><span>102, Negombo Road</span> Katunayake, Sri Lanka</p>
				</div>
</br>
				<div class="header">
<p>+94 766 498876</p>
			  </div>

				<div>
                </br>
<p><a href="mailto:support@company.com">support@musicworld.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the website</span>
					We created this website as an assignment for Data, Schemas &amp; Applications of The University of the West of England 
                     
			  </p>

				<div class="footer-icons">&nbsp;</div>

			</div>

		</footer>
</body>
</html>

