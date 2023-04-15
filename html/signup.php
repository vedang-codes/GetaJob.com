<?php
$mysqli = new mysqli("localhost", "patel3u1_getajob", "123456", "patel3u1_getajob");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $sql_check_email = "SELECT * FROM `user_profiles` WHERE `email` = ?";
    $stmt_check_email = $mysqli->prepare($sql_check_email);
    $stmt_check_email->bind_param("s", $email);
    $stmt_check_email->execute();
    $result_check_email = $stmt_check_email->get_result();
    
    if ($result_check_email->num_rows > 0) {
        $error_msg = "<p style='color: red'><b>Your account already exists! Please login or Create a new account!</b></p>";
    } else {
        $stmt_insert = $mysqli->prepare("INSERT INTO `user_profiles`(`fname`, `lname`, `email`, `password`, `usercode`, `city`, `state`, `country`, `zipcode`, `created_date`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, now())");
        $stmt_insert->bind_param("sssssssss", $_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["password"], $_POST["user_code"], $_POST["city"], $_POST["state"], $_POST["country"], $_POST["zipcode"]);

        if ($stmt_insert->execute()) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . $mysqli->error;
        }

			$stmt_insert->close();
		}
    
		$stmt_check_email->close();
	}

	$usercodes_result = $mysqli->query("SELECT user_code, user_description FROM user_codes");
	$usercodes = [];
	while ($row = $usercodes_result->fetch_assoc()) {
		$usercodes[] = $row;
	}
	$usercodes_result->close();
	$mysqli->close();
?>

<!-- HTML code -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up Page</title>
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/main.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
      </ul>
    </div>
	</div>
	</nav>
	
	<!-- Sign Up Form -->
	<br>
	<h2 style="text-align: center">Sign Up Form</h2>
	<br>
	<div class="container">
	<div class="row justify-content-center">
    <div class="col-sm-8 col-md-6 col-lg-4">
      <form action="signup.php" method="post" style = "text-align:center">
        <div class="form-group">
			<div class="form-group">
			<label for="fname">First Name</label>
			<input type="text" class="form-control" id="fname" name="fname" required placeholder="First name...">
			</div>
			<br>
			<div class="form-group">
			<label for="lname">Last Name</label>
			<input type="text" class="form-control" id="lname" name="lname" required placeholder="Last name...">
			</div>
			<br>
			<label for="email">Email address</label>
			<input type="email" class="form-control" id="email" name="email" required placeholder="Enter email..."> 
			<?php isset($_POST['email']) ? $_POST['email'] : ''; ?>
			<?php if (!empty($error_msg)) { echo "<span class='error'>" . $error_msg . "</span>"; } ?>
			</div>
			<br>
			<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password" required placeholder="password...">
			</div>
			<br>
			<div class="form-group">
			<label for="confirmpwd">Confirm Password</label>
			<input type="password" id="confirmpwd" class="form-control" name="confirmpwd" required placeholder="confirm password..." onkeyup="checkPwd()">	
			</div>
			<br>
			<div class="form-group">
			<label for="user_code">Your Role</label>
			<select class="form-control" name="user_code" id="user_code">
				<?php foreach ($usercodes as $usercode) : ?>
					<option value="<?= $usercode["user_code"] ?>"><?= $usercode["user_description"] ?></option>
				<?php endforeach; ?>
			</select>
			<br>	
			</div>
			<div class="form-group">
			<label for="city">City</label>
			<input type="text" class="form-control" id="city" name="city" required placeholder="City...">
			</div>
			<br>
			<div class="form-group">
			<label for="state">State</label>
			<input type="text" class="form-control" id="state" name="state" required placeholder="State...">
			</div>
			<br>
			<div class="form-group">
			<label for="country">Country</label>
			<input type="text" class="form-control" id="country" name="country" required placeholder="Country...">
			</div>
			<br>
			<div class="form-group">
			<label for="zipcode">Zip Code</label>
			<input type="text" class="form-control" id="zipcode" name="zipcode" required placeholder="Zip code...">
			</div>
			<br>
			<button type="submit" class="btn btn-primary justify-content-center">Sign up</button>
		</form>
	</div>
	</div>
	</div>
	
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