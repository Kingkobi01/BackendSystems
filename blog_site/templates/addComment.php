<?php
session_start();
include('../config/dbconnect.php');
if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$message = mysqli_real_escape_string($connection, $_POST['message']);

	// $add_comment_query = "INSERT (`email`, `message`) into comments VALUES(`$email`. `$message`)"
}
