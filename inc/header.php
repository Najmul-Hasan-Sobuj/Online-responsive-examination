<?php

	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	Session::init();
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";

	});
	$db = new Database();
	$fm = new Format();
	$usr = new User();
	$exm = new Exam();
	$pro = new Process();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
    <title>najmulhasan</title>

</head>
  <body>
  
  <?php 
	if (isset($_GET['action']) && $_GET['action'] == 'logout') {
		Session::destroy();
		header("Location:index.php");
		exit();
	}
	 ?>

<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bc fixed-top">
            <a class="navbar-brand" href="index.php">CAptainsj</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-center text-white active" href="login.php">Login<span
                                class="sr-only"></span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-center text-white active" href="#">Profile <span
                                class="sr-only"></span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-center text-white active" href="exam.php">Exam <span
                                class="sr-only"></span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-center text-white active" href="reg.php">Register <span
                                class="sr-only"></span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-center text-white active" href="#">Logout <span
                                class="sr-only"></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>