<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="styles/layout.css" type="text/css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <header>
  
      <marquee style="font-size:28px" direction="left" behavior="alternate" scrollamount="6">Welcome to <b> Music World </marquee>
      <p style="font-size:22px"> <marquee behavior="scroll" direction="right" scrollamount="3">Please fill the form to get register</marquee></p>
      <p style="font-size:24px"> <marquee behavior="scroll" direction="left" scrollamount="2">It's totally free</marquee></p>
  
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

<head>
<title>Artist</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<script type="text/JavaScript" language="JavaScript">
function validate(uForm) {
	var namObj=document.getElementById("fnamemsg");
	namObj.style.color="red";
	if(namObj.hasChildNodes())
	{
		namObj.removeChild(namObj.firstChild);
	}
	if(uForm.fname.value.length ==0)
	{
		namObj.appendChild(document.createTextNode("Name cannot be blank"));
		uForm.fname.focus();
		return false;
	}
    emObj=document.getElementById('emailmsg');
	emObj.style.color="red";
	if (emObj.hasChildNodes()) {
        emObj.removeChild(emObj.firstChild);
    }
	regexp=/(^\w+\@\w+\.\w+)/;
	match=regexp.exec(uForm.email.value);
	if (!match) {
        emObj.appendChild(document.createTextNode("Invalid Email"));
		uForm.email.focus();
		return false;
    }
	passObj=document.getElementById("passwdmsg");
	passObj.style.color="red";
	if(passObj.hasChildNodes())
	{
		passObj.removeChild(passObj.firstChild);
	}
	if(uForm.password.value.length <=5)
	{
	passObj.appendChild(document.createTextNode("The password should be of at least size 6"));
	uForm.password.focus();
	return false;
	}
	rpassObj=document.getElementById("comfirm_pass_msg");
	rpassObj.style.color="red";
	if(rpassObj.hasChildNodes())
	{
	rpassObj.removeChild(rpassObj.firstChild);
	}
	if(uForm.pass.value != uForm.pass1.value)
	{
	rpassObj.appendChild(document.createTextNode("The two passwords don't match"));
	userForm.password.focus();
	return false;
	}
	
	return true;
}	
</script>

<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    
    <!-- main content -->
    <div id="intro">
      <section class="clear">
        <!-- article 1 -->
        <article class="two_quarter">
          <h2>Registration</h2>
          <p> Please fill your correct information in this form.</p>
          <br/>
		  <form method="POST" action="addUser.php" onSubmit="return validate(this);">
			  <table width=>
				<tr>
					<td><p>First Name:</td><td><input type="text" name="fname" size=40/></p></td><td><span id="fnamemsg"></span></td>
				</tr>
				<tr>
					<td><p>Last Name:</td><td><input type="text" name=" lname"size=40/></p></td><td></td>
				</tr>
				<tr>
					<td><p>Date of Birth:</td><td><input type="date" name="dob"/></p></td>
				</tr>
				<tr>
					<td><p>Country:</td><td><input type="text" name="country" size=40/></p></td>
				</tr>
				<tr>
					<td><p>Email Address:</td><td><input type="text" name="email" size=40 /></p></td><td><span id="emailmsg"></span></td>
				</tr>
				<tr>
					<td><p>Password:</td><td><input type="password" name="pass" size=40/></p></td><td><span id="passwdmsg"></span></td>
				</tr>
				<tr>
					<td><p>Comfirm Password:</td><td><input type="password" name="pass1" size=40/></p></td><td><span id="comfirm_pass_msg"></span></td>
				</tr>
				<tr>
                </table>
                <table>
					<td style="font-size:80px"><input type="submit" value="Register Now"/></p></td>
				</tr>
			  </table>
			  
			  
		  </form>
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
					�
					<a href="prasangafdo.blogspot.com">Blog</a>
					�
					<a href="about">About</a>
					�
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

