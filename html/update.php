<?php

	$conn = mysqli_connect("localhost", "patel3u1_getajob", "123456", "patel3u1_getajob");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}	

	$job_id = $_POST['job_id'];
	$recruiter_name = $_POST['recruiter_name'];
	$recruiter_email = $_POST['recruiter_email'];
	$company = $_POST['company'];
	$job_name = $_POST['job_name'];
	$job_description = $_POST['job_description'];

	$email_query = "SELECT `email` FROM `user_profiles` WHERE `email`='$recruiter_email'";
	$email_result = mysqli_query($conn, $email_query);
	if (mysqli_num_rows($email_result) == 0) {
		$insert_query = "INSERT INTO `user_profiles` (email) VALUES ('$recruiter_email')";
		mysqli_query($conn, $insert_query);
	}

	$sql = "UPDATE `jobs` SET `recruiter_name`='$recruiter_name', `recruiter_email`='$recruiter_email', `company`='$company', `job_name`='$job_name', `job_description`='$job_description' WHERE `job_id`='$job_id'";
	if (mysqli_query($conn, $sql)) {
		echo "<br><b style='text-align:center'>Record updated successfully</b>";
		echo "<br><a style='padding-left:20px' href='recruiter_job_update.php'><b>Back to Job Updating</b></a>";
	} 
	
	else {
		echo "<br><b style='text-align:center'>Error updating record: " . mysqli_error($conn)."</b>";
		echo "<br><a style='padding-left:20px' href='recruiter_job_update.php'><b>Back to Job Updating</b></a>";
	}

	mysqli_close($conn);
	
?>
