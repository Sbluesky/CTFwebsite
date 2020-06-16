<?php
	$db = mysqli_connect('localhost', 'root', '', 'ctf_db');
	if(!$db)
		{
			die('Could not connect' . mysql_error()); // sau hàm die thì k chạy code nữa 
		}
?>