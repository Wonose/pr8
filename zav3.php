	<?php 
	$a = 0;
	$b = 0;
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
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="" method="post">
	<input type="number" name="a" defaultValue="<?php $a ?>" />
	<input type="number" name="b" defaultValue="<?php $b ?>" />
	<button>count post</button>
</form>
<div>
	<span>Додавання</span>
	<span><?php echo $a + $b; ?></span>
</div>
<div>
	<span>Множення</span>
	<span><?php echo $a * $b; ?></span>
</div>
<div>
	<span>Ділення</span>
	<span><?php echo $a / $b; ?></span>
</div>
<div>
	<span>Різниця</span>
	<span><?php echo $a - $b; ?></span>
</div>
	
</body>
</html>
