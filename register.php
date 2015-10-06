<?php session_start();
require('config/config.php');
require('model/functions.fn.php');

/********************************
			PROCESS
********************************/

if(isset($_POST['name'] ) && !empty($_POST['name'])
  (isset($_POST['mail'] ) && !empty($_POST['mail'])
  (isset($_POST['password'] ) && !empty($_POST['password'])
  (isset($_POST['inscription'] ) && !empty($_POST['inscription'])) {

  	$name = $_POST['name'];
  	$mail = $_POST['mail'];
  	$password = $_POST['password'];
  	$inscription = $_POST['inscription'];

  	if(EmailAvailable($db, $name, $mail, $password, $inscription )){
  		header('location: login.php');
  	}else{
  		$error ="not available"
  	}


	/* isEmailAvailable
		return :
			true if available
			false if not available
		$db -> 				database object
		$email -> 			field value : email
	*/


	$email_ok = isEmailAvailable($db, $name, $mail, $password, $inscription "git@initiation.com");
     
	/* isUsernameAvailable
		return :
			true if available
			false if not available
		$db -> 				database object
		$username -> 			field value : username
	*/
	$username_ok = isUsernameAvailable($db, ($db, $name);


	if ($email_ok && $username_ok) {
		/* userRegistration
			return :
				true for registration OK
				false for fail
			$db -> 				database object
			$username -> 		field value : username
			$email -> 			field value : email
			$password -> 		field value : password
		*/
		userRegistration($db, $name, $mail, $password);
		header('Location: login.php');
	}

	if (!$email_ok) {
		$error=""
		//
	}

	if (!$username_ok) {
		//
	}

}

/******************************** 
			VIEW 
********************************/

include 'view/_header.php';
include 'view/register.php';
include 'view/_footer.php';
