<?php
	session_start();
	if(isset($_POST['logout']))
	{
		setcookie("ID","",time()-3600);
		$_SESSION['ID'] = '';
		$_SESSION['cart'] = '';
		session_destroy();
		header('location: login.php');
	}
	
?>