<?php
	session_start();
	
	$connect=mysql_connect("localhost","root","");//database connection
	mysql_select_db("be",$connect);
	
	$username=$_POST['name'];
	$password=$_POST['password'];
	$phone=$_POST['contact'];
	$email=$_POST['email'];
	
	function uploadFile()
	{
		$target_dir = "D:\\xampp\htdocs\jobs8home\Files/";
		$my_file = $_FILES["fileToUpload"]["name"];
		$target_file = $target_dir . basename($my_file);
		$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		try 
		{
			// Undefined | Multiple Files | $_FILES Corruption Attack
			if (!isset($_FILES['fileToUpload']['error']) || is_array($_FILES['fileToUpload']['error']))
			{
				throw new RuntimeException('<h2>Invalid parameters.</h2>');
			}
					// Check $_FILES['fileToUpload']['error'] value.
			switch ($_FILES['fileToUpload']['error']) 
			{
				case UPLOAD_ERR_OK:
					break;
				case UPLOAD_ERR_NO_FILE:
					throw new RuntimeException('<h2>No file sent.</h2>');
				case UPLOAD_ERR_INI_SIZE:
				case UPLOAD_ERR_FORM_SIZE:
					throw new RuntimeException('<h2>Exceeded filesize limit.</h2>');
				default:
					throw new RuntimeException('<h2>Unknown errors.</h2>');
			}
			// Check if file already exists
			if (file_exists($target_file)) 
			{
				throw new RuntimeException('<h2>File Already Exist in root directory.</h2>');
			}
			//check filesize. 
			if ($_FILES['fileToUpload']['size'] > 1000000) 
			{
				throw new RuntimeException('<h2>Exceeded filesize limit.</h2>');
			}
			//obtain safe unique name from its binary data.
			if (!move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)) 
			{
				throw new RuntimeException('<h2>Failed to move uploaded file.</h2>');
			}	
			echo '<h2>File is uploaded successfully.</h2>';	
		}
		catch (RuntimeException $e) 
		{
			echo $e->getMessage();
		}
	}
	
	$registration = "INSERT INTO jobs8home(name,password,email,contact) VALUES('$username','$password','$email',$phone)";
	
	$result = mysql_query($registration);	// executes
	if($result)
	{
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header('Location: menu.php');
	} 
	else
	{
		echo "<br><b>Registeration Error! ".mysql_error();
		echo "<br><a href='register.html'> Try again!</a>";
	}
	
	uploadFile();
?>


