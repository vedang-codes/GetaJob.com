<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Page</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script>
		function goBack() {
			window.history.back();
		}
	</script>
</head>
<body style="background-color: #f0f2f4">
	<button type="submit" class="btn btn-outline-success" onclick="goBack()">Go Back</button>
	<br>
	<br>
	<h2 style="text-align:center"><b>Search Results</b></h2>
	
	<?php
	$conn = mysqli_connect("localhost", "patel3u1_getajob", "123456", "patel3u1_getajob");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	if(isset($_POST['search_job']) && !empty($_POST['search_job'])){
		$user_search = $_POST['search_job'];
		$sql = "SELECT `job_name`, `job_description` FROM `jobs` WHERE `job_description` LIKE '%$user_search%' OR `job_name` LIKE '%$user_search%'";
		$result = mysqli_query($conn, $sql);

		echo '<div class="table-responsive">';
		echo '<table class="table table-striped">';
		echo '<thead><tr><th>Job Name</th><th>Job Description</th></tr></thead>';
		echo '<tbody>';

		while ($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo '<td>'.$row['job_name'].'</td>';
			echo '<td>'.$row['job_description'].'</td>';
			echo '</tr>';
			echo '<br>';
		}

		echo '</tbody></table></div>';
	} else {
		echo "<h3 style='text-align:center;'>No search term entered.</h3>";
	}
	mysqli_close($conn);
	?>
	
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