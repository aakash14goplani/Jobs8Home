<?php

	session_start();
	echo '<name>Welcome, '.$_SESSION["username"].'.</name>';
	echo '
		<html>
			<head>
				<title>Menu</title>
				<link rel="stylesheet" type="text/css" href="style.css" />
			</head>
			<body>
				<h1>Jobs8Home : Menu</h1>
				<table align="center" border="1" cellpadding="10" cellspacing="10">
					<tr>
						<th>SOAP Web Service</th>
						<td><a href="http://localhost:8080/SOAPWebService/CompanyInfo?Tester" target="_blank"> View </a></td>
					</tr>
					<tr>
						<th>REST Web Service</th>
						<td><a href=""> View </a></td>
					</tr>
					<tr>
						<th>Multimedia BLOB</th>
						<td><a href="http://localhost:8080/JSPMYSQL/upload.jsp" target="_blank"> View </a></td>
					</tr>
					<tr>
						<th>Google App Engine</th>
						<td><a href="http://todoait.appspot.com/" target="_blank"> View </a></td>
					</tr>
					<tr>
						<th>RSS</th>
						<td><a href="http://jobsathome.zz.mu/rss.xml" target="_blank"> View </a></td>
					</tr>
				</table>
				<a href="logout.php">Logout</a>
			</body>
		</html>
	';

?>