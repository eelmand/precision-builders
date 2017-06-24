<?php

include "admin_info.php"; // include Admin Login Info 

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

// Check if user is logged and has a right to access
if (isset($_SESSION["username"]))
{
	if($_SESSION["username"] == $GLOBALS["admin_usr"])
	{
		echo '
			<!-- Top Menu Bar -->
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">
						<img src="img/logo.png" class="img-rounded" width="45" style="margin-top:-12px;" alt="Precision Builders Logo" />
					</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="timetrack" href="timetrack.html">Timetrack</a></li>
						<li><a class="services" href="services.html">Services</a></li>
						<li><a class="projects" href="projects.html">Projects</a></li>
						<li><a class="contact_us" href="contact_us.html">Contact Us</a></li>
						<li><a href="./php/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		';
	}
	else
	{
		// For other user types
		//echo "<p>You have no authority here</p>";
	}
		
}
else
{	
	// guest
	echo '
	<!-- Top Menu Bar -->
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">
				<img src="img/logo.png" class="img-rounded" width="45" style="margin-top:-12px;" alt="Precision Builders Logo" />
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a class="services" href="services.html">Services</a></li>
				<li><a class="projects" href="projects.html">Projects</a></li>
				<li><a class="contact_us" href="contact_us.html">Contact Us</a></li>
				<li><a class="login" href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
	</div>
';
}

?>

