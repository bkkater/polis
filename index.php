<?php

session_start();

/* Deixa isso aq pq eu tenho q olhar dps 
if ($_SESSION['logado'] === true) {
	require_once './views/index.php';
	echo "a";
} elseif (isset($_SESSION['logado']) || $_SESSION['logado'] === false) {
	require_once './views/no-user-home.php';
	echo 'dksal';
} */

if ($_SESSION['logado'] === true) {
	require_once './views/index.php';
} else {
	require_once './views/no-user-home.php';
}