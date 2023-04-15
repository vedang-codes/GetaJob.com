<?php
	session_start();
	$conn = new mysqli("localhost", "patel3u1_getajob", "123456", "patel3u1_getajob");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['usercode'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		$usercode = $_POST['usercode'];
		
		//$sql = "SELECT `email`, `password`, `fname`, `usercode` FROM `user_profiles` WHERE `email`='$email' AND `password` = '$password'";
		
		
		$sql = "SELECT `user_description`, `email`, `password`, `fname`, `usercode` FROM `user_profiles` INNER JOIN `user_codes` ON `usercode` = `user_code` WHERE `email` = '$email' && `password` = '$password'";
		
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		
		if ($row) {
			if(($row['user_description'] == 'Job- Seeker') && $usercode == "1"){
				$_SESSION["username"] = $row["fname"];
				//$_SESSION['job_seeker'] = true;
				header('Location: job_seeker.php');
				exit;
			}	
			if(($row['user_description'] == 'Recruiter/HR') && $usercode == "2"){
				$_SESSION["username"] = $row["fname"];
				//$_SESSION['recruiter'] = true;
				header('Location: recruiter.php');
				exit;
			}
			else{
              	echo $row['user_description']."<br>";
				$msg = "Invalid/False Login Details";
				echo $msg. "<br>";	
				echo "<a href='login.html'><b>Login</b></a>";
			}
		
		}
		else {
			$msg = "Invalid/Bad Login Details";
			echo $msg. "<br>";	
			echo "<a href='login.html'><b>Login</b></a>";
		}
	}
	else {
		$msg = "Invalid/Incomplete Login Details";
		echo $msg. "<br>";	
		echo "<a href='login.html'><b>Login</b></a>";
	}
	
	$conn->close();
?>
