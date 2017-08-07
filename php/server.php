<?php
			$user = "bicproject"; 
			$pwd = "5QWtkpK5"; 
			$host = "81.91.83.184"; 
			$db = "bicproject"; 
			
			$connection = @mysql_connect($host,$user,$pwd);
			
			if(!$connection) die ("Cannot connect!");
			
			mysql_select_db($db,$connection) or die ("Cannot connect database!");
?>
