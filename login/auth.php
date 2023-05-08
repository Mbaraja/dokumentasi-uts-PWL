<?php
session_start();
include "../koneksi.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: login.php?error=User Name is required");
		exit();
	} else if (empty($pass)) {
		header("Location: login.php?error=Password is required");
		exit();
	} else {
		$sql = "SELECT * FROM user WHERE email='$email' AND password='$pass' AND user_role='admin'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['email'] === $email && $row['password'] === $pass) {
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['id'] = $row['user_id'];
				header("Location: ../index.php");
				exit();
			} else {
				header("Location: login.php?error=Incorect Credentials or Insufficient Authority");
				exit();
			}
		} else {
			header("Location: login.php?error=Incorect Credentials or Insufficient Authority");
			exit();
		}
	}
} else {
	header("Location: login.php");
	exit();
}
