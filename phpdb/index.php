<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
</head>

<h1>Volunteering Camp</h1>

<body bgcolor="FBB917">
	<h2>Registration Form</h2>
	<form action="./connect.php" method="post">
		<label for="name">Name: </label>
		<input type="text" name="name" id="name" required><br><br>

		<label for="email">Email: </label>
		<input type="text" name="email" id="email" required><br><br>

		<label for="phone">Phone: </label>
		<input type="text" name="phone" id="phone" required><br><br>

		<label for="skill">Skill: </label>
		<input type="text" name="skill" id="skill" required><br><br>

		<input type="submit" id="submit" name='submit'>
	</form>
</body>

</html>