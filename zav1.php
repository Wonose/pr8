<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pr8 </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section>
		<h2>zav 1</h2>
		<table>
			<thead>
				<tr>
					<td>Змінна</td>
					<td>Значення</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>GLOBALS</td>
					<td><?php print_r($GLOBALS); ?> </td>
				</tr>
				<tr>
					<td>$_ENV</td>
					<td><?php print_r($_ENV); ?> </td>
				</tr>
				<tr>
					<td>$_GET</td>
					<td><?php print_r($_GET); ?> </td>
				</tr>
				<tr>
					<td>$_POST</td>
					<td><?php print_r($_POST); ?> </td>
				</tr>
				<tr>
					<td>$_FILES</td>
					<td><?php print_r($_FILES); ?> </td>
				</tr>
				<tr>
					<td>$_COOKIE</td>
					<td><?php print_r($_COOKIE); ?> </td>
				</tr>
				<tr>
					<td>$_SERVER</td>
					<td><?php print_r($_SERVER); ?> </td>
				</tr>
				<tr>
					<td>$_REQUEST</td>
					<td><?php print_r($_REQUEST); ?> </td>	
				</tr>
				<tr>
					<td>$_SESSION</td>
					<td><?php  print_r($_SESSION); ?> </td>	
				</tr>
			</tbody>
		</table>
	</section>
</body>
</html>