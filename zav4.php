<?php
	$a = "";
	$b = "";
	if (isset($_POST['a'])) {
		$a = $_POST['a'];
	}
	if (isset($_POST['b'])) {
		$b = $_POST['b'];
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>zav 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
<div>
 	<h2>normal</h2>
 	<?php echo $a ?>
 	<?php echo $b ?>
 </div>

 <div>
 	<h2>reverse</h2>
 	<?php echo $b ?>
 	<?php echo $a ?>
 </div>

</body>
</html>
 


