<?php

	$conn = mysqli_connect("localhost", "patel3u1_getajob", "123456", "patel3u1_getajob");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$job_id = $_POST['job_id'];
	$sql = "DELETE FROM `jobs` WHERE `job_id` = '$job_id'";

	if (mysqli_query($conn, $sql)) {
		echo "<br><b style='text-align:center'>Record deleted successfully</b>";
		echo "<br><a style='padding-left:20px' href='recruiter_job_delete.php'><b>Back to Job Deleting</b></a>";
	} 	
	else {
		echo "<br><b style='text-align:center'>Error deleting record: " . mysqli_error($conn)."</b>";
		echo "<br><a style='padding-left:20px' href='recruiter_job_delete.php'><b>Back to Job Deleting</b></a>";
	}

	mysqli_close($conn);

?>

