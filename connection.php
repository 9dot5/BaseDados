<html>
	<body>
		<?php
			$server_name = "db.ist.utl.pt";
			$database_name = "ist178938";
			$username = "ist178938";
			$password = "xsyl8152";
			
			$domain = "mysql:host=$server_name;dbname=$database_name";
			
			try// Create connection
			{
				$connection = new PDO($domain, $username, $password);
			}
			catch(PDOException $exception)// Check connection
			{
				echo("<p>Error: ");
				echo($exception->getMessage());
				echo("</p>");
				exit();
			}
			
			
		?>
	</body>
</html>