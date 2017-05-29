<?php
error_reporting(-1);
ini_set("display_errors", 1);
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Tic Tac Toe</title>
  </head>
   <script src="main2.js"></script>
  <body>
    <h1>Tic Tac Toe</h1>
<?php
require_once('config.inc.php');
$db = new PDO("mysql:dbname=$db_name;host=$db_host",
    $db_user, $db_pass,
	[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $db->prepare('SELECT * FROM TicTacToe2');
$query->execute();
?>
<?php
foreach ($query as $row) {
	$position1 = $row['position1'];
	$position2 = $row['position2'];
	$position3 = $row['position3'];
	$position4 = $row['position4'];	
	$position5 = $row['position5'];
	$position6 = $row['position6'];
	$position7 = $row['position7'];
	$position8 = $row['position8'];
	$position9 = $row['position9'];
}
?>
<table>
	<tr>
		<td onclick="delete_item(this)"><?=$position1?></td>
		<td onclick="myAjax()"><?=$position2?></td>
		<td onclick="place_token(this)"><?=$position3?></td>
		<td><form action=token.php method=POST>
            <input type=submit value=Delete>
			</form></td>
		
	</tr>
	<tr>
		<td><?=$position4?></td>
		<td><?=$position5?></td>
		<td><?=$position6?></td>
	</tr>
	<tr>
		<td><?=$position7?></td>
		<td><?=$position8?></td>
		<td><?=$position9?></td>
	</tr>	
</table>
  </body>
</html>
