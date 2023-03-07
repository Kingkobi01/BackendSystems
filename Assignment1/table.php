<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="table.css">
	<title>Table</title>
</head>

<body>
	<div class="container">

		<?php

		$table_data = [[14, 18, 32, -34], [99, 19, 12, 60], [99, 78, 21, 43]];
		$width_of_cell = 150;
		$height_of_cell = 35;
		$width_of_row = count($table_data) * $width_of_cell;
		$height_of_col = count($table_data[0]) * $height_of_cell;

		echo "<table bgcolor=\"black\" width=\"$width_of_row\" height=\"$height_of_col\">";

		foreach ($table_data as $row) {
			echo "<tr bgcolor=\"white\"align=\"center\" >";
			foreach ($row as $number) {
				echo "<td align=\"center\">";
				echo $number;
				echo "</td>";
			}
			echo "</tr>";
		};
		echo "</table bgcolor=\"white\">";
		?>
	</div>
</body>

</html>