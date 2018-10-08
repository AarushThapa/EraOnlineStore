<?php

	session_start();
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', dirname(__FILE__));
	require("config/config.php");



	//echo $_SERVER['PATH_INFO'];die();
	/*
	$url = isset($_SERVER['PATH_INFO'])? explode('/',
	ltrim['$_SERVER['PATH_INFO']'], '/') : [];*/

	//require 'view/home.php';
	require 'config/Bootstrap.php';
	require 'controller/Controller.php';
	require 'config/view.php';


	$start = new Bootstrap();
?>