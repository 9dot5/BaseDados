<?php require_once('connection.php')?>
<html>
	<head>
		<title>HealthCare Center</title>
	</head>
	<body>
		<h2 name="Check Patient">Check Patient by Name</h2>
		<hr/>
		<form action="search.php" method="post">
			Patient Fisrt Name: <input type="txt" name="Name">
			<input type="Submit" name="Submit_name">
		</form>
	</body>
</html>