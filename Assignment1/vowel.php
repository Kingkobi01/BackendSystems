<?php
$statement = $_POST["statement"];

$vowel_count = 0;

$vowels = "aAeEiIoOuU";

for ($i = 0; $i < strlen($statement); $i++) {
	if (strstr($vowels, $statement[$i])) {
		$vowel_count++;
	}
}

/* echo ("<p>Number Of Vowels: $vowel_count</p>"); */



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Ubuntu+Mono&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="vowel.css">
	<title>Vowel Counter</title>
</head>

<body>
	<div class="container">
		<h2>Vowel Counter</h2>
		<form action="vowel.php" method="post">
			<div class="statement">

				<label for="#statement">
					Statement
					<input type="text" name="statement" id="statement">
				</label>

			</div>
			<input type="submit" value="Submit">
		</form>
		<p class="answer">Number Of Vowels:
			<?= $vowel_count
			?>
		</p>
	</div>
</body>

</html>