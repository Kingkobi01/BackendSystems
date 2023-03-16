<?php

include('./config/dbconnect.php');


$query = "SELECT * from `comments`";
$result = mysqli_query($connection, $query);
if ($result) {
	$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// print_r($comments);

	function getUsernameAndComment($comment, $connection)
	{
		$id = $comment['owner_id'];
		$message = $comment['message'];

		$query_for_user = "SELECT `username` from `users` WHERE  `id` = '$id'";

		$user_result = mysqli_query($connection, $query_for_user);

		if ($user_result) {
			$username = mysqli_fetch_all($user_result, MYSQLI_ASSOC);
			$username = $username[0]['username'];
			return ['username' => $username, 'message' => $message];
		}
	}
}

?>

<div class="container section center" id="comments">
	<h3>Comments</h3>
	<div class="row">
		<?php
		foreach ($comments as $comm) { ?>
			<div class="col s12 m5 offset-m1">
				<div class="card comment hoverable">
					<p class="card-title">
						<?= getUsernameAndComment($comm, $connection)['username']; ?>
					</p>
					<div class="card-description">
						<p>
							<?= getUsernameAndComment($comm, $connection)['message']; ?>

						</p>
					</div>
					<div class="card-action">
						<a href="" class="btn btn-floating cyan">

							<i class="material-icons ">edit</i>
						</a>
						<a href="" class="btn btn-floating cyan">

							<i class="material-icons red-text">delete</i>
						</a>
					</div>
				</div>
			</div>

		<?php
		}
		?>
	</div>
	<div class="row">
		<div class="col s12 m10 l8 center">
			<h4>Add a Comment</h4>
			<form action="comments.php" method="post">
				<div class="input-field">
					<i class="material-icons prefix blue-text">email</i>
					<input type="email" name="email" id="email">
					<label for="email">Your email</label>
				</div>
				<div class="input-field">
					<i class="material-icons prefix blue-text">message</i>
					<textarea class="materialize-textarea" name="message" id="message"></textarea>
					<label for="message">Message</label>
				</div>
				<div class="input-field">
					<input type="submit" value="POST" class="btn-large blue darken-2 wave-effect wave-circle">
				</div>
			</form>
		</div>
	</div>
</div>