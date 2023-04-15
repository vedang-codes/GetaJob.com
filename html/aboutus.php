<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us Page</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<style>
		img {
			max-width: 300px;
			max-height: auto;
		}
	</style>
</head>
<body style="background-color: #f0f2f4">

	<!-- Header of the Page -->
	<nav style="background-color: #aed6f1" class="navbar navbar-expand-lg">
	<div class="container-fluid">
    <a class="navbar-brand" href="home.php"><h2><strong>GetaJob.com</strong></h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php"><b>Home</b></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="aboutus.php"><b>About Us</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html"><b>Login</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php"><b>SignUp</b></a>
        </li>
		<li class="nav-item">
			<?php
				session_start();
				if (isset($_SESSION["username"])) {
            	echo "<b class='nav-link'><strong>Welcome, " . $_SESSION["username"] . "!</strong></b>";
				echo "<a class='nav-link' href='logout.php'><b>Logout</b></a>";
				}
			?>
		</li>
      </ul>
    </div>
	</div>
	</nav>
	
	<br><br>
	
	<div class="container">
		<div class="row">
			<div class="col">
				<img src = "../images/bg.png" alt="Vedang Patel profile picture"></img>
			</div>
			<div class="col">
				<br>
				<p style="text-align:center; font-size: 1.6em"><b>Vedang Patel</b></p>
				<p style="text-align:center; font-size: 1.6em"><b>Founder & CEO</b></p>
				<p style="text-align:center; font-size: 1.6em"><b>(000)-000-0000</b></p>
				<p style="text-align:center; font-size: 1.6em"><b>vedang@getajob.com</b></p>
				<p style="font-size: 1.4em">
				Highly ambitious computer science student with a diverse skill set that includes a firm understanding of mathematics, 
				statistics, economics, business, finance, and accounting. Seeking an internship or full-time entry/associate-level 
				position to put my technical and analytical skills to use and advance my career within a progressive organization. 
				I am a problem-solver with a keen eye for detail, and I am excited to put my knowledge and work collaboratively 
				with industry professionals to drive meaningful impact and outcomes. I'm looking forward to a new challenge 
				that will allow me to make a difference with forefront solutions.
				</p>
			</div>
		</div>
	</div>
	
	<br><br>
	
	<p style="padding: 20px">
	
		Get a Job.com is a job-seeking website founded by Vedang Patel, a student of the University of Windsor. This website is designed to connect job seekers with potential employers and provide a platform for recruiters to find qualified candidates.
		<br>
		As a job seeker, searching for a job can be a challenging and time-consuming process. There are countless job boards and websites available, but it can be difficult to know where to start or which opportunities are worth pursuing. Get a Job.com aims to simplify this process by providing a centralized platform where job seekers can easily browse job listings, create a profile, and apply for positions that match their skills and experience.
		<br>
		For recruiters and employers, Get a Job.com offers a streamlined way to find and connect with qualified candidates. By posting job listings on the website, employers can reach a wide audience of potential applicants and easily manage the hiring process from start to finish. Additionally, the platform offers tools to screen and filter candidates based on their qualifications and experience, saving time and resources in the recruiting process.
		<br>
		At Get a Job.com, our mission is to help job seekers find fulfilling employment opportunities and to assist recruiters in finding the best talent for their organizations. We understand that searching for a job can be stressful and overwhelming, and we strive to make the process as simple and straightforward as possible. By offering a user-friendly platform with a range of features and tools, we aim to create a positive experience for both job seekers and recruiters alike.
		<br>
		As the founder of Get a Job.com, Vedang Patel is passionate about helping people find meaningful work and connecting them with employers who value their skills and experience. With his background in business and technology, Vedang has created a platform that leverages the power of technology to streamline the job search and hiring process, making it easier and more efficient for everyone involved.
		<br>
		In conclusion, Get a Job.com is a job-seeking website founded by Vedang Patel with the goal of connecting job seekers with potential employers and streamlining the hiring process for recruiters. With a user-friendly platform, a range of features and tools, and a commitment to making the job search process as simple and straightforward as possible, we are dedicated to helping job seekers find fulfilling employment opportunities and recruiters find the best talent for their organizations.
	
	</p>


	<br><br>
	
	
	
	<!-- Footer of the Page -->
	<footer class="footer">
	<div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>Our Motto</h3>
        <p>We are a company that helps in providing high-quality job-search and posting to our customers. 
		Our mission is to make everyone's life easier and more enjoyable.</p>
      </div>
      <div style="text-align:center" class="col-sm-6">
        <h3 ">Contact Us</h3>
        <ul class="list-unstyled">
          <li><i class="fa fa-map-marker"></i> &#9992; 401 Sunset Ave, Windsor CA</li>
          <li><i class="fa fa-phone"></i> &#9742;  (123) 456-7890</li>
          <li><i class="fa fa-envelope"></i> &#9993; info@getajob.com</li>
        </ul>
      </div>
    </div>
    <hr>
    <p class="text-muted">&copy; GetaJob.com. All rights reserved.</p>
	</div>
	</footer>
	
</body>
</html>