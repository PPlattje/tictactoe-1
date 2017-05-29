<?php
// For debugging:
error_reporting(-1);
ini_set("display_errors", 1);

// Read database credentials from configuration file:
require_once('config.inc.php');

// Create a database connection:
$db = new PDO("mysql:dbname=$db_name;host=$db_host",
              $db_user, $db_pass,
              [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $db->prepare(UPDATE INTO TicTacToe2 (position3) VALUES(?)
$query->execute("O");

if (isset($_POST['ajax'])) {
	echo "O"
} else {
	header('location: /')
}
?>
