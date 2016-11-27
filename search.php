<?php require_once('connection.php')?>
<html>
	<head>
		<title>HealthCare Center</title>
	</head>
	<body>
		<h2>Choose the Patient</h2>
		<hr/>
		<form>
		<select name="$Patient">
			<?php
				$byname = $_REQUEST["name"];
				$result = $connection->query("SELECT name FROM patient WHERE name LIKE '$byname%'");
				
				foreach($result as $row)
				{
					$menu_name = $row["name"];
					echo("<option value=\"$menu_name\">$menu_name</option>");
				}
			?>
		</select>
		</form>
	</body>
</html>