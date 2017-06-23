<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Albums of Enrique</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="styles/layout.css" type="text/css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <header>
  
      <marquee style="font-size:28px" direction="left" behavior="alternate" scrollamount="6">Welcome to <b> Music World </marquee>
      <p style="font-size:20px"> <marquee behavior="scroll" direction="right" scrollamount="3">Albums of Enrique</marquee></p>
  
    <nav>
      <ul class="nav">
        <li><a href="index.html" class="icon home"><span>Home</span></a></li>
        <li class="dropdown">
          <a href="Artist.php">Artists</a>
          <ul>
            <li><a href="en.php">Enrique</a></li>
            <li><a href="ri.php">Rihanna</a></li>
            <li><a href="tay.php">Taylor</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="Albums.php">Albums</a>
          <ul class="large">
            <li><a href="enal.php">Enriques's Albums</a></li>
            <li><a href="rial.php">Rihanna's Albums</a></li>
            <li><a href="tayal.php">Taylor's Albums</a></li>

          </ul>
        </li>
           <li class="dropdown">
          <a href="tracks.php">Tracks</a>
          <ul class="large">
            <li><a href="entracks.php">Enriques's songs</a></li>
            <li><a href="ritracks.php">Rihanna's songs</a></li>
            <li><a href="taytracks.php">Taylor's songs</a></li>

          </ul>
        </li>
        
                
        <li class="dropdown">
          <a href="Videos.php">Videos</a>
        </li>
        
         <li class="dropdown">
          <a href="News.php">News</a>
        </li>
        
        
        <li class="dropdown">
          <a>Users</a>
          <ul class="large">
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="login.php">Login</a></li>
           
          </ul>
        </li>
        
        <li class="dropdown">
          <a >About</a>
          <ul class="large">
            <li><a href="about.html">About Us</a></li>
            <li><a href="aboutgen.html">About the Genre</a></li>

          </ul>
        </li>
        
      </ul>
      
    </nav>
  </header>
<body>
</br>
</br>
</br>
</br>
<?php
$connect = mysqli_connect("localhost", "root", "", "musicworld") or
die("Please, check your server connection.");
$query = "SELECT Artist, Album_Name, Year, Description FROM
albums WHERE Artist=('Enrique Iglesias')";
$results = mysqli_query($connect, $query) or die(mysql_error());
echo "<table border=\"2\">";
$x=1;
echo "<tr>";
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
if ($x <= 1)
{
$x = $x + 1;
extract($row);
echo "<td style=\"padding-right:35px;\">";
echo $Album_Name .'<br/>';
echo "<td style=\"padding-right:15px;\">";
echo $Artist .'<br/>';
echo "</td>";
echo "<td style=\"padding-right:15px;\">";
echo $Year .'<br/>';
echo "</td>";
echo "<td style=\"padding-right:15px;\">";
echo $Description .'<br/>';
echo "<td style=\"padding-right:15px;\">";
echo "</td>";
}
$x=0;
echo "</tr><tr>";

}
echo "</table>";
?>

	</p>
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

