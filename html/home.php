<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<style>
		body {
			background-image: url('../images/recruiter.png');
			background-size: cover;
			background-position: center center;
		}
		@media (max-width: 768px) {
			body {
				background-size: contain;
			}
		}
		@media (max-width: 520px) {
			body {
				background-size: contain;
			}
		}
	</style>
</head>
<body>

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
      <form action="search.php" method="post" class="d-flex" role="search" style="padding-right:25px">
        <input class="form-control me-2" name="search_job" id="search_job" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
	</div>
	</nav>
	
	<br><br>

	<p style="padding: 20px">
	
		Job-applying websites have become an increasingly popular way for job seekers to find new opportunities and for employers to connect with qualified candidates. These websites typically allow users to create an account, search for job listings, and apply to jobs directly through the platform. For job seekers, these websites offer a convenient way to explore multiple job opportunities and manage their applications in one place. For recruiters and employers, they provide a streamlined way to post job openings, screen candidates, and manage the hiring process.
		<br>
		One of the main advantages of job-applying websites is their convenience. By allowing users to create an account and store their information, job seekers can easily apply to multiple job listings with just a few clicks. This can save a lot of time and effort compared to traditional job search methods like printing and mailing resumes or filling out applications in person. Additionally, job-applying websites often have features that allow users to track their application status, receive notifications about new job listings, and even schedule interviews directly through the platform.
		<br>
		Another advantage of job-applying websites is their accessibility. Because they are available online, users can search for and apply to jobs from anywhere with an internet connection. This can be especially helpful for job seekers who are not located in the same city or state as the jobs they are interested in. Additionally, many job-applying websites have mobile apps that allow users to search for and apply to jobs directly from their smartphones, making the process even more convenient.
		<br>
		For employers and recruiters, job-applying websites can also offer significant benefits. By posting job listings on these platforms, they can reach a wider audience of potential candidates than they might through traditional advertising methods. Additionally, job-applying websites often have built-in tools that allow employers to screen and filter candidates based on their qualifications and experience, making it easier to find the right fit for the job. These tools can also help save time and resources by allowing employers to manage the entire hiring process through the website, from reviewing applications to scheduling interviews and making job offers.
		<br>
		However, there are also some potential drawbacks to job-applying websites that users should be aware of. One concern is the potential for fraud or scams. Because these websites are often used to collect personal information like social security numbers, job seekers should be cautious about sharing sensitive information with unknown parties. Additionally, some job listings may be misleading or fraudulent, so users should carefully research job opportunities before applying.
		<br>
		Another potential issue is the sheer volume of job listings on these websites. While having access to a large number of job opportunities can be helpful, it can also be overwhelming and time-consuming to sort through all of the listings. Additionally, some job listings may be outdated or irrelevant, making it difficult to find the most relevant opportunities.
		<br>
		Despite these potential drawbacks, job-applying websites remain a popular and effective tool for both job seekers and employers. By providing a convenient, accessible, and streamlined way to connect job seekers with potential employers, these websites are helping to reshape the job search and hiring process. Whether you're a job seeker looking for new opportunities or an employer looking for qualified candidates, job-applying websites can offer a wealth of benefits that can help make the hiring process faster, more efficient, and more effective.
		<br>
		In conclusion, job-applying websites are a valuable resource for job seekers and employers alike. By providing a platform for job seekers to search for and apply to multiple job listings in one place, and for employers to post job openings and manage the hiring process, these websites are helping to streamline the job search and hiring process. While there are some potential drawbacks to using job-applying websites, the benefits they offer in terms of convenience, accessibility, and efficiency make them a powerful tool for anyone looking to find or fill a job.
	
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