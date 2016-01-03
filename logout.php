<?php
	// Inialize session
	session_start();
	// Delete all session variables
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	// Delete all session
	session_destroy();
	// Jump to login page
	header('Location: http://localhost/jobs8home/register.html');
?>
