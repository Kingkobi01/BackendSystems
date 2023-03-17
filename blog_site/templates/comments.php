<?php
session_start();

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

session_start();
$_SESSION['hasLoggedIn'] = false;
?>

<div class="container section center">
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
		<div class="col s12 m10 l8 center scrollspy" id="comment">
			<h4>Add a Comment</h4>
			<form action="templates/addComment.php" method="post">
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
					<input type="submit" name='submit' value="POST" class="btn-large blue darken-2 wave-effect wave-circle">
				</div>
			</form>
		</div>
	</div>
</div>
<div class="parallax-container">
	<div class="parallax">
		<img src="img/stars.jpg" alt="">
	</div>
</div>
<footer class="page-footer blue darken-3">
	<div class="container scrollspy" id="contact">
		<div class="row">
			<div class="col s12 l6">

				<h2>Meet the Web3 Developer Extraordinaire
				</h2>

				<p>With a passion for complex coding and relentless optimism, Kwabena Boakye is a force to be reckoned with in the world of Web3 development. When he's not busy reading whitepapers or attending conferences, you can find him sacrificing his social life for the blockchain, because who needs friends when you have smart contracts?
				</p>

				<p>With 5 months of experience in programming languages like Solidity, JavaScript, and Rust, Kwabena has built dApps that have left even the most seasoned developers scratching their heads. But don't be fooled by his impressive skills and knowledge – he also has a great sense of humor and loves injecting sarcasm into his work (because why take yourself too seriously?).
				</p>

				<p>If you're looking for a Web3 developer who will work tirelessly to bring your blockchain dreams to life (while also making you laugh), look no further than Kwabena.
				</p>

			</div>
			<div class="col s12 l4 offset-l2">
				<h2>Connect</h2>
				<ul>
					<li style="padding-block: .275em;"><a class="grey-text text-lighten-3 hoverable" href="">Twitter</a></li>
					<li style="padding-block: .275em;"><a class="grey-text text-lighten-3 hoverable" href="">Facebook</a></li>
					<li style="padding-block: .275em;"><a class="grey-text text-lighten-3 hoverable" href="">LinkedIn</a></li>
					<li style="padding-block: .275em;"><a class="grey-text text-lighten-3 hoverable" href="">Github</a></li>
				</ul>
			</div>
		</div>
	</div>