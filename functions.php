<?php
require_once('config.inc.php');
$db = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db, pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function authenticate(){
	// we store the player id in a cookie
	$userid = $_COOKIE[playerid];

	// if the cookie exists and it is a numeric value we can get the data
	if (isset($_COOKIE[playerid])){
		if (isnumeric($userid)) return false;

		$authentication = $db->prepare('SELECT * FROM players WHERE ID = ?');
		$authentication->execute([$userid]]);
		$player = array();
		$player["id"] = $authentication["ID"];
		$player["score"] = $authentication["score"]

	}

	// if the cookie does not exist we have to create a new player and create a cookie for them

	if (!isset($_COOKIE[playerid])){
		$authentication = $db->prepare('INSERT INTO players (score, playing) values ('0', '0')');
		$authentication->execute();
		if ($authentication) {
			$newplayerid = $authentication->lastInsertID();
			setcookie("playerid", $newplayerid, time() + (86400 * 30), "/");
			$player = array();
			$player["id"] = $newplayerid;
			$player["score"] = '0';
		}
	}
	return $player
}

function newGame($player1, $player2){
	$creategame = $db->prepare('INSERT INTO games (player1, player2, turn) values (?, ?, ?)');
	$turn = rand(0,1);
	$creategame->execute($player1, $player2, $turn);
	$gameid = $creategame->lastInsertID();
	$game = $db->prepare('SELECT * FROM games WHERE ID=:id');
	$game->bindvalue(':id, $gameid, PDO::PARAM_INT');
	$game->execute();
	return $game;
}

?>
