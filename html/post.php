<?php
	$mysqli = new mysqli("localhost", "patel3u1_getajob", "123456", "patel3u1_getajob");
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		exit();
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$job_id = $_POST["job_id"];
		$sql_check_job_id = "SELECT * FROM `jobs` WHERE `job_id` = ?";
		$stmt_check_job_id = $mysqli->prepare($sql_check_job_id);
		$stmt_check_job_id->bind_param("i", $job_id);
		$stmt_check_job_id->execute();
		$result_check_job_id = $stmt_check_job_id->get_result();
    
		if ($result_check_job_id->num_rows > 0) {
			$error_msg = "<p style='color: red'><b>Your Job already exists! Please post a new Job!</b></p>";
		} else {
			$stmt_insert = $mysqli->prepare("INSERT INTO `jobs`(`recruiter_name`, `recruiter_email`, `company`, `job_name`, `job_id`, `job_description`, `posted_date`) VALUES (?,?,?,?,?,?, now())");
			$stmt_insert->bind_param("ssssis", $_POST["recruiter_name"], $_POST["recruiter_email"], $_POST["company"], $_POST["job_name"], $_POST["job_id"], $_POST["job_description"]);

			if ($stmt_insert->execute()) {
				echo "<br><b style='text-align:center'>Record inserted successfully</b>";
				echo "<br><a style='padding-left:20px' href='recruiter_job_post.php'><b>Back to Job Posting</b></a>";
			} 
			else {
				echo "<br><b style='text-align:center'>Error inserting record: " . $mysqli->error."</b>";
				echo "<br><a style='padding-left:20px' href='recruiter_job_post.php'><b>Back to Job Posting</b></a>";
			}

			$stmt_insert->close();
		}
    
		$stmt_check_job_id->close();
	}

	$mysqli->close();
?>

