<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
	$conn = mysqli_connect('localhost', 'root', '', 'test1') or die("Connection Failed:" . mysqli_connect_error());

	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['skill'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$skill = $_POST['skill'];

		$sql = "INSERT INTO `users` (`name`, `email`, `phone`, `skill`) VALUES ('$name', '$email', '$phone', '$skill')";

		$query = mysqli_query($conn, $sql);

		if ($query) {
			echo 'Entry Successful!';
		} else {
			echo 'Error Occurred!';
		}
	} else {
		echo " Middle Error";
	}
} else {
	echo "Top Error";
}
