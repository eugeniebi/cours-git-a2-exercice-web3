<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if (isset($_POST['email']) && !empty($_POST['email'])) 
	&& (isset($_POST['password']) && !empty($_POST['password'])) 
	&& (isset($_POST['name']) && !empty($_POST['name'])) {
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$name = $_POST['name'];

	
	if(userConnection($db, $email, $password, $name)){
		header('location: dashboard.php');
	} else{
		$error ="Mauvais identifiants";
	}

/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';