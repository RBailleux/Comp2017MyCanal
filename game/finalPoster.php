<?php
	header ("Content-type: image/png");
	require_once 'generatePoster.php';
	$character = isset($_GET['character']) ? $_GET['character'] : 'random';
	$background = isset($_GET['background']) ? $_GET['background'] : 'random';
	$genre = isset($_GET['genre']) ? $_GET['genre'] : 'random';
	$name = isset($_GET['name']) ? urldecode($_GET['name']) : 'Je profite d\'un mois gratuit';
	$poster = new generatePoster($character, $background, $genre, $name);
	$poster->createPNG();
	readfile($poster->getPNG());
	die();
?>