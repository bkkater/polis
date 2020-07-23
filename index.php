<?php

session_start();

if ($_SESSION['logado'] === true) {
	require_once './views/index.php';
} else {
	require_once './views/no-user-home.php';
}