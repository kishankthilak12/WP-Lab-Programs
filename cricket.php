<?php

$players=["Sachinn Tendulkar","M S Dhoni","Sreeshanth","Starc"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Indian Cricket Players</title>
</head>
<body>

<h1>Indian Cricket Players</h1>

<table border ="1">
	<tr>
		<th>S1. No</th>
		<th>Player Name</th>
	</tr>
	<?php
		$i=1;
		foreach ($players as $player){
			echo"<tr>";
			echo"<td>".$i++."</td>";
			echo"<td>".$player."</td>";
			echo"</tr>";
		}
	?>
</table>
</body>
</html>

