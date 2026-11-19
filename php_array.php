<?php

$a=["Ann","Christeena","Blessy","Sona"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Array Sorting</title>
</head>
<body>

<h1>Array Sorting Example</h1>
<b>Original Array : <b><br>
<?=print_r($a);?>

<b>Ascending Order : <b><br>
<?=asort($a);
print_r($a);?>

<b>Descending Order : <b><br>
<?=asort($a);
print_r($a);?>
</body>
</html>



