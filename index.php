<?php

session_start();

$_SESSION['logado'] = false;

echo "b";
if ($_SESSION['logado'] = true) {
	require_once './views/index.php';
	echo "a";
} elseif (empty($_SESSION['logado']) || $_SESSION['logado'] = false) {
	require_once './views/no-user-home.php';
	echo 'dksal';
}