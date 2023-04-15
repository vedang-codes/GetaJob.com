<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recruiter Home Page</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body style="background-color:#f0f2f4">

	<!-- Header of the Page -->
	<nav style="background-color: #aed6f1" class="navbar navbar-expand-lg">
	<div class="container-fluid">
    <a class="navbar-brand" href="recruiter.php"><h2><strong>GetaJob.com</strong></h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="recruiter.php"><b>Home</b></a>
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
	
	<br>
	<h2 style="text-align:center">Hi Recruiter! what you want to do today?</h2>
	<br>
	<br>
	<!-- Recruiter's Functions -->
	<div class="container">
	<div class="row justify-content-center">
    <div class="col-sm-8 col-md-6 col-lg-6">
		<form action="recruiter_job_post.php" method="post" style = "text-align:center; background-color: #1abc9c">
			<input type="submit" value="Post New Job">
		</form>
		<br>
		<br>
		<form action="recruiter_job_update.php" method="post" style = "text-align:center; background-color: #cacfd2">
			<input type="submit" value="Update Any Job">
		</form>
		<br>
		<br>
		<form action="recruiter_job_delete.php" method="post" style = "text-align:center; background-color: #e74c3c">
			<input type="submit" value="Delete Any Job">
		</form>
		<br>
		<br>
		<form action="recruiter_job_view.php" method="post" style = "text-align:center; background-color: #cacfd2">
			<input type="submit" value="View All Jobs">
		</form>
		<br>
		<br>
	</div>
	</div>
	</div>
	
	<br>
	<br>
	
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